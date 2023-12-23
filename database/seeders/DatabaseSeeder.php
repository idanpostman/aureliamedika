<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $userData =[
            [
                'name'=>'Admin',
                // 'username'=>'admin',
                'email'=>'admin@admin.com',
                'role'=>'admin',
                'password'=>bcrypt('12345')
            ],
            [
                'name'=>'user',
                // 'username'=>'user',
                'email'=>'user@user.com',
                'role'=>'user',
                'password'=>bcrypt('12345')
            ],
            ];

            foreach($userData as $key => $val ){
                User::create($val);
            };
    }
}
