<?php

namespace App\Http\Controllers;

use App\Menucategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class MenucategoryController extends Controller
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
        $models = Menucategory::orderBy('name', 'asc')->get();
        return view('menucategory.index', ['menucategories'=>$models]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menucategory.form');
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
            'name' => 'required|max:255',
        ])->validate();

        $model = Menucategory::create($request->all());

        if($model) {
            return redirect('menucategories');
        } else {
            return redirect('menucategories/create')->with('error', 'Error! Request data is not insert to database, please try again');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Menucategory  $menucategory
     * @return \Illuminate\Http\Response
     */
    public function show(Menucategory $menucategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Menucategory  $menucategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Menucategory $menucategory)
    {
        $model = Menucategory::find($menucategory->id);
        return view('menucategory.form', ['menucategory'=>$model]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Menucategory  $menucategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menucategory $menucategory)
    {
        Validator::make($request->all(), [
            'name' => 'required|max:255',
        ])->validate();

        $update = ['name' => $request->name];
        $model = Menucategory::where('id', $menucategory->id)->update($update);
        if($model) {
            return redirect('menucategories');
        } else {
            return redirect('menucategories/'.$menucategory->id.'/edit')->with('error', 'Error! Failed to update request data');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Menucategory  $menucategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menucategory $menucategory)
    {
        Menucategory::destroy($menucategory->id);
        return redirect('menucategories');
    }
}
