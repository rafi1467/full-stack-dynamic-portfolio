@extends('layouts.main')

@section('title', 'Contact - My Portfolio')

@section('content')
<div style="max-width: 800px; margin: 0 auto;">
    <h1 style="font-size: 2.5rem; color: #2c3e50; margin-bottom: 2rem; text-align: center;">Contact Me</h1>
    
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; margin-bottom: 3rem;">
        <div>
            <h2 style="color: #2c3e50; margin-bottom: 1.5rem;">Contact Information</h2>
            <div style="background-color: white; padding: 2rem; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                <div style="display: flex; align-items: center; margin-bottom: 1.5rem; padding-bottom: 1rem; border-bottom: 1px solid #eee;">
                    <div style="width: 40px; height: 40px; background-color: #3498db; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                        <span style="color: white;">📧</span>
                    </div>
                    <div>
                        <div style="font-weight: 600; color: #2c3e50;">Email</div>
                        <div style="color: #666;">rafi22205101467@diu.edu.bd</div>
                    </div>
                </div>
                
                <div style="display: flex; align-items: center; margin-bottom: 1.5rem; padding-bottom: 1rem; border-bottom: 1px solid #eee;">
                    <div style="width: 40px; height: 40px; background-color: #3498db; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                        <span style="color: white;">📱</span>
                    </div>
                    <div>
                        <div style="font-weight: 600; color: #2c3e50;">Phone</div>
                        <div style="color: #666;">+8801724886212</div>
                    </div>
                </div>
                
                <div style="display: flex; align-items: center;">
                    <div style="width: 40px; height: 40px; background-color: #3498db; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                        <span style="color: white;">📍</span>
                    </div>
                    <div>
                        <div style="font-weight: 600; color: #2c3e50;">Location</div>
                        <div style="color: #666;">Dhaka, Bangladesh</div>
                    </div>
                </div>
            </div>
        </div>
        
        <div>
            <h2 style="color: #2c3e50; margin-bottom: 1.5rem;">Send a Message</h2>
            <div style="background-color: white; padding: 2rem; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                <form action="{{ route('contact.store') }}" method="POST" class="contact-form">
                    @csrf
                    
                    <div class="form-group">
                        <label class="form-label" for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required placeholder="Your name">
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label" for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required placeholder="Your email">
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label" for="subject">Subject</label>
                        <input type="text" class="form-control" id="subject" name="subject" required placeholder="Message subject">
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label" for="message">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="4" required placeholder="Your message"></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary" style="width: 100%;">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection