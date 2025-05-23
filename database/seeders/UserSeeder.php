<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    
        User::factory()->create([
            'name' => 'SzuperAdmin',
            'email' => 'superadmin@example.com',
            'password'=>Hash::make('Pass01word'),
            'role'=>0
        ]);
        User::factory()->create([
            'name' => 'Test Stat',
            'email' => 'teststat@example.com',
            'password'=>Hash::make('Pass12word'),
            'role'=>2
        ]);

        User::factory()->create([
            'name' => 'Test Doku',
            'email' => 'testdoku@example.com',
            'password'=>Hash::make('Pass13word'),
            'role'=>1
        ]);
        User::factory()->create([
            'name' => 'Test Admin',
            'email' => 'testadmin@example.com',
            'password'=>Hash::make('Pass14word'),
            'role'=>0
        ]);

        User::factory()->create([
            'name' => 'Test Megszünt',
            'email' => 'testmegszunt@example.com',
            'password'=>Hash::make('Pass15word'),
            'role'=>3
        ]);
        User::factory(10)->create();

      
    }
}
