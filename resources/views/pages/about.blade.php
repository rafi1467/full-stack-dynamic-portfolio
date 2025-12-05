@extends('layouts.main')

@section('title', 'About - My Portfolio')

@section('content')
<h1 style="font-size: 2.5rem; color: #2c3e50; margin-bottom: 2rem; text-align: center;">About Me</h1>

<div style="max-width: 800px; margin: 0 auto;">
    <div style="background-color: white; padding: 3rem; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.08);">
        <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 2rem; align-items: center; margin-bottom: 2rem;">
            <div style="width: 150px; height: 150px; background-color: #3498db; border-radius: 50%; margin: 0 auto; display: flex; align-items: center; justify-content: center;">
                <span style="color: white; font-size: 3rem;">👨‍💻</span>
            </div>
            <div>
                <h2 style="color: #2c3e50; margin-bottom: 1rem;">Full Stack Developer</h2>
                <p style="color: #666; line-height: 1.6;">
                    I'm a passionate full-stack developer with expertise in building modern web applications.
                    I enjoy creating efficient, scalable solutions and learning new technologies.
                </p>
            </div>
        </div>
        
        <div style="margin-top: 2rem;">
            <h3 style="color: #2c3e50; margin-bottom: 1rem;">My Journey</h3>
            <p style="color: #666; line-height: 1.6; margin-bottom: 1.5rem;">
                Started my journey in web development 5 years ago, and have been working on various projects
                ranging from simple websites to complex web applications.
            </p>
            
            <h3 style="color: #2c3e50; margin-bottom: 1rem;">What I Do</h3>
            <ul style="color: #666; line-height: 1.6; padding-left: 1.5rem;">
                <li>Web Application Development</li>
                <li>API Development and Integration</li>
                <li>Database Design and Optimization</li>
                <li>UI/UX Implementation</li>
                <li>DevOps and Deployment</li>
            </ul>
        </div>
    </div>
</div>
@endsection