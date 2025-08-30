<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HeartCare Cardiac Hospital</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
            overflow-x: hidden;
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
            animation: slideDown 0.5s ease-out;
        }
        
        @keyframes slideDown {
            from {
                transform: translateY(-100%);
            }
            to {
                transform: translateY(0);
            }
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
            animation: heartbeat 2s infinite;
        }
        
        @keyframes heartbeat {
            0% { transform: scale(1); }
            5% { transform: scale(1.1); }
            10% { transform: scale(1); }
            15% { transform: scale(1.1); }
            20% { transform: scale(1); }
            100% { transform: scale(1); }
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
            position: relative;
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
        
        nav ul li a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: #4ecdc4;
            transition: width 0.3s ease;
        }
        
        nav ul li a:hover::after {
            width: 100%;
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
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        
        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(26, 62, 106, 0.8), rgba(26, 62, 106, 0.8)), url('IMG/about.webp') no-repeat center center/cover;
            color: white;
            padding: 120px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.1);
            transform: translateY(100%);
            animation: wave 10s infinite linear;
        }
        
        @keyframes wave {
            0% { transform: translateY(100%) rotate(0deg); }
            100% { transform: translateY(-100%) rotate(360deg); }
        }
        
        .hero-content {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeUp 1s forwards 0.5s;
        }
        
        @keyframes fadeUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .hero h2 {
            font-size: 3rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
        }
        
        .hero p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }
        
        /* Services Section */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .service-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            opacity: 0;
            transform: translateY(30px);
        }
        
        .service-card.animate {
            animation: fadeUp 0.8s forwards;
        }
        
        .service-card:nth-child(2) {
            animation-delay: 0.2s;
        }
        
        .service-card:nth-child(3) {
            animation-delay: 0.4s;
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
            color: #2a6cc9;
            transition: transform 0.5s ease;
        }
        
        .service-card:hover .service-icon i {
            transform: rotateY(180deg);
        }
        
        .service-content {
            padding: 25px;
        }
        
        .service-content h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: #1a3e6a;
        }
        
        /* Specialists Section */
        .doctors-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }
        
        .doctor-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            text-align: center;
            opacity: 0;
            transform: translateY(30px);
        }
        
        .doctor-card.animate {
            animation: fadeUp 0.8s forwards;
        }
        
        .doctor-card:nth-child(2) {
            animation-delay: 0.2s;
        }
        
        .doctor-card:nth-child(3) {
            animation-delay: 0.4s;
        }
        
        .doctor-image {
            height: 250px;
            overflow: hidden;
            position: relative;
        }
        
        .doctor-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, transparent 0%, #1a3e6a 100%);
            opacity: 0;
            transition: opacity 0.5s ease;
            z-index: 1;
        }
        
        .doctor-card:hover .doctor-image::before {
            opacity: 0.6;
        }
        
        .doctor-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .doctor-card:hover .doctor-image img {
            transform: scale(1.05);
        }
        
        .doctor-info {
            padding: 20px;
            position: relative;
        }
        
        .doctor-info h3 {
            font-size: 1.4rem;
            margin-bottom: 5px;
            color: #1a3e6a;
        }
        
        .doctor-info p {
            color: #2a6cc9;
            margin-bottom: 15px;
            font-weight: 500;
        }
        
        /* Testimonials */
        .testimonials {
            background: #eaf4ff;
        }
        
        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .testimonial-card {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            position: relative;
            opacity: 0;
            transform: translateY(30px);
        }
        
        .testimonial-card.animate {
            animation: fadeUp 0.8s forwards;
        }
        
        .testimonial-card:nth-child(2) {
            animation-delay: 0.2s;
        }
        
        .testimonial-card:nth-child(3) {
            animation-delay: 0.4s;
        }
        
        .testimonial-card::before {
            content: '\201C';
            font-size: 5rem;
            color: #eaf4ff;
            position: absolute;
            top: 10px;
            left: 20px;
            line-height: 1;
        }
        
        .testimonial-text {
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
        }
        
        .testimonial-author {
            display: flex;
            align-items: center;
        }
        
        .author-image {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 15px;
            border: 3px solid #eaf4ff;
            transition: border-color 0.3s ease;
        }
        
        .testimonial-card:hover .author-image {
            border-color: #2a6cc9;
        }
        
        .author-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .testimonial-card:hover .author-image img {
            transform: scale(1.1);
        }
        
        .author-details h4 {
            font-size: 1.1rem;
            margin-bottom: 5px;
        }
        
        /* Appointment CTA */
        .appointment-cta {
            background: linear-gradient(135deg, #1a3e6a 0%, #2a6cc9 100%);
            color: white;
            text-align: center;
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }
        
        .appointment-cta::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: rgba(255, 255, 255, 0.1);
            transform: rotate(45deg);
            animation: shine 6s infinite linear;
        }
        
        @keyframes shine {
            0% { transform: translateX(-100%) rotate(45deg); }
            100% { transform: translateX(100%) rotate(45deg); }
        }
        
        .appointment-cta h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            position: relative;
        }
        
        .appointment-cta p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 30px;
            position: relative;
        }
        
        .appointment-cta .btn {
            position: relative;
            z-index: 1;
        }
        
        /* Face of the Hospital Section */
        .face-of-hospital {
            padding: 70px 0;
            background: linear-gradient(135deg, #fff, #f9f9f9);
        }
        
        .face-container {
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            align-items: center;
            justify-content: center;
        }
        
        .face-image {
            flex: 1;
            min-width: 300px;
            max-width: 450px;
            position: relative;
            opacity: 0;
            transform: translateX(-30px);
        }
        
        .face-image.animate {
            animation: fadeInLeft 1s forwards;
        }
        
        .doctor-image-slider {
            position: relative;
            width: 100%;
            height: 400px;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .doctor-img {
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0;
            transition: opacity 1s ease-in-out;
            border-radius: 15px;
        }
        
        .doctor-img.active {
            opacity: 1;
        }
        
        .face-content {
            flex: 1;
            min-width: 300px;
            max-width: 600px;
            opacity: 0;
            transform: translateX(30px);
        }
        
        .face-content.animate {
            animation: fadeInRight 1s forwards;
        }
        
        .section-subtitle {
            color: #d9534f;
            font-weight: 600;
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 1rem;
        }
        
        .face-title {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 20px;
            color: #1a3e6a;
            position: relative;
        }
        
        .face-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 80px;
            height: 4px;
            background: #2a6cc9;
            border-radius: 2px;
        }
        
        .section-text {
            color: #555;
            margin-bottom: 25px;
            line-height: 1.7;
            font-size: 1.1rem;
        }
        
        /* Doctor Info Slider */
        .doctor-info-slider {
            margin-bottom: 25px;
            position: relative;
            min-height: 120px;
        }
        
        .doctor-info {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            opacity: 0;
            transition: opacity 1s ease-in-out;
            padding: 15px;
            background: #eaf4ff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .doctor-info.active {
            opacity: 1;
        }
        
        .doctor-info strong {
            color: #c9302c;
            font-size: 1.2rem;
            display: block;
            margin-bottom: 8px;
        }
        
        .doctor-info em {
            color: #2a6cc9;
            font-style: italic;
        }
        
        /* Highlights */
        .highlights {
            display: flex;
            gap: 20px;
            margin-top: 25px;
            flex-wrap: wrap;
        }
        
        .highlight-box {
            flex: 1;
            min-width: 250px;
            border: 1px solid #eee;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            background: #fff;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            transition: 0.3s;
            opacity: 0;
            transform: translateY(20px);
        }
        
        .highlight-box.animate {
            animation: fadeUp 0.8s forwards;
        }
        
        .highlight-box:nth-child(2) {
            animation-delay: 0.2s;
        }
        
        .highlight-box:hover {
            transform: translateY(-5px);
            background: #fdfdfd;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
        }
        
        .highlight-box h6 {
            color: #d9534f;
            font-size: 1rem;
            font-weight: 700;
            margin-bottom: 12px;
        }
        
        /* Animations */
        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
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
            }
            
            .hero h2 {
                font-size: 2.2rem;
            }
            
            .section-title h2 {
                font-size: 2rem;
            }
            
            .face-title {
                font-size: 2rem;
            }
            
            .face-container {
                flex-direction: column;
            }
        }

        :root {
            --primary: #1a76d2;
            --primary-dark: #0d47a1;
            --secondary: #f8f9fa;
            --accent: #e63946;
            --text-dark: #2d3748;
            --text-light: #718096;
            --white: #ffffff;
            --shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            --transition: all 0.3s ease;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Roboto', sans-serif;
            color: var(--text-dark);
            line-height: 1.6;
            background-color: #f9fafc;
            padding: 0px;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
        
        /* Face of the Hospital Section */
        .face-of-hospital {
            padding: 80px 0;
            background: linear-gradient(135deg, var(--white) 0%, #f0f4ff 100%);
            border-radius: 20px;
            box-shadow: var(--shadow);
            margin: 30px 0;
        }
        
        .face-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
        }
        
        /* Image Section */
        .face-image {
            position: relative;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: var(--shadow);
            height: 500px;
        }
        
        .doctor-image-slider {
            position: relative;
            width: 100%;
            height: 100%;
        }
        
        .doctor-img {
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0;
            transition: opacity 0.8s ease;
            border-radius: 15px;
        }
        
        .doctor-img.active {
            opacity: 1;
        }
        
        .slider-nav {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 10px;
            z-index: 10;
        }
        
        .slider-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.5);
            cursor: pointer;
            transition: var(--transition);
        }
        
        .slider-dot.active {
            background: var(--white);
            transform: scale(1.2);
        }
        
        /* Content Section */
        .face-content {
            padding: 20px;
        }
        
        .section-subtitle {
            font-size: 16px;
            font-weight: 500;
            color: var(--primary);
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }
        
        .section-subtitle::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 40px;
            height: 3px;
            background: var(--accent);
            border-radius: 2px;
        }
        
        .face-title {
            font-family: 'Playfair Display', serif;
            font-size: 42px;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 20px;
            line-height: 1.2;
        }
        
        .section-text {
            font-size: 16px;
            color: var(--text-light);
            margin-bottom: 30px;
            line-height: 1.8;
        }
        
        /* Doctor Info Slider */
        .doctor-info-slider {
            position: relative;
            min-height: 150px;
            margin-bottom: 40px;
            background: var(--secondary);
            padding: 25px;
            border-radius: 12px;
            box-shadow: var(--shadow);
        }
        
        .doctor-info {
            position: absolute;
            opacity: 0;
            transform: translateY(20px);
            transition: var(--transition);
        }
        
        .doctor-info.active {
            opacity: 1;
            transform: translateY(0);
        }
        
        .doctor-info strong {
            font-size: 20px;
            color: var(--primary-dark);
            display: block;
            margin-bottom: 8px;
        }
        
        .doctor-info em {
            color: var(--accent);
            font-style: normal;
            font-weight: 500;
        }
        
        /* Highlights */
        .highlights {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 25px;
        }
        
        .highlight-box {
            background: var(--white);
            padding: 25px;
            border-radius: 12px;
            box-shadow: var(--shadow);
            transition: var(--transition);
            border-left: 4px solid var(--primary);
        }
        
        .highlight-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        
        .highlight-box h6 {
            font-size: 18px;
            color: var(--primary);
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .highlight-box h6 i {
            color: var(--accent);
            font-size: 20px;
        }
        
        .highlight-box p {
            color: var(--text-light);
            font-size: 15px;
            line-height: 1.6;
        }
        
        /* Responsive Design */
        @media (max-width: 992px) {
            .face-container {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            
            .face-image {
                height: 400px;
            }
            
            .face-title {
                font-size: 36px;
            }
        }
        
        @media (max-width: 576px) {
            .highlights {
                grid-template-columns: 1fr;
            }
            
            .face-title {
                font-size: 32px;
            }
            
            .doctor-info strong {
                font-size: 18px;
            }
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
            margin-bottom:2px;
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

    <!-- Hero Section -->
    <section class="hero">
        <div class="container hero-content">
            <h2>Cardiac Care</h2>
            <p>Providing exceptional heart care with cutting-edge technology and compassionate specialists.</p>
            <a href="appointment.php" class="btn">Request an Appointment</a>
        </div>
    </section>
<!-- Add AOS CSS in <head> -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

<!-- Services Section -->
<section class="services">
    <div class="container">
        <div class="section-title" data-aos="fade-up" data-aos-duration="1000">
            <h2>Our Services</h2>
            <p>Comprehensive medical and cardiac care tailored to your needs</p>
        </div>
        
        <div class="services-grid">
            <!-- Cardiac Surgery -->
            <div class="service-card" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100">
                <div class="service-icon">
                    <i class="fas fa-heart"></i>
                </div>
                <div class="service-content">
                    <h3>Cardiac Surgery</h3>
                    <p>Our expert cardiac surgeons perform advanced heart surgeries including bypass, valve replacement, and minimally invasive procedures with high success rates and precision care.</p>
                </div>
            </div>
            
            <!-- Obstetrician & Gynaecologist -->
            <div class="service-card" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200">
                <div class="service-icon">
                    <i class="fas fa-stethoscope"></i>
                </div>
                <div class="service-content">
                    <h3>Consultant Obstetrician & Gynaecologist</h3>
                    <p>We provide specialized care for women’s health including antenatal checkups, pregnancy care, safe deliveries, and management of gynaecological conditions with compassion and expertise.</p>
                </div>
            </div>
            
            <!-- Infertility Specialist -->
            <div class="service-card" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
                <div class="service-icon">
                    <i class="fas fa-heartbeat"></i>
                </div>
                <div class="service-content">
                    <h3>Consultant Obstetrician, Gynaecologist & Infertility Specialist</h3>
                    <p>Offering advanced infertility treatments, IVF, IUI, and personalized reproductive care to support couples in achieving their dream of parenthood with the latest technology and medical expertise.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Add AOS JS before </body> -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init();
</script>


   
</head>
<body>
    <!-- Face of the Hospital Section -->
    <section class="face-of-hospital">
        <div class="container">
            <div class="face-container">
                <!-- Left: Image -->
                <div class="face-image">
                    <div class="doctor-image-slider">
                        <img src="img/dr.k.gurunath.jpg" alt="Dr. K. Gurunath" class="doctor-img active">
                        <img src="img/Dr.Vimala_Gurunath.jpg" alt="Dr. Vimala Gurunath" class="doctor-img">
                    </div>
                    <div class="slider-nav">
                        <div class="slider-dot active" data-index="0"></div>
                        <div class="slider-dot" data-index="1"></div>
                    </div>
                </div>

                <!-- Right: Content -->
                <div class="face-content">
                    <h5 class="section-subtitle">Face of the Hospital</h5>
                    <h2 class="face-title">Great Passion For Healing</h2>
                    <p class="section-text">
                        With a profound commitment to healing, our hospital provides compassionate care 
                        for individuals at every life stage. From advanced cardiac treatments to specialized 
                        maternity care, we prioritize your well-being with unwavering dedication and expertise.
                    </p>

                    <!-- Doctors Info Slider -->
                    <div class="doctor-info-slider">
                        <div class="doctor-info active">
                            <p><strong>Dr. K. GURUNATH</strong>
                                Founder, K Gurunath Cardiac & Maternity Hospital<br>
                                <em>Interventional Cardiologist</em><br>
                                MD, DM (Cardiology), FESC, FCSI
                            </p>
                        </div>

                        <div class="doctor-info">
                            <p><strong>Dr. Vimala Gurunath</strong>
                                Co-Founder, K Gurunath Cardiac & Maternity Hospital<br>
                                <em>Consultant Obstetrician & Gynaecologist</em><br>
                                M.B.B.S, D.G.O
                            </p>
                        </div>
                    </div>

                    <!-- Highlights -->
                    <div class="highlights">
                        <div class="highlight-box">
                            <h6><i class="fas fa-users"></i> PROFESSIONAL TEAM</h6>
                            <p>Our highly skilled and dedicated team provides the best possible care for every patient.</p>
                        </div>
                        <div class="highlight-box">
                            <h6><i class="fas fa-microscope"></i> SERVICE & TECHNOLOGY</h6>
                            <p>Experience world-class care with our compassionate team and leading-edge technology.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <!-- Testimonials Section -->
    <section class="testimonials">
        <div class="container">
            <div class="section-title">
                <h2>Patient Testimonials</h2>
                <p>Hear from our patients about their experience at HeartCare Hospital</p>
            </div>
            
            <div class="testimonial-grid">
                <div class="testimonial-card">
                    <div class="testimonial-text">
                        <p>The care I received at HeartCare was exceptional. The staff was compassionate and the doctors took the time to explain everything to me.</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-image">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=80" alt="Robert Johnson">
                        </div>
                        <div class="author-details">
                            <h4>Abhishek Sinha</h4>
                            <p>Heart Surgery Patient</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <div class="testimonial-text">
                        <p>I'm so grateful to the team at HeartCare for saving my life. Their quick response and expert care made all the difference in my recovery.</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-image">
                            <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=80" alt="Mary Williams">
                        </div>
                        <div class="author-details">
                            <h4>Ankita Pandey</h4>
                            <p>Cardiology Patient</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <div class="testimonial-text">
                        <p>The cardiac rehabilitation program changed my life. The staff was supportive and helped me regain my strength and confidence.</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-image">
                            <img src="https://images.unsplash.com/photo-1552058544-f2b08422138a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=80" alt="James Wilson">
                        </div>
                        <div class="author-details">
                            <h4>Desh Pandey</h4>
                            <p>Rehabilitation Patient</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Appointment CTA -->
    <section class="appointment-cta">
        <div class="container">
            <h2>Schedule Your Appointment Today</h2>
            <p>Take the first step towards better heart health. Our team is ready to provide you with exceptional care.</p>
            <a href="appointment.php" class="btn">Book an Appointment</a>
        </div>
    </section>

<!-- Footer -->
 
  <?php include 'footer.php'; ?>

    <!-- JavaScript -->
    <script>
        // Animation on scroll
        document.addEventListener('DOMContentLoaded', function() {
            const animatedElements = document.querySelectorAll('.service-card, .doctor-card, .testimonial-card, .face-image, .face-content, .highlight-box');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate');
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1
            });
            
            animatedElements.forEach(element => {
                observer.observe(element);
            });
            
            // Doctor image and info slider
            let doctorImages = document.querySelectorAll(".doctor-img");
            let doctorInfos = document.querySelectorAll(".doctor-info");
            let index = 0;

            setInterval(() => {
                // remove active class
                doctorImages[index].classList.remove("active");
                doctorInfos[index].classList.remove("active");

                // increment index
                index = (index + 1) % doctorImages.length;

                // add active class
                doctorImages[index].classList.add("active");
                doctorInfos[index].classList.add("active");
            }, 5000); // change every 5 seconds
        });
  
        document.addEventListener('DOMContentLoaded', function() {
            // Elements
            const doctorImages = document.querySelectorAll('.doctor-img');
            const doctorInfos = document.querySelectorAll('.doctor-info');
            const dots = document.querySelectorAll('.slider-dot');
            
            let currentSlide = 0;
            const slideCount = doctorImages.length;
            
            // Function to show slide
            function showSlide(index) {
                // Hide all slides
                doctorImages.forEach(img => img.classList.remove('active'));
                doctorInfos.forEach(info => info.classList.remove('active'));
                dots.forEach(dot => dot.classList.remove('active'));
                
                // Show selected slide
                doctorImages[index].classList.add('active');
                doctorInfos[index].classList.add('active');
                dots[index].classList.add('active');
                
                currentSlide = index;
            }
            
            // Add click events to dots
            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    showSlide(index);
                });
            });
            
            // Auto slide every 5 seconds
            setInterval(() => {
                currentSlide = (currentSlide + 1) % slideCount;
                showSlide(currentSlide);
            }, 5000);
        });
    </script>

</body>
</html>