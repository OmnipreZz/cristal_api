<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $models = Event::orderBy('created_at', 'desc')->get();
        return view('event.index', ['events'=>$models]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('event.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'title' => 'required|max:255',
            'event_date' => 'required',
        ])->validate();

        $model = Event::create($request->all());
        if($model) {
            return redirect('events');
        } else {
            return redirect('events/create')->with('error', 'Error! Request data is not insert to database, please try again');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        $model = Event::find($event->id);
        return view('event.preview', ['event'=>$model]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        $model = Event::find($event->id);
        return view('event.form', ['event'=>$model]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        Validator::make($request->all(), [
            'title' => 'required|max:255',
            'event_date' => 'required',
        ])->validate();

        $update = ['title' => $request->title, 'description' => $request->description, 'event_date' => $request->event_date];
        $model = Event::where('id', $event->id)->update($update);
        if($model) {
            return redirect('events');
        } else {
            return redirect('events/'.$event->id.'/edit')->with('error', 'Error! Failed to update request data');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        Event::destroy($event->id);
        return redirect('events');
    }
}
