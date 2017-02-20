<?php

namespace App\Http\Controllers;
use App\http\controllers\controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Item;
use DB;
use Excel;
class MaatwebsiteDemoController extends Controller
{
	public function importExport()
	{
		return view('importExport');
	}
	public function downloadExcel($type)
	{
		$data = Item::get()->toArray();
		return Excel::create('itsolutionstuff_example', function($excel) use ($data) {
			$excel->sheet('mySheet', function($sheet) use ($data)
	        {
				$sheet->fromArray($data);
	        });
		})->download($type);
	}
	public function importExcel(Request $request)
	{
		$file = $request->input('import');
		if(Input::hasFile('import')){
			$path = Input::file('import')->getRealPath();
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