<?php

use Illuminate\Database\Seeder;

class PostReplyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\PostReply::class,50)->create();
    }
}
