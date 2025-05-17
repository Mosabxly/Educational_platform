<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Usercontroller;
use App\Models\Course;

use App\Http\Controllers\EnrollmentController;


Route::get('/users', [UserController::class, 'index']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');




Route::post('/register', [AuthController::class, 'register']);

Route::post('/login', [AuthController::class, 'login']);





Route::middleware('auth:sanctum')->group(function () {
Route::get('/profile', [AuthController::class, 'profile']);

Route::post('/logout', [AuthController::class, 'logout']);


//***************************************************** */

Route::post('/courses/{course}/enroll', [EnrollmentController::class, 'enroll'])
     ->name('courses.enroll');


});

// courses

Route::get('/Course' ,function() {
    return Course::all();

});

//public function toArray (Request $request):Arry