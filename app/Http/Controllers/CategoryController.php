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
        return Category::insert($request->all());
    }
    public function update(Request $request , $id){
          $cat = Category::
                    where('id', $id)
                    ->update($request->all());;
             return $cat;
    }
    public function delete(Request $request,$id)
    {
        $cat  = Category::findOrFail($id);
        $cat->delete();
        return 204;
    }
    

}
