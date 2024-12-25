<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reader extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',      // Tên độc giả
        'birthday',     // Email
        'address',   // Địa chỉ
        'phone',     // Số điện thoại
    ];
    public function book(){
        return  $this->belongsTo(Book::class);
    }
}
