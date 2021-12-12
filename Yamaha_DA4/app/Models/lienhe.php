<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lienhe extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'lienhe';
    protected $fillable = ['tenkh','email','phone','noidung'];
}
