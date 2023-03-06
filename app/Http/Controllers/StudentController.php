<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Education;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class StudentController extends Controller
{

    public function index() {
        $username = session()->get('username');
        $ic_num = session()->get('ic_num');
        $get_user_details = Student::where('ic_num', $ic_num)->get()->first();
        return view('student.index', [
            'ic_num' => $ic_num,
            'username' => $username,
            'student' => $get_user_details,
            'success' => 'Welcome back '.$username.'!'
        ]);
    }

    public function logout() {
        session()->forget('username');
        session()->flush();
        return redirect()->route('auth');
    }

    public function edit($id) {
        // $student = DB::table('students')->where('ic_num', $id)->first();     // query builder
        $student = Student::where('ic_num', $id)->get()->first();               // eloquent
        return view('student.update', ['student' => $student]);
    }

    public function update(Request $request, $id) {
        //dd($request->except(['_token', 'update-btn']));
        $avatarPath = null;
        if ($request->hasFile('avatar')) {
            $avatarPath = $request->file('avatar')->storeAs(
                'avatars',
                $id.'.'.$request->file('avatar')->getClientOriginalExtension(),
                'public'
            );
        }

        $update = Student::where('ic_num', $id);

        // $update->update($request->except(['_token', 'update-btn']));

        $update->update([
            'username' => $request->username,
            'password' => $request->password,
            'ic_num' => $request->ic_num,
            'name' => $request->name,
            'age' => $request->age,
            'gender' => $request->gender,
            'phone_num' => $request->phone_num,
            'course' => $request->course,
            'address' => $request->address,
            'nationality' => $request->nationality,
            'religion' => $request->religion,
            'race' => $request->race,
            'biography' => $request->biography,
            'language' => $request->language,
            'skill' => $request->skill,
            'curricular' => $request->curricular,
            'avatar' => $id.'.'.$request->file('avatar')->getClientOriginalExtension()
        ]);

        if ($update) {
            return redirect()->route('student.index');
        }
    }

    public function user($id) {
        $student = Student::where('ic_num', $id)->get()->first();
        $education = Education::where('ic_num', $id)->get()->first();
        return view('student.user', [
            'student' => $student,
            'education' => $education
        ]);
    }

    public function delete($id) {
        $delete = Student::where('ic_num', $id)->delete();

        if ($delete) {
            return redirect()->route('login.auth');
        } else {
            return redirect()->route('student.index')->with('error', 'Failed to delete user.');
        }
    }

    public function view_education() {
        return view('student.education');
    }

    public function add_education(Request $request, $id) {
        $request->validate([
            'upsr' => 'nullable',
            'pt3' => 'nullable',
            'svm' => 'nullable',
            'dvm' => 'nullable',
            'skm' => 'nullable'
        ]);

        $upsr = $request->input('upsr');
        $pt3 = $request->input('pt3');
        $svm = $request->input('svm');
        $dvm = $request->input('dvm');
        $skm = $request->input('skm');

        $data = [
            'upsr' => $upsr,
            'pt3' => $pt3,
            'svm' => $svm,
            'dvm' => $dvm,
            'skm' => $skm,
            'ic_num' => $id
        ];

        $insert = Education::create($data);

        if ($insert) {
            return redirect()->route('student.index');
        } else {
            echo "<script>alert('error adding education background');</script>";
        }
    }

    public function edit_education($id) {
        $education = Education::where('ic_num', $id)->get()->first();
        return view('student.education', ['education' => $education]);
    }

}
