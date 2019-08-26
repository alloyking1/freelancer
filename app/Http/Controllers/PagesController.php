<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * only logout users can view.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    //creat a method that return to the route
    public function index(){
        //return the index page view template
        $title = "My Blog, built with laravel"; 
        return view('pages.index')->with('title', $title);// pass vr along to the template
    }

    public function about(){
        $title = "About Page";
        return view('pages.about')->with('title', $title);
    }

    public function services(){
        $data = array(
            'title' => 'service',
            'services' => ['web design', 'programming', 'SEO']

        );
        return view('pages.services')->with($data);
    }

}
