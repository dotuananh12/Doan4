<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loaixe extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'loaixe';
    protected $fillable = ['tenloai','mota','ghichu'];
}
