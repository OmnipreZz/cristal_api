<?php

namespace App\Http\Controllers;

use App\Menucategory;
use Illuminate\Http\Request;

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
        // $categories = Menucategory::orderBy('name', 'asc')->get();
        // return view('commandCat.admin', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Menucategory  $menucategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menucategory $menucategory)
    {
        //
    }
}
