<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DataTables;
use App\Blog;

class BlogController extends Controller
{
    public function data()
    {
        $model = Blog::query();

        return DataTables::eloquent($model)
            ->editColumn('id', function (Blog $b) {
                return '#' . $b->id;
            })
            ->editColumn('title', function (Blog $b) {
                return '<a href="'.url('blog/'.$b->id).'">h5 class="mt-0 font-weight-bold">' . $b->title.'</h5></a><br>'.substr($b->content, 0, 100).'...';
            })
            ->addColumn('user', function (Blog $b) {
                return '<a href="'.url('admin/user/'.$b->user_id).'" target="_blank"><u>'.$b->user->name.'</u></a>';
            })
            ->editColumn('cover_img', function (Blog $b) {
                return '<img class="d-flex mb-3 mx-auto media-image z-depth-1" src="'.url('uploads/'.$b->cover_img).'">';
            })
            ->editColumn('status', function (Blog $b) {
                if ($b->status == 1) {
                    return 'Active';
                } else {
                    return 'Deleted';
                }
            })
            ->editColumn('created_at', function (Blog $b) {
                return $b->created_at->diffForHumans();
            })
            ->editColumn('change_status', function (Blog $b) {
                return '<form action="'.url('admin/blog').'" method="POST">
                <select class="mdb-select" name="status">
                <option value="1">Active</option>
                <option value="0">Delete</option>
                </select>
                <input type="hidden" value="'.$b->id.'" name="id">
                <br>
                <input type="submit" value="Save">
                </form>';
            })
            ->rawColumns([
                'title',
                'user',
                'cover_img',
                'change_status'
            ])
            ->toJson();
    }
}
