<?php

namespace Database\Seeders;

use App\Models\Post;
use \App\Models\User;
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
        $user = User::factory()->create([
           'name' => 'Jonh Doe' 
        ]);

        $user2 = User::factory()->create([
            'name' => 'Charan Grewal' 
         ]);

        Post::factory(7)->create([
            'user_id' => $user->id
        ]);


        Post::factory(8)->create([
            'user_id' => $user2->id
        ]);
    }
}
