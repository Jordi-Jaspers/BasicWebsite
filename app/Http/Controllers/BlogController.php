<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    
    public function createPost(){
        return view('pages.Blog.create');
    }

    public function getBlog(){
        $blogs = Blog::all();
        return view('pages.Blog.blog') -> with('blogs', $blogs);
    }

    public function delete($id){
        $blog = Blog::find($id);

        $blog->delete();

        return redirect('/blog') -> with('deleted', 'Message deleted');
    }

    public function edit($id){
        $blog = Blog::find($id);

        return view('pages.Blog.edit', ['blog' => $blog]) ;
    }

    public function update(Request $request, $id){
        $blog = Blog::find($id);

        $blog->title = $request->title;
        $blog->content = $request->content;

        $blog ->update();

        return redirect('/blog') -> with('success', 'Message updated');
    }

    public function submit(Request $request){
        
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'creator' => 'required'
        ]);
        
        //Create new message.
        $blog = new Blog;
       
        $blog->creator = $request->input('creator');
        $blog->title = $request->input('title');
        $blog->content = $request->input('content');

        //Save message and submit to the database.
        $blog->save();

        //redirect
        return redirect('/blog') -> with('created', 'Message created');
    }
}