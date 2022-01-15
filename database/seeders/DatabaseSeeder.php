<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User();
    	$admin->name="admin";
    	$admin->email="4dmingeometria@gmail.com";
    	$admin->password =  bcrypt('password');
    	$admin->visible_password ="password";
    	$admin->email_verified_at = NOW();
    	$admin->CP="7335";
    	$admin->address="Caminito Viejo 7335 1B1 Residencial Agua Caliente";
    	$admin->phone="6642063066";
        $admin->area="Services";
        $admin->company="Geometria Empresarial";
    	$admin->is_admin=1;
    	$admin->save();
    }
}
