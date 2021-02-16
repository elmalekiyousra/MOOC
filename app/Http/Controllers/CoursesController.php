<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

use App\Http\Requests;

class CoursesController extends Controller
{
    public function course(\App\Course $course)
    {
        return view('courses.course', compact('course'));
    }

    public function store(Request $request)
    {
        return Course::create($request->all());
    }

    public function update(Request $request, \App\Course $course)
    {
        $course->update($request->all());
        return response()->json($course, 200);
    }
    public function delete(\App\Course $course)
    {
        $course->delete();
        return response()->json(null, 204);
    }
}
