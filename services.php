<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services - HeartCare Cardiac Hospital</title>
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
            background: linear-gradient(rgba(26, 62, 106, 0.8), rgba(26, 62, 106, 0.8)), url('IMG/about.webp') no-repeat center center/cover;
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
        
        /* Services Section */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .service-card {
            background: var(--white);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .service-icon {
            background: #eaf4ff;
            text-align: center;
            padding: 25px;
        }
        
        .service-icon i {
            font-size: 3rem;
            color: var(--primary-blue);
        }
        
        .service-content {
            padding: 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        
        .service-content h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: var(--dark-blue);
        }
        
        .service-content p {
            margin-bottom: 20px;
            flex-grow: 1;
        }
        
        /* Emergency Services */
        .emergency-services {
            background: #ffeaea;
        }
        
        .emergency-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .emergency-card {
            background: var(--white);
            padding: 30px;
            border-radius: 10px;
            box-shadow: var(--shadow);
            text-align: center;
            border-left: 5px solid var(--accent-red);
        }
        
        .emergency-card i {
            font-size: 2.5rem;
            color: var(--accent-red);
            margin-bottom: 20px;
        }
        
        .emergency-card h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: var(--dark-blue);
        }
        
        /* Technology Section */
        .technology {
            background: #eaf4ff;
        }
        
        .tech-content {
            display: flex;
            align-items: center;
            gap: 50px;
        }
        
        .tech-image {
            flex: 1;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .tech-image img {
            width: 100%;
            height: auto;
            display: block;
        }
        
        .tech-text {
            flex: 1;
        }
        
        .tech-text h2 {
            font-size: 2.2rem;
            margin-bottom: 20px;
            color: var(--dark-blue);
        }
        
        .tech-text p {
            margin-bottom: 20px;
            font-size: 1.1rem;
            color: #555;
        }
        
        .tech-list {
            list-style: none;
            margin-bottom: 30px;
        }
        
        .tech-list li {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }
        
        .tech-list li i {
            color: var(--primary-blue);
            margin-right: 10px;
            font-size: 1.2rem;
        }
        
        /* Process Section */
        .process-steps {
            display: flex;
            justify-content: space-between;
            position: relative;
            margin: 50px 0;
        }
        
        .process-steps::before {
            content: '';
            position: absolute;
            top: 40px;
            left: 0;
            right: 0;
            height: 3px;
            background: var(--primary-blue);
            z-index: 1;
        }
        
        .step {
            text-align: center;
            position: relative;
            z-index: 2;
            flex: 1;
        }
        
        .step-number {
            width: 80px;
            height: 80px;
            background: var(--primary-blue);
            color: var(--white);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            font-weight: 700;
            margin: 0 auto 20px;
        }
        
        .step h3 {
            font-size: 1.3rem;
            margin-bottom: 10px;
            color: var(--dark-blue);
        }
        
        /* CTA Section */
        .cta {
            background: linear-gradient(rgba(26, 62, 106, 0.9), rgba(26, 62, 106, 0.9)), url('IMG/about.webp') no-repeat center center/cover;
            color: var(--white);
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
        
        /* Search overlay */
        .search-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.9);
            display: flex;
            justify-content: center;
            align-items: flex-start;
            padding-top: 100px;
            z-index: 1002;
            opacity: 0;
            visibility: hidden;
            transition: var(--transition);
        }
        
        .search-overlay.active {
            opacity: 1;
            visibility: visible;
        }
        
        .search-form {
            width: 80%;
            max-width: 600px;
            position: relative;
        }
        
        .search-form input {
            width: 100%;
            padding: 15px 20px;
            font-size: 1.2rem;
            border: none;
            border-radius: 50px;
        }
        
        .search-form button {
            position: absolute;
            right: 5px;
            top: 5px;
            background: var(--primary-blue);
            color: var(--white);
            border: none;
            border-radius: 50px;
            padding: 10px 20px;
            cursor: pointer;
        }
        
        .close-search {
            position: absolute;
            top: 30px;
            right: 30px;
            color: var(--white);
            font-size: 2rem;
            background: none;
            border: none;
            cursor: pointer;
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
        
        /* Responsive Design */
        @media (max-width: 992px) {
            .tech-content {
                flex-direction: column;
            }
            
            .tech-image {
                margin-bottom: 30px;
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
            
            .process-steps {
                flex-direction: column;
                gap: 30px;
            }
            
            .process-steps::before {
                display: none;
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
        }
        
        /* High contrast mode support */
        @media (prefers-contrast: high) {
            .service-card, .emergency-card {
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
            
            .service-card:hover {
                transform: none;
            }
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
                    <li><a href="services.php" class="active">Services</a></li>
                    <li><a href="doctors.php">Doctors</a></li>
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
            <h1>Our Cardiac Services</h1>
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li>Services</li>
            </ul>
        </div>
    </section>

    <!-- Main Content -->
    <main id="main-content">
        <!-- Services Section -->
        <section class="services">
            <div class="container">
                <div class="section-title">
                    <h2>Comprehensive Cardiac Care</h2>
                    <p>We offer a full spectrum of cardiac services from prevention to intervention and rehabilitation</p>
                </div>
                
                <div class="services-grid">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-heartbeat" aria-hidden="true"></i>
                        </div>
                        <div class="service-content">
                            <h3>Cardiac Diagnostics</h3>
                            <p>Advanced diagnostic services including ECG, echocardiography, stress testing, cardiac CT and MRI to accurately assess heart health.</p>
                            <a href="#" class="btn btn-outline">Learn More</a>
                        </div>
                    </div>
                    
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-procedures" aria-hidden="true"></i>
                        </div>
                        <div class="service-content">
                            <h3>Interventional Cardiology</h3>
                            <p>Minimally invasive procedures including angioplasty, stenting, TAVR, and MitraClip to treat heart conditions without open surgery.</p>
                            <a href="#" class="btn btn-outline">Learn More</a>
                        </div>
                    </div>
                    
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-heart" aria-hidden="true"></i>
                        </div>
                        <div class="service-content">
                            <h3>Cardiac Surgery</h3>
                            <p>Comprehensive surgical services including bypass surgery, valve repair/replacement, and congenital heart defect correction.</p>
                            <a href="#" class="btn btn-outline">Learn More</a>
                        </div>
                    </div>
                    
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-heartbeat" aria-hidden="true"></i>
                        </div>
                        <div class="service-content">
                            <h3>Electrophysiology</h3>
                            <p>Specialized care for heart rhythm disorders including ablation, pacemaker and ICD implantation, and arrhythmia management.</p>
                            <a href="#" class="btn btn-outline">Learn More</a>
                        </div>
                    </div>
                    
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-lungs" aria-hidden="true"></i>
                        </div>
                        <div class="service-content">
                            <h3>Cardiac Rehabilitation</h3>
                            <p>Supervised programs to help patients recover strength, prevent disease progression, and reduce future heart problems.</p>
                            <a href="#" class="btn btn-outline">Learn More</a>
                        </div>
                    </div>
                    
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-user-md" aria-hidden="true"></i>
                        </div>
                        <div class="service-content">
                            <h3>Preventive Cardiology</h3>
                            <p>Comprehensive risk assessment and management programs to prevent heart disease through lifestyle and medical interventions.</p>
                            <a href="#" class="btn btn-outline">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Emergency Services -->
        <section class="emergency-services">
            <div class="container">
                <div class="section-title">
                    <h2>Emergency Cardiac Care</h2>
                    <p>24/7 emergency services for heart attacks and other critical cardiac conditions</p>
                </div>
                
                <div class="emergency-cards">
                    <div class="emergency-card">
                        <i class="fas fa-ambulance" aria-hidden="true"></i>
                        <h3>Cardiac Ambulance</h3>
                        <p>Fully equipped cardiac ambulances with trained paramedics and life-saving equipment for emergency transport.</p>
                    </div>
                    
                    <div class="emergency-card">
                        <i class="fas fa-first-aid" aria-hidden="true"></i>
                        <h3>Chest Pain Unit</h3>
                        <p>Dedicated unit for rapid assessment and treatment of chest pain with minimized door-to-treatment time.</p>
                    </div>
                    
                    <div class="emergency-card">
                        <i class="fas fa-procedures" aria-hidden="true"></i>
                        <h3>CCU/ICU</h3>
                        <p>State-of-the-art cardiac care and intensive care units with advanced monitoring and life support systems.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Technology Section -->
        <section class="technology">
            <div class="container">
                <div class="tech-content">
                    <div class="tech-image">
                        <img src="https://images.unsplash.com/photo-1559757148-5c350d0d3c56?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Advanced Cardiac Technology at HeartCare Hospital">
                    </div>
                    <div class="tech-text">
                        <h2>Advanced Technology</h2>
                        <p>At HeartCare, we utilize the latest technology to provide precise diagnoses and effective treatments for our patients.</p>
                        
                        <ul class="tech-list">
                            <li><i class="fas fa-check-circle" aria-hidden="true"></i> 3D echocardiography and cardiac MRI</li>
                            <li><i class="fas fa-check-circle" aria-hidden="true"></i> Robotic-assisted cardiac surgery</li>
                            <li><i class="fas fa-check-circle" aria-hidden="true"></i> Hybrid operating rooms</li>
                            <li><i class="fas fa-check-circle" aria-hidden="true"></i> Advanced electrophysiology mapping systems</li>
                            <li><i class="fas fa-check-circle" aria-hidden="true"></i> AI-assisted cardiac monitoring</li>
                        </ul>
                        
                        <a href="#" class="btn">Learn About Our Technology</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Process Section -->
        <section class="process">
            <div class="container">
                <div class="section-title">
                    <h2>Our Patient Care Process</h2>
                    <p>From initial consultation to follow-up care, we're with you every step of the way</p>
                </div>
                
                <div class="process-steps">
                    <div class="step">
                        <div class="step-number">1</div>
                        <h3>Consultation</h3>
                        <p>Comprehensive evaluation with a cardiac specialist</p>
                    </div>
                    
                    <div class="step">
                        <div class="step-number">2</div>
                        <h3>Diagnosis</h3>
                        <p>Advanced testing for accurate diagnosis</p>
                    </div>
                    
                    <div class="step">
                        <div class="step-number">3</div>
                        <h3>Treatment Plan</h3>
                        <p>Personalized treatment approach</p>
                    </div>
                    
                    <div class="step">
                        <div class="step-number">4</div>
                        <h3>Treatment</h3>
                        <p>Expert care using latest techniques</p>
                    </div>
                    
                    <div class="step">
                        <div class="step-number">5</div>
                        <h3>Follow-up</h3>
                        <p>Ongoing care and rehabilitation</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta">
            <div class="container">
                <h2>Ready to Discuss Your Cardiac Needs?</h2>
                <p>Schedule a consultation with one of our cardiac specialists to develop a personalized treatment plan.</p>
                <a href="contact.html" class="btn">Schedule a Consultation</a>
            </div>
        </section>
    </main>

    <!-- Emergency Sticky Button -->
    <a href="tel:1234567890" class="emergency-sticky">
        <i class="fas fa-phone-alt" aria-hidden="true"></i>
        Emergency Call
    </a>

    <!-- Search Overlay -->
    <div class="search-overlay" id="search-overlay">
        <button class="close-search" aria-label="Close search">
            <i class="fas fa-times"></i>
        </button>
        <form class="search-form">
            <input type="text" placeholder="Search services, doctors, information..." aria-label="Search">
            <button type="submit">Search</button>
        </form>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container footer-container">
            <div class="footer-col">
                <h3>HeartCare Hospital</h3>
                <p>Providing comprehensive cardiac care with compassion and excellence since 1985.</p>
                <div class="footer-contact">
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i> 123 Medical Drive, Health City, HC 12345</li>
                        <li><i class="fas fa-phone"></i> (123) 456-7890</li>
                        <li><i class="fas fa-envelope"></i> info@heartcarehospital.com</li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-col">
                <h3>Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="doctors.html">Our Doctors</a></li>
                    <li><a href="appointment.html">Appointment</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </div>
            
            <div class="footer-col">
                <h3>Our Services</h3>
                <ul class="footer-links">
                    <li><a href="#">Cardiac Diagnostics</a></li>
                    <li><a href="#">Interventional Cardiology</a></li>
                    <li><a href="#">Cardiac Surgery</a></li>
                    <li><a href="#">Electrophysiology</a></li>
                    <li><a href="#">Rehabilitation</a></li>
                    <li><a href="#">Emergency Care</a></li>
                </ul>
            </div>
            
            <div class="footer-col">
                <h3>Opening Hours</h3>
                <ul class="footer-hours">
                    <li>Monday - Friday <span>8:00 AM - 8:00 PM</span></li>
                    <li>Saturday <span>9:00 AM - 5:00 PM</span></li>
                    <li>Sunday <span>Emergency Only</span></li>
                    <li>Emergency <span>24/7 Available</span></li>
                </ul>
            </div>
        </div>
        
        <div class="copyright">
            <div class="container">
                <p>&copy; 2023 HeartCare Cardiac Hospital. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const menuToggle = document.querySelector('.menu-toggle');
        const mainNav = document.querySelector('#main-nav');
        
        if (menuToggle && mainNav) {
            menuToggle.addEventListener('click', function() {
                mainNav.classList.toggle('active');
                this.setAttribute('aria-expanded', 
                    this.getAttribute('aria-expanded') === 'true' ? 'false' : 'true');
            });
        }
        
        // Animation on scroll
        document.addEventListener('DOMContentLoaded', function() {
            const animatedElements = document.querySelectorAll('.service-card, .emergency-card');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = 1;
                        entry.target.style.transform = 'translateY(0)';
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1
            });
            
            animatedElements.forEach(element => {
                element.style.opacity = 0;
                element.style.transform = 'translateY(20px)';
                element.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                observer.observe(element);
            });
        });
    </script>
</body>
</html>