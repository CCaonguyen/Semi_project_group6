<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;

class CategoryController extends Controller
{
    public function getAllCategory()
    {
         $category = Category::All();
        
        return view('admin.admin-category',  compact("category"));
    }



    public function createCategory(Request $request)
    {
        $category = new Category;
        $category->categoryid = $request->categoryid;
        $category->category =  $request->category;
        $category->categorydescription = $request->categorydescription;
       
        
        $category->save();
       
         return redirect()->route('admin-category');
    }

    public function deleteCategory($categoryid)
    {
        $category = Category::find($categoryid);
        $category->delete();
        return back();
    }
    public function updateCategory(Request $request, $categoryid)
    {
        $category = Category::find($categoryid);
        $category->categoryid = $request->categoryid;
        $category->category = $request->category;
        $category->categorydescription = $request->categorydescription;
       
        $category->save();
        return back();

    
    }
    public function getUpdateCategory($categoryid)
    {
        $data['category'] = Category::find($categoryid);
        return view('admin.admin-updateCategory',$data);
    }

}
