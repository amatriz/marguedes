<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\importaexcel;
use DB;
use Excel;


class importaexcelController extends Controller
{
  public function importExport()
	{
		return view('excel');
	}
	public function downloadExcel($type)
	{
		$data = importaexcel::get()->toArray();
		return Excel::create('itsolutionstuff_example', function($excel) use ($data) {
			$excel->sheet('mySheet', function($sheet) use ($data)
	        {
				$sheet->fromArray($data);
	        });
		})->download($type);
	}
	public function importExcel()
	{
		//$user1 = $user->getId();
		if(Input::hasFile('import_file')){
			$path = Input::file('import_file')->getRealPath();
			$data = Excel::load($path, function($reader) {
			})->get();
			if(!empty($data) && $data->count()){
				foreach ($data as $key => $value) {
					$insert[] = ['produto' => $value->produto, 'marca' => $value->marca ,'modelo' => $value->modelo , 'quantidade' => $value->quantidade , 'obs' => $value->obs];
				}
				if(!empty($insert)){
					DB::table('importaexcels')->insert($insert);
					dd('Insert Record successfully.');
				}
			}
		}
		return back();
	}
}
