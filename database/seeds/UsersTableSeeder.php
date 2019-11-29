<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'roman',
            'email' => 'roman@mailinator.com',
            'password' => bcrypt('secret'),
            'email_verified_at' => now(),
            'updated_at' => now(),
            'created_at' => now(),
            'role' => 3,
            'remember_token' => Str::random(15),
        ]);
        factory(App\User::class, 10)->create()->each(function ($user) {
            //$user->posts()->save(factory(App\Post::class)->make());
        });
    }
}
