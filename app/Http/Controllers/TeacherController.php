<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\jsonServices;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
class TeacherController extends Controller
{
    //
    private $jsonServices;

    public function __construct(){
        $this->jsonServices = new jsonServices();
    }

    public function login(Request $request){
        try {

            $data = $request->validate([
                'username' => 'required',
                'password' => 'required',
            ]);

            $user = $this->jsonServices->login($request->username, $request->password);
            if ($user->result === "true") {
                session()->put('username', $user->username);
                session()->put('name', $user->name);
                session()->put('userId', $user->id);
                $carbonDob = Carbon::parse($user->dob);
                $dobFormatted = $carbonDob->format('d/m/Y');
                return view("home", [
                    "dob" => $dobFormatted,
                    "phone_number" => $user->phone_number,
                    "email" => $user->email,
                    "country" => $user->country,
                    "id" => $user->id,
                    "course" => $user->course,
                ]);
            } else {
                return redirect()->back()->with('error', "Tên tài khoản hoặc mật khẩu không chính xác");
            }

        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error', 'Lỗi chưa xác định');
        }
    }

    public function logout(Request $request)
    {
        return redirect('/');
    }
}
