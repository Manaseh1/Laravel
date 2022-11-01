<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index()
    {

        return view('index');
    }
    public function about(){
        if(Auth::guest()){
            return redirect()->route('login');
    }
        return view('about');
    }
    public function contact(){
        if(Auth::guest()){
            return redirect()->route('login');
    }
        return view('contact');
    }
    public function menu(){
        return view('menu');
    }
    public function reservation(){
        if(Auth::guest()){
            return redirect()->route('login');
    }
        return view('reservation');

    }
    public function service(){
        if(Auth::guest()){
            return redirect()->route('login');
    }
        return view('service');
    }
    public function testimonial(){
        if(Auth::guest()){
            return redirect()->route('login');
    }
        return view('testimonial');
    }

}
