<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Item;
use DB;
use Excel;

class ExcelController extends Controller
{
     public function getImport(){
        return View('excel');
    }
    
    public function postImport(){
        Excel::load(Input::file('import_file'),function($reader) 
        {
            $reader-> each(function($sheet){
                    Item::fistOrCreate($sheet->toArray());
                          dd('Sucesso.');
             });
         });
        
   

//        $file = $request->input('file');

  //      Excel::load($file,function($reader) 
  //      {
  //          $reader-> each(function($sheet){
  //                  Item::fistOrCreate($sheet->toArray());
                          
   //          });
   //      });
        
    }
}
