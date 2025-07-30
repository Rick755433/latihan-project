@extends('layout')

@section('title', 'About - F1 Racing Experience')
@section('content')
<!-- Hero Section -->
<div class="about-hero text-white py-5 position-relative overflow-hidden">
    <div class="f1-background"></div>
    <div class="container position-relative">
        <div class="row align-items-center min-vh-50">
            <div class="col-lg-8 mx-auto text-center">
                <div class="f1-logo mb-3">
                    <i class="fas fa-user-helmet-safety" style="font-size: 4rem; color: #e10600;"></i>
                </div>
                <h1 class="display-3 fw-bold mb-4 text-uppercase" style="color: #e10600; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">
                    About The Driver
                </h1>
                <p class="lead mb-4" style="font-size: 1.3rem;">Meet the passionate developer behind this F1 racing experience</p>
            </div>
        </div>
    </div>
</div>

<!-- Personal Info Section -->
<div class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="driver-card border-0 shadow-lg">
                    <div class="card-body p-5">
                        <div class="row">
                            <div class="col-md-4 text-center mb-4">
                                <div class="driver-avatar mb-3">
                                    <i class="fas fa-user-circle" style="font-size: 8rem; color: #e10600;"></i>
                                </div>
                                <h3 class="fw-bold text-danger">Muhamad Riski Munandar</h3>
                                <p class="text-muted">Full Stack Developer</p>
                                <div class="driver-stats">
                                    <span class="badge bg-danger me-2">Racing Enthusiast</span>
                                    <span class="badge bg-secondary">Code Racer</span>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="driver-info">
                                    <div class="info-item mb-4">
                                        <div class="info-icon mb-2">
                                            <i class="fas fa-map-marker-alt text-danger" style="font-size: 1.5rem;"></i>
                                        </div>
                                        <h5 class="fw-bold">Birth Place & Date</h5>
                                        <p class="text-muted mb-0">Jakarta, 4 November 2007</p>
                                    </div>
                                    
                                    <div class="info-item mb-4">
                                        <div class="info-icon mb-2">
                                            <i class="fas fa-home text-danger" style="font-size: 1.5rem;"></i>
                                        </div>
                                        <h5 class="fw-bold">Address</h5>
                                        <p class="text-muted mb-0">Jl. Melati 21 B5 Nomor 22</p>
                                    </div>
                                    
                                    <div class="info-item mb-4">
                                        <div class="info-icon mb-2">
                                            <i class="fas fa-envelope text-danger" style="font-size: 1.5rem;"></i>
                                        </div>
                                        <h5 class="fw-bold">Email</h5>
                                        <p class="text-muted mb-0">riski@example.com</p>
                                    </div>
                                    
                                    <div class="info-item mb-4">
                                        <div class="info-icon mb-2">
                                            <i class="fas fa-heart text-danger" style="font-size: 1.5rem;"></i>
                                        </div>
                                        <h5 class="fw-bold">Hobbies</h5>
                                        <p class="text-muted mb-0">Ngoding, Membaca, dan Olahraga</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Skills Section -->
<div class="py-5" style="background: linear-gradient(135deg, #1a1a1a 0%, #333 100%);">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-12">
                <h2 class="display-5 fw-bold text-white mb-3">Racing Skills</h2>
                <div class="checkered-line mb-4"></div>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-4 mb-4">
                <div class="skill-card text-center">
                    <div class="skill-icon mb-3">
                        <i class="fas fa-code text-danger" style="font-size: 3rem;"></i>
                    </div>
                    <h4 class="text-white fw-bold">Programming</h4>
                    <p class="text-light mb-0">Passionate about coding and creating amazing digital experiences</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="skill-card text-center">
                    <div class="skill-icon mb-3">
                        <i class="fas fa-book text-warning" style="font-size: 3rem;"></i>
                    </div>
                    <h4 class="text-white fw-bold">Reading</h4>
                    <p class="text-light mb-0">Always learning and expanding knowledge through books</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="skill-card text-center">
                    <div class="skill-icon mb-3">
                        <i class="fas fa-dumbbell text-success" style="font-size: 3rem;"></i>
                    </div>
                    <h4 class="text-white fw-bold">Sports</h4>
                    <p class="text-light mb-0">Maintaining physical fitness and healthy lifestyle</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact Section -->
<div class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="display-5 fw-bold text-dark mb-4">Ready to Race Together?</h2>
                <p class="lead mb-4">Let's collaborate on exciting projects and create amazing digital experiences</p>
                <div class="d-flex justify-content-center gap-3">
                    <button class="btn btn-danger btn-lg px-4 f1-btn">
                        <i class="fas fa-envelope me-2"></i>Contact Me
                    </button>
                    <button class="btn btn-outline-dark btn-lg px-4 f1-btn-outline">
                        <i class="fas fa-download me-2"></i>Download CV
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* F1 Theme Styles */
.about-hero {
    background: linear-gradient(135deg, #1a1a1a 0%, #333 50%, #e10600 100%);
    position: relative;
}

.f1-background {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: 
        linear-gradient(45deg, transparent 40%, rgba(255,255,255,0.1) 50%, transparent 60%),
        repeating-linear-gradient(90deg, transparent, transparent 20px, rgba(255,255,255,0.05) 20px, rgba(255,255,255,0.05) 40px);
    animation: backgroundMove 10s linear infinite;
}

.checkered-line {
    height: 4px;
    background: repeating-linear-gradient(90deg, #000 0px, #000 20px, #fff 20px, #fff 40px);
    width: 100px;
    margin: 0 auto;
}

.min-vh-50 {
    min-height: 50vh;
}

/* Driver Card Styles */
.driver-card {
    border-radius: 20px;
    background: linear-gradient(135deg, #fff 0%, #f8f9fa 100%);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.driver-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 40px rgba(225, 6, 0, 0.15) !important;
}

.driver-avatar {
    transition: transform 0.3s ease;
}

.driver-card:hover .driver-avatar {
    transform: scale(1.1);
}

.info-item {
    transition: transform 0.3s ease;
    padding: 15px;
    border-radius: 10px;
    background: rgba(225, 6, 0, 0.05);
}

.info-item:hover {
    transform: translateX(10px);
    background: rgba(225, 6, 0, 0.1);
}

.info-icon {
    transition: transform 0.3s ease;
}

.info-item:hover .info-icon {
    transform: scale(1.2);
}

/* Skill Card Styles */
.skill-card {
    transition: transform 0.3s ease;
    padding: 30px 20px;
    border-radius: 15px;
    background: rgba(255,255,255,0.1);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255,255,255,0.2);
}

.skill-card:hover {
    transform: scale(1.05);
    background: rgba(255,255,255,0.15);
}

.skill-icon {
    transition: transform 0.3s ease;
}

.skill-card:hover .skill-icon {
    transform: scale(1.2);
}

/* Button Styles */
.f1-btn {
    transition: all 0.3s ease;
    border-radius: 25px;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.f1-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(225, 6, 0, 0.4);
}

.f1-btn-outline {
    transition: all 0.3s ease;
    border-radius: 25px;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.f1-btn-outline:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.2);
}

/* F1 Logo Animation */
.f1-logo {
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.05); }
    100% { transform: scale(1); }
}

@keyframes backgroundMove {
    0% { background-position: 0 0; }
    100% { background-position: 100px 0; }
}

/* Driver Stats */
.driver-stats .badge {
    transition: transform 0.3s ease;
}

.driver-stats .badge:hover {
    transform: scale(1.1);
}

/* Responsive Design */
@media (max-width: 768px) {
    .display-3 {
        font-size: 2.5rem;
    }
    
    .driver-card {
        margin: 0 15px;
    }
    
    .info-item {
        margin-bottom: 20px;
    }
}
</style>

<!-- Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
@endsection
