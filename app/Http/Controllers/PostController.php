<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;


class PostController extends Controller // StudlyCase
{
    public function index() // camelCase
    {
        $allPosts = [
            ['id' => 1 , 'title' => 'PHP', 'posted_by' => 'Tareq', 'created_at' => '2025-10-10 09:00:00'],
            ['id' => 2 , 'title' => 'JavaScript', 'posted_by' => 'Mohammed', 'created_at' => '2024-10-10 09:00:00'],
            ['id' => 3 , 'title' => 'HTML', 'posted_by' => 'Ahmed', 'created_at' => '2023-10-10 09:00:00'],
            ['id' => 4 , 'title' => 'CSS', 'posted_by' => 'Ali', 'created_at' => '2022-10-10 09:00:00'],
        ];

        // Select * from posts
        $postsFromDB = Post::all();

        return view('posts.index', ['posts' => $postsFromDB]);
    }

    public function show(Post $post) // camelCase
    {
        // $singlePost = [
        //     'id' => 1 , 'title' => 'PHP', 'description' => 'This is description', 'posted_by' => 'Tareq', 'created_at' => '2025-10-10 09:00:00'
        // ];
        // dd($postId);

        // $singlePostFromDB = Post::findOrFail($postId);

        // $singlePostFromDB = Post::where('id', $postId)->first();

        // $singlePostFromDB = Post::where('id', $postId)->get();

        return view('posts.show', ['post' => $post]);
    }

    public function create() // camelCase
    {
        // Select * from users;
        $users = User::all();

        return view('posts.create', ['users'=> $users]);
    }

    public function store() // camelCase
    {
        //$request = request();
        //dd($request->title, $request->all());

        // 1- Get the user data
        $data = request()->all();

        $title = request()->title;
        $description = request()->description;
        $postCreator = request()->post_creator;

        // 2- Store the user data in database
        // $post = new Post();

        // $post->title = $title;
        // $post->description = $description;

        // $post->save();

        Post::create([
            'title'=> $title,
            'description'=> $description,
            'user_id' => $postCreator,
        ]);

        // 3- Redirection to posts.index
        return to_route('posts.index');
    }

    public function edit(Post $post) // camelCase
    {
        // Select * from users;
        $users = User::all();

        return view('posts.edit', ['users'=> $users, 'post'=> $post]);
    }

    public function update($postId) // camelCase
    {
        // 1- Get the user data
        $title = request()->title;
        $description = request()->description;
        $postCreator = request()->post_creator;

        // 2- Update the user data in database
        $singlePostFromDB = Post::find($postId);
        $singlePostFromDB->update([
            'title'=> $title,
            'description'=> $description,
            'user_id' => $postCreator,
        ]);

        // 3- Redirection to posts.index
        return to_route('posts.show', $postId);
    }

    public function destroy($postId) // camelCase
    {
        // 1- delete the user data from database
        $post = Post::find($postId);
        $post->delete();

        // Post::where('id', $postId)->delete();

        // 2- Redirection to posts.index
        return to_route('posts.index');
    }
}
