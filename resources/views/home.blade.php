@extends('layout')

@section('title', 'F1 Racing Experience')
@section('content')
<!-- Hero Section with F1 Theme -->
<div class="hero-section text-white py-5 position-relative overflow-hidden">
    <div class="f1-background"></div>
    <div class="container position-relative">
        <div class="row align-items-center min-vh-75">
            <div class="col-lg-6">
                <div class="f1-logo mb-3">
                    <i class="fas fa-flag-checkered" style="font-size: 4rem; color: #e10600;"></i>
                </div>
                <h1 class="display-3 fw-bold mb-4 text-uppercase" style="color: #e10600; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">
                    Formula 1 Racing
                </h1>
                <p class="lead mb-4" style="font-size: 1.3rem;">Experience the thrill of high-speed racing with cutting-edge technology and world-class performance.</p>
                <div class="d-flex gap-3">
                    <button class="btn btn-danger btn-lg px-4 f1-btn">Start Racing</button>
                    <button class="btn btn-outline-light btn-lg px-4 f1-btn-outline">View Schedule</button>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <div class="f1-car-animation">
                    <i class="fas fa-car" style="font-size: 8rem; color: #e10600; animation: carMove 3s infinite;"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Racing Stats Section -->
<div class="py-5" style="background: linear-gradient(135deg, #1a1a1a 0%, #333 100%);">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-12">
                <h2 class="display-5 fw-bold text-white mb-3">Racing Statistics</h2>
                <div class="checkered-line mb-4"></div>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-3 mb-4">
                <div class="stat-card text-center">
                    <div class="stat-icon mb-3">
                        <i class="fas fa-tachometer-alt text-danger" style="font-size: 3rem;"></i>
                    </div>
                    <h3 class="text-white fw-bold">350+</h3>
                    <p class="text-light mb-0">KM/H Top Speed</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="stat-card text-center">
                    <div class="stat-icon mb-3">
                        <i class="fas fa-clock text-warning" style="font-size: 3rem;"></i>
                    </div>
                    <h3 class="text-white fw-bold">1.2s</h3>
                    <p class="text-light mb-0">0-100 KM/H</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="stat-card text-center">
                    <div class="stat-icon mb-3">
                        <i class="fas fa-trophy text-success" style="font-size: 3rem;"></i>
                    </div>
                    <h3 class="text-white fw-bold">23</h3>
                    <p class="text-light mb-0">Races This Season</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="stat-card text-center">
                    <div class="stat-icon mb-3">
                        <i class="fas fa-users text-info" style="font-size: 3rem;"></i>
                    </div>
                    <h3 class="text-white fw-bold">10</h3>
                    <p class="text-light mb-0">Teams Competing</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Teams Section -->
<div class="py-5 bg-light">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-12">
                <h2 class="display-5 fw-bold text-dark mb-3">Top Teams</h2>
                <div class="checkered-line mb-4"></div>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="team-card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="team-logo mb-3">
                            <i class="fas fa-crown text-warning" style="font-size: 3rem;"></i>
                        </div>
                        <h4 class="card-title fw-bold">Red Bull Racing</h4>
                        <p class="card-text text-muted">Dominating the grid with innovative aerodynamics and superior performance.</p>
                        <div class="team-stats">
                            <span class="badge bg-danger me-2">Champions</span>
                            <span class="badge bg-secondary">Constructors</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team-card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="team-logo mb-3">
                            <i class="fas fa-star text-primary" style="font-size: 3rem;"></i>
                        </div>
                        <h4 class="card-title fw-bold">Mercedes AMG</h4>
                        <p class="card-text text-muted">Engineering excellence with hybrid power units and precision engineering.</p>
                        <div class="team-stats">
                            <span class="badge bg-primary me-2">Silver Arrows</span>
                            <span class="badge bg-secondary">Innovation</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team-card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="team-logo mb-3">
                            <i class="fas fa-bolt text-warning" style="font-size: 3rem;"></i>
                        </div>
                        <h4 class="card-title fw-bold">Ferrari</h4>
                        <p class="card-text text-muted">The Prancing Horse legacy with passion, speed, and Italian excellence.</p>
                        <div class="team-stats">
                            <span class="badge bg-danger me-2">Scuderia</span>
                            <span class="badge bg-secondary">Heritage</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Track Section -->
<div class="py-5" style="background: linear-gradient(135deg, #e10600 0%, #ff4444 100%);">
    <div class="container text-center text-white">
        <h2 class="display-5 fw-bold mb-4">Next Race: Monaco Grand Prix</h2>
        <p class="lead mb-4">The most prestigious race of the season on the streets of Monte Carlo</p>
        <div class="countdown-timer mb-4">
            <div class="row justify-content-center">
                <div class="col-md-2 mb-3">
                    <div class="timer-box">
                        <h3 class="display-6 fw-bold">14</h3>
                        <p class="mb-0">Days</p>
                    </div>
                </div>
                <div class="col-md-2 mb-3">
                    <div class="timer-box">
                        <h3 class="display-6 fw-bold">08</h3>
                        <p class="mb-0">Hours</p>
                    </div>
                </div>
                <div class="col-md-2 mb-3">
                    <div class="timer-box">
                        <h3 class="display-6 fw-bold">32</h3>
                        <p class="mb-0">Minutes</p>
                    </div>
                </div>
                <div class="col-md-2 mb-3">
                    <div class="timer-box">
                        <h3 class="display-6 fw-bold">45</h3>
                        <p class="mb-0">Seconds</p>
                    </div>
                </div>
            </div>
        </div>
        <button class="btn btn-light btn-lg px-5 f1-btn">Get Tickets</button>
    </div>
</div>

<!-- CTA Section -->
<div class="py-5 bg-dark text-white">
    <div class="container text-center">
        <h2 class="display-5 fw-bold mb-4">Join the F1 Experience</h2>
        <p class="lead mb-4">Be part of the fastest sport on Earth. Subscribe to F1 TV for exclusive content.</p>
        <div class="d-flex justify-content-center gap-3">
            <button class="btn btn-danger btn-lg px-4 f1-btn">Subscribe Now</button>
            <button class="btn btn-outline-light btn-lg px-4 f1-btn-outline">Watch Live</button>
        </div>
    </div>
</div>

<style>
/* F1 Theme Styles */
.hero-section {
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

.min-vh-75 {
    min-height: 75vh;
}

/* Animations */
@keyframes carMove {
    0% { transform: translateX(-100px); opacity: 0; }
    20% { opacity: 1; }
    80% { opacity: 1; }
    100% { transform: translateX(100px); opacity: 0; }
}

@keyframes backgroundMove {
    0% { background-position: 0 0; }
    100% { background-position: 100px 0; }
}

/* Card Styles */
.team-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border-radius: 15px;
}

.team-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 35px rgba(225, 6, 0, 0.2) !important;
}

.stat-card {
    transition: transform 0.3s ease;
    padding: 20px;
    border-radius: 15px;
    background: rgba(255,255,255,0.1);
    backdrop-filter: blur(10px);
}

.stat-card:hover {
    transform: scale(1.05);
}

.timer-box {
    background: rgba(255,255,255,0.1);
    padding: 20px;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.2);
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
    box-shadow: 0 8px 25px rgba(255,255,255,0.3);
}

/* Team Logo Animation */
.team-logo {
    transition: transform 0.3s ease;
}

.team-card:hover .team-logo {
    transform: scale(1.2) rotate(5deg);
}

/* Stat Icon Animation */
.stat-icon {
    transition: transform 0.3s ease;
}

.stat-card:hover .stat-icon {
    transform: scale(1.1);
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

/* Responsive Design */
@media (max-width: 768px) {
    .display-3 {
        font-size: 2.5rem;
    }
    
    .display-6 {
        font-size: 1.5rem;
    }
}
</style>

<!-- Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
@endsection
