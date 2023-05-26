<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Modul;
use App\Models\User;




class Enseigner extends Model
{
    use HasFactory;
    public function moduls(){
        return $this->hasMany(Modul::class);
    }
    public function teachers(){
        return $this->hasMany(User::class);
    }
}
