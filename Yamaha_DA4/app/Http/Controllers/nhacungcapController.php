<?php

namespace App\Http\Controllers;

use App\Models\nhacungcap;
use Illuminate\Http\Request;

class nhacungcapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $nhacungcap= nhacungcap::orderBy('id')->get();
        
        return view('admin.nhacungcap.index',compact('nhacungcap'))->with('i');
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   //select lấy 2 thông tin bên loại sp        
        $nhacungcap=nhacungcap::where('id')->get();
        return view('admin.nhacungcap.create')->with(compact('nhacungcap'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        nhacungcap::create($request->all());
        return  redirect()->route ('nhacungcap.index')->with('success','Đã thêm thành công.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\nhacungcap  $nhacungcap
     * @return \Illuminate\Http\Response
     */
    public function show(nhacungcap $nhacungcap)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\nhacungcap  $nhacungcap
     * @return \Illuminate\Http\Response
     */
    public function edit(nhacungcap $nhacungcap)
    {
        //$cates=category ::select('id','categoryname')->get();
        return view('admin.nhacungcap.edit')->with(compact('nhacungcap'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\nhacungcap  $nhacungcap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, nhacungcap $nhacungcap)
    {
        
        $nhacungcap->update($request->only('tenncc','email','diachi'));
        return redirect()->route('nhacungcap.index')->with('success','đã cập nhật 1 sản phẩm .');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\nhacungcap  $nhacungcap
     * @return \Illuminate\Http\Response
     */
    public function destroy(nhacungcap $nhacungcap)
    {
        $nhacungcap -> delete();
        return redirect()->route('nhacungcap.index')->with('success','xóa sản phẩm thành công');
    }
}
