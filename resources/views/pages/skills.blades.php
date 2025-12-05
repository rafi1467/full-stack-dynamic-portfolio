@extends('layouts.main')

@section('title', 'Skills - My Portfolio')

@section('content')
<h1 style="font-size: 2.5rem; color: #2c3e50; margin-bottom: 2rem; text-align: center;">My Skills</h1>

<div class="content-grid">
    @foreach($skills->groupBy('category') as $category => $categorySkills)
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
@endsection