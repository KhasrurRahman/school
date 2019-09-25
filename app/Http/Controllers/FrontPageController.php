<?php

namespace App\Http\Controllers;

use App\contact_info;
use App\gallery;
use App\HomePage;
use App\notice;
use App\page;
use App\slider;
use App\teacher;
use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    public function home()
    {
        $slider = slider::all();
        $hoem_page_content = HomePage::all()->first();
        $notice = notice::all();
        $limit_notice = notice::all()->take(2);
        return view('welcome',compact('slider','hoem_page_content','notice','limit_notice'));
    }
    public function Single_page_view($id){
        $page = page::find($id);
        return view('layouts.frontend.single_page_view',compact('page'));
    }

public function gallery(){
        $gallery = gallery::all();
        return view('gallery',compact('gallery'));
}

public function notice(){
        $notice = notice::all();
        return view('notice',compact('notice'));
}

public function notice_single($id){
        $notice = notice::find($id);
        return view('notice_single',compact('notice'));
}


public function teacher(){
        $teacher = teacher::all();
        return view('teacher',compact('teacher'));
}

public function contact(){
        $contact = contact_info::all()->first();
        $map = HomePage::all()->first();
        return view('contact',compact('contact','map'));
}


}
