<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectInfoController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('order')->get();
        return view('pages.projects', compact('projects'));
    }

    public function show(Project $project)
    {
        return view('pages.project-detail', compact('project'));
    }

    public function home()
    {
        $featuredProjects = Project::where('is_featured', true)
            ->orderBy('order')
            ->take(3)
            ->get();
        
        return view('pages.home', compact('featuredProjects'));
    }

    public function academic()
    {
        // Add your academic data here
        $academicData = [
            [
                'degree' => 'Your Degree',
                'institution' => 'Institution Name',
                'year' => '2020-2024',
                'details' => 'Details about your degree'
            ],
            // Add more academic records
        ];
        
        return view('pages.academic', compact('academicData'));
    }

    public function achievements()
    {
        // Add your achievements data here
        $achievements = [
            [
                'title' => 'Achievement 1',
                'description' => 'Description of achievement',
                'date' => '2023',
                'icon' => 'trophy'
            ],
            // Add more achievements
        ];
        
        return view('pages.achievements', compact('achievements'));
    }

    public function about()
    {
        return view('pages.about');
    }
}