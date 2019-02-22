<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Validator;
use Illuminate\Support\Facades\Input;
use Auth;

class BlogController extends Controller
{
    public function store(Request $request)
    {
        $input = $request->all();

        $request->validate([
            'title' => 'required|max:100',
            'content' => 'required',
        ]);

        $blog = new Blog;
        $blog->user_id = Auth::user()->id;
        $blog->title = $input['title'];
        $blog->content = $input['content'];
        // $issue->user_id = Auth::id();
        $file = Input::file('upload_file');
        if ($file != null) {
            $file_name = uniqid().$file->getClientOriginalName();
            $file_size = round($file->getSize() / 1024);
            $file_ex = $file->getClientOriginalExtension();
            $file_mime = $file->getMimeType();

            if (!in_array($file_ex, array('jpg','png','jpeg'))) {
                return back()->with(['msg' => 'Invalid file type. Upload files in pdf format only', 'class' => 'alert-danger']);
            }
            $newname = $file_name;
            $blog->cover_image = $newname;
            $file->move('uploads', $newname);
        }
        $blog->save();
        return back()->with(['msg' =>'Blog added successfully. It will be posted as soon as the admin approves it.', 'class' => 'alert-success']);
    }

    public function index()
    {
        $blogs = Blog::all();
        return view('home', ['blogs'=>$blogs]);
    }

    public function edit($id)
    {
        $blog =Blog::find($id);
        if (!is_null($blog)) {
            return view('society.edit-blog', ['blog' => $blog]);
        }
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);
        $blog->user_id = Auth::user()->id;
        $blog->title = $input['title'];
        $blog->content = $input['content'];
        // $issue->user_id = Auth::id();
        $file = Input::file('upload_file');
        if ($file != null) {
            $file_name = uniqid().$file->getClientOriginalName();
            $file_size = round($file->getSize() / 1024);
            $file_ex = $file->getClientOriginalExtension();
            $file_mime = $file->getMimeType();

            if (!in_array($file_ex, array('jpg','png','jpeg'))) {
                return back()->with(['msg' => 'Invalid file type. Upload files in pdf format only', 'class' => 'alert-danger']);
            }
            $newname = $file_name;
            $blog->cover_image = $newname;
            $file->move('uploads', $newname);
        }
        $blog->save();
        return back()->with(['msg' =>'Blog added successfully. It will be posted as soon as the admin approves it.', 'class' => 'alert-success']);
    }

    public function delete($id)
    {
        $blog =Blog::find($id);
        if (!is_null($blog)) {
            $blog->delete();
            return back()->with(['msg' =>'blog deleted successfully.', 'class' => 'alert-success']);
        }
    }
}
