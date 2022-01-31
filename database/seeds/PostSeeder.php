<?php

use Illuminate\Support\Str;
use App\Models\Post;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 15; $i++) { 
            $post = new Post();
            $post->title = $faker->sentence(3);
            $post->sub_title = $faker->sentence(5);
            $post->slug = $slug = Str::slug($post->title);
            $post->cover = $faker->imageUrl(1200, 480, 'Posts', true, $post->title);
            $post->body = $faker->paragraphs(10, true);
            $post->save();
        }
    }
}
