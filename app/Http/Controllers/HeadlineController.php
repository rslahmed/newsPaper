<?php

namespace App\Http\Controllers;

use App\Headline;
use Illuminate\Http\Request;

class HeadlineController extends Controller
{

    public function index()
    {
        return view('backend.headlines.all_headlines',[
            'headlines' => Headline::all()
        ]);
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required|string|min:3'
        ]);

        $create = Headline::create($data);
        if($create){
            return back()->with('success', 'Headline added');
        }else{
            return back()->with('error', 'Something went wrong, please try again');
        }
    }

    public function update($id)
    {
        $data = request()->validate([
            'name' => 'required|string|min:3'
        ]);

        $update = Headline::findOrFail($id)->update($data);

        if($update){
            return back()->with('success', 'Headline updated');
        }else{
            return back()->with('error', 'Something went wrong, please try again');
        }
    }

    public function destroy($id)
    {
        $delete = Headline::findOrFail($id)->delete();
        if($delete){
            return back()->with('success', 'Headline deleted');
        }else{
            return back()->with('error', 'Something went wrong, please try again');
        }
    }
}
