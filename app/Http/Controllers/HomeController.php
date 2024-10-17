<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index() {

        $jobs = Job::latest()->limit(6)->get();
        
        return view('pages.index')->with('jobs', $jobs);
    }
}
