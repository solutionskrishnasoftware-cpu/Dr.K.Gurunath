<!-- Add AOS CSS in <head> -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

<footer>
    <div class="container footer-container">
        <!-- About -->
        <div class="footer-col" data-aos="fade-up" data-aos-duration="1000">
            <h3>About HeartCare</h3>
            <p>HeartCare is a leading cardiac hospital dedicated to providing world-class heart care with state-of-the-art technology and compassionate specialists.</p>
            <div class="footer-contact">
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i> Dr. Gurunath Hospital, Priyadarshini Parisar East, Supela, Bhilai, Chhattisgarh 490023</li>
                    <li><i class="fas fa-phone"></i> +91 94252-38877</li>
                    <li><i class="fas fa-envelope"></i> contact@kgurunathcardiacandmaternity.com</li>
                </ul>
            </div>
        </div>
        
        <!-- Quick Links -->
        <div class="footer-col" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            <h3>Quick Links</h3>
            <ul class="footer-links">
                <li><a href="index.php"><i class="fas fa-angle-right"></i> Home</a></li>
                <li><a href="about.php"><i class="fas fa-angle-right"></i> About Us</a></li>
                <li><a href="services.php"><i class="fas fa-angle-right"></i> Services</a></li>
                <li><a href="doctors.php"><i class="fas fa-angle-right"></i> Doctors</a></li>
                <li><a href="appointment.php"><i class="fas fa-angle-right"></i> Appointment</a></li>
                <li><a href="contact.php"><i class="fas fa-angle-right"></i> Contact Us</a></li>
            </ul>
        </div>
        
        <!-- Services -->
        <div class="footer-col" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
            <h3>Our Services</h3>
            <ul class="footer-links">
                <li><a href="#"><i class="fas fa-heartbeat"></i> Cardiac Surgery</a></li>
                <li><a href="#"><i class="fas fa-stethoscope"></i> Cardiology</a></li>
                <li><a href="#"><i class="fas fa-running"></i> Cardiac Rehabilitation</a></li>
                <li><a href="#"><i class="fas fa-ambulance"></i> Emergency Care</a></li>
                <li><a href="#"><i class="fas fa-shield-alt"></i> Preventive Cardiology</a></li>
                <li><a href="#"><i class="fas fa-notes-medical"></i> Heart Health Screening</a></li>
            </ul>
        </div>
        
        <!-- Opening Hours -->
        <div class="footer-col" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
            <h3>Opening Hours</h3>
            <ul class="footer-hours">
                <li><i class="fas fa-clock"></i> Monday - Friday <span>8:00 AM - 8:00 PM</span></li>
                <li><i class="fas fa-clock"></i> Saturday <span>9:00 AM - 5:00 PM</span></li>
                <li><i class="fas fa-clock"></i> Sunday <span>10:00 AM - 4:00 PM</span></li>
                <li><i class="fas fa-hospital"></i> Emergency <span>24/7 Available</span></li>
            </ul>
        </div>
    </div>
    
    <div class="copyright" data-aos="fade-up" data-aos-duration="1200">
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> HeartCare Cardiac Hospital. All Rights Reserved.</p>
        </div>
    </div>
</footer>

<!-- AOS & Icon Animation -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init();
</script>

<style>
/* Icon Animations */
.footer-col i {
    color: #e63946;
    margin-right: 8px;
    transition: transform 0.3s ease, color 0.3s ease;
}

/* Hover Effect */
.footer-col a:hover i,
.footer-contact li:hover i {
    transform: scale(1.3) rotate(10deg);
    color: #ff4d6d;
}

/* Subtle bounce for icons */
@keyframes iconBounce {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-5px); }
}
.footer-col i {
    animation: iconBounce 2s infinite;
}
</style>
