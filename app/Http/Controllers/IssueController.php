<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Issue;
use Validator;
use Illuminate\Support\Facades\Input;
use Auth;

class IssueController extends Controller
{
    public function store(Request $request)
    {
        $input = $request->all();

        $request->validate([
            'title' => 'required|max:100',
            'description' => 'required',
            'pollution' => 'required|numeric',
            'latitude' => 'required|between:-90,90',
            'longitude' => 'required|between:-180,180',
        ]);
        
        $issue = new Issue;
        $issue->user_id = Auth::user()->id;
        $issue->title = $input['title'];
        $issue->description = $input['description'];
        // $issue->user_id = Auth::id();
        $issue->pollution_id = $input['pollution'];
        $issue->latitude = $input['latitude'];
        $issue->longitude = $input['longitude'];
        $issue->sentiment = 5;
        $issue->status = 1;
        $file = Input::file('upload_file');
        if ($file != null) {
            $file_name = uniqid().$file->getClientOriginalName();
            $file_size = round($file->getSize() / 1024);
            $file_ex = $file->getClientOriginalExtension();
            $file_mime = $file->getMimeType();

            if (!in_array($file_ex, array('pdf'))) {
                return back()->withErrors('Invalid filetype. Please upload only pdfs.');
            }

            $newname = $file_name;
            $issue->document = $newname;
            $file->move('uploads', $newname);
        }
        $issue->save();
        return back();

        // return back()->with(['msg' =>'issue added successfully.', 'class' => 'alert-success']);
    }

    public function index()
    {
        $issues = Issue::all();
        return view('home', ['issues'=>$issues]);
    }

    public function edit($id)
    {
        $issue =issue::find($id);
        if (!is_null($issue)) {
            return view('society.edit-issue', ['issue' => $issue]);
        }
    }

    public function update(Request $request, $id)
    {
        $issue =issue::find($id);
        $issue->name = $request->title;
        $issue->description = $request->description;
        $issue->society_id = Auth::id();
        $issue->winner1 = $request->winner1_amount;
        if (!is_null($request->winner2_amount)) {
            $issue->winner2 = $request->winner2_amount;
        }
        $issue->contact_name = $request->contact_name;
        $issue->contact_no = $request->contact_number;
        if (is_null($request->is_active)) {
            $issue->is_active = 0;
        } else {
            $issue->is_active = 1;
        }
        $issue->save();
        return back()->with(['msg' =>'issue edited successfully.', 'class' => 'alert-success']);
    }

    public function delete($id)
    {
        $issue =issue::find($id);
        if (!is_null($issue)) {
            $issue->delete();
            return back()->with(['msg' =>'issue deleted successfully.', 'class' => 'alert-success']);
        }
    }
}
