<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){

        $showCategory = Category::query()->orderBy('id', 'desc')->get();
        return view('category.index', compact('showCategory'));
    }

    public function create(){
        return view('category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'status' => 'required',
        ]);

        Category::create([
            'name' => $request['name'],
            'status' => $request['status'],
        ]);

        return redirect('category')->with('save', 'category created successfully!');
    }

    public function edit($id){
        $Category = Category::find($id);
        // dd($Category);
        return view('category.edit',["showCategory"=>$Category]);
    }

    public function update(Request $request, $id){
        $categoryUpdate = Category::find($id);

        $categoryUpdate->name = $request->name;
        $categoryUpdate->status = $request->status;

        if($categoryUpdate->save()){
            return redirect('category');
        } else{
            echo "Data is not updated!!";
        }
    }
    public function delete($id){
        $isDelete = Category::destroy($id);

        if($isDelete){
            return redirect('category');
        } else{
            echo "Record Can't be deleted!!";
        }
    }
}
