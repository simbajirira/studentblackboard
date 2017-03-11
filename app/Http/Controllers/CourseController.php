<?php

namespace StudentBlackBoard\Http\Controllers;

use StudentBlackBoard\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Showing the courses in the database
        return view('courses');
    }


    /**
     * Display the specified resource.
     *
     * @param  \StudentBlackBoard\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

      

}
