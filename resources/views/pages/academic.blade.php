@extends('layouts.main')

@section('title', 'Academic - My Portfolio')

@section('content')
<h1 style="font-size: 2.5rem; color: #2c3e50; margin-bottom: 2rem; text-align: center;">Academic Background</h1>

<div class="content-grid">
    @foreach($academicData as $academic)
    <div class="content-card">
        <div class="card-title">{{ $academic['degree'] }}</div>
        <div class="card-subtitle">{{ $academic['institution'] }} | {{ $academic['year'] }}</div>
        <div class="card-description">
            {{ $academic['details'] }}
        </div>
    </div>
    @endforeach
</div>
@endsection