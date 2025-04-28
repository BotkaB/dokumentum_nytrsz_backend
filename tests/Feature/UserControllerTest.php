<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;

use Tests\TestCase;

class UserControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_get_authenticated_user()
    {
        $user = User::factory()->create();

        $this->actingAs($user)
            ->getJson('/api/user') 
            ->assertOk()
            ->assertJson([
                'id' => $user->id,
                'email' => $user->email,
            ]);
    }

    /** @test */
    public function it_can_list_all_users()
    {
        User::factory()->count(3)->create();

        $admin = User::factory()->create(['role' => 0]);
        
        $this->actingAs($admin)
            ->getJson('/api/users')
            ->assertOk()
            ->assertJsonCount(4); 
    }


    /** @test */
    public function it_can_create_a_user()
    {
        $admin = User::factory()->create(['role' => 0]);

        $response = $this->actingAs($admin)
            ->postJson('/api/users', [
                'name' => 'Teszt Elek',
                'email' => 'teszt@pelda.hu',
                'password' => 'password123',
                'password_confirmation' => 'password123',
                'role' => 1,
            ])
            ->assertCreated()
            ->assertJsonStructure([
                'user' => [
                    'id',
                    'name',
                    'email',
                    'role',
                ]
            ]);

        $this->assertDatabaseHas('users', [
            'email' => 'teszt@pelda.hu',
        ]);
    }


 /** @test */
public function it_can_update_self()
{
    $user = User::factory()->create([
        'password' => bcrypt('oldpassword'),
    ]);

    $response = $this->actingAs($user)
        ->postJson('/api/user/update', [ 
            'name' => 'Updated Name',
            'email' => 'updated@example.com',
            'password' => 'newpassword123',
            'password_confirmation' => 'newpassword123',  
        ])
        ->assertOk()
        ->assertJson([
            'user' => [
                'name' => 'Updated Name',
                'email' => 'updated@example.com',
            ]
        ]);

    
    $this->assertTrue(Hash::check('newpassword123', $user->fresh()->password));
}

    
    /** @test */
    public function it_can_update_user_by_admin()
    {
        $admin = User::factory()->create(['role' => 0]);
        $user = User::factory()->create();
    
        $this->actingAs($admin)
            ->putJson("/api/users/{$user->id}", [
                'name' => 'Admin Updated',
                'email' => 'adminupdated@example.com',
                'password' => 'adminpassword123',
                'password_confirmation' => 'adminpassword123',  // Hozzáadtuk a password_confirmation-t
                'role' => 2,
            ])
            ->assertOk()
            ->assertJson([
                'user' => [
                    'name' => 'Admin Updated',
                    'email' => 'adminupdated@example.com',
                    'role' => 2,
                ]
            ]);
    
        $this->assertDatabaseHas('users', [
            'email' => 'adminupdated@example.com',
        ]);
    }
    
    /** @test */
    public function super_admin_role_cannot_be_updated()
    {
        $superAdmin = User::factory()->create([
            'id' => 1,
            'role' => 0,
        ]);
    
        $admin = User::factory()->create(['role' => 0]);
    
        $response = $this->actingAs($admin)
            ->putJson("/api/users/{$superAdmin->id}", [
                'name' => 'Hacker',
                'email' => 'hacker@example.com',
                'password' => 'hackerpass',
                'password_confirmation' => 'hackerpass',  // Hozzáadtuk a password_confirmation-t
                'role' => 2, // próbálja változtatni a role-t
            ])
            ->assertStatus(403)  // Ellenőrizzük, hogy a válasz státusza 403
            ->assertJson([
                'message' => 'A szuperadmin szerepkör nem módosítható.'
            ]);
    }
}
