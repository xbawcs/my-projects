<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Student;
use Validator;

class StudentController extends Controller
{
	protected $rules = [
		    'code' => 'required',
    		'name' => 'required',
    		'dob' => 'required',
    		'address' => 'required'
	];

    public function index(){
    	$students = Student::paginate(10);
        $i = 1;
    	return view('layouts.home',compact('students','i'));
    }

    public function addStudent(Request $rq){
        if($rq->ajax()){      
            $validator = Validator::make($rq->all(), $this->rules);
                if($validator->fails()){
                    return response()->json(['errors' => $validator->getMessageBag()->toArray()]);
                }
                $data = [
                    'code' => $rq->code,
                    'name' => $rq->name,
                    'dob' => $rq->dob,
                    'gender' => $rq->gender,
                    'address' => $rq->address
                ];
                $std = Student::create($data);
                return response()->json($std);
        }
    }

    public function destroy($id, Request $rq){
        $student = Student::findOrFail($id);
        
        if($rq->isMethod('delete')){

            $student->delete();

            return response()->json($student);
        }
        return response()->json(['msg' => 'have an error']);
    }

    public function edit(Request $rq, $id){
        $validator = Validator::make($rq->all(), $this->rules);
        if($validator->fails()){
            return response()->json(['errors' => $validator->getMessageBag()->toArray()]);
        }
        $student = Student::findOrFail($id);
        if($rq->ajax()){
            $student->name = $rq->name;
            $student->dob = $rq->dob;
            $student->gender = $rq->gender;
            $student->address = $rq->address;
            $student->save();
            return response()->json($student);
        }
        return response()->json(['msg' => 'Have an error']);
    }

    public function infor(Request $request, $id){
        $student = Student::findOrFail($id);
        return view('layouts.student_information',compact('student'));
    }

}
