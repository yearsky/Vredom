<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class DashboardController extends Controller
{
    public function index()
    {
    	return view('admin.dashboard.index');
    }

    public function blog()
    {
    	$blog = Blog::all();
    	return view('admin.blog.index',compact('blog'));
    }
}
