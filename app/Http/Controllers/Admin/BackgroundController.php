<?php

namespace App\Http\Controllers\Admin;

use App\Background;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\str;
use Image;
use File;

class BackgroundController extends Controller
{
    public function index(){
        $background = Background::all();
        return view('admin.background.backgroundform',compact('background'));
    }

    public function addbackground(){
        return view('admin.background.addbackground');
    }

    public function editbackground(){
        return view('admin.background.editbackground');
    }

    public function create(Request $request){
        $background = new Background;
        $background->name = $request->name;

        if($request->hasFile('image')){
            $filemname = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/admin/img/',$filemname);
            Image::make(public_path().'/admin/img/'.$filemname);
            $background->image = $filemname;
            
        }else{
            $background->image = 'NOPIC.jpg';
        }

        $background->save();
        return redirect()->route('background')->with('success','บันทึกข้อมูลเรียบร้อย');

    }

    public function edit($id){
        $edit = Background::find($id);
        return view('admin.background.editbackground',compact('edit'));

    }

    public function update(Request $request,$id){
        if($request->hasFile('image')){
            $background = Background::find($id);
            if($background->image != 'NOPIC.jpg'){
                File::delete(public_path().'/admin/img/'.$background->image);
            }
            $filemname = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/admin/img/',$filemname);
            Image::make(public_path().'/admin/img/'.$filemname);
            $background->image = $filemname;
            $background->name = $request->name;
            
            
        }else{
            $background = Background::find($id);
            $background->name = $request->name;
            
            
        }

        $background->save();
        return redirect()->route('background')->with('success','แก้ไขข้อมูลเรียบร้อย');
    }

    public function delete($id){
        $delete = Background::find($id);
        if($delete->image != 'NOPIC.jpg'){
            File::delete(public_path().'/admin/img/'.$delete->image);
        }
        $delete->delete();
        return redirect()->route('background')->with('success','ลบข้อมูลเรียบร้อย');
    }
}