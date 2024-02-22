<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){

        $category_data = Categories::all(); 
        return view('page.category.index', compact('category_data'));
    }

    public function edit($id){
        $category = Categories::find($id);
        return view('page.category.edit', compact('category'));
    }
    public function update(Request $request){
        $category = Categories::find($request->id)->update([
            'name' => $request->name
        ]);
        return redirect('/category');
    }

    public function create(){
       
        return view('page.category.create');
    }

    public function destroy($id){
        
        Categories::find($id)->delete();
        return redirect('/category');
    }

    public function store(Request $request){
        Categories::create([
            'name' => $request->name,

        ]);
        return redirect('/category');
    }
}
