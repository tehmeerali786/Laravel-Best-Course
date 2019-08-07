<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Discussion;

use Auth;

use Session;

class DiscussionsController extends Controller
{
    //

    public function create() {

    	return view('discuss');

    }


    public function store() {


    	

    	$this-> validate(request(), [


    			'channel_id' => 'required',

    			'content' => 'required',

    			'title' => 'required',

    			



    	]);

    	$discussion = Discussion::create([


    		'title' => request()->title,

    		'content' => request()->content,

    		'channel_id' => request()->channel_id,

    		'user_id' => Auth::id(), 

            'slug' => str_slug(request()->title),

    		

    	]);

    	Session::flash('success', 'Discussion successfully created. ');


    	return redirect()->route('discussion', ['slug' => $discussion->slug]);

    }


    public function show($slug) {


            $discussion = Discussion::where('slug', $slug)->first();

            return view('discussions.show')->with('discussion', $discussion );



    }
}
