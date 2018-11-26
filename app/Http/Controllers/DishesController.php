<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dishes as Dishes;
use App\Models\Category as Category;
class DishesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dishes = Dishes::orderBy('id', 'desc')->paginate(10);
        return view('dishes.index', ['dishes' => $dishes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::where('published', '=', 0)->get();
        return view('dishes.create', ['category' => $category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
        'title' => 'required',
        'description' => 'required',
        'price' => 'required',
        'img' => 'required|file',
        'category' => 'required',

        ]);

        $model = new Dishes();
        $model->title = $request->input('title');
        $model->description = $request->input('description');
        $model->price = $request->input('price');
        $model->category_id = $request->input('category');
        $model->img = $request->file('img')->store('uploads', 'public');
        $model->save();

        return redirect('dishes/');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dishes = Dishes::find($id)->first();
        $cat = Dishes::find($id)->category;
        return view('dishes.show', ['dishes' => $dishes, 'cat' => $cat]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
