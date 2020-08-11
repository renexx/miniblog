<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class StatController extends Controller
{
    public function index()
    {
       /* $posts = Post::all();
        return $posts;

        return view("posts.index")->with('posts',$posts);*/
        //return Post::distinct()->count('user_id');

        //return \App\User::select('name')->join('posts', 'posts.user_id','=','users.id')->count('posts.user_id')->get();
         //return view("user.index",["users" => $users])
         $totalCountOfPosts =  Post::count('id_post');
         $totalCountOfUniqueName = Post::distinct()->count('user_id');
         $topFiveUsersWithTheMostPost = DB::select("select users.name as meno, count(posts.user_id) as pocet_odkazov from users INNER JOIN posts ON users.id=posts.user_id GROUP BY meno ORDER BY COUNT(posts.user_id) desc LIMIT 5");
        //return view("posts.index", ['posts' => Post::orderBy('created_at','desc')->limit(20)->get()]);
        return view("posts.stat",["posts" => $totalCountOfPosts,
                                  "uniqueName" => $totalCountOfUniqueName,
                                  "topfive" => $topFiveUsersWithTheMostPost ]);
    }

}
