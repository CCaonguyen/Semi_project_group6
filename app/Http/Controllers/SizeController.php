<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\size;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;

class SizeController extends Controller
{
    public function getAllSize()
    {
         $size = Size::All();
        
        return view('admin.admin-Size',  compact("size"));
    }



    public function createSize(Request $request)
    {
        $size= new Size;
        $size->sizeid = $request->sizeid;
        $size->size =  $request->size;
        $size->sizedescription = $request->sizedescription;
       
        
        $size->save();
       
         return redirect()->route('admin-size');
    }

    public function deleteSize($sizeid)
    {
        $size = Size::find($sizeid);
        $size->delete();
        return back();
    }
    public function updateSize(Request $request, $sizeid)
    {
        $size = Size::find($sizeid);
        $size->sizeid = $request->sizeid;
        $size->size = $request->size;
        $size->sizedescription = $request->sizedescription;
       
        $size->save();
        return back();

    
    }
    public function getUpdateSize($sizeid)
    {
        $data['size'] = Size::find($sizeid);
        return view('admin.admin-updateSize',$data);
    }

}
