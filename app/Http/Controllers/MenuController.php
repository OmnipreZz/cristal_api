<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Menucategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class MenuController extends Controller
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
        $menus = Menu::with('category')->where('category_id', 1)->orderBy('name')->get();
        $categories = Menucategory::orderBy('name')->get();
        $hisCategory = 1;
        return view('menu.index', compact('menus', 'categories', 'hisCategory'));
    }

    public function indexByCat(Request $request)
    {
        $categories = Menucategory::orderBy('name')->get();
        $menus = Menu::with('category')->where('category_id', $request->input('category') )->orderBy('name')->get();
        $hisCategory = $request->input('category');
        return view('menu.index', compact('menus', 'categories', 'hisCategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Menucategory::orderBy('name')->get();
        return view('menu.form', compact('categories'));
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
            'price' => 'required|regex:/(\d+(?:[.]\d+)?)/',
            'category_id' => 'required'
        ])->validate();

        $model = Menu::create($request->all());

        if($model) {
            return redirect('menus');
        } else {
            return redirect('menus/create')->with('error', 'Error! Request data is not insert to database, please try again');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        $dish = Menu::find($menu->id);
        $categories = Menucategory::orderBy('name')->get();
        $hisCategory = $menu->category;
        return view('menu.form', compact('dish', 'categories', 'hisCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        Validator::make($request->all(), [
            'name' => 'required|max:255',
            'price' => 'required|regex:/(\d+(?:[.]\d+)?)/',
            'category_id' => 'required'
        ])->validate();

        $update = ['name' => $request->name, 'description' => $request->description, 'price' => $request->price, 'category_id' => $request->category_id];
        $model = Menu::where('id', $menu->id)->update($update);
        if($model) {
            return redirect('menus');
        } else {
            return redirect('menus/'.$event->id.'/edit')->with('error', 'Error! Failed to update request data');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        Menu::destroy($menu->id);
        return redirect('menus');
    }
}
