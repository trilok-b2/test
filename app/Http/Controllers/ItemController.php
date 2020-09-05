<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use Yajra\Datatables\Datatables;
use FFMpeg;
use FFMpeg\Coordinate\Dimension;
use FFMpeg\Format\Video\X264;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Filesystem\Filesystem;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;
use ProtoneMedia\LaravelFFMpeg\Support\ServiceProvide;

class ItemController extends Controller
{
    //
	public function index(Request $request)
	{
		$items = Item::all();
		if($request->ajax())
		{
			$items = Item::latest()->get();
			return Datatables::of($items)
			->addIndexColumn()
			->addColumn('action',function($row){
				$btn = '<a href="javascript:void(0)" data-toggle="tooltip" data-id="'.$row->id.'" data-orignal-title="Edit" class="edit btn btn-primary btn-sm editItem"> Edit </a>&nbsp;';
				$btn .= '<a href="javascript:void(0)" data-toggle="tooltip" data-id="'.$row->id.'" data-orignal-title="Delete" class="edit btn btn-danger btn-sm deleteItem"> Delete </a>';
				return $btn;
			})
			->rawColumns(['action'])
			->make(true);
		}
		return view('itemAjax',compact('items'));
	}
	public function store(Request $request)
	{
		// echo "<pre>";
		// print_r($_POST);
		// exit;
		 Item::updateOrCreate(['id' => $request->Item_id],
                ['name' => $request->name, 'description' => $request->description]);        
   
        return response()->json(['success'=>'Item saved successfully.']);
	}
	public function edit(Request $request,$id)
	{
		$item = Item::find($id);
		return response()->json($item);
	}
	public function destroy(Request $request,$id)
	{
		Item::find($id)->delete();
		return response()->json(['success'=>'Item Deleted Successfully']);
	}
	public function video_show(Request $request)
	{
		$path = url('/public/images/test.mp3');
		$video = url('/public/images/test.mp4');
		
		// $ffmpeg = FFMpeg\FFMpeg::create(array(
				// 'ffmpeg.binaries'  => '/opt/local/ffmpeg/bin/ffmpeg',
				// 'ffprobe.binaries' => '/opt/local/ffmpeg/bin/ffprobe',
				// 'timeout'          => 3600, // The timeout for the underlying process
				// 'ffmpeg.threads'   => 12,   // The number of threads that FFMpeg should use
			// ), $logger);
		FFMpeg\FFMpeg::open($video)
				->export()
				->onProgress(function ($percentage, $remaining, $rate) {
					echo "{$remaining} seconds left at rate: {$rate}";
				});
	}
	
	
	
	
	
	//////////////////////////////////////////////////////
}
