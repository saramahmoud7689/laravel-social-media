<?php

namespace App\Http\Controllers;

use App\Models\comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = comment::all();
        return view("comments.index", compact("comments"));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("comments.create");

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|string|max:255|unique:comments,name",
            "comment" => "required|string|max:255",
        ],[
            "name.required" => "Comment name is required",
            "name.unique" => "Comment name must be unique",
            "comment.required" => "Comment is required",
        ]);  
        
        $comment = comment::create($request->all());
        return to_route("comments.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(comment $comment)
    {
        return view("comments.show", compact("comment"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(comment $comment)
    {
        return view("comments.edit", compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, comment $comment)
    {
        $request->validate([
            "name" => "required|string|max:255",
            "comment" => "required|string|max:255",
        ],[
            "name.required" => "comment name is required",
            "name.unique" => "comment name must be unique",
            "comment.required" => "comment is required",
        ]);

        $comment->update($request->all());
        return to_route("comments.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(comment $comment)
    {
        $comment->delete();
        return to_route("comments.index");
    }
}
