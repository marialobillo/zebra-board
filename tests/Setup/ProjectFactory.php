<?php

namespace Tests\Setup;

use App\Models\Project;
use App\Models\Task;
use App\Models\User;

class ProjectFactory
{
    protected $tasksCount = 0;

    public function withTasks($count)
    {
        $this->tasksCount = $count;
    }

    public function create()
    {
        $project = Project::factory()->create([
            'owner_id' => User::factory(),

        ]);

        Task::factory($this->tasksCount)->create([
            'project_id' => $project->id
        ]);

        return $project;
    }
}
