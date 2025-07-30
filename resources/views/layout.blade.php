<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <title>@yield('title')</title>
  </head>
  <body>
    <!-- F1 Racing Navigation -->
    <nav class="navbar navbar-expand-lg f1-navbar">
        <div class="container">
            <!-- F1 Logo/Brand -->
            <a class="navbar-brand f1-brand" href="/">
                <i class="fas fa-flag-checkered me-2"></i>
                <span class="f1-text">F1 RACING</span>
            </a>

            <!-- Mobile Toggle Button -->
            <button class="navbar-toggler f1-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navigation Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link f1-nav-link" href="/">
                            <i class="fas fa-home me-1"></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link f1-nav-link" href="/about">
                            <i class="fas fa-user me-1"></i>
                            <span>About</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link f1-nav-link" href="/gallery">
                            <i class="fas fa-images me-1"></i>
                            <span>Gallery</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- F1 Racing Footer -->
    <footer class="f1-footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <div class="f1-brand mb-2">
                        <i class="fas fa-flag-checkered me-2"></i>
                        <span class="f1-text">F1 RACING EXPERIENCE</span>
                    </div>
                    <p class="text-light mb-0">Experience the thrill of Formula 1 racing</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="social-links">
                        <a href="#" class="social-link me-3">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" class="social-link me-3">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-link me-3">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="social-link">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12 text-center">
                    <div class="checkered-line-footer"></div>
                    <p class="text-light mt-3 mb-0">&copy; 2024 F1 Racing Experience. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYkcbJZ1sYjFQGAJQdIwVjOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyj" crossorigin="anonymous"></script>

    <style>
    /* F1 Racing Navbar Styles */
    .f1-navbar {
        background: linear-gradient(135deg, #1a1a1a 0%, #333 50%, #e10600 100%);
        box-shadow: 0 4px 20px rgba(225, 6, 0, 0.3);
        padding: 1rem 0;
        position: sticky;
        top: 0;
        z-index: 1000;
    }

    .f1-brand {
        color: #fff !important;
        font-weight: bold;
        font-size: 1.5rem;
        text-transform: uppercase;
        letter-spacing: 2px;
        transition: all 0.3s ease;
    }

    .f1-brand:hover {
        color: #e10600 !important;
        transform: scale(1.05);
    }

    .f1-text {
        background: linear-gradient(45deg, #fff, #e10600);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .f1-nav-link {
        color: #fff !important;
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin: 0 10px;
        padding: 10px 15px !important;
        border-radius: 25px;
        transition: all 0.3s ease;
        position: relative;
    }

    .f1-nav-link:hover {
        color: #e10600 !important;
        background: rgba(255, 255, 255, 0.1);
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(225, 6, 0, 0.3);
    }

    .f1-nav-link.active {
        background: rgba(225, 6, 0, 0.2);
        color: #e10600 !important;
    }

    .f1-toggler {
        border: 2px solid #e10600;
        border-radius: 10px;
    }

    .f1-toggler:focus {
        box-shadow: 0 0 0 0.2rem rgba(225, 6, 0, 0.25);
    }

    .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(225, 6, 0, 1)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    /* F1 Footer Styles */
    .f1-footer {
        background: linear-gradient(135deg, #1a1a1a 0%, #333 100%);
        color: #fff;
        position: relative;
        overflow: hidden;
    }

    .f1-footer::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 2px;
        background: repeating-linear-gradient(90deg, #e10600 0px, #e10600 20px, #fff 20px, #fff 40px);
    }

    .checkered-line-footer {
        height: 3px;
        background: repeating-linear-gradient(90deg, #000 0px, #000 15px, #fff 15px, #fff 30px);
        width: 200px;
        margin: 0 auto;
    }

    .social-links {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .social-link {
        color: #fff;
        font-size: 1.5rem;
        transition: all 0.3s ease;
        display: inline-block;
        width: 40px;
        height: 40px;
        line-height: 40px;
        text-align: center;
        border-radius: 50%;
        background: rgba(225, 6, 0, 0.2);
    }

    .social-link:hover {
        color: #e10600;
        background: rgba(225, 6, 0, 0.3);
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(225, 6, 0, 0.4);
    }

    /* Active Navigation Highlight */
    .nav-link.active {
        background: rgba(225, 6, 0, 0.2) !important;
        color: #e10600 !important;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .f1-brand {
            font-size: 1.2rem;
        }
        
        .f1-nav-link {
            margin: 5px 0;
            text-align: center;
        }
        
        .social-links {
            margin-top: 15px;
        }
    }

    /* Animation for navbar brand */
    .f1-brand i {
        animation: flagWave 2s ease-in-out infinite;
    }

    @keyframes flagWave {
        0%, 100% { transform: rotate(0deg); }
        25% { transform: rotate(5deg); }
        75% { transform: rotate(-5deg); }
    }

    /* Hover effect for nav items */
    .f1-nav-link::before {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        width: 0;
        height: 2px;
        background: #e10600;
        transition: all 0.3s ease;
        transform: translateX(-50%);
    }

    .f1-nav-link:hover::before {
        width: 80%;
    }
    </style>

    <script>
    // Add active class to current page
    document.addEventListener('DOMContentLoaded', function() {
        const currentLocation = window.location.pathname;
        const navLinks = document.querySelectorAll('.f1-nav-link');
        
        navLinks.forEach(link => {
            if (link.getAttribute('href') === currentLocation) {
                link.classList.add('active');
            }
        });
    });
    </script>
  </body>
</html>
