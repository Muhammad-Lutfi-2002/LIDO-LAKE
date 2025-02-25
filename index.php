<?php
// Hotel information - you can replace with database connection later
$hotelInfo = [
    'name' => 'LIDO LAKE RESORT',
    'tagline' => 'by MNC HOTEL',
    'stats' => [
        'happy_customers' => '250+',
        'completed_projects' => '600+',
        'available_rooms' => '1.8K+',
        'subscribers' => '11K+'
    ],
    'year' => date('Y'),
    'rights' => 'All rights reserved.'
];

// Navigation pages - add more as needed
$pages = ['Eleven', 'Twelve', 'Thirteen', 'Fourteen', 'Fifteen', 'Sixteen'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $hotelInfo['name']; ?> - Company Profile</title>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #0b0c2a;
            --secondary-color: #f8f9fa;
            --accent-color: #3d5a80;
            --text-color: #333;
            --light-text: #fff;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }
        
        body {
            color: var(--text-color);
            line-height: 1.6;
        }
        
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
        
        /* Header Styles */
        header {
            background-color: var(--secondary-color);
            padding: 20px 0;
        }
        
        .logo {
            display: flex;
            align-items: center;
        }
        
        .logo img {
            width: 50px;
            height: 50px;
        }
        
        .logo-text {
            margin-left: 10px;
        }
        
        .logo-text h2 {
            font-size: 18px;
            font-weight: bold;
            color: var(--primary-color);
            margin: 0;
        }
        
        .logo-text p {
            font-size: 12px;
            color: var(--text-color);
        }
        
        /* Hero Section */
        .hero {
            background-color: var(--secondary-color);
            padding: 50px 0;
            position: relative;
            overflow: hidden;
        }
        
        .hero-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 40px;
        }
        
        .hero-text {
            flex: 1;
        }
        
        .hero-text h1 {
            color: var(--primary-color);
            font-size: 2.5rem;
            margin-bottom: 20px;
            line-height: 1.2;
        }
        
        .hero-text p {
            margin-bottom: 20px;
            color: #555;
        }
        
        .hero-image {
            flex: 1;
            position: relative;
        }
        
        .hero-image img {
            width: 100%;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .browser-mockup {
            position: relative;
        }
        
        .browser-dots {
            background: #f1f1f1;
            padding: 8px;
            border-radius: 8px 8px 0 0;
            display: flex;
            gap: 5px;
        }
        
        .browser-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #ddd;
        }
        
        .btn {
            display: inline-block;
            padding: 10px 25px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            margin-right: 10px;
            transition: all 0.3s ease;
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            color: white;
        }
        
        .btn-outline {
            border: 1px solid var(--primary-color);
            color: var(--primary-color);
        }
        
        .btn:hover {
            opacity: 0.9;
            transform: translateY(-2px);
        }
        
        /* Stats Section */
        .stats-section {
            background-color: var(--primary-color);
            color: white;
            padding: 50px 0;
            text-align: center;
        }
        
        .stats-section h2 {
            font-size: 2rem;
            margin-bottom: 30px;
        }
        
        .stats-section p {
            margin-bottom: 30px;
            color: #ccc;
        }
        
        .stats-grid {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 20px;
        }
        
        .stat-box {
            background-color: white;
            color: var(--primary-color);
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            flex: 1;
            min-width: 200px;
        }
        
        .stat-box i {
            font-size: 2rem;
            margin-bottom: 15px;
            color: var(--accent-color);
        }
        
        .stat-number {
            font-size: 1.8rem;
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        .stat-label {
            font-size: 0.9rem;
            color: #666;
        }
        
        /* Features Section */
        .features-section {
            padding: 80px 0;
            background-color: var(--secondary-color);
        }
        
        .features-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            margin-bottom: 30px;
        }
        
        .feature-card {
            flex: 1;
            min-width: 300px;
        }
        
        .feature-image {
            position: relative;
            margin-bottom: 20px;
        }
        
        .feature-image img {
            width: 100%;
            border-radius: 8px;
        }
        
        .feature-info {
            flex: 1;
            min-width: 300px;
        }
        
        .feature-info i {
            font-size: 1.5rem;
            color: var(--accent-color);
            margin-bottom: 10px;
        }
        
        .feature-info h3 {
            margin-bottom: 10px;
            color: var(--primary-color);
        }
        
        .feature-info p {
            color: #666;
        }
        
        /* About Section */
        .about-section {
            padding: 80px 0;
            background-color: var(--primary-color);
            color: white;
        }
        
        .about-content {
            display: flex;
            align-items: center;
            gap: 40px;
        }
        
        .about-text {
            flex: 1;
        }
        
        .about-text h2 {
            font-size: 2rem;
            margin-bottom: 20px;
        }
        
        .about-text p {
            color: #ccc;
            margin-bottom: 20px;
        }
        
        .about-image {
            flex: 1;
        }
        
        .about-image img {
            width: 100%;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        
        /* Video Section */
        .video-section {
            padding: 80px 0;
            background-color: var(--secondary-color);
        }
        
        .video-content {
            display: flex;
            align-items: center;
            gap: 40px;
        }
        
        .video-player {
            flex: 1;
            position: relative;
        }
        
        .video-thumbnail {
            width: 100%;
            border-radius: 8px;
            position: relative;
        }
        
        .video-thumbnail img {
            width: 100%;
            border-radius: 8px;
        }
        
        .play-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 70px;
            height: 70px;
            background-color: rgba(255,255,255,0.8);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }
        
        .play-button i {
            font-size: 30px;
            color: var(--primary-color);
        }
        
        .video-text {
            flex: 1;
        }
        
        .video-text h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: var(--primary-color);
        }
        
        .video-text p {
            color: #666;
            margin-bottom: 20px;
        }
        
        /* Footer */
        footer {
            background-color: var(--primary-color);
            color: white;
            padding: 40px 0 20px;
        }
        
        .footer-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }
        
        .footer-logo {
            display: flex;
            align-items: center;
        }
        
        .footer-logo img {
            width: 40px;
            height: 40px;
        }
        
        .footer-logo-text {
            margin-left: 10px;
            color: white;
        }
        
        .footer-logo-text h3 {
            font-size: 16px;
            margin: 0;
        }
        
        .footer-logo-text p {
            font-size: 10px;
            color: #ccc;
        }
        
        .social-icons {
            display: flex;
            gap: 15px;
        }
        
        .social-icons a {
            color: white;
            font-size: 18px;
            transition: all 0.3s ease;
        }
        
        .social-icons a:hover {
            color: #ccc;
        }
        
        .footer-divider {
            height: 1px;
            background-color: rgba(255,255,255,0.2);
            margin-bottom: 20px;
        }
        
        .footer-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 14px;
            color: #ccc;
        }
        
        .footer-links {
            display: flex;
            gap: 20px;
        }
        
        .footer-links a {
            color: #ccc;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .footer-links a:hover {
            color: white;
        }
        
        .footer-nav {
            display: flex;
            gap: 20px;
            margin-top: 20px;
        }
        
        .footer-nav a {
            color: #ccc;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .footer-nav a:hover {
            color: white;
        }
        
        /* Responsive Design */
        @media (max-width: 992px) {
            .hero-content, .about-content, .video-content {
                flex-direction: column;
            }
            
            .hero-image, .about-image {
                margin-top: 30px;
            }
            
            .stats-grid {
                gap: 15px;
            }
            
            .stat-box {
                min-width: 150px;
            }
        }
        
        @media (max-width: 768px) {
            .hero-text h1 {
                font-size: 2rem;
            }
            
            .stats-grid, .features-grid {
                flex-direction: column;
            }
            
            .footer-top, .footer-bottom {
                flex-direction: column;
                text-align: center;
                gap: 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="logo">
                <div>
                <img src="Assets/only logo biru.png" alt="logo">
                </div>
                <div class="logo-text">
                    <h2><?php echo $hotelInfo['name']; ?></h2>
                    <p><?php echo $hotelInfo['tagline']; ?></p>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Drive Business Growth & On Demand Experiences</h1>
                    <p>Pellentesque convallis accumsan suscipit aliquet eu diam quis nulla turpis. In nunc massa lectus fringat sed semper bibendum id iaaculis purus malesuada porttitor aliquet pulvinar.</p>
                    <p>Mi congue convallis tincidunt lobortis amet ultricies phasellus porttitor.</p>
                    <div class="hero-buttons">
                        <a href="#info" class="btn btn-primary">Hotel Info</a>
                        <a href="#login" class="btn btn-outline">Login</a>
                    </div>
                </div>
                <div class="hero-image">
                    <div class="browser-mockup">
                        <div class="browser-dots">
                            <span class="browser-dot"></span>
                            <span class="browser-dot"></span>
                            <span class="browser-dot"></span>
                        </div>
                        <img src="Assets/Pool-View-Lido-Lake-Resort3-1.jpg" alt="Lido Lake Resort Pool View">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <h2>Bibendum amet at molestie mattis.</h2>
            <p>Rhoncus morbi et augue nec in id ullamcorper et sit. Condimentum sit nunc in eros scelerisque sed. Commodo in viverra nunc, ullamcorper ut. Non, amet, aliquet scelerisque nullam sagittis, pulvinar. Fermentum scelerisque sit consectetur hac mi. Mollis leo eleifend ultricies purus lacus.</p>
            <div class="stats-grid">
                <div class="stat-box">
                    <i class="fas fa-smile"></i>
                    <div class="stat-number"><?php echo $hotelInfo['stats']['happy_customers']; ?></div>
                    <div class="stat-label">Happy Customer</div>
                </div>
                <div class="stat-box">
                    <i class="fas fa-tasks"></i>
                    <div class="stat-number"><?php echo $hotelInfo['stats']['completed_projects']; ?></div>
                    <div class="stat-label">Completed Projects</div>
                </div>
                <div class="stat-box">
                    <i class="fas fa-bed"></i>
                    <div class="stat-number"><?php echo $hotelInfo['stats']['available_rooms']; ?></div>
                    <div class="stat-label">Available Rooms</div>
                </div>
                <div class="stat-box">
                    <i class="fas fa-users"></i>
                    <div class="stat-number"><?php echo $hotelInfo['stats']['subscribers']; ?></div>
                    <div class="stat-label">Subscribers</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="container">
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-image">
                        <div class="browser-mockup">
                            <div class="browser-dots">
                                <span class="browser-dot"></span>
                                <span class="browser-dot"></span>
                                <span class="browser-dot"></span>
                            </div>
                            <img src="Assets/Lido Lake Resort 2-1024x350.jpg" alt="Luxury Room">
                        </div>
                    </div>
                </div>
                <div class="feature-info">
                    <i class="fas fa-key"></i>
                    <h3>Egestas elit dui scelerisque ut eu purus aliquet vitae habitasse.</h3>
                    <p>Id eros pellentesque facilisi id mollis faucibus commodo enim.</p>
                </div>
            </div>
            <div class="features-grid">
                <div class="feature-info">
                    <i class="fas fa-chart-line"></i>
                    <h3>Tristique elementum, ac maecenas enim fringilla placerat scelerisque semper.</h3>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
                <div class="feature-info">
                    <i class="fas fa-cog"></i>
                    <h3>Durabitur magna eras euismod pharetra, mauris malesuada sit enim, elementum.</h3>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <div class="about-content">
                <div class="about-text">
                    <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
                    <p>Rhoncus morbi et augue nec, in id ullamcorper et sit. Condimentum sit nunc in eros scelerisque sed. Commodo in viverra nunc, ullamcorper ut. Non, amet, aliquet scelerisque nullam sagittis, pulvinar.</p>
                </div>
                <div class="about-image">
                    <div class="browser-mockup">
                        <div class="browser-dots">
                            <span class="browser-dot"></span>
                            <span class="browser-dot"></span>
                            <span class="browser-dot"></span>
                        </div>
                        <img src="Assets/Merica-Cafe-MericaCafe.jpg" alt="Resort Overview">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Section -->
    <section class="video-section">
        <div class="container">
            <div class="video-content">
                <div class="video-player">
                    <div class="video-thumbnail">
                        <img src="Assets/ImageLAP-1366x768.jpg" alt="Resort Video Tour">
                        <div class="play-button">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                </div>
                <div class="video-text">
                    <h2>Bibendum amet at molestie mattis.</h2>
                    <p>Rhoncus morbi et augue nec, in id ullamcorper et sit. Condimentum sit nunc in eros scelerisque sed. Commodo in viverra nunc, ullamcorper ut. Non, amet, aliquet scelerisque nullam sagittis, pulvinar.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-top">
                <div class="footer-logo">
                    <div>
                        <img src="Assets/only logo biru putih.png" alt="">
                    </div>
                    <div class="footer-logo-text">
                        <h3><?php echo $hotelInfo['name']; ?></h3>
                        <p><?php echo $hotelInfo['tagline']; ?></p>
                    </div>
                </div>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="https://m.facebook.com/LidoLakeResort/"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/lidolakeresort?igsh=bGEzdGt4MXRhc3Rt"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="footer-divider"></div>
            <div class="footer-bottom">
                <div class="copyright">
                    <p>LidoLakeResort © <?php echo $hotelInfo['year']; ?>. <?php echo $hotelInfo['rights']; ?></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        // Basic JavaScript for interactive elements
        document.addEventListener('DOMContentLoaded', function() {
            // Play button interaction
            const playButton = document.querySelector('.play-button');
            if (playButton) {
                playButton.addEventListener('click', function() {
                    alert('Video would play here in a production environment');
                });
            }
            
            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href').substring(1);
                    if (targetId) {
                        const targetElement = document.getElementById(targetId);
                        if (targetElement) {
                            window.scrollTo({
                                top: targetElement.offsetTop - 100,
                                behavior: 'smooth'
                            });
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>