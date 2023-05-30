<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use Carbon\Carbon;
use Faker\Factory as Faker;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create("id_ID");

        for($i=0; $i<10; $i++){
            Book::create([
                "title" => $faker->sentence(),
                "description" => $faker->sentence(),
                "author" => $faker->name(),
                "date" => $faker->dateTime(),
                "body" => implode("\n\n", $faker->paragraphs(3)),
                "time" => rand(0,15),
                "like" => rand(0,25),
                "last_viewed" => $faker->dateTimeBetween('2023-01-01 00:00:00', '2023-12-31 23:59:59'),
                "image" => $faker->imageUrl(640, 480, 'animals', true)
            ]);
        }

        $books = Book::all();
        foreach($books as $book){
            if($book->time < 3){
                $book->category = "Quick Reads";
            } elseif($book->time < 5){
                $book->category = "Medium Reads";
            } else{
                $book->category = "Long Reads";
            }

            $book->last_viewed = Carbon::create(2023, rand(1,12), rand(1,30), rand(0,23), rand(0,59), rand(0,59));

            $book->save();
        }
    }
}
