<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "Welcome to KanyeFy.";
        return view('pages.index')->with('title',$title);
    }

    public function login(){
        return view('pages.login');
    }

    public function signup(){
        return view('pages.signup');
    }

    public function managePlaylist(){
        return view('pages.managePlaylist');
    }

    public function addSong(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design','Programming','SEO']
        );
        return view('pages.addSong')->with($data);
    }

    public function about(){
        return view('pages.about');
    }
}
