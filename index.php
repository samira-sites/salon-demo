<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Luxury Nail Salon</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <script src="https://assets.calendly.com/assets/external/widget.js" async></script>
  <!--Calendly CSS-->
  <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet" />
</head>

<body>

  <!-- HEADER -->
  <header>
    <div class="logo">Nail Luxe</div>

    <!-- Desktop Nav -->
    <nav class="desktop-nav">
      <a href="#hero">Home</a>
      <a href="#services">Services</a>
      <a href="#gallery">Gallery</a>
      <a href="#about">About</a>
      <a href="#contact">Contact</a>
      <button class="btn calendly-btn">Book Appointment</button>
    </nav>

    <!-- Hamburger Button -->
    <button class="burger" aria-label="Menu">
      <span></span>
      <span></span>
      <span></span>
    </button>

    <!-- Mobile Overlay + Menu -->
    <div class="mobile-overlay"></div>
    <nav class="mobile-menu">
      <a href="#hero">Home</a>
      <a href="#services">Services</a>
      <a href="#gallery">Gallery</a>
      <a href="#about">About</a>
      <a href="#contact">Contact</a>
      <button class="btn calendly-btn">Book Appointment</button>


    </nav>
  </header>

  <!-- HERO -->
  <section class="hero hidden animate-up" id="hero">
    <div class="hero-container">
      <div class="hero-text">
        <h1 class="hidden animate-up">Luxury Nail Care & Beauty</h1>
        <p class="hidden animate-up">Pamper your nails with our expert care</p>
        <button class="btn calendly-btn">
          Book Appointment
        </button>
      </div>
      <div class="hero-image">

      </div>
    </div>
  </section>

 <!-- SERVICES -->
<section id="services" class="services">
  <h2>Our Services</h2>
  <div class="service-cards">
    <div class="card hidden animate-up">
      <h3>Manicure</h3>
      <p>Classic nail care & polish</p>
      <span class="price">$20</span>
    </div>
    <div class="card hidden animate-up">
      <h3>Pedicure</h3>
      <p>Relaxing foot care & polish</p>
      <span class="price">$25</span>
    </div>
    <div class="card hidden animate-up">
      <h3>Gel Nails</h3>
      <p>Long-lasting gel finish</p>
      <span class="price">$35</span>
    </div>
    <div class="card hidden animate-up">
      <h3>Nail Art</h3>
      <p>Custom designs & patterns</p>
      <span class="price">From $10</span>
    </div>
    <div class="card hidden animate-up">
      <h3>Acrylic Nails</h3>
      <p>Durable & stylish extensions</p>
      <span class="price">$40</span>
    </div>
  </div>
  <br>
  <button class="btn calendly-btn">Book Appointment</button>
</section>

<!---   -TESTIMOIALS------>
<section class="testimonials">
  <h2>What Our Clients Say</h2>

  <div class="testimonial-slider">

    <div class="testimonial active">
      <p>“Absolutely loved my nails. The attention to detail is unmatched.”</p>
    
      <div class="client">
        <img src="https://i.pravatar.cc/80?img=5" alt="client">
        <div>
          <h4>Sheryl M.</h4>
          <span>★ ★ ★ ★ ★</span>
        </div>
      </div>
    </div>
    
    <div class="testimonial">
      <p>“Elegant service and beautiful results. I’ll definitely come back.”</p>
    
      <div class="client">
        <img src="https://i.pravatar.cc/80?img=32" alt="client">
        <div>
          <h4>Lina A.</h4>
          <span>★ ★ ★ ★ ★</span>
        </div>
      </div>
    </div>
    
    <div class="testimonial">
      <p>“The best gel nails I’ve had. Clean, stylish, and long-lasting.”</p>
    
      <div class="client">
        <img src="https://i.pravatar.cc/80?img=47" alt="client">
        <div>
          <h4>Jane D.</h4>
          <span>★ ★ ★ ★ ★</span>
        </div>
      </div>
    </div>
  <div class="dots">
    <span class="dot active"></span>
    <span class="dot"></span>
    <span class="dot"></span>
  </div>

  <p class="demo-note">
    *Sample reviews for demonstration purposes
  </p>
</section>

  <!-- GALLERY -->
  <section id="gallery">
    <h2>Our Gallery</h2>
    <div class="gallery-grid hidden animate-up">
      <img src="images/nail.webp" alt="Nail Design 1" class="hidden animate-up">
      <img src="images/nail2.webp" alt="Nail Design 2" class="hidden animate-up">
      <img src="images/nail3.webp" alt="Nail Design 3" class="hidden animate-up">
      <img src="images/nail4.webp" alt="Nail Design 4" class="hidden animate-up">
      <img src="images/nail5.webp" alt="Nail Design 5" class="hidden animate-up">
      <img src="images/nail6.webp" alt="Nail Design 6" class="hidden animate-up">
      <img src="images/nail7.webp" alt="Nail Design 7" class="hidden animate-up">
      <img src="images/nail8.webp" alt="Nail Design 8" class="hidden animate-up">
    </div>
    <br>
    <button class="btn calendly-btn">Book Appointment</button>
  </section>

  <!-- ABOUT -->
  <section id="about" class="about" style="padding-top: 1rem;">
    <h2>About Us</h2>
    <div class="about-container hidden animate-up">
      <div class="about-image">
        <img src="images/about-image.webp" alt="Salon">
      </div>
      <div class="about-text">
        <h3>Luxury Nail Experience</h3>
        <p>At Nail Luxe, we provide luxurious nail care with a touch of elegance. Our expert team ensures every client
          receives personalized service, leaving you feeling pampered, confident, and beautiful.</p>
        <p>From classic manicures to modern nail art, we combine premium products with a relaxing atmosphere to give you
          the ultimate beauty experience.</p>
      </div>
    </div>
    <br>
    <button class="btn calendly-btn">Book Appointment</button>
  </section>

 <!-- CONTACT -->
<section id="contact" class="contact"  style="padding-top: 1rem;">
  <h2 style="margin-top: 0;">Contact Us</h2>

  <div class="contact-container">

    <!-- Contact Form -->
    <div class="contact-form hidden animate-up">
      <form action="process_contact.php" method="POST" id="contactForm">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <input type="text" name="phone" placeholder="Phone">
        <textarea name="message" placeholder="Your Message" required></textarea>
        <button type="submit" class="btn">Send Message</button>
        <span id="responseMsg"></span>
      </form>
    </div>

    <!-- Contact Info + Map -->
    <div class="contact-info hidden animate-up">

      <!-- Responsive Map -->
      <div class="map">
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d3477.245604558393!2d47.961489674329016!3d29.363097075273693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3fcf84defe8c23bb%3A0xdf267f967e236de2!2sPanasonic%20Tower%2C%2016%20Fahad%20Al-Salem%20Street%2C%20Kuwait%20City!3m2!1d29.363097099999997!2d47.9640646!4m5!1s0x3fcf84defe8c23bb%3A0xdf267f967e236de2!2sPanasonic%20Tower%2C%2016%20Fahad%20Al-Salem%20Street%2C%20Kuwait%20City!3m2!1d29.363097099999997!2d47.9640646!5e0!3m2!1sen!2skw!4v1774712514530!5m2!1sen!2skw" 
          allowfullscreen="" loading="lazy">
        </iframe>
      </div>

      <!-- Info -->
      <div class="info">
        <p>
          <img src="svg/location.svg" alt="Location" class="icon"> <a href="https://maps.app.goo.gl/nSTh3iMRCUiLUzZN8" target="_blank" class="info-link">
            Panasonic Tower, Kuwait
          </a>
        
        </p>
        
        <p>
          <img src="svg/phone.svg" alt="Phone" class="icon"> <a href="tel:+965XXXXXXXX" class="info-link">
            +965 XXX XXXX
          </a>
         
        </p>
        
        <p>
          <img src="svg/email.svg" alt="Email" class="icon"> <a href="mailto:hello@salon.com" class="info-link">
            hello@nailluxe.com
          </a>
         
        </p>

            <!-- Disclaimer -->
    <p class="contact-disclaimer">
      ⚠️ This location is for demo purposes only. Not a real salon.
    </p>
      </div>

    </div>
  
  </div>

  
</section>

  <!-- FOOTER -->
  <footer>
    <div class="footer-container">
      <div class="footer-col">
        <h3>Nail Luxe</h3>
        <p>Luxury nail and beauty services designed to make you feel confident and beautiful.</p>
      </div>
      <div class="footer-col">
        <h3>Quick Links</h3>
        <a href="#hero">Home</a>
        <a href="#services">Services</a>
        <a href="#gallery">Gallery</a>
        <a href="#contact">Contact</a>
      </div>
      <div class="footer-col">
        <h3>Follow Us</h3>
        <div class="social-icons">
          <a href="#"><i class="fa-brands fa-instagram"></i></a>
          <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#"><i class="fa-brands fa-tiktok"></i></a>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; 2026 Nail Luxe. All rights reserved.</p>
    </div>
  </footer>


  <script src="script.js"></script>
</body>

</html>