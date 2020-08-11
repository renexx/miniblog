<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests\SavePostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       /* $posts = Post::all();
        return $posts;

        return view("posts.index")->with('posts',$posts);*/
        //return Post::distinct()->count('user_id');
        //return Post::count('id_post');
        //return \App\User::select('name')->join('posts', 'posts.user_id','=','users.id')->count('posts.user_id')->get();
        //$topfive = DB::select("select users.name as meno, count(posts.user_id) as pocet_odkazov from users INNER JOIN posts ON users.id=posts.user_id GROUP BY meno ORDER BY COUNT(posts.user_id) desc LIMIT 5");
         //return view("user.index",["users" => $users])

        return view("posts.index", ['posts' => Post::orderBy('created_at','desc')->limit(20)->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SavePostRequest $request)
    {
        //datetime("d. m. Y H:m:s")
        $this->validate($request,[
            'content' => ['required'],
        ]);



        $post = \Auth::user()->post()->create($request->all());
       // $post = new Post();
        //$post->content = $request->input('content');
       // $post->user_id = $request->input(1)
        //$post->created_at = $request->input('created_at').now();
        //$post->save();
        //return $request->all();
        return redirect()->route('post.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        $post->user;
        return $post ;
        return view('post.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
