<?php

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
        factory(App\User::class, 100)->create()->each(function (\App\User $user) {
            $user->profile()->save(factory(App\Profile::class)->make());
        });
    }
}
