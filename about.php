<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - HeartCare Cardiac Hospital</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            color: #333;
            line-height: 1.6;
            background-color: #f8f9fa;
        }
        
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .btn {
            display: inline-block;
            padding: 12px 25px;
            background: #2a6cc9;
            color: white;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .btn:hover {
            background: #1a5bb8;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        section {
            padding: 80px 0;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 50px;
            color: #1a3e6a;
        }
        
        .section-title h2 {
            font-size: 2.5rem;
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }
        
        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: #2a6cc9;
            border-radius: 2px;
        }
        
        .section-title p {
            font-size: 1.1rem;
            color: #666;
            max-width: 700px;
            margin: 0 auto;
        }
        
        /* Header Styles */
        header {
            background: linear-gradient(135deg, #1a3e6a 0%, #2a6cc9 100%);
            color: white;
            padding: 15px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
        }
        
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            display: flex;
            align-items: center;
        }
        
        .logo i {
            font-size: 2.5rem;
            color: #ff6b6b;
            margin-right: 10px;
        }
        
        .logo h1 {
            font-size: 1.8rem;
            font-weight: 700;
        }
        
        .logo span {
            color: #4ecdc4;
        }
        
        nav ul {
            display: flex;
            list-style: none;
        }
        
        nav ul li {
            margin-left: 25px;
        }
        
        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            padding: 5px 10px;
            border-radius: 4px;
        }
        
        nav ul li a:hover {
            color: #4ecdc4;
            background: rgba(255, 255, 255, 0.1);
        }
        
        .emergency-contact {
            text-align: right;
        }
        
        .emergency-contact p {
            font-size: 0.9rem;
            margin-bottom: 5px;
        }
        
        .emergency-number {
            font-size: 1.2rem;
            font-weight: 700;
            color: #ff6b6b;
        }
        
        /* Page Header */
        .page-header {
            background: linear-gradient(rgba(26, 62, 106, 0.8), rgba(26, 62, 106, 0.8)), url('IMG/about.webp') no-repeat center center/cover;
            color: white;
            padding: 100px 0;
            text-align: center;
        }
        
        .page-header h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }
        
        .breadcrumb {
            display: flex;
            justify-content: center;
            list-style: none;
        }
        
        .breadcrumb li {
            margin: 0 10px;
        }
        
        .breadcrumb li a {
            color: #4ecdc4;
            text-decoration: none;
        }
        
        .breadcrumb li::after {
            content: '/';
            margin-left: 10px;
            color: #ccc;
        }
        
        .breadcrumb li:last-child::after {
            content: '';
        }
        
        /* About Intro */
        .about-intro {
            background: white;
        }
        
        .intro-content {
            display: flex;
            align-items: center;
            gap: 50px;
        }
        
        .intro-image {
            flex: 1;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .intro-image img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.8s ease;
        }
        
        .intro-image:hover img {
            transform: scale(1.05);
        }
        
        .intro-text {
            flex: 1;
        }
        
        .intro-text h2 {
            font-size: 2.2rem;
            margin-bottom: 20px;
            color: #1a3e6a;
        }
        
        .intro-text p {
            margin-bottom: 20px;
            font-size: 1.1rem;
            color: #555;
        }
        
        /* Mission Vision */
        .mission-vision {
            background: #eaf4ff;
        }
        
        .mv-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
        }
        
        .mv-card {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            text-align: center;
            transition: transform 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .mv-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(to right, #2a6cc9, #4ecdc4);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.5s ease;
        }
        
        .mv-card:hover::before {
            transform: scaleX(1);
        }
        
        .mv-card:hover {
            transform: translateY(-10px);
        }
        
        .mv-card i {
            font-size: 3rem;
            color: #2a6cc9;
            margin-bottom: 20px;
            transition: transform 0.5s ease, color 0.3s ease;
        }
        
        .mv-card:hover i {
            transform: scale(1.2);
            color: #4ecdc4;
        }
        
        .mv-card h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: #1a3e6a;
        }
        
        /* Stats Section */
        .stats {
            background: linear-gradient(135deg, #1a3e6a 0%, #2a6cc9 100%);
            color: white;
        }
        
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            text-align: center;
        }
        
        .stat-item {
            position: relative;
            padding: 20px;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.1);
            transition: transform 0.3s ease, background 0.3s ease;
        }
        
        .stat-item:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.15);
        }
        
        .stat-item h3 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            color: #4ecdc4;
        }
        
        .stat-item p {
            font-size: 1.1rem;
        }
        
        /* Leadership */
        .leadership-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }
        
        .leader-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            text-align: center;
            transition: transform 0.3s ease;
        }
        
        .leader-card:hover {
            transform: translateY(-10px);
        }
        
        .leader-image {
            height: 300px;
            overflow: hidden;
            position: relative;
        }
        
        .leader-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, transparent 0%, rgba(26, 62, 106, 0.7) 100%);
            opacity: 0;
            transition: opacity 0.5s ease;
            z-index: 1;
        }
        
        .leader-card:hover .leader-image::before {
            opacity: 1;
        }
        
        .leader-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .leader-card:hover .leader-image img {
            transform: scale(1.05);
        }
        
        .leader-info {
            padding: 20px;
            position: relative;
        }
        
        .leader-info h3 {
            font-size: 1.4rem;
            margin-bottom: 5px;
            color: #1a3e6a;
        }
        
        .leader-info p {
            color: #2a6cc9;
            margin-bottom: 15px;
            font-weight: 500;
        }
        
        /* CTA Section */
        .cta {
            background: linear-gradient(rgba(26, 62, 106, 0.9), rgba(26, 62, 106, 0.9)), url('IMG/about.webp') no-repeat center center/cover;
            color: white;
            text-align: center;
            padding: 80px 0;
        }
        
        .cta h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        
        .cta p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 30px;
        }
        
        .cta .btn {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% {
                transform: scale(1);
                box-shadow: 0 0 0 0 rgba(42, 108, 201, 0.7);
            }
            70% {
                transform: scale(1.05);
                box-shadow: 0 0 0 10px rgba(42, 108, 201, 0);
            }
            100% {
                transform: scale(1);
                box-shadow: 0 0 0 0 rgba(42, 108, 201, 0);
            }
        }
        
        /* Footer */
        footer {
            background: #0f2a47;
            color: white;
            padding: 70px 0 0;
        }
        
        .footer-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
        }
        
        .footer-col h3 {
            font-size: 1.4rem;
            margin-bottom: 25px;
            position: relative;
            padding-bottom: 10px;
        }
        
        .footer-col h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background: #2a6cc9;
        }
        
        .footer-col p {
            margin-bottom: 20px;
        }
        
        .footer-contact li {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }
        
        .footer-contact li i {
            margin-right: 10px;
            color: #4ecdc4;
            font-size: 1.2rem;
        }
        
        .footer-links li {
            margin-bottom: 12px;
            list-style: none;
        }
        
        .footer-links li a {
            color: #ccc;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .footer-links li a:hover {
            color: white;
            padding-left: 5px;
        }
        
        .footer-hours li {
            margin-bottom: 12px;
            display: flex;
            justify-content: space-between;
        }
        
        .footer-hours li span {
            color: #ccc;
        }
        
        .copyright {
            text-align: center;
            padding: 20px 0;
            margin-top: 50px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        /* Animation Classes */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }
        
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        .slide-in-left {
            opacity: 0;
            transform: translateX(-50px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }
        
        .slide-in-left.visible {
            opacity: 1;
            transform: translateX(0);
        }
        
        .slide-in-right {
            opacity: 0;
            transform: translateX(50px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }
        
        .slide-in-right.visible {
            opacity: 1;
            transform: translateX(0);
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .header-container {
                flex-direction: column;
                text-align: center;
            }
            
            nav ul {
                margin: 20px 0;
                justify-content: center;
                flex-wrap: wrap;
            }
            
            nav ul li {
                margin: 5px 10px;
            }
            
            .emergency-contact {
                text-align: center;
                margin-top: 15px;
            }
            
            .intro-content {
                flex-direction: column;
            }
            
            .page-header h1 {
                font-size: 2.2rem;
            }
            
            .section-title h2 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container header-container">
            <div class="logo">
                <i class="fas fa-heartbeat"></i>
                <h1>Heart<span>Care</span></h1>
            </div>
            
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="doctors.php">Doctors</a></li>
                    <li><a href="appointment.php" class="active">Appointment</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
            
            <div class="emergency-contact">
                <p>Emergency Line</p>
                <p class="emergency-number">0788 2294377</p>
            </div>
        </div>
    </header>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1 class="fade-in">About HeartCare Hospital</h1>
            <ul class="breadcrumb fade-in" style="transition-delay: 0.2s;">
                <li><a href="index.php">Home</a></li>
                <li>About Us</li>
            </ul>
        </div>
    </section>

    <!-- About Intro -->
    <section class="about-intro">
        <div class="container">
            <div class="intro-content">
                <div class="intro-image slide-in-left">
                    <img src="img/about.webp" alt="HeartCare Hospital">
                </div>
                <div class="intro-text slide-in-right">
                    <h2>We Provide Best Treatment For Our Patient</h2>
                    <p>At our hospital, we pride ourselves on providing the best treatment for our patients. Our compassionate care is tailored to every stage of life, ensuring that you receive personalized attention and support.</p>
                    <p>Whether you require cutting-edge cardiac treatments or expert maternity care, our dedicated team prioritizes your health and well-being at every step of the way.</p>
                    <p>With state-of-the-art facilities and a commitment to excellence, we strive to exceed your expectations and deliver exceptional outcomes. Trust us to be your partner in health, guiding you through your medical journey with compassion, expertise, and unwavering support.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="mission-vision">
        <div class="container">
            <div class="section-title">
                <h2 class="fade-in">Our Mission & Vision</h2>
                <p class="fade-in" style="transition-delay: 0.2s;">Guiding principles that define who we are and what we strive for</p>
            </div>
            
            <div class="mv-container">
                <div class="mv-card fade-in" style="transition-delay: 0.1s;">
                    <i class="fas fa-bullseye"></i>
                    <h3>Our Mission</h3>
                    <p>To provide exceptional, comprehensive cardiac care through clinical excellence, innovative research, and compassionate service. We are committed to improving heart health in our community and beyond.</p>
                </div>
                
                <div class="mv-card fade-in" style="transition-delay: 0.3s;">
                    <i class="fas fa-eye"></i>
                    <h3>Our Vision</h3>
                    <p>To be the leading cardiac care center recognized for outstanding patient outcomes, groundbreaking research, and training the next generation of cardiac specialists.</p>
                </div>
                
                <div class="mv-card fade-in" style="transition-delay: 0.5s;">
                    <i class="fas fa-hand-holding-heart"></i>
                    <h3>Our Values</h3>
                    <p>Compassion, Excellence, Innovation, Integrity, and Collaboration guide everything we do. These values form the foundation of our patient care and organizational culture.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item fade-in" style="transition-delay: 0.1s;">
                    <h3>32+</h3>
                    <p>Years of Experience</p>
                </div>
                
                <div class="stat-item fade-in" style="transition-delay: 0.2s;">
                    <h3>50,000+</h3>
                    <p>Patients Treated</p>
                </div>
                
                <div class="stat-item fade-in" style="transition-delay: 0.3s;">
                    <h3>2,500+</h3>
                    <p>Successful Surgeries</p>
                </div>
                
                <div class="stat-item fade-in" style="transition-delay: 0.4s;">
                    <h3>98%</h3>
                    <p>Patient Satisfaction</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Leadership -->
    <section class="leadership">
        <div class="container">
            <div class="section-title">
                <h2 class="fade-in">Our Leadership</h2>
                <p class="fade-in" style="transition-delay: 0.2s;">Meet the visionary leaders guiding HeartCare Hospital</p>
            </div>
            
            <div class="leadership-grid">
                <div class="leader-card fade-in" style="transition-delay: 0.1s;">
                    <div class="leader-image">
                        <img src="img/doctor.png" alt="Dr. Robert Miller" style="object-fit: inherit;">
                    </div>
                    <div class="leader-info">
                        <h3>Dr.K Gurunath</h3>
                        <p>MD, DM (cardiology), FESC, FCSI</p>
                        <p>Interventional Cardiologist</p>
                    </div>
                </div>
                
                <div class="leader-card fade-in" style="transition-delay: 0.3s;">
                    <div class="leader-image">
                        <img src="img/Dr.Vimala_Gurunath.jpg" alt="Dr.Vimala_Gurunath">
                    </div>
                    <div class="leader-info">
                        <h3>Dr.Vimala Gurunath</h3>
                        <p>M.B.B.S, D.G.O</p>
                        <p>Consultant Obstetrician And Gynaecologist.</p>
                    </div>
                </div>
                 
                <div class="leader-card fade-in" style="transition-delay: 0.5s;">
                    <div class="leader-image">
                        <img src="img/DR.G.Rohini_Kanniga.jpg" alt="Dr. Amanda Chen">
                    </div>
                    <div class="leader-info">
                        <h3>DR. G. Rohini Kanniga</h3>
                        <p>MS OBG, DNB, FRM, MRCOG (UK)</p>
                        <p>Gynaecologist & Infertility Specialist.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <h2 class="fade-in">Experience the HeartCare Difference</h2>
            <p class="fade-in" style="transition-delay: 0.2s;">Join the thousands of patients who have trusted us with their cardiac health. Schedule a consultation with one of our specialists today.</p>
            <a href="contact.html" class="btn fade-in" style="transition-delay: 0.4s;">Schedule a Consultation</a>
        </div>
    </section>

   <!-- Footer -->
 
  <?php include 'footer.php'; ?>



    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS library for scroll animations
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize AOS
            AOS.init({
                duration: 800,
                easing: 'ease-in-out',
                once: true,
                mirror: false
            });
            
            // Custom scroll animation for elements with fade-in class
            const fadeElements = document.querySelectorAll('.fade-in, .slide-in-left, .slide-in-right');
            
            function checkScroll() {
                fadeElements.forEach(element => {
                    const elementTop = element.getBoundingClientRect().top;
                    const elementBottom = element.getBoundingClientRect().bottom;
                    const isVisible = (elementTop < window.innerHeight - 100) && (elementBottom > 0);
                    
                    if (isVisible) {
                        element.classList.add('visible');
                    }
                });
            }
            
            // Check on load and scroll
            window.addEventListener('load', checkScroll);
            window.addEventListener('scroll', checkScroll);
            checkScroll(); // Initial check
        });
    </script>
</body>
</html>