<?php

use Illuminate\Database\Seeder;

class AddImageUrlToBooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => 1, 'image_url' => 'https://upload.wikimedia.org/wikipedia/en/c/c0/Murder_in_Mesopotamia_First_Edition_Cover_1936.jpg'],
            ['id' => 2, 'image_url' => 'https://upload.wikimedia.org/wikipedia/en/6/6b/Harry_Potter_and_the_Philosopher%27s_Stone_Book_Cover.jpg'],
            ['id' => 3, 'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/a/af/Tolstoy_-_War_and_Peace_-_first_edition%2C_1869.jpg'],
            ['id' => 4, 'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/c/c7/AnnaKareninaTitle.jpg'],
            ['id' => 5, 'image_url' => 'https://upload.wikimedia.org/wikipedia/en/c/c4/TheAlchemist.jpg'],
            ['id' => 6, 'image_url' => 'https://upload.wikimedia.org/wikipedia/en/a/a5/Veronica_decides_to_die.jpg'],
            ['id' => 7, 'image_url' => 'https://upload.wikimedia.org/wikipedia/en/c/cb/The_Chronicles_of_Narnia_box_set_cover.jpg'],
        ];

        foreach ($data as $dataItem) {
            DB::table('books')
                ->where('id', $dataItem['id'])
                ->update(['image_url' => $dataItem['image_url']]);
        }
    }
}
