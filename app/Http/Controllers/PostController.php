<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index() {
        $posts = Post::latest()->paginate(5);
        return view('posts.index', compact('posts'));
    }

    public function create() {
        return view('posts.create');
    }
    public function show($id){
        $post = Post::findOrfail($id);
        return view('posts.show', compact('post')); // pass the 
    }

    function store(){
        $post = new Post(); 
        
        request()->validate([
            "title" => ["required", "max:255"],
            "slug" => ["required", "string", "max:255"],
            "body" => ["required"],
            "version" => ["required", "integer"],
            "image" => ["nullable", "max:2048"],
        ]);

        $title = request("title");
        $slug = request("slug");
        $body = request("body");
        $version = request("version");
        $image = request("image");

        $post->title = $title;
        $post->slug = $slug;
        $post->body = $body;
        $post->version = $version;
        $post->image = $image;
        $post->save(); 
        return to_route("posts.index"); 
    }

    public function edit($id) {
        $post = Post::findOrfail($id);
        return view('posts.edit', compact('post'));
    }

    function update($id){
            $post = Post::findOrfail($id);
            
            $title = request("title");
            $slug = request("slug");
            $body = request("body");
            $version = request("version");
            $image = request("image");

            $post->title = $title;
            $post->slug = $slug;
            $post->body = $body;
            $post->version = $version;
            $post->image = $image;
            $post->save(); // save to database
            
            return to_route("posts.index");
          
        }

    // public function destroy(Post $post) {
    //     $post->delete();
    //     return redirect()->route('posts.index')->with('success', 'Post deleted!');
    // }

    function destroy($id){
        $post = Post::findOrfail($id);
        $post->delete(); // delete from database
        return to_route("posts.index");
    }
}

