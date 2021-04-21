<?php 

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\StudentModel;

class Student extends ResourceController
{
    use ResponseTrait;

    public function index() {
        $model = new StudentModel();
        $data = $model->findAll();
        return $this->respond($data, 200);
    }
}