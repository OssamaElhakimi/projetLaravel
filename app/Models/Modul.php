<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Exam;
use App\Models\Enseigner;



class Modul extends Model
{
    use HasFactory;
    public function exams(){
        return $this->hasMany(Exam::class);
    }
    public function enseigners(){
        return $this->belongsTo(Enseigner::class);
    }

}
