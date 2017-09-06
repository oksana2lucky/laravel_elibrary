<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['title' => 'Murder in Mesopotamia', 'author_id' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['title' => 'Harry Potter', 'author_id' => 2, 'description' => 'The novels chronicle the life of a young wizard, Harry Potter, and his friends Hermione Granger and Ron Weasley, all of whom are students at Hogwarts School of Witchcraft and Wizardry. ', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['title' => 'War and Peace', 'author_id' => 3, 'description' => 'The novel chronicles the history of the French invasion of Russia and the impact of the Napoleonic era on Tsarist society through the stories of five Russian aristocratic families. ', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['title' => 'Anna Karenina', 'author_id' => 3, 'description' => 'Anna Karenina is the tragic story of a married aristocrat/socialite and her affair with the affluent Count Vronsky. The story starts when she arrives in the midst of a family broken up by her brother\'s unbridled womanizing—something that prefigures her own later situation, though she would experience less tolerance by others.', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['title' => 'The Alchemist', 'author_id' => 4, 'description' => 'The Alchemist follows the journey of an Andalusian shepherd boy named Santiago. Believing a recurring dream to be prophetic, he decides to travel to a Romani fortune-teller in a nearby town to discover its meaning. The woman interprets the dream as a prophecy telling the boy that there is a treasure in the pyramids in Egypt.', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['title' => 'Veronika Decides to Die', 'author_id' => 4, 'description' => '', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['title' => 'The Chronicles of Narnia', 'author_id' => 5, 'description' => 'Set in the fictional realm of Narnia, a fantasy world of magic, mythical beasts, and talking animals, the series narrates the adventures of various children who play central roles in the unfolding history of that world. ', 'created_at' => new DateTime, 'updated_at' => new DateTime],

        ];
        foreach ($data as $dataItem) {
            DB::table('books')->insert($dataItem);
        }
    }
}
