<?php

namespace App\Http\Controllers\Admin;

use App\Categories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Categories::latest()->paginate(10);
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $category = new Categories;
        if($request->image) {
            $destinationPath = public_path()."/assets/images/categories";
            $extension =  $request->file('image')->getClientOriginalExtension();
            $fileName = time();
            $fileName .= rand(11111,99999).'.'.$extension; // renaming image
            if(!$request->file('image')->move($destinationPath,$fileName))
            {
                throw new \Exception("Failed Upload");                    
            }
    
            $picture = asset("assets/images/categories")."/".$fileName;
            $category->image = $picture;
        }
        $category->name = $request->name;

        $category->save();

        return redirect()->back();
    }

    public function destroy($id)
    {
        $feed = Categories::findOrFail($id);
        $feed->delete();

        return redirect()->back();
    }
}
