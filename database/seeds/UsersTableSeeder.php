<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $adminRole = Role::where('name','admin')->first();
        $userRole = Role::where('name','user')->first();

        $admin = User::create([
            'name' => 'admin',
            'last_name' => 'admin',
            'gender' => 'male',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'birth' => '12/11/2018',
            'number' => '5465216',
           
        ]);

        $user = User::create([
            'name' => 'user1',
            'last_name' => 'user1',
            'gender' => 'female',
            'email' => 'user1@gmail.com',
            'password' => bcrypt('user1'),
            'birth' => '12/11/2018',
            'number' => '54564561',
        ]);

        $user = User::create([
            'name' => 'user2',
            'last_name' => 'user2',
            'gender' => 'male',
            'email' => 'user2@gmail.com',
            'password' => bcrypt('user2'),
            'birth' => '12/11/2018',
            'number' => '2115454',
        ]);

        $admin->roles()->attach($adminRole);
        $user->roles()->attach($userRole);
    }
}
