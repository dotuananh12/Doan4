<?php

namespace App\Http\Controllers;

use App\Models\khachhang;
use Illuminate\Http\Request;

class khachhangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $khachhang= khachhang::orderBy('id')->get(); 
        return view('admin.khachhang.index',compact('khachhang'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $khachhang=khachhang::where('id')->get();
        return view('admin.khachhang.create')->with(compact('khachhang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        khachhang::create($request->all());
        return  redirect()->route ('khachhang.index')->with('success','Đã thêm thành công.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\khachhang  $khachhang
     * @return \Illuminate\Http\Response
     */
    public function show(khachhang $khachhang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\khachhang  $khachhang
     * @return \Illuminate\Http\Response
     */
    public function edit(khachhang $khachhang)
    {
        return view('admin.khachhang.edit')->with(compact('khachhang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\khachhang  $khachhang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, khachhang $khachhang)
    {
        $khachhang->update($request->only('tenkh','password','email','phone'));
        return redirect()->route('khachhang.index')->with('success','đã cập nhật 1 khách hàng .');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\khachhang  $khachhang
     * @return \Illuminate\Http\Response
     */
    public function destroy(khachhang $khachhang)
    {
        $khachhang -> delete();
        return redirect()->route('khachhang.index')->with('success','xóa sản phẩm thành công');
    }
}
