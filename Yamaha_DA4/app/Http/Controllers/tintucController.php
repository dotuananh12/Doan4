<?php

namespace App\Http\Controllers;

use App\Models\tintuc;
use App\Models\loaitintuc;

use Illuminate\Http\Request;

class tintucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $tintuc= tintuc::orderBy('id')->get();
        
        return view('admin.tintuc.index',compact('tintuc'))->with('i');
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   //select lấy 2 thông tin bên loại sp        
        $loaitintuc=loaitintuc ::select('id','tenloai')->get();  
        $tintuc=tintuc::where('id')->get();
        return view('admin.tintuc.create')->with(compact('tintuc','loaitintuc'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        tintuc::create($request->all());
        return  redirect()->route ('tintuc.index')->with('success','Đã thêm thành công.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tintuc  $tintuc
     * @return \Illuminate\Http\Response
     */
    public function show(tintuc $tintuc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tintuc  $tintuc
     * @return \Illuminate\Http\Response
     */
    public function edit(tintuc $tintuc)
    {
        //$cates=category ::select('id','categoryname')->get()
        $loaitintuc=loaitintuc ::select('id','tenloai')->get();  ;
        return view('admin.tintuc.edit')->with(compact('tintuc','loaitintuc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tintuc  $tintuc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tintuc $tintuc)
    {
        
        $tintuc->update($request->only('tentintuc','noidung','img','loaitintuc','ngaythem'));
        return redirect()->route('tintuc.index')->with('success','đã cập nhật tin tức .');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tintuc  $tintuc
     * @return \Illuminate\Http\Response
     */
    public function destroy(tintuc $tintuc)
    {
        $tintuc -> delete();
        return redirect()->route('tintuc.index')->with('success','xóa sản phẩm thành công');
    }
}
