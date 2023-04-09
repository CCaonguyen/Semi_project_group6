<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\color;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;

class ColorController extends Controller
{
    public function getAllColor()
    {
         $color = Color::All();
        
        return view('admin.admin-color',  compact("color"));
    }



    public function createColor(Request $request)
    {
        $color = new Color;
        $color->colorid = $request->colorid;
        $color->color =  $request->color;
        $color->colordescription = $request->colordescription;
       
        
        $color->save();
       
         return redirect()->route('admin-color');
    }

    public function deleteColor($colorid)
    {
        $color = Color::find($colorid);
        $color->delete();
        return back();
    }
    public function updateColor(Request $request, $colorid)
    {
        $color = Color::find($colorid);
        $color->colorid = $request->colorid;
        $color->color = $request->color;
        $color->colordescription = $request->colordescription;
       
        $color->save();
        return back();

    
    }
    public function getUpdateColor($colorid)
    {
        $data['color'] = Color::find($colorid);
        return view('admin.admin-updateColor',$data);
    }

}
