<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Home Page';
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $data = array(
             'title' => 'About Page',
             'pageNo' => '2',
             'message' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur perferendis repudiandae temporibus, corrupti sint similique doloribus laboriosam sit commodi explicabo nihil odio mollitia molestias totam, accusamus natus consequatur porro? Labore.',
             'techs' => [ 'PHP', 'Laravel', 'MySQL' ]
        );
        return view('pages.about')->with($data);
    }
}
