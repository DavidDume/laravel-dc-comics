<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');

        foreach($comics as $comic) {
            $newComic = new Comic();

            $newComic->thumb = $comic['thumb'];
            $newComic->title = $comic['title'];
            $newComic->description = $comic['description'];
            $newComic->price = $comic['price'];
            $newComic->series = $comic['series'];
            $newComic->type = $comic['type'];
            $newComic->sale_date = $comic['sale_date'];

            $newComic->save();
        }
    }
}
