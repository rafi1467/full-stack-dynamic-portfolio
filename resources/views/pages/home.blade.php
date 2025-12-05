@extends('layouts.main')

@section('title', 'Home - My Portfolio')

@section('content')
<div class="portfolio-header">
    <h1>My Portfolio</h1>
</div>

<table class="portfolio-table">
    <thead>
        <tr>
            <th>Home</th>
            <th>Skills</th>
            <th>Projects</th>
            <th>Academic</th>
            <th>Achievements</th>
            <th>About</th>
            <th>Contact</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td colspan="7" style="background-color: #f9f9f9;">
                <div class="section-title">Projects</div>
                <div class="content-grid">
                    <div class="content-card">
                        <div class="card-title">Project 1</div>
                        <div class="card-subtitle">Web Application</div>
                        <div class="card-description">
                            A full-stack web application built with Laravel and React.
                        </div>
                    </div>
                    <div class="content-card">
                        <div class="card-title">Project 2</div>
                        <div class="card-subtitle">Mobile App</div>
                        <div class="card-description">
                            A cross-platform mobile application using React Native.
                        </div>
                    </div>
                    <div class="content-card">
                        <div class="card-title">Project 3</div>
                        <div class="card-subtitle">E-commerce Platform</div>
                        <div class="card-description">
                            An online shopping platform with payment integration.
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="7">
                <div class="section-title">Contact</div>
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem;">
                    <div>
                        <h3 style="color: #2c3e50; margin-bottom: 1rem;">Get In Touch</h3>
                        <p style="color: #666; margin-bottom: 1.5rem;">
                            Feel free to contact me for any inquiries or collaboration opportunities.
                        </p>
                        <div style="margin-top: 1.5rem;">
                            <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                                <span style="color: #3498db; margin-right: 0.5rem;">📧</span>
                                <span>email@example.com</span>
                            </div>
                            <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                                <span style="color: #3498db; margin-right: 0.5rem;">📱</span>
                                <span>+123 456 7890</span>
                            </div>
                            <div style="display: flex; align-items: center;">
                                <span style="color: #3498db; margin-right: 0.5rem;">📍</span>
                                <span>City, Country</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h3 style="color: #2c3e50; margin-bottom: 1rem;">Quick Contact Form</h3>
                        <form class="contact-form">
                            <div class="form-group">
                                <label class="form-label" for="name">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Your name">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Your email">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="message">Message</label>
                                <textarea class="form-control" id="message" rows="3" placeholder="Your message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </form>
                    </div>
                </div>
            </td>
        </tr>
    </tbody>
</table>

<div style="margin-top: 3rem; text-align: center;">
    <div style="display: inline-flex; gap: 2rem;">
        <a href="{{ route('projects') }}" style="text-decoration: none; color: #3498db; font-weight: 500; display: flex; align-items: center;">
            <span style="margin-right: 0.5rem;">▶</span> View All Projects
        </a>
        <a href="{{ route('contact') }}" style="text-decoration: none; color: #3498db; font-weight: 500; display: flex; align-items: center;">
            <span style="margin-right: 0.5rem;">▶</span> Contact Me
        </a>
    </div>
</div>
@endsection