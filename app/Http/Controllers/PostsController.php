<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('posts.index', [
            'Posts'=> Post::latest()->filter(request(['tag','search']))-> paginate(5)
        ]);
    }
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = Post::find($id);
        if ($post) {
            return view('posts.show', [
                'Post'=> $post
            ]);
        }else{
            abort('404');
        }
        
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formFields = $request -> validate([
            'title'=> 'required',
            'tags'=> 'required',
            'body'=> 'required'

        ]);
        if ($request->hasFile('coverImage')) {
            $formFields ['coverImage'] = $request->file('coverImage')->store('coverImages','public');
        }
        Post::create($formFields);
        return redirect('/')->with('success','Post created succesfully!');
    }

    
   

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $Post)
    {
        return view('posts.edit',['Post'=>$Post]);
        // $post = Post::find($id);
        // return view('posts.edit')->with('Post',$post);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $Post)
    {
        $formFields = $request -> validate([
            'title'=> 'required',
            'tags'=> 'required',
            'body'=> 'required',
            'user_id'=>'',

        ]);
        if ($request->hasFile('coverImage')) {
            $formFields ['coverImage'] = $request->file('coverImage')->store('coverImages','public');
        }
        $Post->update($formFields);
        return redirect('/')->with('success','Post updated succesfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $Post)
    {
        $Post->delete();
        return redirect('/')->with('success','Post deleted succesfully!');
    }
}
