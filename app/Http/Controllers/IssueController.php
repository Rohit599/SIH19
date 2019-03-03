<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Issue;
use Validator;
use Illuminate\Support\Facades\Input;
use Auth;
use App\Tag;
use App\IssueTag;
use \Sightengine\SightengineClient;
use App\User;
use App\IssueSign;
use DataTables;
 
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
            'location' =>'required'
        ]);
        
        $issue = new Issue;
        $issue->user_id = Auth::user()->id;
        $issue->title = $input['title'];
        $issue->description = $input['description'];
        // $issue->user_id = Auth::id();
        $issue->pollution_id = $input['pollution'];
        $issue->latitude = $input['latitude'];
        $issue->longitude = $input['longitude'];
        $issue->address = $input['location'];
        $sc = sentimentScore(strip_tags($input['description']))*100;
        $issue->sentiment = round($sc, 2);
        $issue->status = 1;
        $file = Input::file('upload_file');
        $image = Input::file('upload_pic');
        
        if ($file != null) {
            $file_name = uniqid().$file->getClientOriginalName();
            $file_size = round($file->getSize() / 1024);
            $file_ex = $file->getClientOriginalExtension();
            $file_mime = $file->getMimeType();

            if (!in_array($file_ex, array('pdf'))) {
                return back()->with(['msg' => 'Invalid filetype. Please upload only pdfs.' , 'class' => 'alert-danger']);
            }

            $newname = $file_name;
            $issue->document = $newname;
            $file->move('uploads', $newname);
        }
        if ($image != null) {
            $client = new SightengineClient('129557778', 'RFYJfHR5odMZRU6ewtjx');
            $output = $client->check(['nudity','wad','offensive','scam'])->set_file($image);
            if ($output->nudity->safe < 0.75) {
                return back()->with(['msg' => 'Do not upload nude pics', 'class' => 'alert-danger']);
            }
            $file_name = uniqid().$image->getClientOriginalName();
            $file_size = round($image->getSize() / 1024);
            $file_ex = $image->getClientOriginalExtension();
            $file_mime = $image->getMimeType();

            if (!in_array($file_ex, array('jpg','png','jpeg'))) {
                return back()->with(['msg' => 'Invalid file type. Upload files in jpg,jpeg,png format only', 'class' => 'alert-danger']);
            }

            $newname = $file_name;
            $issue->image = $newname;
            $image->move('uploads/images', $newname);
        }
        $issue->save();
        $tags = generateTag(strip_tags($input['description']));
        foreach ($tags as $t) {
            $c = Tag::select('id')->where('name', $t)->first();
            if ($c == null) {
                $tag = new Tag;
                $tag->name = $t;
                $tag->save();
                $t_id = $tag->id;
            } else {
                $t_id = $c->id;
            }

            $it = new IssueTag;
            $it->issue_id = $issue->id;
            $it->tag_id = $t_id;
            $it->save();
        }
        return back()->with(['msg' =>'Issue added successfully. It will be posted as soon as the admin approves it.', 'class' => 'alert-success']);
        ;

        // return back()->with(['msg' =>'issue added successfully.', 'class' => 'alert-success']);
    }

    // public function index()
    // {
    //     $issues = Issue::all();
    //     return view('issues', ['issues'=>$issues]);
    // }

    public function edit($id)
    {
        $issue =Issue::find($id);
        if (!is_null($issue)) {
            return view('society.edit-issue', ['issue' => $issue]);
        }
    }

    public function update(Request $request, $id)
    {
        $issue =Issue::find($id);
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
        $issue =Issue::find($id);
        if (!is_null($issue)) {
            $issue->delete();
            return back()->with(['msg' =>'issue deleted successfully.', 'class' => 'alert-success']);
        }
    }

    public function sign(Request $request)
    {
        if(Auth()->user()->name == $request->input('name')) {
            $is = new IssueSign;
            $is->issue_id = $request->input('id');
            $is->user_id = Auth::id();
            $is->save();
            return back()->with(['msg' => 'You had successfully signed this petition', 'class' => 'alert-success']);
        } else {
            return back()->with(['msg' => 'You had entered incorrect name', 'class' => 'alert-danger']);
        }
    }
}
