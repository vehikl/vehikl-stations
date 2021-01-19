<?php

namespace Tests\Feature;

use App\Models\Station;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class StationsControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testItProvidesAListOfAllExistingStations()
    {
        Station::factory()->count(10)->create();

        $this->get(route('stations.index'))
            ->assertSuccessful()
            ->assertJson(Station::all()->toArray());
    }
}
