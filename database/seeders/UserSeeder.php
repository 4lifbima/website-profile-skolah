<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

         $user = User::create([
            'name'      => 'Alif Bima Pradana',
            'username'  => 'superadmin',
            'email'     => 'alifbima@gmail.com',
            'role'      => 'Admin',
            'status'    => 'Aktif',
            'password'  => bcrypt('superadmin')
        ]);

        $user->assignRole('Admin');

        $this->command->info('Data User '.$user->name.' has been saved.');
       
    }
}
