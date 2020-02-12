<?php

namespace App\Http\Controllers;

use App\Menuphoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class MenuphotoController extends Controller
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
        $models = Menuphoto::orderBy('id', 'desc')->get();
        return view('menuphoto.index', ['menuphotos'=>$models]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menuphoto.form');
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
            'picture' => 'required|image'
        ])->validate();

        $model = Menuphoto::create($request->all());

        $this->storeImage($model);

        if($model) {
            return redirect('menuphotos');
        } else {
            return redirect('menuphotos/create')->with('error', 'Error! Request data is not insert to database, please try again');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Menuphoto  $menuphoto
     * @return \Illuminate\Http\Response
     */
    public function show(Menuphoto $menuphoto)
    {
        $model = Menuphoto::find($menuphoto->id);
        return view('menuphoto.preview', ['menuphoto'=>$model]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Menuphoto  $menuphoto
     * @return \Illuminate\Http\Response
     */
    public function edit(Menuphoto $menuphoto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Menuphoto  $menuphoto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menuphoto $menuphoto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Menuphoto  $menuphoto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menuphoto $menuphoto)
    {
        Menuphoto::destroy($menuphoto->id);
        return redirect('menuphotos');
    }

    private function storeImage($model)
    {
        if (request()->has('picture')) {
            $model->update([
                'picture' => request()->picture->store('uploads', 'public'),
            ]);
        }
    }
}
