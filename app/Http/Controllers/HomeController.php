<?php

namespace App\Http\Controllers;

use DB;

class HomeController extends Controller
{
    function index(){
        $posts = DB::table('post')->                    
                     select('post.*', 'category.category')->
                     leftJoin('category', function($join) {
                        $join->on('category.id', '=', 'post.category_id');
                     })->
                     orderBy('id','DESC')->
                     skip(0)->take(6)->get();

        return view('home', [
            "posts" => $posts
        ]);
    }

    function category($category_id="error"){
        $posts = DB::table('post')->                    
                     select('post.*', 'category.category')->
                     where('post.category_id', $category_id)->
                     leftJoin('category', function($join) {
                        $join->on('category.id', '=', 'post.category_id');
                     })->
                     orderBy('id','DESC')->get();
        $category = DB::table('category')->                    
                        select('category.*')->
                        where('category.id', $category_id)->
                        first();
                     
        return view('category', [
            "title" => $category->category,
            "posts" => $posts,
            "category" => $category
        ]);
    }

    function post($post_id="error"){
        $post   = DB::table('post')->                    
                        select('post.*', 'category.category')->
                        where('post.id', $post_id)->
                        leftJoin('category', function($join) {
                            $join->on('category.id', '=', 'post.category_id');
                        })->first();
                     
        return view('post', [
            "title" => $post->title,
            "post"  => $post,
        ]);
    }

}
