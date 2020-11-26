<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class LoginTest extends TestCase
{

    use RefreshDatabase;

    public function testUserCanLogin()
    {
        $password = '123';
        $user = User::factory()->create(['password' => Hash::make($password)]);

        $this->post('/login', [
            'email' => $user->email,
            'password' => $password
        ]);

        $this->assertAuthenticatedAs($user);
    }
}
