<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\Blog;

class BlogsController extends Controller
{

    public function list()
    {
        return view('blogs.list', [
            'blogs' => Blog::all()
        ]);
    }

    public function addForm()
    {
        return view('blogs.add', [
        ]);
    }
    
    public function add()
    {

        $attributes = request()->validate([
            'title' => 'required',
            'slug' => 'required|unique:blogs|regex:/^[A-z\-]+$/',
            'date' => 'required',
            'content' => 'required',
        ]);

        $blog = new Blog();
        $blog->title = $attributes['title'];
        $blog->slug = $attributes['slug'];
        $blog->date = $attributes['date'];
        $blog->content = $attributes['content'];
        $blog->user_id = Auth::user()->id;
        $blog->save();

        return redirect('/console/blogs/list')
            ->with('message', 'Article has been added!');
    }

    public function editForm(Blog $blog)
    {
        return view('blogs.edit', [
            'blog' => $blog,
        ]);
    }

    public function edit(Blog $blog)
    {

        $attributes = request()->validate([
            'title' => 'required',
            'slug' => [
                'required',
                Rule::unique('blogs')->ignore($blog->id),
                'regex:/^[A-z\-]+$/',
            ],
            'date' => 'date',
            'content' => 'required',
        ]);

        $blog->title = $attributes['title'];
        $blog->slug = $attributes['slug'];
        $blog->date = $attributes['date'];
        $blog->content = $attributes['content'];
        $blog->save();

        return redirect('/console/blogss/list')
            ->with('message', 'Article has been edited!');
    }

    public function delete(Blog $blog)
    {
        $blog->delete();
        
        return redirect('/console/blogs/list')
            ->with('message', 'Blog has been deleted!');        
    }

    public function imageForm(Blog $blog)
    {
        return view('blogs.image', [
            'blog' => $blog,
        ]);
    }

    public function image(Blog $blog)
    {

        $attributes = request()->validate([
            'image' => 'required|image',
        ]);

        Storage::delete($blog->image);
        
        $path = request()->file('image')->store('blogs');

        $blog->image = $path;
        $blog->save();
        
        return redirect('/console/blogs/list')
            ->with('message', 'Article image has been edited!');
    }
    
}
