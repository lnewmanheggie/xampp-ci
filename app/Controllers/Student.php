<?php

namespace App\Controllers;

use App\Models\StudentModel;
use CodeIgniter\Controller;

class Student extends Controller
{
    public function index()
    {
        $model = new StudentModel();

        $data = [
            'student'  => $model->getStudent(),
            'title' => 'All students',
        ];

        echo view('templates/header', $data);
        echo view('students/viewall', $data);
        echo view('templates/footer', $data);
    }

    public function view($id = null)
    {
        $model = new StudentModel();

        $data['student'] = $model->getStudent($id);
    
        if (empty($data['student']))
        {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find student: '. $id);
        }

        echo view('templates/header', $data);
        echo view('students/viewone', $data);
        echo view('templates/footer', $data);
    }
}
