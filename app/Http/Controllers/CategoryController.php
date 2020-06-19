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
    public function store(Request $request ){
        $v=[
            'name' => $request->name
        ];
        $cat = new Category();   
        $cat->name = $v['name'];
        $cat->save();
        // $validator = \validator::make($v, [
        //     'name' => 'required|unique:categories'
        // ]);
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
    public function delete(Request $request,$id)
    {
        $cat  = Category::findOrFail($id);
        $cat->delete();
    }

}
