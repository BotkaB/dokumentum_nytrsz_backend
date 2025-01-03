<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test Stat',
            'email' => 'teststat@example.com',
            'password'=>'Pass12word',
            'role'=>2
        ]);

        User::factory()->create([
            'name' => 'Test Doku',
            'email' => 'testdoku@example.com',
            'password'=>'Pass13word',
            'role'=>1
        ]);
        User::factory()->create([
            'name' => 'Test Admin',
            'email' => 'testadmin@example.com',
            'password'=>'Pass14word',
            'role'=>0
        ]);

        User::factory()->create([
            'name' => 'Test Megszünt',
            'email' => 'testmegszunt@example.com',
            'password'=>'Pass15word',
            'role'=>3
        ]);

      
    }
}
