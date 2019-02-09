<?php

use Illuminate\Database\Seeder;
use vzla1\Role;
use vzla1\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     $role_user = Role::where('name','user')->first();
     $role_admin = Role::where('name','admin')->first();

     $user = new User();
     $user->name ="User";
     $user->email ="user@vzla.com";
     $user->password =bcrypt('abc123');
     $user->save();
     $user->roles()->attach($role_user);

     $user = new User();
     $user->name ="admin";
     $user->email ="admin@vzla.com";
     $user->password =bcrypt('abc123');
     $user->save();
     $user->roles()->attach($role_admin);
    }
}
