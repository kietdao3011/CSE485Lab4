<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Reader;
use App\Models\Book;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Borrow>
 */
class BorrowFactory extends Factory
{
    public function definition(): array
    {
        return [
            'reader_id' => Reader::inRandomOrder()->first()->id,
            'book_id' => Book::inRandomOrder()->first()->id,
            'borrow_date' => fake()->date(),
            'return_date' => fake()->date(),
            'status' =>fake()->boolean(),
        ];
    }
}
