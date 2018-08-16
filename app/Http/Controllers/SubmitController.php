<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubmitController extends Controller
{
    public function create()
    {
    	return view();
    }
    public function store()
    {
    	$storedata->projectname = request('projectname');
    	$storedata->participant = request('participant');
    	$storedata->category = request('category');
    	$storedata->photo = request('photo');
    	$storedata->description = request('description');

    }
}
