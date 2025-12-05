@extends('layouts.main')

@section('title', 'Projects - My Portfolio')

@section('content')
<h1 style="font-size: 2.5rem; color: #2c3e50; margin-bottom: 2rem; text-align: center;">My Projects</h1>

<div class="content-grid">
    @foreach($projects as $project)
    <div class="content-card">
        <div class="card-title">{{ $project->title }}</div>
        <div class="card-subtitle">{{ $project->technologies }}</div>
        <div class="card-description">
            <p style="margin-bottom: 1rem;">{{ $project->description }}</p>
            <div style="display: flex; gap: 1rem; margin-top: 1rem;">
                @if($project->github_link)
                <a href="{{ $project->github_link }}" 
                   target="_blank"
                   style="padding: 0.5rem 1rem; background-color: #2c3e50; color: white; text-decoration: none; border-radius: 4px; font-size: 0.9rem;">
                    GitHub
                </a>
                @endif
                @if($project->live_link)
                <a href="{{ $project->live_link }}" 
                   target="_blank"
                   style="padding: 0.5rem 1rem; background-color: #3498db; color: white; text-decoration: none; border-radius: 4px; font-size: 0.9rem;">
                    Live Demo
                </a>
                @endif
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection