<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $authors = [
            'J.K Rowling',
            'Bibhutibhushan Bandyopadhyay',
            'Sharadindu Bandyopadhyay',
            'Humayun Ahmed',
            'Bonoful',
        ];

        foreach ($authors as $name) {
            \App\Models\Author::updateOrCreate(['name' => $name], ['name' => $name]);
        }
    }
}
