<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestDetails;
use Google\Client;
use Google\Service\YouTube;

class DetailController extends Controller
{

        public function save(RequestDetails $request){
        $video_id=$request->video_id;

        # Configs
        $apiKey = config('app.youtube_api_key');
    
        # Initialize YouTube API client
        $client = new Client();
        $client->setDeveloperKey($apiKey);
        $service = new YouTube($client);
    
        # Example query just to make sure we can connect to the API
        $response = $service->videos->listVideos('snippet', ['id' => $video_id]);
    
        # Output the response and passed to the view
        $video= $response->items[0]->snippet;

        return view('details',['video'=>$video , 'id'=>$video_id]);
        }
}

