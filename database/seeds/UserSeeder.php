<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name="Admin";
        $user->role="Admin";
        $user->email="admin@gmail.com";
        $user->phone="123456789312";
        $user->password=Hash::make("adminadmin");
        $user->save();

        $user = new User;
        $user->name="Adinata";
        $user->role="Member";
        $user->email="adinata@gmail.com";
        $user->phone="082110904122";
        $user->password=Hash::make("adiadi12");
        $user->save();
    }
}
