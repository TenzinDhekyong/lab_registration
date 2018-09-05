<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\project_dtls;
use Log;
class SubmitController extends Controller
{
    public function create()
    {
    	return view('test');
    }
// public function validate()

//    {
      // $this->validate(request(),[
       //   'projectname' => 'required|unique:storedata,projectname',
       // 'participant' => 'required|numeric',
      // 'category' => 'required',
     //      //     'filename.*' => 'required',
     //   'description' => 'required'
     // ]);
// }
    public function store()
    {
       // $this->validate(request(),[
       //   'projectname' => 'required|unique:storedata,projectname',
       // 'participant' => 'required|numeric',
      // 'category' => 'required',
     //      //     'filename.*' => 'required',
     //   'description' => 'required'
     // ]);

        //dd(request()->all());
         $storedata= new project_dtls;
        Log::info('in submitcontroller');
        $fileimages=request('filename');
        foreach($fileimages as $saveimage)
        {
            
            $storedata->image = $saveimage;
        }
        
    	$storedata->projectname = request('projectname');
    	$storedata->participant = request('participant');
    	$storedata->category = request('category');


    	//$storedata->image = request('filename');
    	$storedata->description = request('description');
        $storedata->save();
       // return view('feedback.success');
      return redirect()->back()->with('message','Thank you for submitting');
    }
}