<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Exam;
use App\Models\Student;



class Answer extends Model
{
    use HasFactory;
    public function exams(){
        return $this->belongsTo(Exam::class);
    }
    public function students(){
        return $this->belongsTo(Student::class);
    }
}
