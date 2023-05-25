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

    public function displayAdd(){
        return view('students/add');
    }

    public function postStudent(){
        $data = $this->request->getPost();
        $students = new StudentsModel;
        $student = $students->insert($data);
        return redirect()->to('/students')->with('success', 'Added Successfully!');
    }

}
