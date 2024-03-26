<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\jsonServices;

class StudentController extends Controller
{
    //
    private $jsonServices;

    public function __construct(){
        $this->jsonServices = new jsonServices();
    }

    public function listStudent($id){
        try {
            // dd($id);
            $listStudent = $this->jsonServices->listStudent($id);
            return view('dssinhvien')->with('listStudent', $listStudent->studentMarkList);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function listStudentByCondition($subjectId, $typeId){
        try {
            $typeId = substr($typeId, 1,-1);
            // dd($typeId);
            $result = $this->jsonServices->listStudentByCondition($subjectId, $typeId);
            return view('dssinhvien')->with('listStudent', $result->studentMarkList);
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back();
        }
    }


}
