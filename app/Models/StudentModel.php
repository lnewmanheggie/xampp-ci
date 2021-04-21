<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model
{
    protected $table = 'student';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'first_name',
        'last_name',
        'email',
        'grade',
    ];

    // protected $updatedField = 'updated_at';

    // public function findStudentById($id)
    // {
    //     $student = $this->asArray()->where(['id' => $id])->first();

    //     if ($student) {
    //         throw new Exception('No student with this id');
    //     }

    //     return $student;
    // }
}