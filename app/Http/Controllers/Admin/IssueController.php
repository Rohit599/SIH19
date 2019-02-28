<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Issue;
use Yajra\Datatables\Datatables;

class IssueController extends Controller
{
    public function data()
    {
        return Datatables::of(Issue::query())->make(true);
    }
}
