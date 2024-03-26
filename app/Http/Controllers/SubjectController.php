<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\jsonServices;

class SubjectController extends Controller
{
    private $jsonServices;

    public function __construct(){
        $this->jsonServices = new jsonServices();
    }

    public function listClass(){
        try {
            $listClass = $this->jsonServices->listClass(session('userId'));
            // dd($listClass->subjectClasses);
            return view('dslophoc')->with('listClass', $listClass->subjectClassInfos);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function nhapdiem($id, Request $request){
        try {
            $attendance = $request->input('attendance');
            $test = $request->input('test');
            $assignment = $request->input('assignment');
            $exam = $request->input('exam');
            $score = $this->jsonServices->nhapdiem($id, $attendance, $test, $assignment, $exam);
            return redirect()->back()->with('success', "Nhập điểm thành công");
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back();

        }
    }

    public function thangdiem($id, Request $request){
        try {
            $attendanceFactor = $request->input('attendanceFactor');
            $testFactor = $request->input('testFactor');
            $assignmentFactor = $request->input('assignmentFactor');
            $examFactor = $request->input('examFactor');
            $setting = $this->jsonServices->thangdiem($id, $attendanceFactor, $testFactor, $assignmentFactor, $examFactor);
            return redirect()->back()->with('success', "Nhập điểm thành công");
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function listClassInCourse($courseID, $teacherID){
        try {
            $listClass = $this->jsonServices->listClassByCourse($courseID, $teacherID);
            return view('dslophoc')->with('listClass', $listClass->subjectClassInfos);
        } catch(\Throwable $th) {
            //throw $th;
        }
    }
}
