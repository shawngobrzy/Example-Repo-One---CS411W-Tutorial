<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TaskTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_a_task_can_be_created(): void
    {
    $task = \App\Models\Task::create(['title' => 'Test Task']);
    $this->assertDatabaseHas('tasks', ['title' => 'Test Task']);
    }

}
