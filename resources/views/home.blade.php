@extends('layouts.main')

@section('title', 'Home - Tu Nombre')

@section('styles')
<style>
    .hero-section {
        background-image: url('https://via.placeholder.com/1920x1080');
        background-size: cover;
        background-position: center;
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        color: white;
        text-align: center;
        position: relative;
    }
    
    .hero-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.6);
    }
    
    .hero-content {
        position: relative;
        z-index: 1;
    }
    
    .hero-title {
        font-size: 4rem;
        margin-bottom: 1rem;
    }
    
    .hero-subtitle {
        font-size: 1.5rem;
        margin-bottom: 2rem;
    }
    
    .hero-buttons .btn {
        margin: 0 10px;
        padding: 10px 25px;
        border: 1px solid #4CAF50;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: all 0.3s;
    }
    
    .btn-outline-green {
        color: #4CAF50;
        background-color: transparent;
    }
    
    .btn-outline-green:hover {
        background-color: #4CAF50;
        color: white;
    }
</style>
@endsection

@section('content')
<div class="hero-section">
    <div class="hero-content">
        <h1 class="hero-title">Tu Nombre</h1>
        <p class="hero-subtitle">I'M Professional</p>
        <div class="hero-buttons">
            <a href="{{ route('resume') }}" class="btn btn-outline-green">Download Resume</a>
            <a href="{{ route('contact') }}" class="btn btn-outline-green">Hire Me</a>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <article class="blog-post">
                <div class="blog-meta">
                    <span>By admin</span>
                    <span>Posted on December 3, 2023</span>
                    <span>Posted in Art</span>
                </div>
                <h2 class="blog-title mt-3">Decoration House With Scandinavian Style</h2>
                <p class="blog-excerpt">
                    Today most people get on average 4 to 6 hours of exercise every day, and make sure that everything they put in their mouths is not filled with sugars or preservatives, but they pay no attention to their mental health, no vacations, not even the occasional long weekend. All of this for hopes of one day getting that big promotion.
                </p>
                <a href="#" class="text-success">READ MORE »</a>
            </article>
        </div>
    </div>
</div>
@endsection