<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use App\Event;


class PublicController extends Controller
{
    public function index()
    {   
        $models = Photo::orderBy('id', 'desc')->take(3)->get();
        return view('public.home', ['photos'=>$models]);
    }

    public function event()
    {
        $models = Event::orderBy('id', 'asc')->get();
        return view('public.event', ['events'=>$models]);
    }

    public function menu()
    {
        return view('public.menu');
    }

    public function photo()
    {
        $models = Photo::orderBy('id', 'desc')->get();
        return view('public.photo', ['photos'=>$models]);
    }
}
