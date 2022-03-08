<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Types;
use Illuminate\Support\str;
use File;
use Mockery\Matcher\Type;

class TypesController extends Controller
{
    public function index(){
        $types = Types::all();
        return view('admin.types.typesform',compact('types'));
    }

    public function showtypes(){
        return view('admin.types.typesform');
    }

    public function create(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|unique:types|max:255',
        ],
    [
        'name.required' => 'กรุณาป้อนข้อมูลประเภทสินค้าก่อน',
        'name.unique' => 'มีชื่อประเภทสินค้านี้อยู่ในฐานข้อมูลแล้ว',
        'name.max' => 'ข้อมูลเกินกว่าที่จะจัดเก็บ'
    ]);
        $types = new Types;
        $types->name = $request->name;
        $types->save();
        return redirect('/TypesForm')->with('success','บันทึกข้อมูลเรียบร้อย');

    }

    public function edit($id){
        $edit = types::find($id);
        return view('admin.types.edittypes',compact('edit'));
    }

    public function update(Request $request,$id){
        $validatedData = $request->validate([
            'name' => 'required|unique:types|max:255',
        ],
    [
        'name.required' => 'กรุณาป้อนข้อมูลประเภทสินค้าก่อน',
        'name.unique' => 'มีชื่อประเภทสินค้านี้อยู่ในฐานข้อมูลแล้ว',
        'name.max' => 'ข้อมูลเกินกว่าที่จะจัดเก็บ'
    ]);
        $types = Types::find($id);
        $types->name = $request->name;
        $types->save();
        return redirect('/TypesForm')->with('success','แก้ไขอมูลเรียบร้อย');

    }

    public function delete($id){
        $delete = Types::find($id);

        $delete->delete();
        return redirect('/TypesForm')->with('success','ลบข้อมูลเรียบร้อย');
    }

    public function addtypes(){
        return view('admin.types.addtypes');
    }

    public function edittypes(){
        return view('admin.types.edittypes');
    }

    
}
