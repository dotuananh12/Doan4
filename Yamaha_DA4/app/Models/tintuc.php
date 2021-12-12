<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tintuc extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tintuc';
    protected $fillable = ['tentintuc','noidung','img','loaitintuc','ngaythem'];
}
