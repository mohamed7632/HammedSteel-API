<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;


class CategoryController extends Controller
{
    public function index(){
        return Category::all();
    }
    public function show($id){
        return Category::find($id);
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|unique:categories',
        ]);

        if($validatedData){
            echo "welcome";
            $cat = new Category();   
            $cat->name = $request->name;
            $cat->save();   
        }
    }
    public function update(Request $request , $id){
          $cat = Category::
                    where('id', $id)
                    ->update($request->all());;
    }
    public function delete(Request $request,$id)
    {
        $cat  = Category::findOrFail($id);
        $cat->delete();
    }

}
