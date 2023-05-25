<?php

namespace App\Controllers;
use App\Models\StudentsModel;
use App\Controllers\BaseController;

class StudentsController extends BaseController
{
    public function index()
    {
        $students = new StudentsModel;
        $data["students"] = $students->findAll();
        return view('students/table', $data);
    }

}
