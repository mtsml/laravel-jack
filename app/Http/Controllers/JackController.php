<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JackController extends Controller
{
    static public $channel_list = [
        [
            "channel_id" => "UCutJqz56653xV2wwSvut_hQ",
            "channel_nm" => "東海オンエア"
        ],
        [
            "channel_id" => "UCynIYcsBwTrwBIecconPN2A",
            "channel_nm" => "東海オンエアの控え室"
        ]
    ];

    public function index () 
    {
        $channel_list = JackController::$channel_list;
        return view('index', compact('channel_list'));
    }

    public function channel ($id) 
    {
        $channel = JackController::getChannelById($id);
        return view('channel', compact('channel'));
    }

    public function edit ()
    {
        return view('edit');
    }

    public function update ()
    {
        return 'update';
    }

    static public function getChannelById($id) {
        foreach (JackController::$channel_list as $channel) {
            if ($channel["channel_id"] == $id) {
                return $channel;
            }
        }
    }
}
