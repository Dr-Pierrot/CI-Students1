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
    public function displayEdit($id){
        $Student = new StudentsModel();
        $data['student'] = $Student->where('id', $id)->first();

        return view('students/edit', $data);
    }
    public function putStudent($id){
        $Student = new StudentsModel();
        $db = \Config\Database::connect();
        $data = array(
            'firstname' => $this->request->getPost('firstname'),
            'middlename' => $this->request->getPost('middlename'),
            'lastname' => $this->request->getPost('lastname'),
            'phoneno' => $this->request->getPost('phoneno'),
            'course' => $this->request->getPost('course'),
            'year' => $this->request->getPost('year'),
            'section' => $this->request->getPost('section'),
        );

        $Student->update($id, $data);

        return redirect()->to('/students')->with('up', 'Updated Successfully!');

    }
    
    public function deleteStudent($id){
        $Student = new StudentsModel;
        $Student->delete($id);
        return redirect()->to('/students')->with('danger', 'Student Deleted!');
    }


}
