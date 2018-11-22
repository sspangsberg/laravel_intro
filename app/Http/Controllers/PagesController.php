<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function index()
    {
        //return view("pages.index", compact('title'));
        $data = array(
            'title' => 'Welcome to Laravel!',
        );

        return view("pages.index")->with($data);
    }

    public function about()
    {
        $data = array(
            'title' => 'About',
        );
        return view("pages.about")->with($data);
    }

    public function services()
    {
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Web Development', 'SEO'],
        );
        return view("pages.services")->with($data);
    }
}
