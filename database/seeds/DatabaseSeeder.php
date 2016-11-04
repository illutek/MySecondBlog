<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 5)
            ->create()
            ->each(function($u) {
                for ($i=0;$i<rand(5,7);$i++){
                    $u->posts()->save(factory(App\Post::class)->make());
                }
        });
    }
}
