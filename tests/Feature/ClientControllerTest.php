<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Client;
use App\Http\Controllers\ClientController;

class ClientControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */

    use RefreshDatabase;

    //php artisan test --filter=testClientCanBeGet
    public function testClientCanBeCreated()
    {
        $data = [
            'name' => 'Ricardo',
            'phoneNumber' => '71999003103',
            'email' => 'ricardoengenharia94@gmail.com',
        ];

        $response = $this->postJson('/api/clients', $data);

        $response->assertStatus(201);

        $response->assertJsonFragment([
            'name' => 'Ricardo',
            'phoneNumber' => '71999003103',
            'email' => 'ricardoengenharia94@gmail.com',
        ]);
    
        $this->assertDatabaseHas('clients', [
            'name' => 'Ricardo',
            'phoneNumber' => '71999003103',
            'email' => 'ricardoengenharia94@gmail.com',
        ]);
    }
}
