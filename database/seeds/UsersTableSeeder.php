<?php

use Illuminate\Database\Seeder;
use App\{User, Post};

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 10)->create()->each(function(User $user) {
            $user->posts()->save(factory(Post::class)->make());
        });
    }
}
