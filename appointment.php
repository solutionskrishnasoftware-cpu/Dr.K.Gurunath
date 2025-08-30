<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Appointment - HeartCare Cardiac Hospital</title>
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
        
        /* Appointment Form Styles */
        .appointment-container {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            margin-bottom: 50px;
        }
        
        .appointment-form {
            flex: 1;
            min-width: 300px;
            background: var(--white);
            padding: 30px;
            border-radius: 10px;
            box-shadow: var(--shadow);
        }
        
        .form-title {
            font-size: 1.8rem;
            color: var(--dark-blue);
            margin-bottom: 25px;
            text-align: center;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--text-dark);
        }
        
        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            transition: var(--transition);
        }
        
        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--primary-blue);
            box-shadow: 0 0 0 2px rgba(42, 108, 201, 0.2);
        }
        
        .form-row {
            display: flex;
            gap: 15px;
        }
        
        .form-row .form-group {
            flex: 1;
        }
        
        .appointment-info {
            flex: 1;
            min-width: 300px;
            background: #eaf4ff;
            padding: 30px;
            border-radius: 10px;
        }
        
        .info-title {
            font-size: 1.8rem;
            color: var(--dark-blue);
            margin-bottom: 25px;
            text-align: center;
        }
        
        .info-list {
            list-style: none;
            margin-bottom: 30px;
        }
        
        .info-list li {
            margin-bottom: 15px;
            display: flex;
            align-items: flex-start;
        }
        
        .info-list li i {
            color: var(--primary-blue);
            margin-right: 10px;
            font-size: 1.2rem;
            margin-top: 3px;
        }
        
        /* Doctors Selection */
        .doctors-selection {
            background: var(--white);
            padding: 30px;
            border-radius: 10px;
            box-shadow: var(--shadow);
            margin-bottom: 50px;
        }
        
        .doctors-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }
        
        .doctor-card {
            background: var(--light-bg);
            border-radius: 8px;
            overflow: hidden;
            transition: var(--transition);
            cursor: pointer;
            border: 2px solid transparent;
        }
        
        .doctor-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow);
            border-color: var(--primary-blue);
        }
        
        .doctor-card.selected {
            border-color: var(--primary-blue);
            background: #e6f0ff;
        }
        
        .doctor-image {
            height: 200px;
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
            padding: 20px;
        }
        
        .doctor-info h3 {
            font-size: 1.2rem;
            margin-bottom: 5px;
            color: var(--dark-blue);
        }
        
        .doctor-info p {
            color: var(--text-light);
            font-size: 0.9rem;
            margin-bottom: 10px;
        }
        
        .doctor-specialty {
            color: var(--primary-blue) !important;
            font-weight: 500;
        }
        
        /* Time Selection */
        .time-selection {
            background: var(--white);
            padding: 30px;
            border-radius: 10px;
            box-shadow: var(--shadow);
            margin-bottom: 50px;
        }
        
        .time-slots {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 20px;
        }
        
        .time-slot {
            padding: 10px 15px;
            background: var(--light-bg);
            border-radius: 5px;
            cursor: pointer;
            transition: var(--transition);
            border: 1px solid #ddd;
        }
        
        .time-slot:hover {
            background: #e6f0ff;
            border-color: var(--primary-blue);
        }
        
        .time-slot.selected {
            background: var(--primary-blue);
            color: var(--white);
            border-color: var(--primary-blue);
        }
        
        .time-slot.unavailable {
            background: #ffeaea;
            color: #aaa;
            cursor: not-allowed;
            text-decoration: line-through;
        }
        
        /* Confirmation Section */
        .confirmation {
            text-align: center;
            background: #f0f8ff;
            padding: 50px 0;
            border-radius: 10px;
            margin-bottom: 50px;
            display: none;
        }
        
        .confirmation i {
            font-size: 4rem;
            color: var(--primary-blue);
            margin-bottom: 20px;
        }
        
        .confirmation h2 {
            font-size: 2.5rem;
            color: var(--dark-blue);
            margin-bottom: 15px;
        }
        
        .confirmation p {
            font-size: 1.1rem;
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
            
            .page-header h1 {
                font-size: 2.2rem;
            }
            
            .section-title h2 {
                font-size: 2rem;
            }
            
            .form-row {
                flex-direction: column;
                gap: 0;
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
            .appointment-form, .doctors-selection, .time-selection {
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
            
            .doctor-card:hover {
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
                    <li><a href="services.php">Services</a></li>
                    <li><a href="doctors.php">Doctors</a></li>
                    <li><a href="appointment.php" class="active">Appointment</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
            
            <div class="emergency-contact">
                <p>Emergency Line</p>
                <p class="emergency-number">0788 2294377                                                                                                        </p>
            </div>
        </div>
    </header>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1>Book an Appointment</h1>
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li>Appointment</li>
            </ul>
        </div>
    </section>

    <!-- Main Content -->
    <main id="main-content">
        <!-- Appointment Form Section -->
        <section class="appointment">
            <div class="container">
                <div class="section-title">
                    <h2>Schedule Your Visit</h2>
                    <p>Book your appointment with our cardiac specialists - we're here to help you with your heart health</p>
                </div>
                
                <div class="appointment-container">
                    <div class="appointment-form">
                        <h2 class="form-title">Appointment Request</h2>
                        <form id="appointment-form">
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="first-name">First Name *</label>
                                    <input type="text" id="first-name" name="first-name" required>
                                </div>
                                <div class="form-group">
                                    <label for="last-name">Last Name *</label>
                                    <input type="text" id="last-name" name="last-name" required>
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="email">Email Address *</label>
                                    <input type="email" id="email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone Number *</label>
                                    <input type="tel" id="phone" name="phone" required>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="dob">Date of Birth *</label>
                                <input type="date" id="dob" name="dob" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="service">Service Required *</label>
                                <select id="service" name="service" required>
                                    <option value="">Select a service</option>
                                    <option value="consultation">Cardiology Consultation</option>
                                    <option value="diagnostics">Cardiac Diagnostics</option>
                                    <option value="surgery">Cardiac Surgery</option>
                                    <option value="rehabilitation">Cardiac Rehabilitation</option>
                                    <option value="emergency">Emergency Care</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="message">Additional Notes</label>
                                <textarea id="message" name="message" rows="4"></textarea>
                            </div>
                            
                            <button type="submit" class="btn" style="width: 100%;">Submit Appointment Request</button>
                        </form>
                    </div>
                    
                    <div class="appointment-info">
                        <h2 class="info-title">Why Choose Us?</h2>
                        <ul class="info-list">
                            <li><i class="fas fa-check-circle"></i> Board-certified cardiac specialists</li>
                            <li><i class="fas fa-check-circle"></i> State-of-the-art facilities</li>
                            <li><i class="fas fa-check-circle"></i> Short waiting times for appointments</li>
                            <li><i class="fas fa-check-circle"></i> Personalized treatment plans</li>
                            <li><i class="fas fa-check-circle"></i> Emergency cardiac care available 24/7</li>
                        </ul>
                        
                        <h2 class="info-title">Contact Information</h2>
                        <ul class="info-list">
                            <li><i class="fas fa-phone"></i> <strong>Appointment Line:</strong> 0788-4030777 </li>
                            <li><i class="fas fa-envelope"></i> <strong>Email:</strong> contact@kgurunathcardiacandmaternity.com</li>
                            <li><i class="fas fa-clock"></i> <strong>Hours:</strong> Mon-Fri 8:00 AM - 8:00 PM</li>
                            <li><i class="fas fa-map-marker-alt"></i> <strong>Address:</strong> Plot No.-19, Priyadarshini Parisar(E), G.E.Road, Supela, Bhilai(C.G) 490023</li>
                        </ul>
                    </div>
                </div>
                
             
                <!-- Time Selection -->
                <div class="time-selection">
                    <h2 class="form-title">Select Date & Time</h2>
                    <p>Choose from available time slots for your appointment</p>
                    
                    <div class="form-group">
                        <label for="appointment-date">Select Date *</label>
                        <input type="date" id="appointment-date" name="appointment-date" required>
                    </div>
                    
                    <h3>Available Time Slots</h3>
                    <div class="time-slots">
                        <div class="time-slot">9:00 AM</div>
                        <div class="time-slot">9:30 AM</div>
                        <div class="time-slot">10:00 AM</div>
                        <div class="time-slot unavailable">10:30 AM</div>
                        <div class="time-slot">11:00 AM</div>
                        <div class="time-slot">11:30 AM</div>
                        <div class="time-slot">1:00 PM</div>
                        <div class="time-slot">1:30 PM</div>
                        <div class="time-slot">2:00 PM</div>
                        <div class="time-slot">2:30 PM</div>
                        <div class="time-slot">3:00 PM</div>
                        <div class="time-slot">3:30 PM</div>
                        <div class="time-slot">4:00 PM</div>
                        <div class="time-slot unavailable">4:30 PM</div>
                        <div class="time-slot">5:00 PM</div>
                    </div>
                </div>
                
                <!-- Confirmation Message -->
                <div class="confirmation" id="confirmation">
                    <i class="fas fa-check-circle"></i>
                    <h2>Appointment Request Submitted!</h2>
                    <p>Thank you for choosing HeartCare Cardiac Hospital. We have received your appointment request and will contact you within 24 hours to confirm your appointment details.</p>
                    <a href="index.php" class="btn">Return to Home</a>
                </div>
            </div>
        </section>
    </main>

    <!-- Emergency Sticky Button -->
    <a href="tel:1234567890" class="emergency-sticky">
        <i class="fas fa-phone-alt" aria-hidden="true"></i>
        Emergency Call
    </a>


<?php include 'footer.php'; ?>

    <script>
        // Mobile menu toggle
        document.querySelector('.menu-toggle').addEventListener('click', function() {
            document.getElementById('main-nav').classList.toggle('active');
        });
        
        // Doctor selection
        const doctorCards = document.querySelectorAll('.doctor-card');
        doctorCards.forEach(card => {
            card.addEventListener('click', function() {
                doctorCards.forEach(c => c.classList.remove('selected'));
                this.classList.add('selected');
            });
        });
        
        // Time slot selection
        const timeSlots = document.querySelectorAll('.time-slot:not(.unavailable)');
        timeSlots.forEach(slot => {
            slot.addEventListener('click', function() {
                timeSlots.forEach(s => s.classList.remove('selected'));
                this.classList.add('selected');
            });
        });
        
        // Form submission
        document.getElementById('appointment-form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Basic validation
            const doctorSelected = document.querySelector('.doctor-card.selected');
            const timeSelected = document.querySelector('.time-slot.selected');
            const dateSelected = document.getElementById('appointment-date').value;
            
            if (!doctorSelected) {
                alert('Please select a doctor');
                return;
            }
            
            if (!dateSelected) {
                alert('Please select a date');
                return;
            }
            
            if (!timeSelected) {
                alert('Please select a time slot');
                return;
            }
            
            // If all validation passes, show confirmation
            document.getElementById('confirmation').style.display = 'block';
            
            // Scroll to confirmation
            document.getElementById('confirmation').scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        });
        
        // Set minimum date for appointment to today
        const today = new Date();
        const yyyy = today.getFullYear();
        const mm = String(today.getMonth() + 1).padStart(2, '0');
        const dd = String(today.getDate()).padStart(2, '0');
        const todayStr = `${yyyy}-${mm}-${dd}`;
        
        document.getElementById('appointment-date').setAttribute('min', todayStr);
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html>