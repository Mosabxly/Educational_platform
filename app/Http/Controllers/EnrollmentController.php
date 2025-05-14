<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use Illuminate\Http\Request;
use App\Models\Course;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Auth;


use Illuminate\Support\Facades\DB;
class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */


        public function enroll(Course $course)
    {
        try {
            DB::beginTransaction();
            
            if ($course->seats <= 0) {
                throw new \Exception('لا يوجد مقاعد متاحة');
            }
            
            Enrollment::create([
                'user_id' => auth()->id(),
                'course_id' => $course->id,
                'enrolled_at' => now()
            ]);
            
            $course->decrement('seats');
            
            DB::commit();
            
            return back()->with('success', 'تم التسجيل في الدورة بنجاح');
            
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'فشل التسجيل: '.$e->getMessage());
        }
    }











    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Enrollment $enrollment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Enrollment $enrollment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Enrollment $enrollment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Enrollment $enrollment)
    {
        //
    }
}
