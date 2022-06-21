<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        {
            $user = [
                [
                    'name' => 'Admin1',
                    'email' => 'admin1@sarpras.com',
                    'level' => 'admin',
                    'password' => bcrypt('admin1'),
                ],
                [
                    'name' => 'Admin2',
                    'email' => 'admin2@sarpras.com',
                    'level' => 'admin',
                    'password' => bcrypt('admin2'),
                ],
            ];
    
            foreach ($user as $key => $value) {
                User::create($value);
            }
        }
    }
}
