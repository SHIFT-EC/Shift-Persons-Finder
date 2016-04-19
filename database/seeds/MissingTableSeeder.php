<?php

use Illuminate\Database\Seeder;
use Spf\Shift\Entities\Missing;

class MissingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(Missing::class, 200)->create();
    }
}
