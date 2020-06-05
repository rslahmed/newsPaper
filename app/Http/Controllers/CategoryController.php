<?php

namespace App\Http\Controllers;

use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.category.all_category', [
           'categories' => Category::orderBy('id', 'desc')->paginate(10)
        ]);
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
        $data = request()->validate([
           'name' => 'required|string|max:25|min:3'
        ]);

        $create = Category::create($data);
        if($create){
            return back()->with('success', 'Category added');
        }else{
            return back()->with('error', 'Something went wrong, please try again');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $data = request()->validate([
           'name' => 'required|string|min:3|max:25|unique:categories'
        ]);

        $update = Category::findOrFail($id)->update($data);

        if($update){
            return back()->with('success', 'Category updated');
        }else{
            return back()->with('error', 'Something went wrong, please try again');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delSub = SubCategory::where('category_id', $id)->delete();
        $delete = Category::findOrFail($id)->delete();

        if($delete && $delSub){
            return back()->with('success', 'Category deleted');
        }else{
            return back()->with('error', 'Something went wrong, please try again');
        }
    }
}
