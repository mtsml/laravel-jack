<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JackController extends Controller
{
    // static変数はMock代わり
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

    static public $video_list = [
        [
            "channel_id" => "UCutJqz56653xV2wwSvut_hQ",
            "video_id" => "mP6WW_BHsaA",
            "video_nm" => "全く料理できない男が想像だけで『ラタトゥイユ』作ってみた"
        ],
        [
            "channel_id" => "UCutJqz56653xV2wwSvut_hQ",
            "video_id" => "DWk2OTs9dCI",
            "video_nm" => "【検証】石を１万回蹴ったらどうなるのか？"
        ],
        [
            "channel_id" => "UCynIYcsBwTrwBIecconPN2A",
            "video_id" => "vEJn_euAwQ8",
            "video_nm" => "【一旦】りょうくん？大丈夫だよね？"
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
        $video_list = JackController::getVideoListById($id);
        return view('channel', compact('channel', 'video_list'));
    }

    public function video ($id) 
    {
        $video = JackController::getVideoById($id);
        return view('video', compact('video'));
    }

    public function edit ()
    {
        return view('edit');
    }

    public function update ()
    {
        return 'update';
    }

    // Modelができるまでの使い捨てなのでgetVideoIdと併せて汎用化などは行わない
    static public function getChannelById($id) {
        foreach (JackController::$channel_list as $channel) {
            if ($channel["channel_id"] == $id) {
                return $channel;
            }
        }
    }

    static public function getVideoById($id) {
        foreach (JackController::$video_list as $video) {
            if ($video["video_id"] == $id) {
                return $video;
            }
        }
    }

    static public function getVideoListById($id) {
        return array_filter(JackController::$video_list, function ($video) use($id) {
            return $video["channel_id"] == $id;
        });
    }
}