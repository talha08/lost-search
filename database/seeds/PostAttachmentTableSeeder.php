<?php

use Illuminate\Database\Seeder;

class PostAttachmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\PostAttachment::class,50)->create();
    }
}
