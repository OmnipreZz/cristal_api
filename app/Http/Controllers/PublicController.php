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
        return view('public.event');
    }

    public function menu()
    {
        return view('public.menu');
    }

    public function photo()
    {
        return view('public.photo');
    }

    public function contact()
    {
        return view('public.contact');
    }
}
