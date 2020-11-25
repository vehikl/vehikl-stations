<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class LoginTest extends TestCase
{

    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUserCanLogin()
    {
        $this->withoutExceptionHandling();


        $password = '123';
        $user = User::factory()->create(['password' => Hash::make($password)]);

        $this->post('/login', [
            'email' => $user->email,
            'password' => $password
        ]);

        $this->assertAuthenticatedAs($user);
    }
}
