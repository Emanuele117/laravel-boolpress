<?php

use App\Models\Tag;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tags = ['Community', 'Backend developers', 'Fullstack Developers', 'Laravel dev', 'Vue dev'];

        foreach ($tags as $tag) {
            $_tag = new Tag();
            $_tag->name = $tag;
            $_tag->slug = Str::slug($_tag->name);
            $_tag->save();
        }
    }
}
