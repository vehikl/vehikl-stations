<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StationsControllerTest extends TestCase
{
    public function testItHasARouteToGetStations()
    {
        $this->withoutExceptionHandling();
        $this->get(route('stations.index'))
            ->assertSuccessful();
    }
}
