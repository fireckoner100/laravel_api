<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Task;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TaskApiTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    
    public function it_can_create_a_task_via_api()
    {
        
        $user = User::factory()->create();
        $this->actingAs($user, 'sanctum');

        $taskData = [
            'title' => 'API Test Task',
            'description' => 'Testing task creation via API',
            'completed' => false,
        ];

        $response = $this->postJson('/api/tasks', $taskData);

        $response->assertStatus(201)
                 ->assertJson([
                     'title' => 'API Test Task',
                     'description' => 'Testing task creation via API',
                     'completed' => false,
                 ]);
    }
}
