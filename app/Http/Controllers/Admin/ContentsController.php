<?php

namespace App\Http\Controllers\Admin;

use App\Contents;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\str;
use Image;
use File;

class ContentsController extends Controller
{
    public function index(){
        $contents = Contents::all();
        return view('admin.contents.contentsform',compact('contents'));
    }

    public function addcontents(){
        return view('admin.contents.addcontents');
    }

    public function editcontents(){
        return view('admin.contents.editcontents');
    }

    public function create(Request $request){
        $contents = new Contents;
        $contents->text = $request->text;

        if($request->hasFile('image')){
            $filemname = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/admin/img/',$filemname);
            Image::make(public_path().'/admin/img/'.$filemname);
            $contents->image = $filemname;
            
        }else{
            $contents->image = 'NOPIC.jpg';
        }

        $contents->save();
        return redirect()->route('contents')->with('success','บันทึกข้อมูลเรียบร้อย');

    }

    public function edit($id){
        $edit = Contents::find($id);
        return view('admin.contents.editcontents',compact('edit'));

    }

    public function update(Request $request,$id){
        if($request->hasFile('image')){
            $contents = Contents::find($id);
            if($contents->image != 'NOPIC.jpg'){
                File::delete(public_path().'/admin/img/'.$contents->image);
            }
            $filemname = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/admin/img/',$filemname);
            Image::make(public_path().'/admin/img/'.$filemname);
            $contents->image = $filemname;
            $contents->text = $request->text;
            
            
        }else{
            $contents = Contents::find($id);
            $contents->text = $request->text;
            
            
        }

        $contents->save();
        return redirect()->route('contents')->with('success','แก้ไขข้อมูลเรียบร้อย');

    }

}
