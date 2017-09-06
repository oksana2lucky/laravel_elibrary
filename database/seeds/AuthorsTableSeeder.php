<?php

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Agatha Christie', 'info' => 'English crime novelist, short story writer and playwright. She is best known for her 66 detective novels and 14 short story collections, particularly those revolving around her fictional detectives Hercule Poirot and Miss Marple.', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'J. K. Rowling', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Leo Tolstoy', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'Paulo Coelho', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['name' => 'C. S. Lewis', 'created_at' => new DateTime, 'updated_at' => new DateTime]
        ];

        foreach ($data as $dataItem) {
            DB::table('authors')->insert($dataItem);
        }
    }
}
