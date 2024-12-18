<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Borrow>
 */
class BorrowFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'reader_id'=>fake()->isRandomNumber(),
                'book_id'=>fake()->isRandomNumber(),
                'borrow_date'=>fake()->date(),
                'return_date'=>()fake()->date(),
                'status'=>fake()->boolean(),
            //
        ];
    }
}
