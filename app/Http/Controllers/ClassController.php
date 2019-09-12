<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classs;
use PDF;

class ClassController extends Controller
{
	public function index(){
		$classes = Classs::all();
		$i = 1;
		return view('layouts.classes.classes', compact('classes', 'i'));
	}
	public function addClass(Request $request){
		if($request->ajax()){
			$data = [
				'code' => $request->code,
				'name' => $request->name,
				'number_student' => 0
			];	
			$class = Classs::create($data);
			return  response()->json('class');
		}
		return "fail";
	}
	public function printPDF(){
        $classes = Classs::all();
        $i = 1;
        $pdf = PDF::loadView('exportpdf.invoice_class', compact('classes', 'i'));
        return $pdf->download('invoice.pdf');
    }
}
