<?php

use App\User;
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

        User::create(['name' => 'Talha', 'phone'=> '+8801967402131','email' => 'talha@mail.com','password' => bcrypt('a')]);


        //Use this user for login as user
        User::create(['name' => 'Khan','phone'=> '+8801840132008','email' => 'khan@mail.com','password' => bcrypt('a')]);


        //creating 10 test users
        // factory(User::class,10)->create();



    }
}
