<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\News;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


use Illuminate\Database\Eloquent\Model;

class NewsController extends Controller
{
    public function formNews()
    {
         $news = News::All();
        
        return view('admin.admin-news',  compact("news"));
    }



    public function CreateNews(Request $request)
    {
        $news = new News;
        $news->newsID = $request->newsID;
        $news->author =  $request->author;
        $news->title = $request->title;
        $news->content = $request->content;
        $news->images = $request->images;
        
        $news->save();
        // return redirect('news');
         return redirect()->route('admin-news');
    }

   

    public function DeleteNews($newsID)
    {
        $news = News::find($newsID);
        $news->delete();
        return back();
    }

    public function ShowNews()
    {
        $news = News::all();
        return view('news', ['news' => $news]);
    }
}
