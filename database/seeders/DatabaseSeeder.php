<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        User::truncate();
        Post::truncate();
        Category::truncate();


        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
                'user_id' => $user->id,
                'category_id' => $family->id,
                'slug' => 'my-family-post',
                'title' => 'Family Post',
                'excerpt' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>',
                'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>'
              ]);


        Post::create([
                 'user_id' => $user->id,
                 'category_id' => $work->id,
                 'slug' => 'my-work-post',
                 'title' => 'Workplace Post',
                 'excerpt' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>',
                 'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>'
        ]);


        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'slug' => 'my-personal-post',
            'title' => 'Personal Post',
            'excerpt' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>'
        ]);


    }
}
