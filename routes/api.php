<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Models\Course;
use App\Http\Controllers\EnrollmentController;


use App\Http\Controllers\Api\DashboardController;
    
// Routes عامة
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Routes محمية بـ auth:sanctum
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/profile', [AuthController::class, 'profile']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::post('/courses/{course}/enroll', [EnrollmentController::class, 'enroll'])->name('courses.enroll');
});

// Routes خاصة بالإدارة

    //****************** */

Route::middleware(['auth:sanctum', 'admin'])->get('/dashboard', [DashboardController::class, 'index']);

    /*
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

Route::middleware(['auth:sanctum', 'admin'])->group(function () {
    Route::get('/dashboard-data', function () {
        return response()->json([
            'users_count' => \App\Models\User::count(),
            //'courses_count' => \App\Models\Course::count(),
            // أضف بيانات إضافية حسب الحاجة
        ]);
    });
});
*/



 //****************** */
    Route::get('/courses', function() {
        return Course::all();
    });
    Route::put('/users/{id}/role', [UserController::class, 'updateRole']);
    Route::get('/users', [UserController::class, 'index']);
