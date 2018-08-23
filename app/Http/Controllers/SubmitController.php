<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubmitController extends Controller
{
    public function create()
    {
    	return view();
    }
    public function store(Request $request)
    {
    	$this->validate($request,[
    		'projectname' => 'required',
    		'participant'  => 'required',
    		'category'  => 'required',
    		'photo'  => 'required',
    		'description' => 'required'
    	]);
    $post= new Submit;
    $post->projectname = $request->input('projectname');
    $post->participant = $request->input('participant');
    $post->category = $request->input('category');
    $post->photo = $request->input('photo');
    $post->description = $request->input('description');
    $post->save();

    return redirect('/storedata')->with('success','form submitted');

    }
}
