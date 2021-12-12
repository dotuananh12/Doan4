<?php

namespace App\Http\Controllers;

use App\Models\sanpham;
use App\Models\loaixe;
use App\Models\tinhtrang;
use Illuminate\Http\Request;

class ADsanphamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $sanpham= sanpham::orderBy('id')->get(); 
        return view('admin.sanpham.index',compact('sanpham'))->with('i');
        //
    }
    public function xem(Request $request)
    {
       $xem =sanpham::where('id',$request->id)->first();
       return view("admin.sanpham.xem",compact('xem'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function postfile(Request $request){
    //     if($request->hasFile('fileToUpload')){
    //         $file=$request->file('fileToUpload');
    //         $file->move_uploaded_file('image');
    //     }
    // }
    // public function upload(Request $request)
    // {
    //     // dd($request->all());
    //     $target_dir = "image/";
    //     $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    //     $uploadOk = 1;
    //     $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    //     // Check if image file is a actual image or fake image
    //     if (isset($_POST["submit"])) {
    //         $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    //         if ($check !== false) {
    //             echo "File is an image - " . $check["mime"] . ".";
    //             $uploadOk = 1;
    //         } else {
    //             echo "File is not an image.";
    //             $uploadOk = 0;
    //         }
    //     }

    //     // Check if file already exists
    //     if (file_exists($target_file)) {
    //         echo "Sorry, file already exists.";
    //         $uploadOk = 0;
    //     }

    //     // Check file size
    //     if ($_FILES["fileToUpload"]["size"] > 500000) {
    //         echo "Sorry, your file is too large.";
    //         $uploadOk = 0;
    //     }

    //     // Allow certain file formats
    //     if (
    //         $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    //         && $imageFileType != "gif"
    //     ) {
    //         echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    //         $uploadOk = 0;
    //     }

    //     // Check if $uploadOk is set to 0 by an error
    //     if ($uploadOk == 0) {
    //         echo "Sorry, your file was not uploaded.";
    //         // if everything is ok, try to upload file
    //     } else {
    //         if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    //             echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
    //         } else {
    //             echo "Sorry, there was an error uploading your file.";
    //         }
    //     }
    //     return  redirect()->route ('sanpham.index')->with('success','Đã thêm thành công.');

    // }
    public function create()
    {
        $tinhtrang=tinhtrang ::select('id','status')->get();  
        $loaixe=loaixe ::select('id','tenloai')->get();  
        $sanpham=sanpham::where('id')->orderBy('id','DESC')->get();
        return view('admin.sanpham.create')->with(compact('sanpham','loaixe','tinhtrang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        sanpham::create($request->all());
        return  redirect()->route ('sanpham.index')->with('success','Đã thêm thành công.');
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
        $tinhtrang=tinhtrang ::select('id','status')->get();  
        $loaixe=loaixe ::select('id','tenloai')->get();  
        return view('admin.sanpham.edit')->with(compact('sanpham','loaixe','tinhtrang'));
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
        
        $sanpham->update($request->only('tenxe','maloai','mancc','img','gianhap','price','dongco','dungtichxylanh','congsuat','phanh','binhxang','binhnhot','status','khoiluong','hopso','den'));
        return redirect()->route('sanpham.index')->with('success','đã cập nhật 1 sản phẩm .');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sanpham  $sanpham
     * @return \Illuminate\Http\Response
     */
    public function destroy(sanpham $sanpham)
    {
        $sanpham -> delete();
        return redirect()->route('sanpham.index')->with('success','xóa sản phẩm thành công');
    }
}
