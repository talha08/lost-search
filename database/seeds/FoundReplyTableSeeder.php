<?php

use Illuminate\Database\Seeder;

class FoundReplyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\FoundReply::class,50)->create();
    }
}
