<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;

class AssignmentController extends Controller
{
    /**
     *
     * Show a list of all assignments.
     *
     */
    public function showAssignment()
    {
        $assignments = Assignment::all();

        return view('assignments/assignment', ['assignments' => $assignments]);
    }
}
