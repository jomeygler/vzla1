<?php

use Illuminate\Database\Seeder;
use vzla1\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = "admin";
        $role->descrip = "Administrador";
        $role->save();

        $role = new Role();
        $role->name = "usuario";
        $role->descrip = "usuario";
        $role->save();
    }
}
