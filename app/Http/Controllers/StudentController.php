<?php

namespace App\Http\Controllers;

use App\Exports\MarkExport;
use Illuminate\Http\Request;
use App\Services\jsonServices;
use Illuminate\Support\Facades\Response;
use Exception;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;

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

    public function downloadSample($id)
    {
        try {
            $requestData = $this->jsonServices->listStudent(1);
            // Chuyển đổi dữ liệu từ stdClass sang mảng PHP
            $requestData = json_decode(json_encode($requestData), true);
            return Excel::download(new MarkExport($requestData), 'Danh-sach-sinh-vien.xlsx');
        } catch (Exception $e) {
            Session::flash('error', 'Có lỗi xảy ra, vui lòng thử lại sau!');
            return redirect()->back();
        }
    }

    public function import(Request $request)
    {
        try {
            $this->jsonServices->importMark($request->file('fileUrl'));
            Session::flash('success', 'Nhập điểm thành công!');
            return redirect()->back();
        } catch (\Illuminate\Http\Client\RequestException $e) {
            $response = $e->response;
            $errorMessage = json_decode($response->getBody(), true)['message'];
            Session::flash('error', $errorMessage);
            return back();
        } catch (Exception $e) {
            Session::flash('error', 'Có lỗi xảy ra, vui lòng thử lại sau!');
            return redirect()->back();
        }
    }
}
