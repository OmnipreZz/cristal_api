<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use App\Event;
use App\Menu;
use App\Menucategory;

class PublicController extends Controller
{
    public function index()
    {
        return view('public.home');
    }

    public function event()
    {
        $models = Event::orderBy('event_date', 'desc')->get();
        return view('public.event', ['events'=>$models]);
    }

    public function menu()
    {
        return view('public.menu');
    }

    public function photo()
    {
        $models = Photo::orderBy('id', 'asc')->get();
        return view('public.photo', ['photos'=>$models]);
    }
}
