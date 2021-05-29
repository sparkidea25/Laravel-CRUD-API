<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    //
    public function getAllStdents() {
        // logic to get all students goes here

    }

    public function createStudent(Request $request) {
        //logic to create students goes here
        $student = new Student;
        $student->name = $request->name;
        $student->course = $request->course;
        $student->save();
        return response()->json([
            "message" => "Student record created"
        ], 201);
    }

    public function getStudent($id) {
        //logic to get Student byID goes here

    }

    public function updateStudent(Request $request, $id) {
        // logic to update a student record goes here

    }

    public function deleteStudent($id) {
        // logic to delete student

    }
}
