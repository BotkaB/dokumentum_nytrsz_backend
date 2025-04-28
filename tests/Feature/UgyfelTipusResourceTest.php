<?php
namespace Tests\Feature;

use App\Models\User;
use App\Models\UgyfelTipus;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UgyfelTipusResourceTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_return_ugyfel_tipus_with_parent()
    {
        $admin = User::factory()->create(['role' => 0]);

        $parentUgyfelTipus = UgyfelTipus::create([
            'elnevezes' => 'Parent Tipus',
        ]);

        $ugyfelTipusWithParent = UgyfelTipus::create([
            'elnevezes' => 'Child Tipus With Parent',
            'ugyfel_fotipus' => $parentUgyfelTipus->ugyfel_tipus_id,  
        ]);

        $response = $this->actingAs($admin)->getJson('/api/ugyfel_tipuses');

        $response->assertOk()
                 ->assertJsonFragment([
                     'elnevezes' => 'Parent Tipus',
                 ])
                 ->assertJsonFragment([
                     'elnevezes' => 'Child Tipus With Parent',
                     'ugyfel_fotipus' => 'Parent Tipus', 
                 ]);
    }

    /** @test */
    public function it_can_return_ugyfel_tipus_without_parent()
    {
        $admin = User::factory()->create(['role' => 0]);

        $ugyfelTipusWithoutParent = UgyfelTipus::create([
            'elnevezes' => 'Ugyfel Tipus Without Parent',
            'ugyfel_fotipus' => null,  
        ]);

        $response = $this->actingAs($admin)->getJson('/api/ugyfel_tipuses');

        $response->assertOk()
                 ->assertJsonFragment([
                     'elnevezes' => 'Ugyfel Tipus Without Parent',
                     'ugyfel_fotipus' =>'',
                     'ugyfel_fotipus_id' =>null, 
                    
                 ]);
    }

    /** @test */
    public function it_returns_404_when_no_ugyfel_tipus_available()
    {
        $admin = User::factory()->create(['role' => 0]);

        $response = $this->actingAs($admin)->getJson('/api/ugyfel_tipuses');

        $response->assertStatus(404)
                 ->assertJson(['message' => 'Nincs elérhető adat.']);
    }
}
