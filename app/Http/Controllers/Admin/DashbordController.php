<?php

namespace App\Http\Controllers\Admin;

use App\contact_info;
use App\gallery;
use App\menu;
use App\notice;
use App\page;
use App\slider;
use App\submenu;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class DashbordController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }

    public function menu(){
        $menu = menu::all();
        return view('admin.menu.menu',compact('menu'));
    }

    public function menu_save(Request $request){
        $page = new page();
        $page->title = $request->input('title');
        $page->save();

        $menu = new menu();
        $menu->title =$request->input('title');
        $menu->url = $page->id;
        $menu->save();
        Toastr::success('successfully done','Success');
        return redirect()->back();
    }

    public function menu_delete($id){
        $submenu = menu::find($id);
        $submenu->delete();

        Toastr::success('deleted successfully','Success');
        return redirect()->back();

    }

    public function submenu(){
        $menu = menu::all();
        return view('admin.menu.submenu',compact('menu'));
    }

    public function sub_menu_save(Request $request){
        $sub_menu = $request->input('title');
        $menuId = $request->input('menu');

        $page = new page();
        $page->title = $sub_menu;
        $page->save();

        $submenu = new submenu();
        $submenu->title = $sub_menu;
        $submenu->menu_id = $menuId;
        $submenu->url = $page->id;
        $submenu->save();
        Toastr::success('successfully done','Success');
        return redirect()->back();

    }

    public function submenu_delete($id){
        $submenu = submenu::find($id);
        $submenu->delete();

        Toastr::success('deleted successfully','Success');
        return redirect()->back();

    }



    public function contact_info(){
        $contact = contact_info::all()->first();
        return view('admin.contact_info',compact('contact'));
    }

    public function contact_info_save(Request $request,$id){

        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/assets/frontend/logo');
            $image->move($destinationPath, $name);
        }
        $contact = contact_info::find($id);
        $contact->mobile = $request->mobile;
        $contact->address = $request->address;
        $contact->email = $request->email;
        if (isset($name)){
            $contact->logo = $name;
        }
        $contact->update();


        Toastr::success('save successfully','Success');
        return view('admin.contact_info',compact('contact'));
    }


    public function gallery(){
        $image = gallery::all();
        return view('admin.gallery',compact('image'));
    }

    public function gallery_save(Request $request){

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/assets/frontend/gallery');
            $image->move($destinationPath, $name);
        }

        $image = new gallery();
        $image->image = $name;
        $image->save();


        Toastr::success('save successfully','Success');
        return redirect()->back();
    }


    public function gallery_delete($id){
        $image = gallery::find($id);
        $image->delete();

        Toastr::success('delete successfully','Success');
        return redirect()->back();
    }

    public function slider(){
        $image = slider::all();

        return view('admin.slider',compact('image'));
    }

    public function slider_save(Request $request){

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/assets/frontend/slider');
            $image->move($destinationPath, $name);
        }

        $image = new slider();
        $image->image = $name;
        $image->text = $request->text;
        $image->save();


        Toastr::success('save successfully','Success');
        return redirect()->back();
    }

    public function slider_delete($id){
        $image = slider::find($id);
        $image->delete();

        Toastr::success('delete successfully','Success');
        return redirect()->back();
    }

    public function notice(){
        $notice = notice::all();
        return view('admin.notice',compact('notice'));
    }




}
