<?php

use Illuminate\Database\Seeder;

class FoundAttachmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\FoundAttachment::class,50)->create();
    }
}
