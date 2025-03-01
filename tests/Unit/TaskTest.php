<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Task;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Attributes\Test;

class TaskTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function it_can_create_a_task()
    {
        
        $task = Task::factory()->create([
            'title' => 'Test Task',
            'description' => 'This is a test task.',
            'completed' => false,
        ]);

        $this->assertDatabaseHas('tasks', [
            'title' => 'Test Task',
            'description' => 'This is a test task.',
            'completed' => false,
        ]);
    }
}
