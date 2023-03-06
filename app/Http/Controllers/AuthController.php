<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use App\Models\Student;

class AuthController extends Controller
{

    public function index() {
        return view('auth');
    }

    public function auth(Request $request) {
        $username = $request->input('username');
        $password = $request->input('password');

        $data = [
            'username' => $username,
            'password' => $password
        ];

        $find = Student::
            where('username', $username)
            ->where('password', $password)
            ->first();

        if ($find) {
            // get credentials
            $student_details = Student::where('username', $username)->first();
            $ic_num = $student_details->ic_num;

            // set session
            session()->put('username', $find->username);
            session()->put('ic_num', $ic_num);
            return redirect()->route('student.index');
        } else {
            return view('auth', ['error' => 'You inserted incorrect login credentials, please try again.']);
        }
    }

    public function register(Request $request) {
        $request->validate([
            'ic_num' => 'required',
            'username' => 'required',
            'password' => 'required',
            'repeat-password' => 'required'
        ]);

        $ic_num = $request->input('ic_num');
        $username = $request->input('username');
        $password = $request->input('password');
        $rpassword = $request->input('repeat-password');

        if ($rpassword == $password) {
            $insert = [
                'ic_num' => $ic_num,
                'username' => $username,
                'password' => $password
            ];

            Student::create($insert);

            return view('auth', ['success' => 'User registered successfully!']);
            // return redirect()->route('auth')->with('success', 'Record created successfully.');
        }
        else {
            return view('auth', ['error' => 'Registration failed, please try again.']);
            // return redirect()->route('auth')->with('error', 'Registration failed, please try again.');
        }
    }

}
