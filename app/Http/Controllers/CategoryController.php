<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Symfony\Component\HttpFoundation\Response;


class CategoryController extends Controller
{
    public function index(){
        $cat =  Category::all();
        return $cat->toJson();
    }
    public function show($id){
        return Category::find($id);
    }
    public function store($name){
        $v=[
            'name' => $name
        ];
        $cat = Category::where('name',$name)->get();
        if(sizeof($cat)==0){
            $cat = new Category();
            $cat->name = $name;
            $cat->save();
        }
        
        //  if($validator){
        //     echo "welcome";
        //     $cat = new Category();   
        //     $cat->name = $name;
        //     $cat->save();   
        // }
    }
    public function update(Request $request , $id){
          $cat = Category::
                    where('id', $id)
                    ->update($request->all());;
    }
    public function delete($id)
    {
        $cat  = Category::findOrFail($id);
        $cat->delete();
    }

}
