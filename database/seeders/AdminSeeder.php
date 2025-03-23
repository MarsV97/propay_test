<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admins = [
            [
                'name' => 'Admin',
                'email' => 'admin@admin.co.za',
                'password' => Hash::make('password'),
            ],
        ];

        foreach ($admins as $admin) {
            User::create([
                'name' => $admin['name'],
                'email' => $admin['email'],
                'password' => $admin['password'],
            ]);
        }
    }

}
