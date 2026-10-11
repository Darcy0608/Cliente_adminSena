<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\TrainingCenterController;
use App\Http\Controllers\TrainingEnvironmentController;
use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\GlobalSearchController;
use App\Http\Controllers\AuthController;



//  Home
Route::get('/', [HomeController::class, 'index'])->name('home.index');

// Busqueda global del sistema
Route::get('/buscar', [GlobalSearchController::class, 'search'])->name('global.search');

// Ruta para abrir el formulario de inicio de sesion y registro
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');

// Area
Route::get('area', [AreaController::class, 'index'])->name('area.index');
Route::get('area/create',[AreaController::class,'create'])->name('area.create');
Route::post('area', [AreaController::class, 'store'])->name('area.store');
Route::get('area/{area}', [AreaController::class, 'show'])->name('area.show');
Route::get('area/{area}/editar',[AreaController::class,'edit'])->name('area.edit');
Route::put('area/{area}', [AreaController::class, 'update'])->name('area.update');
Route::delete('area/{area}', [AreaController::class, 'destroy'])->name('area.destroy');

// Computer
Route::get('computer', [ComputerController::class, 'index'])->name('computer.index');
Route::get('computer/create',[ComputerController::class,'create'])->name('computer.create');
Route::post('computer', [ComputerController::class, 'store'])->name('computer.store');
Route::get('computer/{computer}', [ComputerController::class, 'show'])->name('computer.show');
Route::get('computer/{computer}/editar',[ComputerController::class,'edit'])->name('computer.edit');
Route::put('computer/{computer}', [ComputerController::class, 'update'])->name('computer.update');
Route::delete('computer/{computer}', [ComputerController::class, 'destroy'])->name('computer.destroy');

// Training-center
Route::get('training-center', [TrainingCenterController::class, 'index'])->name('training-center.index');
Route::get('training-center/create',[TrainingCenterController::class,'create'])->name('training-center.create');
Route::post('training-center', [TrainingCenterController::class, 'store'])->name('training-center.store');
Route::get('training-center/{training_center}', [TrainingCenterController::class, 'show'])->name('training-center.show');
Route::get('training-center/{training_center}/editar',[TrainingCenterController::class,'edit'])->name('training-center.edit');
Route::put('training-center/{training_center}', [TrainingCenterController::class, 'update'])->name('training-center.update');
Route::delete('training-center/{training_center}', [TrainingCenterController::class, 'destroy'])->name('training-center.destroy');

// training-environment
Route::get('training-environment', [TrainingEnvironmentController::class, 'index'])->name('training-environment.index');
Route::get('training-environment/create',[TrainingEnvironmentController::class,'create'])->name('training-environment.create');
Route::post('training-environment', [TrainingEnvironmentController::class, 'store'])->name('training-environment.store');
Route::get('training-environment/{training_environment}', [TrainingEnvironmentController::class, 'show'])->name('training-environment.show');
Route::get('training-environment/{training_environment}/editar',[TrainingEnvironmentController::class,'edit'])->name('training-environment.edit');
Route::put('training-environment/{training_environment}', [TrainingEnvironmentController::class, 'update'])->name('training-environment.update');
Route::delete('training-environment/{training_environment}', [TrainingEnvironmentController::class, 'destroy'])->name('training-environment.destroy');

// Apprentice
Route::get('apprentice', [ApprenticeController::class, 'index'])->name('apprentice.index');
Route::get('apprentice/create',[ApprenticeController::class,'create'])->name('apprentice.create');
Route::post('apprentice', [ApprenticeController::class, 'store'])->name('apprentice.store');
Route::get('apprentice/{apprentice}', [ApprenticeController::class, 'show'])->name('apprentice.show');
Route::get('apprentice/{apprentice}/editar',[ApprenticeController::class,'edit'])->name('apprentice.edit');
Route::put('apprentice/{apprentice}', [ApprenticeController::class, 'update'])->name('apprentice.update');
Route::delete('apprentice/{apprentice}', [ApprenticeController::class, 'destroy'])->name('apprentice.destroy');

// Course
Route::get('course', [CourseController::class, 'index'])->name('course.index');
Route::get('course/create',[CourseController::class,'create'])->name('course.create');
Route::post('course', [CourseController::class, 'store'])->name('course.store');
Route::get('course/{course}', [CourseController::class, 'show'])->name('course.show');
Route::get('course/{course}/editar',[CourseController::class,'edit'])->name('course.edit');
Route::put('course/{course}', [CourseController::class, 'update'])->name('course.update');
Route::delete('course/{course}', [CourseController::class, 'destroy'])->name('course.destroy');


Route::get('teacher', [TeacherController::class, 'index'])->name('teacher.index');
Route::get('teacher/create',[TeacherController::class,'create'])->name('teacher.create');
Route::post('teacher', [TeacherController::class, 'store'])->name('teacher.store');
Route::get('teacher/{teacher}', [TeacherController::class, 'show'])->name('teacher.show');
Route::get('teacher/{teacher}/editar',[TeacherController::class,'edit'])->name('teacher.edit');
Route::put('teacher/{teacher}', [TeacherController::class, 'update'])->name('teacher.update');
Route::delete('teacher/{teacher}', [TeacherController::class, 'destroy'])->name('teacher.destroy');

