<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'first_name' => 'user',
            'last_name' => 'test',
            'email' => 'usertest@gamil.com',
            'password' => bcrypt('11445522'),
            'phone' => '01000115566',
            'verification_code' => '1000',
            'pin_code' => '1100',
        ]);

        $user->attachRole('super_admin');
    }
}
