<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="styles.css" />
    <title>Web Design Mastery | Capturer</title>
  </head>
  <body>
    <header class="header" id="home">
      <nav>
        <div class="nav__header">
          <div class="nav__logo">
            <a href="#">
              <img src="assets/logo-white.png" alt="logo" />
            </a>
          </div>
          <div class="nav__menu__btn" id="menu-btn">
            <i class="ri-menu-line"></i>
          </div>
        </div>
        <ul class="nav__links" id="nav-links">
          <li><a href="#home">HOME</a></li>
          <li><a href="#about">ABOUT US</a></li>
          <li><a href="#service">SERVICES</a></li>
          <li class="nav__logo">
            <a href="#">
              <img src="assets/logo-white.png" alt="logo" />
            </a>
          </li>
          <li><a href="#blog">BLOG</a></li>
          <li><a href="#blog">WEDDINGS</a></li>
          <li><a href="#contact">CONTACT US</a></li>
          <li><a href="#login" class="login-btn">LOGIN</a></li> 
        </ul>
      </nav>
    </header>

    <div class="section__container about__container" id="about">
      <h2 class="section__header">WE CAPTURE SCOTLAND'S BEAUTY</h2>
      <p class="section__description">
      At Malcolm Lismore Photography, we are passionate about preserving the breathtaking landscapes, 
      diverse wildlife, and cherished moments that make Scotland so unique. 
      With an eye for detail and a deep appreciation for nature, Malcolm transforms ordinary scenes 
      into extraordinary visual stories.
      Whether it’s the rugged coastline, a fleeting moment in the wild, or the magic of your special day, 
      every photograph is crafted to capture the true essence of the moment. Let us help you preserve your 
      memories—one stunning frame at a time.
      </p>
      <p class="section__description">
        Whether it's a milestone event, a candid portrait, or the breathtaking
        beauty of nature, we strive to encapsulate the essence of every moment,
        ensuring that your cherished memories last a lifetime. Trust us to
        capture the magic of your life's journey, one frame at a time.
      </p>
      <img src="assets/logo-dark.png" alt="logo" />
    </div>

    <div class="section__container portfolio__container">
      <h2 class="section__header">~ PORTFOLIO ~</h2>
      <div class="portfolio__grid">
        <div class="portfolio__card">
          <img src="assets/portfolio-1.jpg" alt="portfolio" />
            <div class="portfolio__content">
              <a href="gallery.php">
               <button class="btn">VIEW PORTFOLIO</button>
              </a>
            </div>
        </div>
        <div class="portfolio__card">
          <img src="assets/portfolio-2.jpg" alt="portfolio" />
          <div class="portfolio__content">
            <button class="btn">VIEW PPORTFOLIO</button>
          </div>
        </div>
        <div class="portfolio__card">
          <img src="assets/portfolio-3.jpg" alt="portfolio" />
          <div class="portfolio__content">
            <button class="btn">VIEW PPORTFOLIO</button>
          </div>
        </div>
      </div>
    </div>

    <section class="service" id="service">
      <div class="section__container service__container">
        <h2 class="section__header">~ SERVICES ~</h2>
        <p class="section__description">
          At Capturer, we offer a range of professional photography services
          tailored to meet your unique needs. With a commitment to excellence
          and creativity, we strive to exceed your expectations, delivering
          captivating visuals that tell your story with authenticity and
          passion.
        </p>
        <div class="service__grid">
          <div class="service__card">
            <h4>Portrait Sessions</h4>
            <p>
              Our portrait sessions are designed to showcase your personality
              and style in stunning imagery.
            </p>
          </div>
          <div class="service__card">
            <h4>Maternity Sessions</h4>
            <p>
              Embrace the beauty and miracle of new life with our maternity and
              newborn photography sessions.
            </p>
          </div>
          <div class="service__card">
            <h4>Family Sessions</h4>
            <p>
              Cherish the bond of family with our custom-designed playful candid
              moments and portrait sessions.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="section__container client__container" id="client">
      <h2 class="section__header">~ TESTIMONIALS ~</h2>
      <!-- Slider main container -->
      <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <div class="client__card">
              <img src="assets/client-1.jpg" alt="client" />
              <p>
                Capturer exceeded all our expectations! Their attention to
                detail and ability to capture the essence of our special day was
                truly remarkable. Every time we look at our wedding photos,
                we're transported back to those magical moments. Thank you for
                preserving our memories so beautifully!
              </p>
              <h4>Sarah and Michael</h4>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="client__card">
              <img src="assets/client-2.jpg" alt="client" />
              <p>
                We couldn't be happier with our family portrait session with
                Capturer. They made us feel relaxed and comfortable throughout
                the entire shoot, resulting in natural and candid photos that
                perfectly reflect our family dynamic. These images will be
                cherished for years to come!
              </p>
              <h4>The Johnson Family</h4>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="client__card">
              <img src="assets/client-3.jpg" alt="client" />
              <p>
                Capturer's maternity and newborn sessions captured the most
                precious moments of our lives with such tenderness and care.
                From the anticipation of pregnancy to the joy of welcoming our
                little one, every photo tells a story that we'll cherish
                forever. Thank you for creating beautiful memories for our
                family!
              </p>
              <h4>Emily and David</h4>
            </div>
          </div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
      </div>
    </section>

    <section class="section__container gallery__container">
      <h2 class="section__header">~ GALLERY ~</h2>
      <div class="gallery__grid">
        <img src="assets/image-1.jpg" alt="gallery" />
        <img src="assets/image-2.jpg" alt="gallery" />
        <img src="assets/image-3.jpg" alt="gallery" />
        <img src="assets/image-4.jpg" alt="gallery" />
        <img src="assets/image-5.jpg" alt="gallery" />
        <img src="assets/image-6.jpg" alt="gallery" />
        <img src="assets/image-7.jpg" alt="gallery" />
        <img src="assets/image-8.jpg" alt="gallery" />
      </div>
      <div class="gallery__btn">
        <button class="btn">VIEW GALLERY</button>
      </div>
    </section>

    <section class="blog" id="blog">
      <div class="section__container blog__container">
        <div class="blog__content">
          <h2 class="section__header">~ LATEST BLOG ~</h2>
          <h4>Capturing Emotion in Every Frame</h4>
          <p>
            This blog post delves into the importance of storytelling in
            photography and how Capturer approaches capturing emotion and
            narrative in their work. Readers will discover the techniques and
            strategies used by professional photographers to evoke emotion,
            convey meaning, and create compelling visual narratives that
            resonate with viewers on a deep level.
          </p>
          <div class="blog__btn">
            <button class="btn">Read More</button>
          </div>
        </div>
      </div>
    </section>

    <section class="section__container instagram__container">
      <h2 class="section__header">~ INSTAGRAM ~</h2>
      <div class="instagram__flex">
        <img src="assets/image-1.jpg" alt="instagram" />
        <img src="assets/image-2.jpg" alt="instagram" />
        <img src="assets/image-3.jpg" alt="instagram" />
        <img src="assets/image-4.jpg" alt="instagram" />
        <img src="assets/image-5.jpg" alt="instagram" />
        <img src="assets/image-6.jpg" alt="instagram" />
        <img src="assets/image-7.jpg" alt="instagram" />
        <img src="assets/image-8.jpg" alt="instagram" />
      </div>
    </section>

    <footer id="contact">
      <div class="section__container footer__container">
        <div class="footer__col">
          <img src="assets/logo-dark.png" alt="logo" />
          <div class="footer__socials">
            <a href="#"><i class="ri-facebook-fill"></i></a>
            <a href="#"><i class="ri-instagram-line"></i></a>
            <a href="#"><i class="ri-twitter-fill"></i></a>
            <a href="#"><i class="ri-youtube-fill"></i></a>
            <a href="#"><i class="ri-pinterest-line"></i></a>
          </div>
        </div>
        <div class="footer__col">
          <ul class="footer__links">
            <li><a href="#home">HOME</a></li>
            <li><a href="#about">ABOUT US</a></li>
            <li><a href="#service">SERVICES</a></li>
            <li><a href="#client">CLIENT</a></li>
            <li><a href="#blog">BLOG</a></li>
            <li><a href="#contact">CONTACT US</a></li>
          </ul>
        </div>
        <div class="footer__col">
          <h4>STAY IN TOUCH</h4>
          <p>
            Keep up-to-date with all things Capturer! Join our community and
            never miss a moment!
          </p>
        </div>
      </div>
      <div class="footer__bar">
        Copyright © 2024 Web Design Mastery. All rights reserved.
      </div>
    </footer>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="main.js"></script>
  </body>
</html>
