<?php

namespace App\Http\Controllers;

use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        return view('backend.category.all_category', [
           'categories' => Category::orderBy('id', 'desc')->get()
        ]);
    }

    public function store()
    {
        $data = request()->validate([
           'name' => 'required|string|max:25|min:3|unique:categories'
        ]);

        $create = Category::create($data);
        if($create){
            return back()->with('success', 'Category added');
        }else{
            return back()->with('error', 'Something went wrong, please try again');
        }
    }

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
