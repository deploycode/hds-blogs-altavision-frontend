<?php

namespace altavisionBlog2\Http\Controllers;

use Illuminate\Http\Request;
use altavisionBlog2\App;
use altavisionBlog2\News;
use altavisionBlog2\Post;
use altavisionBlog2\Menu;
use altavisionBlog2\Http\Requests;
use altavisionBlog2\Http\Controllers\Controller;

class NewController extends Controller
{
    public function show($slug)
    {
      $posts=Post::where('state', 'published')->get();
      $app=App::where('id', config('disease'))->firstOrFail();
      $menus=Menu::where('app_id', config('disease'))->get();
      $new = News:: where('slug','=', $slug)->firstOrFail();
      return view('news.view',['new'=>$new , 'app'=>$app ,'menus'=>$menus ,'posts'=>$posts]);
    }
}
