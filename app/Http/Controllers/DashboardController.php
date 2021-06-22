<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Portofolio;
use App\Contact;

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

    public function portofolio()
    {
    	$portofolio = Portofolio::all();
    	return view('admin.portofolio.index',compact('portofolio'));
    }

    public function message()
    {
        $message = Contact::all();
        return view('admin.message.index',compact('message'));
    }
}
