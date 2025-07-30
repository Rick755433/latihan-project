@extends('layout')

@section('title', 'F1 Racing Gallery')
@section('content')
<!-- Hero Section -->
<div class="gallery-hero text-white py-5 position-relative overflow-hidden">
    <div class="f1-background"></div>
    <div class="container position-relative">
        <div class="row align-items-center min-vh-50">
            <div class="col-lg-8 mx-auto text-center">
                <div class="f1-logo mb-3">
                    <i class="fas fa-images" style="font-size: 4rem; color: #e10600;"></i>
                </div>
                <h1 class="display-3 fw-bold mb-4 text-uppercase" style="color: #e10600; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">
                    F1 Racing Gallery
                </h1>
                <p class="lead mb-4" style="font-size: 1.3rem;">Experience the beauty and power of Formula 1 racing through stunning photography</p>
            </div>
        </div>
    </div>
</div>

<!-- Gallery Filter Section -->
<div class="py-4 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="filter-buttons">
                    <button class="btn btn-danger filter-btn active" data-filter="all">
                        <i class="fas fa-th me-2"></i>All Photos
                    </button>
                    <button class="btn btn-outline-danger filter-btn" data-filter="cars">
                        <i class="fas fa-car me-2"></i>F1 Cars
                    </button>
                    <button class="btn btn-outline-danger filter-btn" data-filter="races">
                        <i class="fas fa-flag-checkered me-2"></i>Races
                    </button>
                    <button class="btn btn-outline-danger filter-btn" data-filter="drivers">
                        <i class="fas fa-user-helmet-safety me-2"></i>Drivers
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Gallery Grid -->
<div class="py-5">
    <div class="container">
        <div class="row g-4" id="gallery-grid">
            <!-- F1 Cars -->
            <div class="col-lg-4 col-md-6 gallery-item" data-category="cars">
                <div class="gallery-card">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/79/FIA_F1_Austria_2023_Nr._1_%281%29.jpg/1821px-FIA_F1_Austria_2023_Nr._1_%281%29.jpg" alt="Red Bull F1 Car" class="gallery-image">
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <h5 class="text-white fw-bold">Red Bull RB19</h5>
                            <p class="text-light mb-0">Championship winning car</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 gallery-item" data-category="cars">
                <div class="gallery-card">
                    <img src="https://cdn-3.motorsport.com/images/mgl/YMdyjMg2/s800/mercedes-w14-1.webp" alt="Mercedes F1 Car" class="gallery-image">
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <h5 class="text-white fw-bold">Mercedes W14</h5>
                            <p class="text-light mb-0">Silver arrows in action</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 gallery-item" data-category="cars">
                <div class="gallery-card">
                    <img src="https://media.formula1.com/image/upload/t_16by9Centre/c_lfill,w_3392/q_auto/v1740000000/fom-website/2025/Ferrari/Ferrari%20SF-25%20launch%20renders/F677_still_02_v11_169.webp" alt="Ferrari F1 Car" class="gallery-image">
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <h5 class="text-white fw-bold">Ferrari SF-23</h5>
                            <p class="text-light mb-0">Prancing horse power</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Races -->
            <div class="col-lg-4 col-md-6 gallery-item" data-category="races">
                <div class="gallery-card">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcEgwNp-Gvl8FxvE2jONxQYscPHcUorhVwjQ&s" alt="Monaco Grand Prix" class="gallery-image">
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <h5 class="text-white fw-bold">Monaco Grand Prix</h5>
                            <p class="text-light mb-0">The crown jewel of F1</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 gallery-item" data-category="races">
                <div class="gallery-card">
                    <img src="https://d3cm515ijfiu6w.cloudfront.net/wp-content/uploads/2024/07/07161838/british-grand-prix-2024-start-planetf1.jpg" alt="Silverstone Circuit" class="gallery-image">
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <h5 class="text-white fw-bold">British Grand Prix</h5>
                            <p class="text-light mb-0">Historic Silverstone circuit</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 gallery-item" data-category="races">
                <div class="gallery-card">
                    <img src="https://media.formula1.com/image/upload/c_lfill,w_3392/q_auto/v1740000000/content/dam/fom-website/2018-redesign-assets/Racehub%20header%20images%2016x9/Belgium.webp" alt="Spa Circuit" class="gallery-image">
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <h5 class="text-white fw-bold">Belgian Grand Prix</h5>
                            <p class="text-light mb-0">Eau Rouge challenge</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Drivers -->
            <div class="col-lg-4 col-md-6 gallery-item" data-category="drivers">
                <div class="gallery-card">
                    <img src="https://www.honda-indonesia.com/glide/2025/04/07/DKJ3aQo6NlP6nEEf35GsCgg8yrIRsO7rFSlcOYi2.jpg?w=900&s=47bc84641b5d4b82f955adcbc8fe05b8" alt="Max Verstappen" class="gallery-image">
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <h5 class="text-white fw-bold">Max Verstappen</h5>
                            <p class="text-light mb-0">Red Bull Racing</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 gallery-item" data-category="drivers">
                <div class="gallery-card">
                    <img src="https://media-cldnry.s-nbcnews.com/image/upload/t_fit-560w,f_auto,q_auto:best/rockcms/2024-12/241205-lewis-hamilton-ew-356p-e9ff2a.jpg" alt="Lewis Hamilton" class="gallery-image">
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <h5 class="text-white fw-bold">Lewis Hamilton</h5>
                            <p class="text-light mb-0">Mercedes AMG</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 gallery-item" data-category="drivers">
                <div class="gallery-card">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/08/Charles-Leclerc.jpg/960px-Charles-Leclerc.jpg" alt="Charles Leclerc" class="gallery-image">
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <h5 class="text-white fw-bold">Charles Leclerc</h5>
                            <p class="text-light mb-0">Ferrari</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- More F1 Cars -->
            <div class="col-lg-4 col-md-6 gallery-item" data-category="cars">
                <div class="gallery-card">
                    <img src="https://www.amalgamcollection.com/cdn/shop/files/Wideedit_4b5ab1d0-1ed3-468f-85f5-404412a1752f_2000x850_crop_center.jpg?v=1720081693" alt="McLaren F1 Car" class="gallery-image">
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <h5 class="text-white fw-bold">McLaren MCL60</h5>
                            <p class="text-light mb-0">Papaya orange beauty</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 gallery-item" data-category="cars">
                <div class="gallery-card">
                    <img src="https://assets.astonmartinf1.com/public/cms/4CGNZQbrGBlzIqMDs2zCnx/5ab5e41ea19962ac015527a238f0995a/AMR23_____Hero_____Desktop__1__Updated_July_23.jpg?&h=849&w=1440&fm=jpg&fit=thumb" alt="Aston Martin F1 Car" class="gallery-image">
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <h5 class="text-white fw-bold">Aston Martin AMR23</h5>
                            <p class="text-light mb-0">British racing green</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 gallery-item" data-category="cars">
                <div class="gallery-card">
                    <img src="https://cdn-1.motorsport.com/images/mgl/YXRx7bo0/s8/alpine-a523-1.jpg" alt="Alpine F1 Car" class="gallery-image">
                    <div class="gallery-overlay">
                        <div class="gallery-content">
                            <h5 class="text-white fw-bold">Alpine A523</h5>
                            <p class="text-light mb-0">French engineering</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Gallery Stats -->
<div class="py-5" style="background: linear-gradient(135deg, #1a1a1a 0%, #333 100%);">
    <div class="container">
        <div class="row text-center text-white">
            <div class="col-md-3 mb-4">
                <div class="stat-item">
                    <h3 class="display-4 fw-bold mb-2">50+</h3>
                    <p class="mb-0">F1 Cars</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="stat-item">
                    <h3 class="display-4 fw-bold mb-2">23</h3>
                    <p class="mb-0">Races</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="stat-item">
                    <h3 class="display-4 fw-bold mb-2">20</h3>
                    <p class="mb-0">Drivers</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="stat-item">
                    <h3 class="display-4 fw-bold mb-2">10</h3>
                    <p class="mb-0">Teams</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* F1 Gallery Styles */
.gallery-hero {
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

.min-vh-50 {
    min-height: 50vh;
}

/* Filter Buttons */
.filter-buttons {
    display: flex;
    justify-content: center;
    gap: 15px;
    flex-wrap: wrap;
}

.filter-btn {
    border-radius: 25px;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: all 0.3s ease;
    padding: 10px 20px;
}

.filter-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(225, 6, 0, 0.3);
}

.filter-btn.active {
    background: #e10600;
    color: white;
    box-shadow: 0 5px 15px rgba(225, 6, 0, 0.4);
}

/* Gallery Cards */
.gallery-card {
    position: relative;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    height: 300px;
}

.gallery-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(225, 6, 0, 0.2);
}

.gallery-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.gallery-card:hover .gallery-image {
    transform: scale(1.1);
}

.gallery-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(225, 6, 0, 0.8) 0%, rgba(0,0,0,0.8) 100%);
    display: flex;
    align-items: flex-end;
    padding: 20px;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.gallery-card:hover .gallery-overlay {
    opacity: 1;
}

.gallery-content h5 {
    margin-bottom: 5px;
    font-size: 1.2rem;
}

.gallery-content p {
    font-size: 0.9rem;
    opacity: 0.9;
}

/* Gallery Item Animation */
.gallery-item {
    transition: all 0.3s ease;
}

.gallery-item.hidden {
    display: none;
}

.gallery-item.show {
    animation: fadeInUp 0.6s ease;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Stat Items */
.stat-item {
    transition: transform 0.3s ease;
    padding: 20px;
    border-radius: 15px;
    background: rgba(255,255,255,0.1);
    backdrop-filter: blur(10px);
}

.stat-item:hover {
    transform: scale(1.05);
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

/* Responsive Design */
@media (max-width: 768px) {
    .display-3 {
        font-size: 2.5rem;
    }
    
    .filter-buttons {
        flex-direction: column;
        align-items: center;
    }
    
    .filter-btn {
        width: 200px;
    }
    
    .gallery-card {
        height: 250px;
    }
}
</style>

<script>
// Gallery Filter Functionality
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const galleryItems = document.querySelectorAll('.gallery-item');

    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove active class from all buttons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            // Add active class to clicked button
            this.classList.add('active');

            const filter = this.getAttribute('data-filter');

            galleryItems.forEach(item => {
                const category = item.getAttribute('data-category');
                
                if (filter === 'all' || category === filter) {
                    item.classList.remove('hidden');
                    item.classList.add('show');
                } else {
                    item.classList.add('hidden');
                    item.classList.remove('show');
                }
            });
        });
    });
});
</script>

<!-- Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
@endsection
