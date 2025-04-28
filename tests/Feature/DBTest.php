<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class DBTest extends TestCase
{
    /** @test */
    public function it_can_connect_to_the_database()
    {
        try {
            DB::connection()->getPdo();
            $this->assertTrue(true, 'Database connection is successful');
        } catch (\Exception $e) {
            $this->fail('Database connection failed: ' . $e->getMessage());
        }
    }
}
