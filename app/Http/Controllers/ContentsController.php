<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\Content;

class ContentsController extends Controller
{
    public function list()
    {
        return view('contents.list', [
            'contents' => Content::all()
        ]);
    }

    public function addForm()
    {
        return view('contents.add');
    }
    
    public function add()
    {

        $attributes = request()->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $content = new Content();
        $content->title = $attributes['title'];
        $content->content = $attributes['content'];
        $content->save();

        return redirect('/console/contents/list')
            ->with('message', 'Content has been added!');
    }

    public function editForm(Content $content)
    {
        return view('contents.edit', [
            'content' => $content,
        ]);
    }

    public function edit(Content $content)
    {

        $attributes = request()->validate([
            'title' => 'required',
            'content' => 'required',

        ]);

        $content->title = $attributes['title'];
        $content->content = $attributes['content'];
        $content->save();

        return redirect('/console/contents/list')
            ->with('message', 'Content has been edited!');
    }

    public function delete(Content $content)
    {
        $content->delete();
        
        return redirect('/console/contents/list')
            ->with('message', 'Content has been deleted!');        
    }

    public function imageForm(Content $content)
    {
        return view('contents.image', [
            'content' => $content,
        ]);
    }

    public function image(Content $content)
    {

        $attributes = request()->validate([
            'image' => 'required|image',
        ]);

        Storage::delete($content->image);
        
        $path = request()->file('image')->store('contents');

        $content->image = $path;
        $content->save();
        
        return redirect('/console/contents/list')
            ->with('message', 'Content image has been edited!');
    }
}
