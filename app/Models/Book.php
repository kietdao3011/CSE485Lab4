<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function Borrow()
    {
        return $this->hasMany(Borrow::class);
    }

    protected $fillable = [
        'name', 
        'author', 
        'category',  
        'year',
        'quantity',
    ];
    
}
