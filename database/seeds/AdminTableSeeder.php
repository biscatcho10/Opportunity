<?php

use App\Models\Admin;
use App\Models\Role;
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Admin::create([
            'first_name' => 'Super',
            'last_name' => 'Admin',
            'email' => 'super_admin@app.com',
            'password' => bcrypt('11445522')
        ]);

        $adminRole = Role::where('name', 'super_admin')->first();
        $admin->attachRole($adminRole);
    }
}
