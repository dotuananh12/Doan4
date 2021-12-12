<?php

namespace App\Http\Controllers;

use App\Models\loaixe;

use Illuminate\Http\Request;

class loaixeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $loaixe= loaixe::orderBy('id')->get();
        
        return view('admin.loaixe.index',compact('loaixe'))->with('i');
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   //select lấy 2 thông tin bên loại sp        
        $loaixe=loaixe::where('id')->get();
        return view('admin.loaixe.create')->with(compact('loaixe'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        loaixe::create($request->all());
        return  redirect()->route ('loaixe.index')->with('success','Đã thêm thành công.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\loaixe  $loaixe
     * @return \Illuminate\Http\Response
     */
    public function show(loaixe $loaixe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\loaixe  $loaixe
     * @return \Illuminate\Http\Response
     */
    public function edit(loaixe $loaixe)
    {
        //$cates=category ::select('id','categoryname')->get();
        return view('admin.loaixe.edit')->with(compact('loaixe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\loaixe  $loaixe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, loaixe $loaixe)
    {
        
        $loaixe->update($request->only('tenloai','mota','ghichu'));
        return redirect()->route('loaixe.index')->with('success','đã cập nhật 1 sản phẩm .');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\loaixe  $loaixe
     * @return \Illuminate\Http\Response
     */
    public function destroy(loaixe $loaixe)
    {
        $loaixe -> delete();
        return redirect()->route('loaixe.index')->with('success','xóa sản phẩm thành công');
    }
}
