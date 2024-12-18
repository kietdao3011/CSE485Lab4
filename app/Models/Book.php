<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function readers()
    {
        return $this->belongsToMany(Reader::class, 'borrows', 'book_id', 'reader_id')
                    ->withPivot('borrow_date', 'return_date', 'status')
                    ->withTimestamps();
    }
}
