<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Exam;


class Question extends Model
{
    use HasFactory;
    public function exams(){
        return $this->belongsTo(Exam::class);
    }
    
}
