@extends('layouts.main')

@section('title', 'Skills - My Portfolio')

@section('content')
<h1 class="page-title">My Skills</h1>

@if(isset($skills) && count($skills) > 0)
    <div class="content-grid">
        @foreach($skills as $category => $categorySkills)
        <div class="content-card">
            <div class="card-title">{{ ucfirst($category) }}</div>
            <div class="card-description">
                @foreach($categorySkills as $skill)
                <div class="skill-container">
                    <div class="skill-name">
                        <span>{{ $skill->name }}</span>
                        <span>{{ $skill->proficiency }}%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-level" style="width: {{ $skill->proficiency }}%"></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
@else
    <div class="empty-state">
        <h3>No Skills Added</h3>
        <p>Skills will be displayed here once added to the database.</p>
    </div>
@endif
@endsection