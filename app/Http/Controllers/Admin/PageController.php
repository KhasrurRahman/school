<?php

namespace App\Http\Controllers\Admin;

use App\HomePage;
use App\page;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function single_page_content($id){
        $page = page::find($id);
        return view('admin.page.page_content',compact('page'));
    }



    public function page_content_save(Request $request,$id){

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/assets/frontend/banner_image');
            $image->move($destinationPath, $name);
        }


        $page = page::find($id);
        $page ->content = $request->page_content;
        if (isset($name)){
            $page ->image = $name;
        }
        $page ->update();

        Toastr::success('successfully done','Success');
        return redirect()->back();
    }

    public function home_page_content(){
        $hoem_page_content = HomePage::all()->first();
        return view('admin.homepage',compact('hoem_page_content'));
    }





    public function home_page_content_save(Request $request){

        if ($request->hasFile('left_image')) {
            $image1 = $request->file('left_image');
            $name1 = time().'.'.$image1->getClientOriginalExtension();
            $destinationPath = public_path('/assets/frontend/home_page_image');
            $image1->move($destinationPath, $name1);
        }

        if ($request->hasFile('right_image')) {
            $image2 = $request->file('right_image');
            $name2 = time().'.'.$image2->getClientOriginalExtension();
            $destinationPath = public_path('/assets/frontend/home_page_image');
            $image2->move($destinationPath, $name2);
        }

        if ($request->hasFile('buttom_image')) {
            $image3 = $request->file('buttom_image');
            $name3 = time().'.'.$image3->getClientOriginalExtension();
            $destinationPath = public_path('/assets/frontend/home_page_image');
            $image3->move($destinationPath, $name3);
        }

        $fron_page = HomePage::all()->first();
        $fron_page->youtube_link = $request->youtube_link;
        $fron_page->map = $request->map;
        $fron_page->left_link = $request->left_link;
        $fron_page->link = $request->link;
        $fron_page->student_life = $request->student_life;
        $fron_page->about = $request->about;
        if (isset($image3)){
            $fron_page->buttom_image = $name3;
        }


        if (isset($image1)){
            $fron_page->left_image = $name1;
        }

        if (isset($image2)){
            $fron_page->right_image = $name2;
        }
        $fron_page->update();

        Toastr::success('successfully done','Success');
        return redirect()->back();
    }


}
