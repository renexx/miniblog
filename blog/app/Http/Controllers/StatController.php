<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class StatController extends Controller
{
    public function index()
    {
         $countOfTodayPosts =  Post::whereDate('created_at', \Carbon\Carbon::today())->count("id_post");
         $totalCountOfPosts =  Post::count('id_post');
         $totalCountOfUniqueName = Post::distinct()->count('user_id');

         $topFiveUsersWithTheMostPost = DB::table('users')  //I hope sql injection does not occur
                                            ->join('posts', 'users.id','=','posts.user_id')
                                            ->select('users.name',DB::raw('COUNT(posts.user_id) as pocet_odkazov'))
                                            ->groupBy('name')
                                            ->orderByRaw('COUNT(posts.user_id) DESC')
                                            ->limit(5)
                                            ->get();

        return view("posts.stat",["posts" => $totalCountOfPosts,
                                  "uniqueName" => $totalCountOfUniqueName,
                                  "topfive" => $topFiveUsersWithTheMostPost,
                                  "todaypost" => $countOfTodayPosts]);
    }

}
