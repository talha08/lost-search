<?php

use Illuminate\Database\Seeder;

class FoundTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Found::class,50)->create();
    }
}
