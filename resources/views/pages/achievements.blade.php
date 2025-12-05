@extends('layouts.main')

@section('title', 'Achievements - My Portfolio')

@section('content')
<h1 style="font-size: 2.5rem; color: #2c3e50; margin-bottom: 2rem; text-align: center;">My Achievements</h1>

<div class="content-grid">
    @foreach($achievements as $achievement)
    <div class="content-card">
        <div style="display: flex; align-items: center; margin-bottom: 1rem;">
            <div style="width: 40px; height: 40px; background-color: #f39c12; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                <span style="color: white;">🏆</span>
            </div>
            <div>
                <div class="card-title">{{ $achievement['title'] }}</div>
                <div class="card-subtitle">{{ $achievement['date'] }}</div>
            </div>
        </div>
        <div class="card-description">
            {{ $achievement['description'] }}
        </div>
    </div>
    @endforeach
</div>
@endsection