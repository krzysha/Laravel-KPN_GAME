<?php

use Illuminate\Database\Seeder;
use App\Roles;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$role = Roles::where('name','Admin')->first();
        $user = new User();
        $user->name = 'user';
        $user->email = 'user@example.com';
        $user->password = 'user';
        $user->save();
        //$user->roles()->attach();

        $user = new User();
        $user->name = 'user2';
        $user->email = 'user2@example.com';
        $user->password = 'user2';
        $user->save();
        //$user->roles()->attach(2);

        $user = new User();
        $user->name = 'user3';
        $user->email = 'user3@example.com';
        $user->password = 'user3';
        $user->save();
        //$user->roles()->attach(3);
    }
}
