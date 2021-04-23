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

    public function show($id = null) {
        $model = new StudentModel();
        $student = $model->findStudentById($id);
        if ($student) {
            return $this->respond($student, 200);
        } else {
            return $this->failNotFound('No student found');
        }
    }

    public function create() {
        $model = new StudentModel();
        $data = [
            'first_name' => $this->request->getPost('first_name'),
            'last_name' => $this->request->getPost('last_name'),
            'email' => $this->request->getPost('email'),
            'grade' => $this->request->getPost('grade'),
        ];
        $data = json_decode(file_get_contents("php://input"));

        $model->insert($data);
        $response = [
            'status' => 201,
            'error' => null,
            'messages' => [
                'success' => 'Data Saved'
            ]
        ];

        return $this->respondCreated($response, 201);
    }

    public function update($id = null) {
        $model = new StudentModel();
        $json = $this->request->getJSON();

        $model->update($id, $json);

        $response = [
            'status' => 201,
            'error' => null,
            'messages' => [
                'success' => 'Updated successfully'
            ]
        ];

        return $this->respond($response, 201);
    }

    public function delete($id = null) {
        $model = new StudentModel();
        $student = $model->findStudentById($id);
        
        if ($student) {
            $model->delete($student);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Data Deleted'
                ]
            ];
             
            return $this->respondDeleted($response);
        } else {
            return $this->failNotFound('No student found');
        }
    }

}