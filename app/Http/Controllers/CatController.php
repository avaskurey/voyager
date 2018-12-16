<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatController extends Controller
{
    // class CatController extends Controller
	//{
   // public function getCategory($Category_id)
   // {
   //     $category = Category::find($Category_id);
   //     if($category !== null){
   //         $posts = $category->posts;
   //         return view('blog.index',['posts' => $posts]);
   //     }
   // }
	//}


	public function show($category)
{
   $category = Category::findOrFail($category);

    if($category){
       $posts = Post::where('Category',$category)->get();

        return view('index', compact('posts'));
    }

    
}
}
