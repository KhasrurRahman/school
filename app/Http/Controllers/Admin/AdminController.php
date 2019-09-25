<?php

namespace App\Http\Controllers\Admin;

use App\notice;
use App\teacher;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function notice_save(Request $request){

            $notice = new notice();
            $notice->title = $request->title;
            $notice->date = $request->date;
            $notice->content = $request->content;
            $notice->save();

        Toastr::success('successfully done','Success');
        return redirect()->back();
    }

    public function notice_delete($id){
        $notice = notice::find($id);
        $notice->delete();

        Toastr::success('Deleted successfully','Success');
        return redirect()->back();
    }

    public function teacher(){
        $teacher = teacher::all();

        return view('admin.teacher',compact('teacher'));
    }

    public function teacher_save(Request $request){

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/assets/frontend/teacher_image');
            $image->move($destinationPath, $name);
        }


        $teacher = new teacher();
        $teacher->name = $request->name;
        $teacher->designation = $request->designation;
        $teacher->image = $name;
        $teacher->save();

        Toastr::success('save successfully','Success');
        return redirect()->back();
    }

    public function teacher_delete($id){
        $teacher = teacher::find($id);
        $teacher->delete();

        Toastr::success('Deleted successfully','Success');
        return redirect()->back();
    }

}
