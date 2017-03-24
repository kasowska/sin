<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ArticleController extends Controller
{
    public function create(){
        $data=request()->all();
        $title = array_get($data, "title");
        if(is_null($title) || strlen($title) ==0){
            return redirect(route("article.get"));
        }
        $category = new Article();
        $category->title=$title;
        $category->save();
        return redirect(route("article.get"));
    }
}
