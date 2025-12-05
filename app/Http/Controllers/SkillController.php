<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        try {
            // Check if skills table exists
            if (!\Schema::hasTable('skills')) {
                return view('pages.skills', ['skills' => collect()]);
            }
            
            $skills = Skill::orderBy('category')
                ->orderBy('order')
                ->get()
                ->groupBy('category');
            
            return view('pages.skills', compact('skills'));
            
        } catch (\Exception $e) {
            // If there's an error (like table doesn't exist), return empty
            return view('pages.skills', ['skills' => collect()]);
        }
    }
}