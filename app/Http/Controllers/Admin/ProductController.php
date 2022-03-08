<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Types;
use Illuminate\Support\str;
use Image;
use File;


class productController extends Controller
{
    public function index(){
        $product = Product::all();
        return view('admin.product.productform',compact('product'));
    }


    public function create(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|unique:product|max:255',
        ],
    [
        'name.required' => 'กรุณาป้อนข้อมูลสินค้าก่อน',
        'name.unique' => 'มีชื่อสินค้านี้อยู่ในฐานข้อมูลแล้ว',
        'name.max' => 'ข้อมูลเกินกว่าที่จะจัดเก็บ'
    ]);
        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->id_types = $request->types;

        if($request->hasFile('image')){
            $filemname = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/admin/img/',$filemname);
            Image::make(public_path().'/admin/img/'.$filemname);
            $product->image = $filemname;
        }else{
            $product->image = 'NOPIC.jpg';
        }

        $product->save();
        return redirect()->route('productform')->with('success','บันทึกข้อมูลเรียบร้อย');

    }

    public function edit($id){
        $edit = Product::find($id);
        return view('admin.product.editproduct',compact('edit'))->with('edty',Types::all());;

    }

    public function update(Request $request,$id){
        $validatedData = $request->validate(
    [
        'name.required' => 'กรุณาป้อนข้อมูลสินค้าก่อน',
        'name.unique' => 'มีชื่อสินค้านี้อยู่ในฐานข้อมูลแล้ว',
        'name.max' => 'ข้อมูลเกินกว่าที่จะจัดเก็บ'
    ]);

        if($request->hasFile('image')){
            $product = Product::find($id);
            if($product->image != 'NOPIC.jpg'){
                File::delete(public_path().'/admin/img/'.$product->image);
            }
            $filemname = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/admin/img/',$filemname);
            Image::make(public_path().'/admin/img/'.$filemname);
            $product->image = $filemname;
            $product->name = $request->name;
            $product->price = $request->price;
            $product->id_types = $request->types;
        }else{
            $product = Product::find($id);
            $product->name = $request->name;
            $product->price = $request->price;
            $product->id_types = $request->types;
        }

        $product->save();
        return redirect()->route('productform')->with('success','แก้ไขข้อมูลเรียบร้อย');
    }

    public function delete($id){
        $delete = Product::find($id);
        if($delete->image != 'NOPIC.jpg'){
            File::delete(public_path().'/admin/img/'.$delete->image);
        }
        $delete->delete();
        return redirect()->route('productform')->with('success','ลบข้อมูลเรียบร้อย');
    }

    public function addproduct(){
        return view('admin.product.addproduct')->with('types',Types::all());
    }

    public function editproduct(){
         return view('admin.product.editproduct');
    }
}
