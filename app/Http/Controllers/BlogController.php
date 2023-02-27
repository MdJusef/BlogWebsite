<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return view('frontEnd.home.home');
    }
    public function about(){
        return view('frontEnd.about.about');
    }
    public function contact(){
        return view('frontEnd.contact.contact');
    }
    public function singlePost(){
        return view('frontEnd.post.single-post');
    }
    public function category(){
        return view('frontEnd.category.category');
    }
    public function search(){
        return view('frontEnd.search.search');
    }
}
