<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - HeartCare Cardiac Hospital</title>
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
        
        /* Contact Section Styles */
        .contact-container {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            margin-bottom: 50px;
        }
        
        .contact-form {
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
        
        .contact-info {
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
        
        /* Map Section */
        .map-section {
            margin-bottom: 50px;
        }
        
        .map-container {
            height: 400px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: var(--shadow);
        }
        
        .map-container iframe {
            width: 100%;
            height: 100%;
            border: none;
        }
        
        /* FAQ Section */
        .faq-section {
            background: var(--white);
            padding: 30px;
            border-radius: 10px;
            box-shadow: var(--shadow);
            margin-bottom: 50px;
        }
        
        .faq-item {
            margin-bottom: 20px;
            border-bottom: 1px solid #eee;
            padding-bottom: 20px;
        }
        
        .faq-question {
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--dark-blue);
            margin-bottom: 10px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .faq-answer {
            color: var(--text-light);
            display: none;
            padding-top: 10px;
        }
        
        .faq-answer.active {
            display: block;
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
        
        /* Confirmation Message */
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
            
            .map-container {
                height: 300px;
            }
        }
        
        /* High contrast mode support */
        @media (prefers-contrast: high) {
            .contact-form, .faq-section {
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
                    <li><a href="appointment.php">Appointment</a></li>
                    <li><a href="contact.php" class="active">Contact</a></li>
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
            <h1>Contact Us</h1>
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li>Contact</li>
            </ul>
        </div>
    </section>

    <!-- Main Content -->
    <main id="main-content">
        <!-- Contact Section -->
        <section class="contact">
            <div class="container">
                <div class="section-title">
                    <h2>Get In Touch</h2>
                    <p>We're here to answer your questions and help you with all your cardiac care needs</p>
                </div>
                
                <div class="contact-container">
                    <div class="contact-form">
                        <h2 class="form-title">Send Us a Message</h2>
                        <form id="contact-form">
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
                                    <label for="phone">Phone Number</label>
                                    <input type="tel" id="phone" name="phone">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="subject">Subject *</label>
                                <select id="subject" name="subject" required>
                                    <option value="">Select a subject</option>
                                    <option value="general">General Inquiry</option>
                                    <option value="appointment">Appointment Question</option>
                                    <option value="billing">Billing Inquiry</option>
                                    <option value="medical">Medical Question</option>
                                    <option value="feedback">Feedback</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="message">Message *</label>
                                <textarea id="message" name="message" rows="5" required></textarea>
                            </div>
                            
                            <button type="submit" class="btn" style="width: 100%;">Send Message</button>
                        </form>
                    </div>
                    
                    <div class="contact-info">
                        <h2 class="info-title">Contact Information</h2>
                        <ul class="info-list">
                            <li><i class="fas fa-map-marker-alt"></i> <strong>Address:</strong> 123 Medical Drive, Health City, HC 12345</li>
                            <li><i class="fas fa-phone"></i> <strong>Main Line:</strong>(0788) 4030777</li>
                            <!-- <li><i class="fas fa-phone"></i> <strong>Appointments:</strong> (123) 456-APPT</li> -->
                            <li><i class="fas fa-envelope"></i> <strong>Email:</strong>contact@kgurunathcardiacandmaternity.com</li>
                            <li><i class="fas fa-ambulance"></i> <strong>Emergency:</strong> (0788) 4030777</li>
                        </ul>
                        
                        <h2 class="info-title">Opening Hours</h2>
                        <ul class="info-list">
                            <li><i class="fas fa-clock"></i> <strong>Monday - Friday:</strong> 8:00 AM - 8:00 PM</li>
                            <li><i class="fas fa-clock"></i> <strong>Saturday:</strong> 9:00 AM - 5:00 PM</li>
                            <li><i class="fas fa-clock"></i> <strong>Sunday:</strong> 10:00 AM - 4:00 PM</li>
                            <li><i class="fas fa-exclamation-circle"></i> <strong>Emergency:</strong> 24/7 Available</li>
                        </ul>
                        
                        <h2 class="info-title">Follow Us</h2>
                        <div class="social-links" style="display: flex; gap: 15px; justify-content: center; margin-top: 20px;">
                            <a href="#" aria-label="Facebook" style="color: var(--primary-blue); font-size: 1.5rem;"><i class="fab fa-facebook"></i></a>
                            <a href="#" aria-label="Twitter" style="color: var(--primary-blue); font-size: 1.5rem;"><i class="fab fa-twitter"></i></a>
                            <a href="#" aria-label="Instagram" style="color: var(--primary-blue); font-size: 1.5rem;"><i class="fab fa-instagram"></i></a>
                            <a href="#" aria-label="LinkedIn" style="color: var(--primary-blue); font-size: 1.5rem;"><i class="fab fa-linkedin"></i></a>
                            <a href="#" aria-label="YouTube" style="color: var(--primary-blue); font-size: 1.5rem;"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                
               <!-- Map Section -->
<div class="map-section">
  <h2 class="form-title" style="text-align: center; margin-bottom: 30px;">Our Location</h2>
  <div class="map-container">
    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3709.5695168462834!2d81.3442981!3d21.2055973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a2922d5f47de987%3A0x603e3858d492d579!2sDr.%20K.Gurunath%20Cardiac%20Center!5e0!3m2!1sen!2sin!4v1693567890000!5m2!1sen!2sin" 
      width="100%" 
      height="400" 
      style="border:0;" 
      allowfullscreen="" 
      loading="lazy" 
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>
</div>

                
                <!-- FAQ Section -->
                <div class="faq-section">
                    <h2 class="form-title" style="text-align: center; margin-bottom: 30px;">Frequently Asked Questions</h2>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            How do I schedule an appointment?
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            You can schedule an appointment by calling our appointment line at (123) 456-APPT during business hours, or by using our online appointment booking system available on our website.
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            What should I bring to my first appointment?
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            Please bring your insurance card, photo ID, any relevant medical records or test results from previous providers, a list of current medications, and a form of payment for any copays or deductibles.
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            Do you accept my insurance?
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            HeartCare accepts most major insurance plans. Please contact our billing department at (123) 456-BILL to verify whether we accept your specific insurance plan.
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            What should I do in case of a cardiac emergency?
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            In case of a cardiac emergency, please call 911 immediately or come directly to our emergency department which is open 24/7. Do not delay seeking care for symptoms like chest pain, shortness of breath, or other signs of heart trouble.
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            How can I get my medical records?
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            You can request your medical records by filling out our authorization form available at the reception desk or on our website. Please allow 5-7 business days for processing. There may be fees associated with extensive record copies.
                        </div>
                    </div>
                </div>
                
                <!-- Confirmation Message -->
                <div class="confirmation" id="confirmation">
                    <i class="fas fa-check-circle"></i>
                    <h2>Message Sent Successfully!</h2>
                    <p>Thank you for contacting HeartCare Cardiac Hospital. We have received your message and will respond within 24-48 hours during business days.</p>
                    <a href="index.html" class="btn">Return to Home</a>
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
        
        // FAQ toggle
        const faqQuestions = document.querySelectorAll('.faq-question');
        faqQuestions.forEach(question => {
            question.addEventListener('click', function() {
                const answer = this.nextElementSibling;
                answer.classList.toggle('active');
                this.querySelector('i').classList.toggle('fa-chevron-down');
                this.querySelector('i').classList.toggle('fa-chevron-up');
            });
        });
        
        // Form submission
        document.getElementById('contact-form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Basic validation
            const subject = document.getElementById('subject').value;
            const message = document.getElementById('message').value;
            
            if (!subject) {
                alert('Please select a subject');
                return;
            }
            
            if (!message) {
                alert('Please enter a message');
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