<?php

use Illuminate\Database\Seeder;
use Spf\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 200)->create();
    }
}
