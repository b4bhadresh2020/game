<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Twitter_post;
use Twitter;

class TwitterController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $feeds = Twitter_post::paginate(5);
      return view('twitter',compact('feeds'));
    }

    public function synchronize(){
      $feeds = Twitter::getUserTimeline(['count' => 10, 'format' => 'array']);
      foreach($feeds as $feed){

          $newFeed = Twitter_post::firstOrNew(['post_id' => $feed['id']]);
          $newFeed->post_id = $feed['id'];
          $newFeed->message = $feed['text'];
          $newFeed->link = null;
          $newFeed->picture = isset($feed['entities']['media'][0]['media_url'])?$feed['entities']['media'][0]['media_url']:null;
          $newFeed->post_created_time = date("Y-m-d H:i:s",strtotime($feed['created_at']));
          $newFeed->save();
      }

      return Redirect("twitter")->with('message', 'Feed successfully synchronized');
    }
}
