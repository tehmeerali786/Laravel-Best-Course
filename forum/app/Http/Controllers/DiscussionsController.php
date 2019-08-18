<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Reply;

use App\Discussion;

use App\User;

use Auth;

use Session;

use Notification;

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

            return view('discussions.show')->with('d', $discussion );



    }


    public function reply($id)

    {

        $d = Discussion::find($id);

        

        $reply = Reply::create([


            'user_id' => Auth::id(),

            'discussion_id' => $id,

            'content' => request()->reply,

        ]);


        $watchers = array();

        foreach($d->watchers as $watcher):

            array_push($watchers, User::find($watcher->user_id));



        endforeach;


        Notification::send($watchers, new \App\Notifications\NewReplyAdded($d));




        Session::flash('success', 'Replied to discussion. ');


        return redirect()->back();
    }


}
