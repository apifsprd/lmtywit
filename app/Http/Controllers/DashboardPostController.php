<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.posts.index', [
            'title' => 'Posts',
            'active' => 'posts',
            'posts' => Post::latest()->select('title', 'slug','status', 'published_at', 'created_at')->where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create', [
            'title' => 'Create new post',
            'active' => 'posts',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(count(explode(' ', $request->title)) > 10)
        return Redirect::back()->withErrors(['msg' => 'Title more than 10 words']);

        $validateData = $request->validate([
            'title' => 'required|unique:posts',
            'image' => 'image|file|max:2048',
            'body' => 'required',
            'status' => 'required',
            'imgcaption' => 'required'
        ]);

        if ($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('post-images');
        }

        if($request->status == 1){
            $validateData['published_at'] = date('Y-m-d H:i:s');
        }

        $validateData['user_id'] = auth()->user()->id;
        $validateData['excerpt'] = Str::limit(strip_tags($request->body), 150);
        $validateData['slug'] = Str::of($request->title)->slug('-');

        Post::create($validateData);

        return redirect('/dashboard/posts')->with('success', 'New post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('dashboard.posts.edit', [
            'title' => 'Edit post',
            'active' => 'posts',
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        if(count(explode(' ', $request->title)) > 10)
        return Redirect::back()->withErrors(['msg' => 'Title more than 10 words']);

        $validateData = $request->validate([
            'title' => 'required',
            'image' => 'image|file|max:2048',
            'body' => 'required',
            'status' => 'required'
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validateData['image'] = $request->file('image')->store('post-images');
        }

        if($request->status == 1){
            $validateData['published_at'] = date('Y-m-d H:i:s');
        }

        $validateData['user_id'] = auth()->user()->id;
        $validateData['excerpt'] = Str::limit(strip_tags($request->body), 200);
        $validateData['slug'] = Str::of($request->title)->slug('-');

        Post::where('slug', $post->slug)
            ->update($validateData);

        return redirect('/dashboard/posts')->with('success', 'Post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Post $post)
    {
        $validateData = $request->validate([
            'status' => 'required'
        ]);
        $validateData['published_at'] = null;
        Post::where('slug', $post->slug)
            ->update($validateData);
        return redirect('/dashboard/posts')->with('success', 'Post has been updated!');
    }
}
