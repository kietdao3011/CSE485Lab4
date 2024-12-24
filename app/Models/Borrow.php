<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\User;
use \App\Models\Book;
class Borrow extends Model
{
    use HasFactory;

    public function book(){
        return $this->belongsto(Book::class);
    }

    public function reader(){
        return $this->belongto(Reader::class);
    }
}
