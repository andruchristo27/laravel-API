<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            [
                'cover_image' => 'cover1.jpg',
                'name' => 'The Great Gatsby',
                'author' => 'F. Scott Fitzgerald',
                'description' => 'A novel set in the 1920s that explores themes of wealth, love, and the American Dream.',
                'is_published' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cover_image' => 'cover2.jpg',
                'name' => '1984',
                'author' => 'George Orwell',
                'description' => 'A dystopian novel that delves into themes of totalitarianism and surveillance.',
                'is_published' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cover_image' => 'cover3.jpg',
                'name' => 'To Kill a Mockingbird',
                'author' => 'Harper Lee',
                'description' => 'A novel that addresses serious issues like racial injustice and moral growth.',
                'is_published' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cover_image' => 'cover4.jpg',
                'name' => 'The Catcher in the Rye',
                'author' => 'J.D. Salinger',
                'description' => 'A story about teenage rebellion and confusion narrated by the iconic character Holden Caulfield.',
                'is_published' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cover_image' => 'cover5.jpg',
                'name' => 'Moby-Dick',
                'author' => 'Herman Melville',
                'description' => 'An epic tale of obsession and revenge set on the high seas.',
                'is_published' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
