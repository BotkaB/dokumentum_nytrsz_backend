<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AdminApikTest extends TestCase
{
    use RefreshDatabase;

    protected function createUserWithRole(int $role): User
    {
        /** @var User $user */
        $user = User::factory()->create([
            'role' => $role,
        ]);
    
        return $user;
    }
    

    /** @test */
    public function admin_can_access_admin_routes()
    {
        $admin = $this->createUserWithRole(0);

        $this->actingAs($admin, 'sanctum')
            ->getJson('/api/users')
            ->assertStatus(200);
    }

    /** @test */
    public function non_admin_cannot_access_admin_routes()
    {
        $user = $this->createUserWithRole(1);

        $this->actingAs($user, 'sanctum')
            ->getJson('/api/users')
            ->assertStatus(403);
    }

    /** @test */
    public function dokumentum_szerkeszto_can_access_ugyfels()
    {
        $user = $this->createUserWithRole(1);

        $this->actingAs($user, 'sanctum')
            ->getJson('/api/ugyfels')
            ->assertStatus(200);
    }

    /** @test */
    public function non_dokumentum_szerkeszto_cannot_access_ugyfels()
    {
        $user = $this->createUserWithRole(2);

        $this->actingAs($user, 'sanctum')
            ->getJson('/api/ugyfels')
            ->assertStatus(403);
    }

   
    
    /** @test */
    public function megszuntetett_user_is_blocked()
    {
        $user = $this->createUserWithRole(3);

        $this->actingAs($user, 'sanctum')
            ->getJson('/api/users')
            ->assertStatus(403);
    }
}
