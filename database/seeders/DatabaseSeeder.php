<?php

namespace Database\Seeders;

use App\Models\Reader;
use App\Models\Book;
use App\Models\Borrow;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Reader::factory(10)->create();
        Book::factory(10)->create();
        Borrow::factory(10)->create();
    }
}
