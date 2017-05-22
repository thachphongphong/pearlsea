<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\ContactDetail;
use App\Gallery;
use App\Menu;
use App\PageTitle;

use View;
use DB;
use Config;

class GalleryController extends Controller
{
   public function load($language)
    {
       $language_id = 1;
        if ($language == 'vi') {
            $language_id = 1;
            $constants = Config::get('constants.vi');
        } else {
            $language_id = 2;
            $constants = Config::get('constants.en');
        }
        $menus = Menu::with('submenus')
            ->where('language_id', $language_id)
            ->orderBy('order', 'asc')
            ->get();

        $title = PageTitle::where('language_id', $language_id)->where('page_id', 4)
            ->orderByRaw("RAND()")->first();

       $images = Gallery::get();

        $contact = ContactDetail::where('language_id', $language_id)->first();

        return View::make('gallery', array('constants' => $constants, 'menus' => $menus, 'contact' => $contact, 'title' =>$title, 'images' => $images));
    }
}
