<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\User;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::where('level', User::ACCESS_MEMBER)->get();
        foreach (range(1,20) as $counter) {
            factory(Post::class)->create(['author_id' => $users->random()->id]);
        }
    }
}
