<?php

namespace App\Services;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Middleware;
use GuzzleHttp\RequestOptions;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Termwind\Components\Dd;

class jsonServices
{
    protected string $url;
    public function __construct()
    {
        $this->url = 'http://127.0.0.1:8080';
    }

    private function _toObject($array)
    {
        $objectStr = json_encode($array);
        $object = json_decode($objectStr);
        return $object;
    }

    public function login($username, $password)
    {
        $url = $this->url . '/login';
        $response = Http::post($url, [
            'username' => $username,
            'password' => $password
        ]);
        $response->throw();
        // $response->throw()->json()['message'];
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj;
    }

    public function listClass($userTeacher)
    {
        $url = $this->url . '/listClass/' . $userTeacher;
        $response = Http::get($url);
        $response->throw();
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj;
    }

    public function listStudent($subjectID)
    {
        $url = $this->url . '/listStudent/' . $subjectID;
        $response = Http::get($url);
        $response->throw();
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj;
    }

    public function nhapdiem($id, $attendance, $test, $assignment, $exam)
    {
        $url = $this->url . '/nhapdiem/' . $id;
        // dd($url);
        $response = Http::put($url, [
            'attendance' => $attendance,
            'test' => $test,
            'assignment' => $assignment,
            'exam' => $exam,
        ]);
        $response->throw();
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj;
    }

    public function thangdiem($id, $attendanceFactor, $testFactor, $assignmentFactor, $examFactor)
    {
        $url = $this->url . '/thangdiem/' . $id;
        $response = Http::put($url, [
            'attendanceFactor' => $attendanceFactor,
            'testFactor' => $testFactor,
            'assignmentFactor' => $assignmentFactor,
            'examFactor' => $examFactor,
        ]);
        $response->throw();
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj;
    }

    public function listStudentByCondition($subjectID, $condition)
    {
        $url = $this->url . '/listStudentByCondition/' . $subjectID;
        // dd($condition);
        $response = Http::put($url, [
            'condition' => $condition
        ]);
        $response->throw();
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj;
    }

    public function listClassByCourse($courseId, $teacherID)
    {
        $url = $this->url . '/listClassByCourse/' . $courseId . "/" . $teacherID;
        $response = Http::get($url);
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj;
    }

    public function listStudentByKey($subjectID, $condition, $keyword)
    {
        $url = $this->url . '/listStudentByKey/' . $subjectID;
        // dd($condition);
        $response = Http::put($url, [
            'condition' => $condition,
            'keyword' => $keyword,
        ]);
        $response->throw();
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj;
    }

    public function importMark($data)
    {
        $url = $this->url . '/importMark';
        $response = Http::attach(
            'file',
            file_get_contents($data),
            $data->getClientOriginalName()
        )->post($url);
        $response->throw()->json()['message'];
        $data = $response->json();
        $dataObj = $this->_toObject($data);
        return $dataObj->data;
    }

}