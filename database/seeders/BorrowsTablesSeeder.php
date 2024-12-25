<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;
use App\Models\Borrow;
use App\Models\Reader;
use App\Models\Book;

class BorrowsTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = FakerFactory::create('vi_VN');

        // Lấy tất cả các ID từ bảng readers và books
        $readerIds = Reader::pluck('id')->toArray();
        $bookIds = Book::pluck('id')->toArray();

        // Nếu không có dữ liệu trong bảng readers hoặc books, dừng Seeder
        if (empty($readerIds) || empty($bookIds)) {
            $this->command->warn('Readers or Books table is empty. Please seed them first.');
            return;
        }

        for ($i = 0; $i < 100; $i++) {
            Borrow::create([
                'reader_id' => $faker->randomElement($readerIds),
                'book_id' => $faker->randomElement($bookIds),
                'borrow_date' => $faker->dateTimeBetween('-1 years', 'now')->format('Y-m-d'),
                'return_date' => $faker->dateTimeBetween('now', '+1 years')->format('Y-m-d'),
            ]);
        }
    }
}
