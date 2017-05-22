<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use View;
use Log;
use Response;
use Request;
use Carbon\Carbon;

use App\Gallery;

class GalleryController extends Controller
{
	function load(\Illuminate\Http\Request $request)
    {
        Log::info('Showing gallery');
        $images = Gallery::get();
        if (Request::ajax()) {
            return Response::json(View::make('auth.admin.gallery', array('images' => $images))->render());
        }
    }

    public function add(\Illuminate\Http\Request $request)
    {
        if (Request::ajax()) {

        }
        return Response::json(['success' => false, 'data' => 'Fail']);
    }

    function delete(\Illuminate\Http\Request $request)
    {
    	$id = $request->input('id');
       
    }
}
