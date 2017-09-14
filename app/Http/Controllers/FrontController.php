<?php

namespace altavisionBlog2\Http\Controllers;

use Illuminate\Http\Request;
use altavisionBlog2\App;
use altavisionBlog2\Menu;
use altavisionBlog2\Post;
use altavisionBlog2\News;
use altavisionBlog2\Link;
use altavisionBlog2\Http\Requests;
use altavisionBlog2\Http\Controllers\Controller;

class FrontController extends Controller
{
    public function index()
    {
      $news=News::where('app_id', config('disease'))->get();
      $links=Link::where('app_id',config('disease'))->get();
      $menus=Menu::where('app_id', config('disease'))->get();
      $posts=Post::where('state', 'published')->get();
      $f_menus=Menu::where('favourite', true )->where('app_id', config('disease'))->get();
      $f_posts=Post::where('favourite', true )->where('state', 'published')->get();
      $app=App::where('id', config('disease'))->firstOrFail();
      return view('index',['links'=>$links,'news'=>$news,'app'=>$app, 'menus'=>$menus, 'f_menus'=>$f_menus  ,'posts'=>$posts,'f_posts'=>$f_posts]);
    }
      public function whatsapp()
    {
      return view('whatsapp');
    }
    public function contact(){
      $news=News::where('app_id', config('disease'))->get();
      $links=Link::where('app_id', config('disease'))->get();
      $menus=Menu::where('app_id', config('disease'))->get();
      $posts=Post::where('state', 'published')->get();
      $f_menus=Menu::where('favourite', true )->where('app_id', config('disease'))->get();
      $f_posts=Post::where('favourite', true )->where('state', 'published')->get();
      $app=App::where('id', config('disease'))->firstOrFail();
      return view('contact',['links'=>$links,'news'=>$news,'app'=>$app, 'menus'=>$menus, 'f_menus'=>$f_menus  ,'posts'=>$posts,'f_posts'=>$f_posts]);
    }
    public function bulletin(){
      $news=News::where('app_id', config('disease'))->get();
      $links=Link::where('app_id',config('disease'))->get();
      $menus=Menu::where('app_id', config('disease'))->get();
      $posts=Post::where('state', 'published')->get();
      $f_menus=Menu::where('favourite', true )->where('app_id', config('disease'))->get();
      $f_posts=Post::where('favourite', true )->where('state', 'published')->get();
      $app=App::where('id', config('disease'))->firstOrFail();
      return view('bulletin',['links'=>$links,'news'=>$news,'app'=>$app, 'menus'=>$menus, 'f_menus'=>$f_menus  ,'posts'=>$posts,'f_posts'=>$f_posts]);
    }
    public function lecture(){
      $news=News::where('app_id', config('disease'))->get();
      $links=Link::where('app_id',config('disease'))->get();
      $menus=Menu::where('app_id', config('disease'))->get();
      $posts=Post::where('state', 'published')->get();
      $f_menus=Menu::where('favourite', true )->where('app_id', config('disease'))->get();
      $f_posts=Post::where('favourite', true )->where('state', 'published')->get();
      $app=App::where('id',config('disease'))->firstOrFail();
      return view('lecture',['links'=>$links,'news'=>$news,'app'=>$app, 'menus'=>$menus, 'f_menus'=>$f_menus  ,'posts'=>$posts,'f_posts'=>$f_posts]);
    }
    public function terms(){
      $news=News::where('app_id', config('disease'))->get();
      $links=Link::where('app_id', config('disease'))->get();
      $menus=Menu::where('app_id', config('disease'))->get();
      $posts=Post::where('state', 'published')->get();
      $f_menus=Menu::where('favourite', true )->where('app_id', config('disease'))->get();
      $f_posts=Post::where('favourite', true )->where('state', 'published')->get();
      $app=App::where('id', config('disease'))->firstOrFail();
      return view('terms',['links'=>$links,'news'=>$news,'app'=>$app, 'menus'=>$menus, 'f_menus'=>$f_menus  ,'posts'=>$posts,'f_posts'=>$f_posts]);
    }
}
