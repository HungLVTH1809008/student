<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function studentlist()
    {
        $students = Student::all();
        return view("list.list", compact("students"));
    }

    public function themstudent()
    {
        $students = Student::all();

        return view("more.more", compact("students"));

    }

    public function luustudent(Request $request)
    {
       /* $messages = [
            "required" => "Bắt buộc phải nhập thông tin",
            "string" => "Phải nhập vào 1 chuỗi",
            "numeric" => "Giá trị tối thiểu 0 hoặc 6 kí tự",
            "max" => "Tối đa 255 ký tự",
            "unique" => "Đã tồn tại giá trị này"
        ];
        $rules = [
            "student_id" => "required|numeric",
            "student_name" => "required|string|unique:student",
            "age" => "required|numeric",
            "address" => "required|string",
            "telephone" => "required|numeric"

        ];
        $this->validate($request, $messages, $rules);*/

        try {
            //dd($request->all());
            student::create([
                "student_name" => $request->get("student_name"),
                "age" => $request->get("age"),
                "address" => $request->get("address"),
                "telephone" => $request->get("telephone"),
            ])->save();
        } catch (\Exception $e) {
            die($e->getMessage());
        }
        return redirect("/sudent");
    }




}
