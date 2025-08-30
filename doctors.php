<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Doctors - HeartCare Cardiac Hospital</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        :root {
            --primary-blue: #2a6cc9;
            --dark-blue: #1a3e6a;
            --accent-teal: #4ecdc4;
            --accent-red: #ff6b6b;
            --light-bg: #f8f9fa;
            --text-dark: #333;
            --text-light: #666;
            --white: #ffffff;
            --shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            --transition: all 0.3s ease;
        }
        
        body {
            color: var(--text-dark);
            line-height: 1.6;
            background-color: var(--light-bg);
        }
        
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .btn {
            display: inline-block;
            padding: 12px 25px;
            background: var(--primary-blue);
            color: var(--white);
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
            border: none;
            cursor: pointer;
        }
        
        .btn:hover, .btn:focus {
            background: #1a5bb8;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            outline: none;
        }
        
        .btn-outline {
            background: transparent;
            border: 2px solid var(--primary-blue);
            color: var(--primary-blue);
        }
        
        .btn-outline:hover, .btn-outline:focus {
            background: var(--primary-blue);
            color: var(--white);
        }
        
        section {
            padding: 80px 0;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 50px;
            color: var(--dark-blue);
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
            background: var(--primary-blue);
            border-radius: 2px;
        }
        
        .section-title p {
            font-size: 1.1rem;
            color: var(--text-light);
            max-width: 700px;
            margin: 0 auto;
        }
        
        /* Skip to content for accessibility */
        .skip-to-content {
            position: absolute;
            top: -40px;
            left: 0;
            background: var(--primary-blue);
            color: var(--white);
            padding: 8px;
            z-index: 1001;
            transition: top 0.3s;
        }
        
        .skip-to-content:focus {
            top: 0;
        }
        
        /* Header Styles */
        header {
            background: linear-gradient(135deg, var(--dark-blue) 0%, var(--primary-blue) 100%);
            color: var(--white);
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
            color: var(--accent-red);
            margin-right: 10px;
        }
        
        .logo h1 {
            font-size: 1.8rem;
            font-weight: 700;
        }
        
        .logo span {
            color: var(--accent-teal);
        }
        
        nav ul {
            display: flex;
            list-style: none;
        }
        
        nav ul li {
            margin-left: 25px;
        }
        
        nav ul li a {
            color: var(--white);
            text-decoration: none;
            font-weight: 500;
            transition: var(--transition);
            padding: 5px 10px;
            border-radius: 4px;
        }
        
        nav ul li a:hover, nav ul li a.active {
            color: var(--accent-teal);
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
            color: var(--accent-red);
        }
        
        /* Mobile menu */
        .menu-toggle {
            display: none;
            background: transparent;
            border: none;
            color: var(--white);
            font-size: 1.5rem;
            cursor: pointer;
        }
        
        /* Page Header */
        .page-header {
            background: linear-gradient(rgba(26, 62, 106, 0.8), rgba(26, 62, 106, 0.8)), url('https://images.unsplash.com/photo-1586773860418-d37222d8fce3?ixlib=rb-4.0.3') no-repeat center center/cover;
            color: var(--white);
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
            color: var(--accent-teal);
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
        
        /* Doctors Section Styles */
        .doctors-filter {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 40px;
        }
        
        .filter-btn {
            padding: 8px 20px;
            background: var(--white);
            border: 1px solid #ddd;
            border-radius: 30px;
            cursor: pointer;
            transition: var(--transition);
        }
        
        .filter-btn:hover, .filter-btn.active {
            background: var(--primary-blue);
            color: var(--white);
            border-color: var(--primary-blue);
        }
        
        .doctors-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .doctor-card {
            background: var(--white);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }
        
        .doctor-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .doctor-image {
            height: 300px;
            overflow: hidden;
        }
        
        .doctor-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }
        
        .doctor-card:hover .doctor-image img {
            transform: scale(1.05);
        }
        
        .doctor-info {
            padding: 25px;
        }
        
        .doctor-name {
            font-size: 1.5rem;
            color: var(--dark-blue);
            margin-bottom: 10px;
        }
        
        .doctor-specialty {
            color: var(--primary-blue);
            font-weight: 600;
            margin-bottom: 15px;
            display: block;
        }
        
        .doctor-details {
            margin-bottom: 20px;
            color: var(--text-light);
        }
        
        .doctor-details li {
            margin-bottom: 8px;
            display: flex;
            align-items: center;
        }
        
        .doctor-details li i {
            color: var(--primary-blue);
            margin-right: 10px;
            width: 20px;
        }
        
        .doctor-actions {
            display: flex;
            justify-content: space-between;
        }
        
        /* Specialties Section */
        .specialties-section {
            background: var(--white);
        }
        
        .specialties-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 30px;
        }
        
        .specialty-card {
            text-align: center;
            padding: 30px;
            border-radius: 10px;
            background: var(--light-bg);
            transition: var(--transition);
        }
        
        .specialty-card:hover {
            background: var(--primary-blue);
            color: var(--white);
            transform: translateY(-5px);
        }
        
        .specialty-card:hover h3,
        .specialty-card:hover i {
            color: var(--white);
        }
        
        .specialty-card i {
            font-size: 3rem;
            color: var(--primary-blue);
            margin-bottom: 20px;
            transition: var(--transition);
        }
        
        .specialty-card h3 {
            font-size: 1.3rem;
            margin-bottom: 15px;
            color: var(--dark-blue);
            transition: var(--transition);
        }
        
        /* Appointment CTA Section */
        .appointment-cta {
            background: linear-gradient(135deg, var(--dark-blue) 0%, var(--primary-blue) 100%);
            color: var(--white);
            text-align: center;
            padding: 80px 0;
        }
        
        .appointment-cta h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        
        .appointment-cta p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 30px;
        }
        
        /* Emergency Sticky Button */
        .emergency-sticky {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background: var(--accent-red);
            color: var(--white);
            padding: 15px 25px;
            border-radius: 50px;
            font-weight: 600;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            z-index: 999;
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            transition: var(--transition);
        }
        
        .emergency-sticky:hover {
            background: #e55c5c;
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }
        
        /* Footer */
        footer {
            background: #0f2a47;
            color: var(--white);
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
            background: var(--primary-blue);
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
            color: var(--accent-teal);
            font-size: 1.2rem;
        }
        
        .footer-links li {
            margin-bottom: 12px;
            list-style: none;
        }
        
        .footer-links li a {
            color: #ccc;
            text-decoration: none;
            transition: var(--transition);
        }
        
        .footer-links li a:hover {
            color: var(--white);
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
        
        /* Modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            z-index: 1000;
            overflow-y: auto;
            padding: 20px;
        }
        
        .modal-content {
            background: var(--white);
            max-width: 900px;
            margin: 50px auto;
            border-radius: 10px;
            overflow: hidden;
            animation: modalFade 0.3s;
        }
        
        @keyframes modalFade {
            from {
                opacity: 0;
                transform: translateY(-50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .modal-header {
            padding: 20px 30px;
            background: var(--dark-blue);
            color: var(--white);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .close-modal {
            background: none;
            border: none;
            color: var(--white);
            font-size: 1.5rem;
            cursor: pointer;
        }
        
        .modal-body {
            padding: 30px;
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
        }
        
        .modal-image {
            flex: 1;
            min-width: 250px;
        }
        
        .modal-image img {
            width: 100%;
            border-radius: 10px;
        }
        
        .modal-info {
            flex: 2;
            min-width: 300px;
        }
        
        /* Responsive Design */
        @media (max-width: 992px) {
            .header-container {
                flex-wrap: wrap;
            }
            
            .emergency-contact {
                margin-top: 15px;
                width: 100%;
                text-align: center;
            }
        }
        
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
            
            .page-header h1 {
                font-size: 2.2rem;
            }
            
            .section-title h2 {
                font-size: 2rem;
            }
            
            .menu-toggle {
                display: block;
                position: absolute;
                top: 20px;
                right: 20px;
            }
            
            nav {
                width: 100%;
                max-height: 0;
                overflow: hidden;
                transition: max-height 0.3s ease;
            }
            
            nav.active {
                max-height: 500px;
            }
            
            nav ul {
                flex-direction: column;
                padding: 20px 0;
            }
            
            nav ul li {
                margin: 10px 0;
            }
            
            .modal-body {
                flex-direction: column;
            }
        }
        
        /* High contrast mode support */
        @media (prefers-contrast: high) {
            .doctor-card, .specialty-card {
                border: 2px solid var(--dark-blue);
            }
            
            .btn {
                border: 2px solid transparent;
            }
            
            .btn-outline {
                border: 2px solid var(--primary-blue);
            }
        }
        
        /* Reduced motion support */
        @media (prefers-reduced-motion: reduce) {
            * {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
            }
            
            .btn:hover, .btn:focus {
                transform: none;
            }
            
            .emergency-sticky:hover {
                transform: none;
            }
            
            .doctor-card:hover {
                transform: none;
            }
            
            .doctor-card:hover .doctor-image img {
                transform: none;
            }
            
            .specialty-card:hover {
                transform: none;
            }
        }
        /* Fullscreen Section */
.specialties-section {
  min-height: 70vh; /* Full screen */
  display: flex;
  align-items: center; /* Vertical center */
  justify-content: center;
  padding: 60px 20px;
  background: linear-gradient(135deg, #f9f9f9 50%, #f1f1f1 100%);
}

/* Title */
.specialties-section .section-title {
  text-align: center;
  margin-bottom: 50px;
}
.specialties-section .section-title h2 {
  font-size: 2.8rem;
  margin-bottom: 15px;
  color: #222;
}
.specialties-section .section-title p {
  font-size: 1.1rem;
  color: #555;
}

/* Grid */
.specialties-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 30px;
  width: 100%;
  max-width: 1100px;
  margin: 0 auto;
}

/* Cards */
.specialty-card {
  background: #136de2ff;
  border-radius: 20px;
  padding: 40px 20px;
  box-shadow: 0 8px 25px rgba(0,0,0,0.08);
  transition: all 0.3s ease;
  text-align: center;
}
.specialty-card:hover {
  transform: translateY(-12px);
  box-shadow: 0 15px 35px rgba(0,0,0,0.15);
}

/* Icons */
.specialty-card i {
  font-size: 45px;
  color: #e63946;
  margin-bottom: 20px;
  transition: transform 0.4s ease;
}
.specialty-card:hover i {
  transform: scale(1.3) rotate(8deg);
}

/* Titles */
.specialty-card h3 {
  font-size: 1.4rem;
  color: #222;
  margin-bottom: 12px;
}
.specialty-card p {
  font-size: 1rem;
  color: #ffffff;
  line-height: 1.6;
}
    </style>
</head>
<body>
    <!-- Skip to content for screen readers -->
    <a href="#main-content" class="skip-to-content">Skip to main content</a>
    
    <!-- Header -->
    <header>
        <div class="container header-container">
            <button class="menu-toggle" aria-label="Toggle navigation menu">
                <i class="fas fa-bars"></i>
            </button>
            
            <div class="logo">
                <i class="fas fa-heartbeat" aria-hidden="true"></i>
                <h1>Heart<span>Care</span></h1>
            </div>
            
            <nav id="main-nav">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="doctors.php" class="active">Doctors</a></li>
                    <li><a href="appointment.php">Appointment</a></li>
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
            <h1>Our Medical Experts</h1>
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li>Doctors</li>
            </ul>
        </div>
    </section>

    <!-- Main Content -->
    <main id="main-content">
        <!-- Doctors Section -->
        <section class="doctors">
            <div class="container">
                <div class="section-title">
                    <h2>Meet Our Specialist Team</h2>
                    <p>Our board-certified cardiologists and cardiac surgeons are dedicated to providing the highest quality care</p>
                </div>
                
                <!-- <div class="doctors-filter">
                    <button class="filter-btn active" data-filter="all">All Specialists</button>
                    <button class="filter-btn" data-filter="cardiology">Cardiology</button>
                    <button class="filter-btn" data-filter="surgery">Consultant Obstetrician And Gynaecologist</button>
                    <button class="filter-btn" data-filter="electrophysiology">Consultant obstetrician and Gynaecologist & Infertility Specialist</button>
              
                </div>
                 -->
                <div class="doctors-grid">
                 
                    
                    <!-- Doctor 4 -->
                    <div class="doctor-card" data-category="pediatric">
                        <div class="doctor-image">
                            <img src="img/dr.k.gurunath.jpg" alt="dr.k.gurunath">
                        </div>
                        <div class="doctor-info">
                            <h3 class="doctor-name">Dr.K.Gurunath</h3>
                            <span class="doctor-specialty">Interventional Cardiologist</span>
                            <ul class="doctor-details">
                                <li><i class="fas fa-graduation-cap"></i> MD, DM (cardiology), FESC, FCSI</li>
                                <li><i class="fas fa-map-marker-alt"></i>Dr. K. Gurunath</li>
                                <li><i class="fas fa-star"></i>Interventional Cardiologist</li>
                            </ul>
                            <div class="doctor-actions">
                                <button class="btn-outline view-profile" data-id="4">View Profile</button>
                                <a href="appointment.html" class="btn">Book Visit</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Doctor 5 -->
                    <div class="doctor-card" data-category="cardiology">
                        <div class="doctor-image">
                            <img src="img/Dr.Vimala_Gurunath.jpg" alt="Dr.Vimala_Gurunath">
                        </div>
                        <div class="doctor-info">
                            <h3 class="doctor-name">Dr.Vimala_Gurunath</h3>
                            <span class="doctor-specialty">Consultant Obstetrician And Gynaecologist</span>
                            <ul class="doctor-details">
                                <li><i class="fas fa-graduation-cap"></i>M.B.B.S, D.G.O</li>
                                <li><i class="fas fa-map-marker-alt"></i>Dr. Vimala Gurunath</li>
                                <li><i class="fas fa-star"></i>Consultant Obstetrician And Gynaecologist</li>
                            </ul>
                            <div class="doctor-actions">
                                <button class="btn-outline view-profile" data-id="5">View Profile</button>
                                <a href="appointment.html" class="btn">Book Visit</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Doctor 6 -->
                    <div class="doctor-card" data-category="surgery">
                        <div class="doctor-image">
                            <img src="img/DR.G.Rohini_Kanniga.jpg" alt="DR.G.Rohini_Kanniga">
                        </div>
                        <div class="doctor-info">
                            <h3 class="doctor-name">DR.G.Rohini_Kanniga</h3>
                            <span class="doctor-specialty">Consultant obstetrician and Gynaecologist & Infertility Specialist</span>
                            <ul class="doctor-details">
                                <li><i class="fas fa-graduation-cap"></i>MS OBG, DNB, FRM, MRCOG (UK)</li>
                                <li><i class="fas fa-map-marker-alt"></i>DR. G. Rohini Kanniga</li>
                                <li><i class="fas fa-star"></i>Consultant obstetrician and Gynaecologist & Infertility Specialist</li>
                            </ul>
                            <div class="doctor-actions">
                                <button class="btn-outline view-profile" data-id="6">View Profile</button>
                                <a href="appointment.html" class="btn">Book Visit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
      <!-- AOS CSS -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

<!-- Specialties Section -->
<section class="specialties-section">
  <div class="container">
    <div class="section-title" data-aos="fade-up" data-aos-duration="1000">
      <h2>Our Specialties</h2>
      <p>Comprehensive cardiac care across all specialties</p>
    </div>

    <div class="specialties-grid">
      <!-- Card 1 -->
      <div class="specialty-card" data-aos="zoom-in" data-aos-delay="100">
        <i class="fas fa-heartbeat"></i>
        <h3>General Cardiology</h3>
        <p>Prevention, diagnosis, and treatment of common heart conditions with personalized care plans.</p>
      </div>

      <!-- Card 2 -->
      <div class="specialty-card" data-aos="zoom-in" data-aos-delay="200">
        <i class="fas fa-heart"></i>
        <h3>Cardiac Surgery</h3>
        <p>Expert surgical procedures including bypass surgery, valve repair, and minimally invasive techniques.</p>
      </div>

      <!-- Card 3 -->
      <div class="specialty-card" data-aos="zoom-in" data-aos-delay="300">
        <i class="fas fa-female"></i>
        <h3>Obstetrician & Gynaecologist</h3>
        <p>Comprehensive women’s health care including pregnancy management, gynaecological treatments, and infertility solutions.</p>
      </div>
    </div>
  </div>
</section>

<!-- AOS JS -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init();
</script>

<!-- CSS -->
<style>

</style>

        
        <!-- Appointment CTA Section -->
        <section class="appointment-cta">
            <div class="container">
                <h2>Schedule an Appointment Today</h2>
                <p>Our cardiac specialists are ready to provide you with exceptional care and treatment</p>
                <a href="appointment.html" class="btn">Request an Appointment</a>
            </div>
        </section>
    </main>

    <!-- Doctor Profile Modals -->
    <!-- Modal 1 -->
    <div class="modal" id="modal-1">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Dr. Sarah Johnson</h2>
                <button class="close-modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="modal-image">
                    <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="Dr. Sarah Johnson">
                </div>
                <div class="modal-info">
                    <h3>Cardiologist</h3>
                    <p>Dr. Sarah Johnson is a board-certified cardiologist with over 15 years of experience in treating complex cardiac conditions. She specializes in preventive cardiology and non-invasive diagnostic procedures.</p>
                    
                    <h4>Education & Training</h4>
                    <ul>
                        <li>MD, Harvard Medical School</li>
                        <li>Residency in Internal Medicine, Johns Hopkins Hospital</li>
                        <li>Fellowship in Cardiology, Mayo Clinic</li>
                    </ul>
                    
                    <h4>Specialties</h4>
                    <ul>
                        <li>Preventive Cardiology</li>
                        <li>Heart Disease Prevention</li>
                        <li>Non-invasive Diagnostics</li>
                        <li>Hypertension Management</li>
                    </ul>
                    
                    <a href="appointment.php" class="btn">Book an Appointment</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Emergency Sticky Button -->
    <a href="tel:1234567890" class="emergency-sticky">
        <i class="fas fa-phone-alt" aria-hidden="true"></i>
        Emergency Call
    </a>


<?php include 'footer.php'; ?>   

    <script>
        // Mobile menu toggle
        document.querySelector('.menu-toggle').addEventListener('click', function() {
            const nav = document.getElementById('main-nav');
            nav.classList.toggle('active');
            
            // Update ARIA attribute for accessibility
            const isExpanded = nav.classList.contains('active');
            this.setAttribute('aria-expanded', isExpanded);
        });
        
        // Doctor filter functionality
        const filterButtons = document.querySelectorAll('.filter-btn');
        const doctorCards = document.querySelectorAll('.doctor-card');
        
        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));
                
                // Add active class to clicked button
                button.classList.add('active');
                
                // Get filter value
                const filterValue = button.getAttribute('data-filter');
                
                // Filter doctor cards
                doctorCards.forEach(card => {
                    if (filterValue === 'all' || card.getAttribute('data-category') === filterValue) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
        
        // Modal functionality
        const viewProfileButtons = document.querySelectorAll('.view-profile');
        const modals = document.querySelectorAll('.modal');
        const closeModalButtons = document.querySelectorAll('.close-modal');
        
        viewProfileButtons.forEach(button => {
            button.addEventListener('click', () => {
                const modalId = button.getAttribute('data-id');
                const modal = document.getElementById(`modal-${modalId}`);
                modal.style.display = 'block';
                document.body.style.overflow = 'hidden'; // Prevent scrolling
            });
        });
        
        closeModalButtons.forEach(button => {
            button.addEventListener('click', () => {
                const modal = button.closest('.modal');
                modal.style.display = 'none';
                document.body.style.overflow = 'auto'; // Enable scrolling
            });
        });
        
        // Close modal when clicking outside
        window.addEventListener('click', (event) => {
            if (event.target.classList.contains('modal')) {
                event.target.style.display = 'none';
                document.body.style.overflow = 'auto'; // Enable scrolling
            }
        });
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            // Skip tel: links and external links
            if (anchor.getAttribute('href').startsWith('#') && 
                !anchor.getAttribute('href').includes(':')) {
                
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    
                    const targetId = this.getAttribute('href');
                    const targetElement = document.querySelector(targetId);
                    
                    if (targetElement) {
                        targetElement.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                        
                        // Update URL without jumping
                        history.pushState(null, null, targetId);
                    }
                });
            }
        });
    </script>
</body>
</html>