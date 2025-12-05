<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillSeeder extends Seeder
{
    public function run(): void
    {
        $skills = [
            // Frontend
            ['name' => 'HTML5', 'proficiency' => 95, 'category' => 'frontend', 'icon' => 'fab fa-html5'],
            ['name' => 'CSS3', 'proficiency' => 90, 'category' => 'frontend', 'icon' => 'fab fa-css3-alt'],
            ['name' => 'JavaScript', 'proficiency' => 85, 'category' => 'frontend', 'icon' => 'fab fa-js'],
            ['name' => 'React', 'proficiency' => 80, 'category' => 'frontend', 'icon' => 'fab fa-react'],
            ['name' => 'Tailwind CSS', 'proficiency' => 85, 'category' => 'frontend', 'icon' => 'fas fa-palette'],
            
            // Backend
            ['name' => 'PHP', 'proficiency' => 90, 'category' => 'backend', 'icon' => 'fab fa-php'],
            ['name' => 'Laravel', 'proficiency' => 85, 'category' => 'backend', 'icon' => 'fab fa-laravel'],
            ['name' => 'MySQL', 'proficiency' => 80, 'category' => 'backend', 'icon' => 'fas fa-database'],
            ['name' => 'Node.js', 'proficiency' => 75, 'category' => 'backend', 'icon' => 'fab fa-node-js'],
            
            // Tools
            ['name' => 'Git', 'proficiency' => 85, 'category' => 'tools', 'icon' => 'fab fa-git'],
            ['name' => 'Docker', 'proficiency' => 70, 'category' => 'tools', 'icon' => 'fab fa-docker'],
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }
    }
}