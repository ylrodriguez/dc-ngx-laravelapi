<?php

use Illuminate\Database\Seeder;
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
        $users = [
            [
                'name' => 'User',
                'lastname' => 'Test',
                'email' => 'test@gmail.com',
                'address' => 'Cra 7. # 10-45',
                'password' => Hash::make('123456'),
                'number' => '3208009001',
                'dob' => '1995-01-30'
            ],
            [
                'name' => 'Yojhan',
                'lastname' => 'Rodriguez',
                'email' => 'yojhanr95@gmail.com',
                'address' => 'Cra 7. # 10-45',
                'password' => Hash::make('123456'),
                'number' => '3208009001',
                'dob' => '1995-01-30'
            ],
            [
                'name' => 'Leonardo',
                'lastname' => 'Ascencio',
                'email' => 'leonardo95@gmail.com',
                'address' => 'Cra 12. # 23-65',
                'password' => Hash::make('123456'),
                'number' => '3103003001',
                'dob' => '1995-08-30'
            ],
            [
                'name' => 'Leo',
                'lastname' => 'Reyes',
                'email' => 'leo95@gmail.com',
                'address' => 'Cra 127. # 102-45',
                'password' => Hash::make('123456'),
                'number' => '3158505894',
                'dob' => '1995-09-30'
            ]
        ];

        foreach($users as $user){
            User::create($user);
        }
    }
}
