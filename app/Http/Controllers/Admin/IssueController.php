<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Issue;
use DataTables;
use App\User;

class IssueController extends Controller
{
    public function data()
    {
        $model = Issue::query();

        return DataTables::eloquent($model)
            ->editColumn('id', function (Issue $i) {
                return '#' . $i->id;
            })
            ->editColumn('title', function (Issue $i) {
                return '<a href="'.url('issue/'.$i->id).'"><u>' . $i->title.'</u></a>';
            })
            ->addColumn('pollution', function (Issue $i) {
                if ($i->pollution_id == 1) {
                    return '<i class="fa fa-wind"></i> Air';
                } else if ($i->pollution_id == 2) {
                    return '<i class="fa fa-volume-up"></i> Noise';
                } else if ($i->pollution_id == 3) {
                    return '<i class="fa fa-shopping-bag"></i> Soil';
                } else if ($i->pollution_id == 4) {
                    return '<i class="fa fa-meh"></i> Water';
                }
            })
            ->addColumn('sentiment', function (Issue $i) {
                if ($i->sentiment > 0) {
                    return '<i class="fa fa-smile"></i> '.$i->sentiment.'%';
                } else if ($i->sentiment < 0) {
                    return '<i class="fa fa-frown"></i> '.($i->sentiment*(-1)).'%';
                } else if ($i->sentiment == 0) {
                    return '<i class="fa fa-meh"></i> '.$i->sentiment.'%';
                }
            })
            ->addColumn('user', function (Issue $i) {
                return '<a href="'.url('admin/user/'.$i->user_id).'" target="_blank"><u>'.$i->user->name.'</u></a>';
            })
            ->editColumn('status', function (Issue $i) {
                if ($i->status == 0) {
                    return 'Removed';
                } else if ($i->status == 1) {
                    return 'Created';
                } else if ($i->status == 2) {
                    return 'Sent';
                } else if ($i->status == 3) {
                    return 'Viewed';
                } else if ($i->status == 4) {
                    return 'Work in progress';
                } else if ($i->status == 5) {
                    return 'Solved';
                }
            })
            ->addColumn('sign_count', function (Issue $i) {
                return $i->signs->count();
            })
            ->editColumn('created_at', function (Issue $i) {
                return $i->created_at->diffForHumans();
            })
            ->editColumn('change_status', function (Issue $i) {
                return '<form action="'.url('admin/issue').'" method="POST">
                <select class="mdb-select" name="status">
                <option value="0">Removed</option>
                <option value="1">Created</option>
                <option value="2">Sent</option>
                <option value="3">Viewed</option>
                <option value="4">Work in progress</option>
                <option value="5">Solved</option>
                </select>
                <input type="hidden" value="'.$i->id.'" name="id">
                <br>
                <input type="submit" value="Save">
                </form>';
            })
            ->rawColumns([
                'title',
                'pollution',
                'sentiment',
                'user',
                'change_status'
            ])
            ->toJson();
    }
}
