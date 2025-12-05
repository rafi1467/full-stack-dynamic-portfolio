<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            [
                'title' => 'E-commerce Platform',
                'description' => 'A full-featured e-commerce platform with user authentication, payment integration, and admin panel.',
                'technologies' => json_encode(['Laravel', 'MySQL', 'Tailwind CSS', 'Stripe API']),
                'github_link' => 'https://github.com/username/ecommerce',
                'live_link' => 'https://ecommerce-demo.example.com',
                'is_featured' => true,
                'order' => 1
            ],
            [
                'title' => 'Task Management App',
                'description' => 'A collaborative task management application with real-time updates and team collaboration features.',
                'technologies' => json_encode(['React', 'Node.js', 'Express', 'MongoDB']),
                'github_link' => 'https://github.com/username/task-manager',
                'live_link' => 'https://taskmanager.example.com',
                'is_featured' => true,
                'order' => 2
            ],
            // Add more projects
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}