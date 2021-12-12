<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'sanpham';
    protected $fillable = ['tenxe','maloai','mancc','img','gianhap','price','dongco','dungtichxylanh','congsuat','phanh','binhxang','binhnhot','status','khoiluong','hopso','den'];
}
