<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(User::class)->create([
            'name'     => 'userTest',
            'email'    => 'user1@example.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
