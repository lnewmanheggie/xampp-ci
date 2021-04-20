<?php

namespace App\Models;

use CodeIgniter\Model;
use Exception;

class StudentModel extends Model
{
    protected $table = 'student';
    protected $allowedFields = [
        'first_name',
        'last_name',
        'email',
        'grade',
    ];

    protected $updatedField = 'updated_at';

    public function findStudentById($id)
    {
        $student = $this->asArray()->where(['id' => $id])->first();

        if ($student) {
            throw new Exception('No student with this id');
        }

        return $student;
    }
}