<?php

namespace App\Http\Controllers;

use App\Models\loaitintuc;

use Illuminate\Http\Request;

class loaitintucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $loaitintuc= loaitintuc::orderBy('id')->get();
        
        return view('admin.loaitintuc.index',compact('loaitintuc'))->with('i');
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   //select lấy 2 thông tin bên loại sp        
       // $loaitintuc=loaitintuc::where('id')->get();
        return view('admin.loaitintuc.create')->with(compact('loaitintuc'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        loaitintuc::create($request->all());
        return  redirect()->route ('loaitintuc.index')->with('success','Đã thêm thành công.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\loaitintuc  $loaitintuc
     * @return \Illuminate\Http\Response
     */
    public function show(loaitintuc $loaitintuc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\loaitintuc  $loaitintuc
     * @return \Illuminate\Http\Response
     */
    public function edit(loaitintuc $loaitintuc)
    {
        //$cates=category ::select('id','categoryname')->get();
        return view('admin.loaitintuc.edit')->with(compact('loaitintuc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\loaitintuc  $loaitintuc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, loaitintuc $loaitintuc)
    {
        
        $loaitintuc->update($request->only('tenloai','ghichu'));
        return redirect()->route('loaitintuc.index')->with('success','đã cập nhật tin tức .');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\loaitintuc  $loaitintuc
     * @return \Illuminate\Http\Response
     */
    public function destroy(loaitintuc $loaitintuc)
    {
        $loaitintuc -> delete();
        return redirect()->route('loaitintuc.index')->with('success','xóa sản phẩm thành công');
    }
}
