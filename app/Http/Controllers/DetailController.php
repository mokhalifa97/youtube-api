<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google\Client;
use Google\Service\YouTube;

class DetailController extends Controller
{
    public function index(){
        # Configs
        $apiKey = config('app.youtube_api_key');
    
        # Initialize YouTube API client
        $client = new Client();
        $client->setDeveloperKey($apiKey);
        $service = new YouTube($client);
    
        # Example query just to make sure we can connect to the API
        $response = $service->videos->listVideos('snippet', ['id' => 'fYp0JXUH6lY']);
    
        # Output the response and passed to the view
        $video= $response->items[0]->snippet;

        return view('details',['video'=>$video]);
        }
}

//   fG08dcJ8xFE