// ===== Smooth scroll for all nav links =====
document.querySelectorAll('header nav a, .mobile-menu a').forEach(anchor => {
    anchor.addEventListener('click', function(e){
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        const headerHeight = document.querySelector('header').offsetHeight; // fixed header
        if(target){
            window.scrollTo({
                top: target.offsetTop - headerHeight,
                behavior: 'smooth'
            });
        }

        // Close mobile menu if this is a mobile menu link
        if(this.closest('.mobile-menu')){
            const burger = document.querySelector('.burger');
            const mobileMenu = document.querySelector('.mobile-menu');
            const overlay = document.querySelector('.mobile-overlay');
            burger.classList.remove('active');
            mobileMenu.classList.remove('open');
            overlay.classList.remove('active');
        }
    });
});

/*-----------calendly---------------------*/
document.querySelectorAll('.calendly-btn').forEach(button => {
    button.addEventListener('click', function () {
      Calendly.initPopupWidget({
        url: 'https://calendly.com/samiraomar/30min?background_color=111111&text_color=ffffff&primary_color=ffbd59'
      });
    });
  });

// ===== Intersection Observer for animations =====
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('show');
        observer.unobserve(entry.target);
      }
    });
}, {
    threshold: 0.2  
});

// Observe all hidden elements
document.querySelectorAll('.hidden').forEach(el => observer.observe(el));

// ===== Mobile burger menu toggle =====
const burger = document.querySelector('.burger');
const mobileMenu = document.querySelector('.mobile-menu');
const overlay = document.querySelector('.mobile-overlay');

function toggleMenu() {
    burger.classList.toggle('active');
    mobileMenu.classList.toggle('open');
    overlay.classList.toggle('active');
}

// Toggle menu on burger click
burger.addEventListener('click', toggleMenu);

// Close menu on overlay click
overlay.addEventListener('click', toggleMenu);


/*-------------seclect and popup-----------*/
document.querySelectorAll('a[href^="#"]').forEach(link => {
  link.addEventListener('click', (e) => {
    const targetId = link.getAttribute('href');
    const target = document.querySelector(targetId);
    if(target){
      // jump instantly
      target.scrollIntoView({behavior: 'auto'});
      
      // remove and re-add class to trigger pop-up animation
      target.classList.remove('active');
      void target.offsetWidth; // trigger reflow
      target.classList.add('active');
    }
  });
});
//------------TESTIMOIALS-------------------//
const testimonials = document.querySelectorAll(".testimonial");
const dots = document.querySelectorAll(".dot");
const slider = document.querySelector(".testimonial-slider");

let index = 0;

// show slide
function showSlide(i) {
  testimonials.forEach(t => t.classList.remove("active"));
  dots.forEach(d => d.classList.remove("active"));

  testimonials[i].classList.add("active");
  dots[i].classList.add("active");
}

// auto slide
setInterval(() => {
  index = (index + 1) % testimonials.length;
  showSlide(index);
}, 4500);

// dots click
dots.forEach((dot, i) => {
  dot.addEventListener("click", () => {
    index = i;
    showSlide(index);
  });
});


// ===== SWIPE FEATURE =====
let startX = 0;
let endX = 0;

slider.addEventListener("touchstart", (e) => {
  startX = e.touches[0].clientX;
});

slider.addEventListener("touchend", (e) => {
  endX = e.changedTouches[0].clientX;
  handleSwipe();
});

function handleSwipe() {
  let diff = startX - endX;

  if (diff > 50) {
    index = (index + 1) % testimonials.length;
    showSlide(index);
  }

  if (diff < -50) {
    index = (index - 1 + testimonials.length) % testimonials.length;
    showSlide(index);
  }
}

// ---------- GET FORM AND MESSAGE ELEMENT ----------
const form = document.getElementById("contactForm");
const msg = document.getElementById("responseMsg");

// ---------- FORM SUBMIT EVENT LISTENER ----------
form.addEventListener("submit", async function(e) {
  e.preventDefault(); // prevent default page reload (AJAX behavior)

  // Collect form data to send to server
  const formData = new FormData(this);

  // ---------- SHOW "SENDING..." MESSAGE ----------
  msg.innerText = "Sending...";
  msg.style.color = "blue";
  msg.classList.add("show"); // add slide-in animation

  try {
    // ---------- AJAX REQUEST USING FETCH ----------
    // Sends form data asynchronously to the PHP script
    const response = await fetch("process_contact.php", {
      method: "POST",
      body: formData
    });

    // Get server response as text
    const data = await response.text();

    // ---------- DISPLAY SERVER RESPONSE ----------
    msg.innerText = data; // show message inside the form
    // Green if success, red if error
    msg.style.color = data.includes("successfully") ? "green" : "red";
    msg.classList.add("show"); // slide-in effect

    // Clear form if submission successful
    if (data.includes("successfully")) form.reset();

    // ---------- AUTO-HIDE MESSAGE AFTER TIMEOUT ----------
    setTimeout(() => {
      msg.classList.remove("show"); // hide slide animation
      msg.innerText = "";           // clear text
    }, 3000); // 3000ms = 3 seconds

  } catch (err) {
    // ---------- HANDLE NETWORK/SERVER ERROR ----------
    msg.innerText = "Something went wrong!";
    msg.style.color = "red";
    msg.classList.add("show");

    // Auto-hide error message after 3 seconds
    setTimeout(() => {
      msg.classList.remove("show");
      msg.innerText = "";
    }, 3000);
  }
});