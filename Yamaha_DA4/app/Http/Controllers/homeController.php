<?php

namespace App\Http\Controllers;
use App\Models\tintuc;
use App\Models\sanpham;
use App\Models\lienhe;
use App\Models\khachhang;
use Illuminate\Http\Request;

class homeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $xeso=sanpham::orderBy('id','desc')->take(6)->where('maloai', 1)->get();
        $xega=sanpham::orderBy('id','desc')->take(6)->where('maloai', 2)->get();
        $xethethao=sanpham::orderBy('id','desc')->take(6)->where('maloai', 3)->get();
        return view("customer.trangchu",compact('xeso','xega','xethethao'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function xemchitiet(Request $request)
    {
       $xem =sanpham::where('id',$request->id)->first();
       return view("customer.xemchitiet",compact('xem'));
    }
    public function search(Request $request)
    {
        $keywords=$request->Search;
        $search=sanpham::where('tenxe','like','%'.$keywords.'%')->get();
        return view("customer.search",with(compact('search')));
    }
    public function tintuc(Request $request)
    {
        $tin=tintuc::orderBy('id','asc')->take(3)->get();
        $tin1=tintuc::orderBy('id','desc')->take(3)->where('loaitintuc', 3)->get();
        $tin2=tintuc::orderBy('id','desc')->take(3)->where('loaitintuc', 1)->get();
       return view("customer.tintuc",compact('tin','tin1','tin2'));
    }
    public function xeso()
    {
        $xeso=sanpham::orderBy('id','desc')->take(6)->where('maloai', 1)->get();      
        return view("customer.xeso",compact('xeso'));
    }
    public function xega()
    {
        $xega=sanpham::orderBy('id','desc')->take(6)->where('maloai', 2)->get();;      
        return view("customer.xega",compact('xega'));
    }
    public function xethethao()
    {
        $xethethao=sanpham::orderBy('id','desc')->take(6)->where('maloai', 3)->get(); 
        return view("customer.xethethao",compact('xethethao'));
    }
    public function xemtintuc(Request $request)
    {
        $xemtintuc =tintuc::where('id',$request->id)->get();    
        $tin1=tintuc::orderBy('id','desc')->take(3)->where('loaitintuc', 3)->get();
        $tin2=tintuc::orderBy('id','desc')->take(3)->where('loaitintuc', 1)->get();
        return view("customer.xemtintuc",compact('tin1','tin2','xemtintuc'));
    }
    public function lienhe(Request $request)
    {
        $lienhe =khachhang::where('id',$request->id)->get();    
        return view("customer.lienhe",compact('lienhe'));
    }
    // public function lienhe(Request $request)
    // {   
    //     return view("customer.lienhe");
    // }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        lienhe::create($request->all());
        return view("customer.lienhethanhcong");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sanpham  $sanpham
     * @return \Illuminate\Http\Response
     */
    public function show(sanpham $sanpham)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sanpham  $sanpham
     * @return \Illuminate\Http\Response
     */
    public function edit(sanpham $sanpham)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sanpham  $sanpham
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sanpham $sanpham)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sanpham  $sanpham
     * @return \Illuminate\Http\Response
     */
    public function destroy(sanpham $sanpham)
    {
        //
    }
}
