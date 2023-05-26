<?php

use App\Http\Controllers\ExamsController;
use App\Http\Controllers\GroupsController;
use App\Http\Controllers\ModulsController;
use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\UsersController;
use App\Models\Modul;
use App\Models\Question;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\Configuration\GroupCollection;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/exam/all',[ExamsController::class, 'index'])->name('exam');
    Route::get('/exam/add',[ExamsController::class, 'store'])->name('addexam');
    Route::post('/exam/update/{id}',[ExamsController::class, 'update'])->name('updateexam');
    Route::delete('/exam/delete/{id}',[ExamsController::class, 'destroy'])->name('deleteexam');
    // Route::get('/categorie/search/{id}',[CategorieController::class, 'show']);
    
    Route::get('/question/all',[QuestionsController::class, 'index'])->name('question');
    Route::get('/question/add',[QuestionsController::class, 'store'])->name('addquestion');
    Route::post('/question/update/{id}',[QuestionsController::class, 'update'])->name('updatequestion');
    Route::delete('/question/delete/{id}',[QuestionsController::class, 'destroy'])->name('deletequestion');

    Route::get('/modul/all',[ModulsController::class, 'index'])->name('modul');
    Route::post('/modul/add',[ModulsController::class, 'store'])->name('addmodul');
    Route::post('/modul/update/{id}',[ModulsController::class, 'update'])->name('updatemodul');
    Route::delete('/modul/delete/{id}',[ModulsController::class, 'destroy'])->name('deletemodul');
    
    Route::get('/enseignant/all',[UsersController::class, 'getEnseignant'])->name('enseignant');
    Route::post('/enseignant/add',[UsersController::class, 'storeEnseignant'])->name('addenseignant');
    Route::post('/enseignant/update/{id}',[UsersController::class, 'updateEnseignant'])->name('updateenseignant');
    Route::delete('/enseignant/delete/{id}',[UsersController::class, 'destroy'])->name('deleteenseignant');
    
    Route::get('/etudiant/all',[UsersController::class, 'getEtudiant'])->name('etudiant');
    Route::post('/etudiant/add',[UsersController::class, 'storeEtudiant'])->name('addetudiant');
    Route::post('/etudiant/update/{id}',[UsersController::class, 'updateEtudiant'])->name('updateetudiant');
    Route::delete('/etudiant/delete/{id}',[UsersController::class, 'destroy'])->name('deleteetudiant');
    
    Route::get('/group/all',[GroupsController::class, 'index'])->name('group');
    Route::post('/group/add',[GroupsController::class, 'store'])->name('addgroup');
    Route::post('/group/update/{id}',[GroupsController::class, 'update'])->name('updategroup');
    Route::delete('/group/delete/{id}',[GroupsController::class, 'destroy'])->name('deletegroup');
