<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Facebook_post;

class FacebookController extends Controller
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
        $feeds = Facebook_post::paginate(5);
        return view('facebook',compact('feeds'));
    }

    public function synchronize(){
    
        $fb = new \Facebook\Facebook([
            'app_id' => \Config::get('facebook.FACEBOOK_APP_ID'),
            'app_secret' => \Config::get('facebook.FACEBOOK_APP_SECRET'),
            'default_graph_version' => \Config::get('facebook.FACEBOOK_GRAPH_VERSION'),
            'default_access_token' => \Config::get('facebook.FACEBOOK_USER_ACCESS_TOKEN')
        ]);              

        try {
            // Get the \Facebook\GraphNodes\GraphUser object for the current user.
            // If you provided a 'default_access_token', the '{access-token}' is optional.
            $response = $fb->get('/me/feed?fields=picture,id,message,created_time,name,link,with_tags');
        } catch(\Facebook\Exceptions\FacebookResponseException $e) {
            // When Graph returns an error
            echo 'Graph returned an error: ' . $e->getMessage()."<br>";
            echo 'Note : Currently we are in "Demo stage" so Please update default access token in env';
            exit;
        } catch(\Facebook\Exceptions\FacebookSDKException $e) {
            // When validation fails or other local issues
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }
          
        $feedsResponse = json_decode($response->getBody());
        $feeds = $feedsResponse->data;
        foreach($feeds as $feed){
            
            
            $newFeed = Facebook_post::firstOrNew(['post_id' => $feed->id]);
            $newFeed->post_id = $feed->id;
            $newFeed->message = $feed->message;
            $newFeed->link = isset($feed->link)?$feed->link:null;
            $newFeed->picture = isset($feed->picture)?$feed->picture:null;
            $newFeed->post_created_time = date("Y-m-d H:i:s",strtotime($feed->created_time));
            $newFeed->save();
        }

        return Redirect("facebook")->with('message', 'Feed successfully synchronized');
    }
}
