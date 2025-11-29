<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillSeeder extends Seeder
{
    public function run(): void
    {
        $skills = [
            ['name' => 'HTML', 'percentage' => 95],
            ['name' => 'CSS', 'percentage' => 90],
            ['name' => 'JavaScript', 'percentage' => 85],
            ['name' => 'Laravel', 'percentage' => 80],
            ['name' => 'PHP', 'percentage' => 88],
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }
    }
}
