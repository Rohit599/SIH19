<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DataTables;
use App\User;

class UserController extends Controller
{
    public function data()
    {
        $model = User::query();

        return DataTables::eloquent($model)
            ->editColumn('id', function (User $u) {
                return '#' . $u->id;
            })
            ->editColumn('name', function (User $u) {
                return '<a href="'.url('user/'.$u->id).'"><u>' . $u->name.'</u></a>';
            })
            ->editColumn('is_active', function (User $u) {
                if ($u->is_active == 1) {
                    return 'Active';
                } else {
                    return 'Blocked';
                }
            })
            ->editColumn('created_at', function (User $u) {
                return $u->created_at->diffForHumans();
            })
            ->editColumn('change_status', function (User $u) {
                return '<form action="'.url('admin/user').'" method="POST">
                <select class="mdb-select" name="status">
                <option value="1">Active</option>
                <option value="0">Block</option>
                </select>
                <input type="hidden" value="'.$u->id.'" name="id">
                <br>
                <input type="submit" value="Save">
                </form>';
            })
            ->rawColumns([
            	'name',
                'change_status'
            ])
            ->toJson();
    }
}
