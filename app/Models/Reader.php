<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reader extends Model
{
    public function books()
    {
        return $this->belongsToMany(Book::class, 'borrows', 'reader_id', 'book_id')
                    ->withPivot('borrow_date', 'return_date', 'status')
                    ->withTimestamps();
    }
}
