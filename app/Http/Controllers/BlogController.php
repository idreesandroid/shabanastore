<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Blog Posts';        
        $blog = Blog::with('blogWriter')->get();       
        return view('blog',compact('blog'))->with('title',$title);
    }


    public function list()
    {
        $title = 'Blog';        
        $blog = Blog::with('blogWriter')->get();       
        return view('admin.blog.list',compact('blog'))->with('title',$title);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $title = 'Create Blog Post';
        return view('admin/blog/create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'      => 'required|min:5',
            'description'  => 'required'
        ]);

        $blog_id = Blog::insertGetId([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => 1
        ]);
        return ($blog_id) ? true : false;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        $title = 'Blog Detail';
        return view('blog-detail')->with('title',$title);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }

    public function usreBlogs(){
        $usres = User::with('getPostRelation')->get();
        dd($usres);
    }
}
