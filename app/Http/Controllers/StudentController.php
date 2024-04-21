<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\jsonServices;

class StudentController extends Controller
{
    //
    private $jsonServices;

    public function __construct()
    {
        $this->jsonServices = new jsonServices();
    }

    public function listStudent($id)
    {
        try {
            $listStudent = $this->jsonServices->listStudent($id);
            return view('dssinhvien', [
                'listStudent' => $listStudent->studentMarkList,
                'statusFilter' => $listStudent->statusFilter,
                'subjectClassID' => $listStudent->subjectClassID
            ]);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function listStudentByCondition($subjectId, $typeId)
    {
        try {
            $typeId = substr($typeId, 1, -1);
            // dd($typeId);
            $result = $this->jsonServices->listStudentByCondition($subjectId, $typeId);
            return view('dssinhvien', [
                'listStudent' => $result->studentMarkList,
                'statusFilter' => $result->statusFilter,
                'subjectClassID' => $result->subjectClassID
            ]);
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back();
        }
    }

    public function listStudentByKey($subjectId, Request $request)
    {
        try {
            $result = $this->jsonServices->listStudentByKey($subjectId, $request->statusFilter, $request->keyword);
            return view('dssinhvien', [
                'listStudent' => $result->studentMarkList,
                'statusFilter' => $result->statusFilter,
                'subjectClassID' => $result->subjectClassID
            ]);
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back();
        }
    }
}
