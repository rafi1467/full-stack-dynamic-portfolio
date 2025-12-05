@extends('layouts.main')

@section('title', 'Projects - My Portfolio')

@section('content')
<h1 class="page-title">My Projects</h1>

@if($projects->count() > 0)
    <div class="content-grid">
        @foreach($projects as $project)
        <div class="content-card">
            <div class="card-title">{{ $project->title }}</div>
            <div class="card-subtitle">
                @if(is_array($project->technologies))
                    {{ implode(', ', $project->technologies) }}
                @else
                    {{ $project->technologies }}
                @endif
            </div>
            <div class="card-description">
                <p>{{ $project->description }}</p>
            </div>
            <div class="button-container">
                @if($project->github_link)
                <a href="{{ $project->github_link }}" 
                   target="_blank"
                   class="btn-github">
                    GitHub
                </a>
                @endif
                @if($project->live_link)
                <a href="{{ $project->live_link }}" 
                   target="_blank"
                   class="btn-demo">
                    Live Demo
                </a>
                @endif
            </div>
        </div>
        @endforeach
    </div>
@else
    <div class="empty-state">
        <h3>No Projects Found</h3>
        <p>No projects have been added yet. Check back soon!</p>
    </div>
@endif
@endsection