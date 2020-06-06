<?php

namespace App\Http\Controllers;

use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{

    public function index()
    {
        return view('backend.subcategory.all_subcategory', [
            'subcategories' => SubCategory::orderBy('id', 'desc')->paginate(10),
            'categories' => Category::all(),
        ]);
    }

    public function getSubcategory(){
        $category = SubCategory::select('name', 'id')->where('category_id', request()->id)->get();
        return json_encode($category);
    }

    public function catFilter($id){
        if($id == 'all'){
            $subcategories = SubCategory::all();
            $selectedCat = null;
        }else{
            $selectedCat = $id;
            $subcategories = SubCategory::where('category_id', $id)->orderBy('id', 'desc')->get();
        }
        return view('backend.subcategory.all_subcategory', [
            'subcategories' => $subcategories,
            'selectedCat' => $selectedCat,
            'categories' => Category::all(),
        ]);
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required|string|max:25|min:3',
            'category_id' => 'required|integer',
        ]);

        $create = SubCategory::create($data);
        if($create){
            return back()->with('success', 'Subcategory added');
        }else{
            return back()->with('error', 'Something went wrong, please try again');
        }
    }


    public function update($id)
    {
        $data = request()->validate([
            'name' => 'required|string|min:3|max:25',
            'category_id' => 'required|integer',
        ]);

        $update = SubCategory::findOrFail($id)->update($data);

        if($update){
            return back()->with('success', 'Subcategory updated');
        }else{
            return back()->with('error', 'Something went wrong, please try again');
        }
    }


    public function destroy($id)
    {
        $delete = SubCategory::findOrFail($id)->delete();
        if($delete){
            return back()->with('success', 'Subcategory deleted');
        }else{
            return back()->with('error', 'Something went wrong, please try again');
        }
    }
}
