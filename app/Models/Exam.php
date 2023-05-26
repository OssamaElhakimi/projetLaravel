<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Teacher;
use App\Models\Answer;
use App\Models\Modul;
use App\Models\Question;




class Exam extends Model
{
    use HasFactory;
    public function teachers(){
        return $this->belongsTo(Teacher::class);
    }
    public function answers(){
        return $this->hasMany(Answer::class);
    }
    public function moduls(){
        return $this->belongsTo(Modul::class);
    }
    public function questions(){
        return $this->hasMany(Question::class);
    }


    
    
}
