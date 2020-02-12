<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use App\Event;
use App\Menuphoto;


class PublicController extends Controller
{
    public function index()
    {   
        $models = Photo::orderBy('id', 'desc')->take(3)->get();
        return view('public.home', ['photos'=>$models]);
    }

    public function event()
    {
        $models = Event::orderBy('created_at', 'desc')->paginate(4);
        return view('public.event', ['events'=>$models]);
    }

    public function menu()
    {
        $models = Menuphoto::orderBy('id', 'desc')->get();
        return view('public.menu', ['menuphotos'=>$models]);
    }

    public function photo()
    {
        $photos = Photo::orderBy('id', 'desc')->paginate(20);
        $padphotos = Photo::orderBy('id', 'desc')->paginate(15);
        $mobilephotos = Photo::orderBy('id', 'desc')->paginate(5);
        return view('public.photo', compact('photos', 'padphotos', 'mobilephotos'));
    }

    public function mention()
    {
        return view('public.mention');
    }
}
