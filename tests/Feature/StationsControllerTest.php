<?php

namespace Tests\Feature;

use App\Models\Station;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class StationsControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testItProvidesAListOfAllExistingStationsToAnAuthenticatedUser()
    {
        $user = User::factory()->create();
        Station::factory()->count(10)->create();

        $this->actingAs($user)
            ->getJson(route('stations.index'))
            ->assertSuccessful()
            ->assertJson(Station::all()->toArray());
    }
}
