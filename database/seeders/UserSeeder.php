<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Hash;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
            'created_at' => \Carbon\Carbon::now(),
            'email_verified_at' => \Carbon\Carbon::now()
        ]);
        DB::table('users')->insert([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => Hash::make('user123'),
            'role' => 'user',
            'created_at' => \Carbon\Carbon::now(),
            'email_verified_at' => \Carbon\Carbon::now()
        ]);
        // $admin = User::cretae([
        //     'name' => 'Admin JDIH',
        //     'email' => 'admin@gmail.com',
        //     'password' => bcrypt('adminjdih2021')
        // ]);

        // $admin->assignRole('admin');

        // // $admin = User::cretae([
        // //     'name' => 'ichigo',
        // //     'email' => 'ichigo@gmail.com',
        // //     'password' => bcrypt('ichigo123')
        // // ]);

        // // $admin->assignRole('admin');

        // $user = User::cretae([
        //     'name' => 'User JDIH',
        //     'email' => 'user@gmail.com',
        //     'password' => bcrypt('userjdih2021')
        // ]);

        // $user->assignRole('admin');
    }
}
