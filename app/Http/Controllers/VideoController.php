<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;
use App\Http\Requests\StoreVideoRequest;
use App\Jobs\ConvertVideoForDownloading;
use App\Jobs\ConvertVideoForStreaming;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
		$path = url('/public/images/test.mp3');
		$video = url('/public/images/test.mp4');
		
		$video = Video::create([
            'disk'          => 'videos_disk',
            'original_name' =>  "test.mp3",
            'path'          =>  $path,
            'title'         => "demo",
        ]);

        $this->dispatch(new ConvertVideoForDownloading($video));
        $this->dispatch(new ConvertVideoForStreaming($video));

        return response()->json([
            'id' => '1',
        ], 201);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVideoRequest $request)
    {
        //
		
		$path = url('/public/images/test.mp3');
		$video = url('/public/images/test.mp4');
		
		$video = Video::create([
            'disk'          => 'videos_disk',
            'original_name' => $request->video->getClientOriginalName() ?? "test.mp3",
            'path'          => $request->video->store('videos', 'videos_disk') ?? $path,
            'title'         => $request->title ?? "demo",
        ]);

        $this->dispatch(new ConvertVideoForDownloading($video));
        $this->dispatch(new ConvertVideoForStreaming($video));

        return response()->json([
            'id' => '1',
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        //
    }
}
