<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jkIndex = \App\Models\Author::where('name', 'J.K Rowling')->first()->id;
        $bibhutiIndex = \App\Models\Author::where('name', 'Bibhutibhushan Bandyopadhyay')->first()->id;
        $bonofulIndex = \App\Models\Author::where('name', 'Bonoful')->first()->id;
        
        $popularId = \App\Models\Category::where('slug', 'popular')->first()->id;
        $fictionId = \App\Models\Category::where('slug', 'fiction')->first()->id;

        $books = [
            [
                'title' => 'Harry Potter',
                'author_id' => $jkIndex,
                'category_id' => $popularId,
                'cover_image' => '/assets/local-image/book1.jfif',
            ],
            [
                'title' => 'Chader Pahar',
                'author_id' => $bibhutiIndex,
                'category_id' => $popularId,
                'cover_image' => '/assets/local-image/book-3.jpg',
            ],
            [
                'title' => 'Sresto Golpo',
                'author_id' => $bonofulIndex,
                'category_id' => $fictionId,
                'cover_image' => '/assets/local-image/book-2.jpg',
            ],
        ];

        foreach ($books as $book) {
            \App\Models\Book::updateOrCreate(['title' => $book['title']], $book);
        }
    }
}
