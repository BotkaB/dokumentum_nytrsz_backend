<?php

namespace Tests\Feature;

use App\Models\Ugyfel;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UgyfelControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_get_all_ugyfelek()
    {
        Ugyfel::factory()->count(3)->create();
        $admin = User::factory()->create(['role' => 0]);
        $this->actingAs($admin)
        ->getJson('/api/ugyfels')
        ->assertOk()
        ->assertJsonCount(3);
    }


    /** @test */
    public function it_can_create_a_new_ugyfel_byAdmin()
    {
        $admin = User::factory()->create(['role' => 0]);

        $this->actingAs($admin)
            ->postJson('/api/ugyfels', [
                'nev' => 'New Ugyfel',
                'szuletesi_nev' => 'Születési Név',
                'anyja_neve' => 'Anyja Neve',
                'szuletesi_hely' => 'Születési Hely',
                'szuletesi_ido' => '2000-01-01',
                'telepules' => 'Település',
                'neme' => 'férfi',
                'ugyfelkod' => 123456,
            ])
            ->assertCreated()
            ->assertJsonStructure([
                'ugyfel_id',
                'nev',
                'szuletesi_nev',
                'anyja_neve',
                'szuletesi_hely',
                'szuletesi_ido',
                'telepules',
                'neme',
                'ugyfelkod',
            ]);

        $this->assertDatabaseHas('ugyfels', [
            'nev' => 'New Ugyfel',
            'ugyfelkod' => 123456,
        ]);
    }
    /** @test */
    public function it_can_create_a_new_ugyfel_byDoku()
    {
        $admin = User::factory()->create(['role' => 1]);

        $this->actingAs($admin)
            ->postJson('/api/ugyfels', [
                'nev' => 'New Ugyfel2',
                'szuletesi_nev' => 'Születési Név2',
                'anyja_neve' => 'Anyja Neve2',
                'szuletesi_hely' => 'Születési Hely2',
                'szuletesi_ido' => '2000-01-02',
                'telepules' => 'Település2',
                'neme' => 'férfi',
                'ugyfelkod' => 123457,
            ])
            ->assertCreated()
            ->assertJsonStructure([
                'ugyfel_id',
                'nev',
                'szuletesi_nev',
                'anyja_neve',
                'szuletesi_hely',
                'szuletesi_ido',
                'telepules',
                'neme',
                'ugyfelkod',
            ]);

        $this->assertDatabaseHas('ugyfels', [
            'nev' => 'New Ugyfel2',
            'ugyfelkod' => 123457,
        ]);
    }


    /** @test */
    public function it_can_update_an_existing_ugyfelbyAdmin()
    {
        $ugyfel = Ugyfel::factory()->create();

        $admin = User::factory()->create(['role' => 0]);

        $this->actingAs($admin)
            ->putJson("/api/ugyfels/{$ugyfel->ugyfel_id}", [
                'nev' => 'Updated Ugyfel Name',
                'szuletesi_nev' => 'Updated Születési Név',
                'anyja_neve' => 'Updated Anyja Neve',
                'szuletesi_hely' => 'Updated Születési Hely',
                'szuletesi_ido' => '1990-12-31',
                'telepules' => 'Updated Település',
                'neme' => 'nő',
                'ugyfelkod' => 654321,
            ])
            ->assertOk()
            ->assertJson([
                'nev' => 'Updated Ugyfel Name',
                'szuletesi_nev' => 'Updated Születési Név',
                'anyja_neve' => 'Updated Anyja Neve',
                'szuletesi_hely' => 'Updated Születési Hely',
                'szuletesi_ido' => '1990-12-31',
                'telepules' => 'Updated Település',
                'neme' => 'nő',
                'ugyfelkod' => 654321,
            ]);

        $this->assertDatabaseHas('ugyfels', [
            'ugyfel_id' => $ugyfel->ugyfel_id,
            'ugyfelkod' => 654321,
        ]);
    }

    /** @test */
    public function it_can_update_an_existing_ugyfelbyDoku()
    {
        $ugyfel = Ugyfel::factory()->create();

        $admin = User::factory()->create(['role' => 1]);

        $this->actingAs($admin)
            ->putJson("/api/ugyfels/{$ugyfel->ugyfel_id}", [
                'nev' => 'Updated Ugyfel Name2',
                'szuletesi_nev' => 'Updated Születési Név2',
                'anyja_neve' => 'Updated Anyja Neve2',
                'szuletesi_hely' => 'Updated Születési Hely2',
                'szuletesi_ido' => '1990-12-12',
                'telepules' => 'Updated Település2',
                'neme' => 'nő',
                'ugyfelkod' => 654322,
            ])
            ->assertOk()
            ->assertJson([
                'nev' => 'Updated Ugyfel Name2',
                'szuletesi_nev' => 'Updated Születési Név2',
                'anyja_neve' => 'Updated Anyja Neve2',
                'szuletesi_hely' => 'Updated Születési Hely2',
                'szuletesi_ido' => '1990-12-12',
                'telepules' => 'Updated Település2',
                'neme' => 'nő',
                'ugyfelkod' => 654322,
            ]);

        $this->assertDatabaseHas('ugyfels', [
            'ugyfel_id' => $ugyfel->ugyfel_id,
            'ugyfelkod' => 654322,
        ]);
    }


    /** @test */
    public function it_returns_404_if_updating_non_existent_ugyfel()
    {
      
        $admin = User::factory()->create(['role' => 0]); 
        $response = $this->actingAs($admin)->putJson("/api/ugyfels/9999", [
            'nev' => 'Updated Name',
            'szuletesi_nev' => 'Updated Születési Név',
            'anyja_neve' => 'Updated Anyja Neve',
            'szuletesi_hely' => 'Updated Születési Hely',
            'szuletesi_ido' => '2000-01-01',
            'telepules' => 'Updated Település',
            'neme' => 'férfi',
            'ugyfelkod' => 987654,
        ]);
    
        $response->assertStatus(404)
                 ->assertJson(['message' => 'Ugyfel nem talaltato']);
    }
    /** @test */
    public function it_returns_403_if_user_has_no_permission_to_update_ugyfel()
{
    
    $ugyfel = Ugyfel::factory()->create([
        'nev' => 'Original Ugyfel Name',
        'szuletesi_nev' => 'Original Születési Név',
        'anyja_neve' => 'Original Anyja Neve',
        'szuletesi_hely' => 'Original Születési Hely',
        'szuletesi_ido' => '1985-05-05',
        'telepules' => 'Original Település',
        'neme' => 'férfi',
        'ugyfelkod' => 123456,
    ]);

    
    $user = User::factory()->create(['role' => 2]);

  
    $response = $this->actingAs($user)
        ->putJson("/api/ugyfels/{$ugyfel->ugyfel_id}", [
            'nev' => 'Updated Ugyfel Name2',
            'szuletesi_nev' => 'Updated Születési Név2',
            'anyja_neve' => 'Updated Anyja Neve2',
            'szuletesi_hely' => 'Updated Születési Hely2',
            'szuletesi_ido' => '1990-12-12',
            'telepules' => 'Updated Település2',
            'neme' => 'nő',
            'ugyfelkod' => 654322,
        ]);


    $response->assertStatus(403)
             ->assertJson(['message' => 'Unauthorized']);


    $this->assertDatabaseHas('ugyfels', [
        'ugyfel_id' => $ugyfel->ugyfel_id,
        'nev' => 'Original Ugyfel Name',  
        'szuletesi_nev' => 'Original Születési Név',
        'anyja_neve' => 'Original Anyja Neve',
        'szuletesi_hely' => 'Original Születési Hely',
        'szuletesi_ido' => '1985-05-05',
        'telepules' => 'Original Település',
        'neme' => 'férfi',
        'ugyfelkod' => 123456, 
    ]);
}
    /** @test */
public function it_returns_403_if_user_has_no_permission_to_create_ugyfel()
{
   
    $user = User::factory()->create(['role' => 2]);

  
    $response = $this->actingAs($user)
        ->postJson('/api/ugyfels', [
            'nev' => 'New Ugyfel3',
            'szuletesi_nev' => 'Születési Név3',
            'anyja_neve' => 'Anyja Neve3',
            'szuletesi_hely' => 'Születési Hely3',
            'szuletesi_ido' => '2001-02-03',
            'telepules' => 'Település3',
            'neme' => 'nő',
            'ugyfelkod' => 123458,
        ]);

    
    $response->assertStatus(403)
             ->assertJson(['message' => 'Unauthorized']);


    $this->assertDatabaseMissing('ugyfels', [
        'nev' => 'New Ugyfel3',
        'ugyfelkod' => 123458,
    ]);
}


}   