<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class UserControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testCreateUser()
    {
        $response = $this->json('POST', '/api/register', [
            'username' => 'john_doe',
            'password' => 'secret123',
            'email' => 'john@example.com',
            'gender' => 'male',
            'blood_type' => 'A+',
            'phone_number' => '1234567890',
            'date_of_birth' => '1990-01-01',
            'location' => 'New York',
            'type' => 'civilian'
        ]);

        $response->assertStatus(201)
            ->assertJson([
                'message' => 'User created successfully',
            ]);
    }

    public function testUpdateUser()
    {
        $user = User::factory()->create();

        $response = $this->json('PUT', '/api/user/' . $user->id, [
            'username' => 'john_doe_updated',
            'email' => 'john_updated@example.com',
            'gender' => 'male',
            'blood_type' => 'B+',
            'phone_number' => '9876543210',
            'date_of_birth' => '1990-01-01',
            'location' => 'Los Angeles',
            'type' => 'crises fighter'
        ]);

        $response->assertStatus(200)
            ->assertJson([
                'message' => 'User updated successfully',
            ]);
    }

    public function testDeleteUser()
    {
        $user = User::factory()->create();

        $response = $this->json('DELETE', '/api/user/' . $user->id);

        $response->assertStatus(200)
            ->assertJson([
                'message' => 'User deleted successfully',
            ]);
    }

    public function testShowUser()
    {
        $user = User::factory()->create();

        $response = $this->json('GET', '/api/user/' . $user->id);

        $response->assertStatus(200)
            ->assertJsonStructure([
                'user' => [
                    'id',
                    'username',
                    'email',
                    'gender',
                    'blood_type',
                    'phone_number',
                    'date_of_birth',
                    'location',
                    'type',
                    'created_at',
                    'updated_at',
                ],
            ]);
    }

    public function testFetchCrisesFighters()
    {
        User::factory()->count(3)->create(['type' => 'crises fighter']);

        $response = $this->json('GET', '/api/crises-fighters');

        $response->assertStatus(200)
            ->assertJsonCount(3);
    }

    public function testFetchCivilians()
    {
        User::factory()->count(5)->create(['type' => 'civilian']);

        $response = $this->json('GET', '/api/civilians');

        $response->assertStatus(200)
            ->assertJsonCount(5);
    }
}
