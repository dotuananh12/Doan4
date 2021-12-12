<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loaitintuc extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'loaitintuc';
    protected $fillable = ['tenloai','ghichu'];
}
