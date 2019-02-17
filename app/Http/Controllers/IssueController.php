<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Issue;
use Validator;

class IssueController extends Controller
{
    public function store(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($request->all(), [
            'title' => 'required|max:100',
            'description' => 'required',
            'pollution_id' => 'required|numeric',
            'latitude' => 'required|between:-90,90',
            'longitude' => 'required|between:-180,180',
            'upload_file' => 'file|mimetypes:pdf',
        ]);
        if ($validator->fails()) {
            return redirect('issue/create')
                        ->withErrors($validator)
                        ->withInput();
        }
        $issue = new Issue;
        $issue->title = $input['title'];
        $issue->description = $input['description'];
        // $issue->user_id = Auth::id();
        $issue->pollution_id = $input['pollution_id'];
        $issue->latitude = $input['latitude'];
        $issue->longitude = $input['longitude'];
        if ($request->file('upload_file')->isValid()) {
            $uniqueFileName = uniqid() . $request->get('upload_file')->getClientOriginalName() . '.' . $request->get('upload_file')->getClientOriginalExtension();

            $request->get('upload_file')->move(public_path('files') . $uniqueFileName);
        }
        dd($uniqueFileName);
        $issue->document = $uniqueFileName;
        $issue->save();

        // return back()->with(['msg' =>'issue added successfully.', 'class' => 'alert-success']);
    }

    public function index()
    {
        $issues = issue::all();
        return view('society.home', ['issues'=>$issues]);
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
