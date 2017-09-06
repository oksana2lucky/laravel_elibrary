<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $titles = [
            'General',
            'Romance',
            'Historical',
            'Fantasy',
            'Classics',
            'Detective',
            'Adventure',
            'Poetry',
            'Children\'s'
        ];
        foreach ($titles as $title) {
            DB::table('categories')->insert(['title' => $title]);
        }
    }
}
