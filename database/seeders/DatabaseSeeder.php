<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Post::factory(10)->create();
    }









    // {
     
    //     Post::truncate();  

    //     $user = User::factory()->create();

    //     $personal = Category::create([
    //         'name' => 'Personal',
    //         'slug' => 'personal'
    //     ]);
    //     $work = Category::create([
    //         'name' => 'Work',
    //         'slug' => 'work'
    //     ]);
    //     $family = Category::create([
    //         'name' => 'Family',
    //         'slug' => 'family'
    //     ]);

    //     Post::create([
    //         'user_id' => $user->id,
    //         'category_id' => $personal->id,
    //         'title' => 'My Personal Post',
    //         'slug' => 'my-first-post',
    //         'excerpt' => 'this is excerpt for my post',
    //         'body' => "<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>"
    //     ]);
    //     Post::create([
    //         'user_id' => $user->id,
    //         'category_id' => $work->id,
    //         'title' => 'My Work Post',
    //         'slug' => 'my-second-post',
    //         'excerpt' => 'this is excerpt for my post',
    //         'body' => "<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>"        ]);
    //     Post::create([
    //         'user_id' => $user->id,
    //         'category_id' => $family->id,
    //         'title' => 'My Family Post',
    //         'slug' => 'my-third-post',
    //         'excerpt' => 'this is excerpt for my post',
    //         'body' => "<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>"        ]);
    // }
}