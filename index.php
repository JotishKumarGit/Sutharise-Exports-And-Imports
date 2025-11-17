<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sutharise Exports and Imports - Home Page</title>
  <!-- bootstrap icnos -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <!-- bootstrap css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <!-- AOS CSS -->
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
  <link rel="stylesheet" href="assets/css/style.css">

  <style>
    .product-img {
      height: 250px;
      object-fit: cover;
    }

    .card:hover {
      transform: translateY(-5px);
      transition: 0.3s ease;
    }

    footer a:hover {
      color: #0dcaf0 !important;
      /* Bootstrap info color */
      transition: 0.3s ease;
    }
  </style>

</head>

<body>

  <!-- navbar -->
  <?php include('header.php') ?>

  <!-- carousel -->
  <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/images/cardamom.jpg" style="height:600px; width: auto;" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="assets/images/black_papper.jpg" style="height:600px; width: auto;" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="assets/images/amla.jpg" style="height:600px; width: auto;" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- About Content -->
  <div class="container-fluid about-wrapper">
    <div class="container">
      <!-- About Section -->
      <div class="about-heading text-center pt-4" data-aos="fade-up">
        <h2>About Sutharise Exports and Imports</h2>
        <p>
          At <strong>Sutharise Exports and Imports</strong>, we specialize in delivering premium-quality agricultural and spice products across the globe. Our mission is to promote healthy living through natural, farm-sourced goods that meet international quality standards.
        </p>
      </div>

      <section class="about-section py-5">
        <div class="row align-items-center">

          <!-- Left Image -->
          <div class="col-lg-6 mb-4 mb-lg-0" data-aos="zoom-in" data-aos-duration="1000">
            <div class="about-img">
              <img src="assets/images/amla.jpg" alt="Sutharise Products" class="img-fluid" />
            </div>
          </div>

          <!-- Right Text -->
          <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1200">
            <div class="about-text">
              <h2>Who We Are</h2>
              <p>
                <strong>Sutharise Exports and Imports</strong> is a trusted name in the export of high-grade agricultural produce and spices. We proudly offer a diverse range of products that cater to both culinary and health-conscious markets.
              </p>

              <ul>
                <li><strong>Coconuts</strong></li>
                <li><strong>Small Onion</strong> & <strong>Big Onion</strong></li>
                <li><strong>Pepper, Anise, Cumin, and Cardamom</strong></li>
                <li><strong>Lemon and Amla</strong></li>
                <li><strong>Drumstick</strong> and <strong>Drumstick Seeds (Oil Purpose)</strong></li>
                <li><strong>Various Nuts</strong></li>
              </ul>

              <p>
                Every product from Sutharise is handpicked and processed with utmost care to ensure freshness, purity, and long shelf life. Our commitment to quality and customer satisfaction drives everything we do.
              </p>
              <a href="contact.php" class="btn btn-primary">Connect With Us</a>
            </div>
          </div>

        </div>
      </section>
    </div>
  </div>

  <!-- Our Products Section -->
  <div class="container-fluid py-5">
    <div class="container text-center">
      <h2 class="mb-4" data-aos="fade-up">Our Products</h2>
      <p class="mb-5" data-aos="fade-up" data-aos-delay="100">
        Discover everyday essentials designed for better living. From eco-friendly <strong>Paper Cups</strong> to nutrient-rich <strong>Cold Pressed Oil</strong>, our products bring sustainability and purity to your lifestyle.
      </p>
      <div class="row justify-content-center g-4">

        <!-- 1 -->
        <div class="col-sm-10 col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
          <div class="card h-100 shadow border-0">
            <img src="assets/images/lemon.webp" class="card-img-top product-img" alt="Paper Cups">
            <div class="card-body text-center">
              <h5 class="card-title">Lemon</h5>
              <div class="d-flex justify-content-center gap-2">
                <a href="#" data-bs-toggle="modal" data-bs-target="#enquiryModal" class="btn btn-outline-primary">Enquiry</a>
                <a href="lemon.php" class="btn btn-primary">Details</a>
              </div>
            </div>
          </div>
        </div>

        <!-- 2 -->
        <div class="col-sm-10 col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
          <div class="card h-100 shadow border-0">
            <img src="assets/images/amla.jpg" class="card-img-top product-img" alt="Cold Pressed Oil">
            <div class="card-body text-center">
              <h5 class="card-title">Amla</h5>
              <div class="d-flex justify-content-center gap-2">
                <a href="#" data-bs-toggle="modal" data-bs-target="#enquiryModal" class="btn btn-outline-primary">Enquiry</a>
                <a href="amla.php" class="btn btn-primary">Details</a>
              </div>
            </div>
          </div>
        </div>

        <!-- 3 -->
        <div class="col-sm-10 col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
          <div class="card h-100 shadow border-0">
            <img src="assets/images/drumstaic_seeds_oil.jpg" class="card-img-top product-img" alt="Cold Pressed Oil">
            <div class="card-body text-center">
              <h5 class="card-title">Drumstaic Seeds Oil</h5>
              <div class="d-flex justify-content-center gap-2">
                <a href="#" data-bs-toggle="modal" data-bs-target="#enquiryModal" class="btn btn-outline-primary">Enquiry</a>
                <a href="drumstaic_seeds_oil.php" class="btn btn-primary">Details</a>
              </div>
            </div>
          </div>
        </div>
        <!-- 4 -->
        <div class="col-sm-10 col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
          <div class="card h-100 shadow border-0">
            <img src="assets/images/Cummins_seeds.jpg" class="card-img-top product-img" alt="Cold Pressed Oil">
            <div class="card-body text-center">
              <h5 class="card-title">Cummins Seeds</h5>
              <div class="d-flex justify-content-center gap-2">
                <a href="#" data-bs-toggle="modal" data-bs-target="#enquiryModal" class="btn btn-outline-primary">Enquiry</a>
                <a href="cummin_seeds.php" class="btn btn-primary">Details</a>
              </div>
            </div>
          </div>
        </div>
        <!-- 5 -->
        <div class="col-sm-10 col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
          <div class="card h-100 shadow border-0">
            <img src="assets/images/coconut.webp" class="card-img-top product-img" alt="Cold Pressed Oil">
            <div class="card-body text-center">
              <h5 class="card-title">Coconut</h5>
              <div class="d-flex justify-content-center gap-2">
                <a href="#" data-bs-toggle="modal" data-bs-target="#enquiryModal" class="btn btn-outline-primary">Enquiry</a>
                <a href="coconut.php" class="btn btn-primary">Details</a>
              </div>
            </div>
          </div>
        </div>
        <!-- 6 -->
        <div class="col-sm-10 col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
          <div class="card h-100 shadow border-0">
            <img src="assets/images/black_papper.jpg" class="card-img-top product-img" alt="Cold Pressed Oil">
            <div class="card-body text-center">
              <h5 class="card-title">Black Papper</h5>
              <div class="d-flex justify-content-center gap-2">
                <a href="#" data-bs-toggle="modal" data-bs-target="#enquiryModal" class="btn btn-outline-primary">Enquiry</a>
                <a href="black_papper.php" class="btn btn-primary">Details</a>
              </div>
            </div>
          </div>
        </div>
        <!-- 7 -->
        <div class="col-sm-10 col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
          <div class="card h-100 shadow border-0">
            <img src="assets/images/anise.webp" class="card-img-top product-img" alt="Cold Pressed Oil">
            <div class="card-body text-center">
              <h5 class="card-title">Anise</h5>
              <div class="d-flex justify-content-center gap-2">
                <a href="#" data-bs-toggle="modal" data-bs-target="#enquiryModal" class="btn btn-outline-primary">Enquiry</a>
                <a href="anise.php" class="btn btn-primary">Details</a>
              </div>
            </div>
          </div>
        </div>
        <!-- 8 -->
        <div class="col-sm-10 col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
          <div class="card h-100 shadow border-0">
            <img src="assets/images/Cockscomb.jpg" class="card-img-top product-img" alt="Cold Pressed Oil">
            <div class="card-body text-center">
              <h5 class="card-title">Cockscomb</h5>
              <div class="d-flex justify-content-center gap-2">
                <a href="#" data-bs-toggle="modal" data-bs-target="#enquiryModal" class="btn btn-outline-primary">Enquiry</a>
                <a href="Cockscomb.php" class="btn btn-primary">Details</a>
              </div>
            </div>
          </div>
        </div>
        <!-- 9 -->
        <div class="col-sm-10 col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
          <div class="card h-100 shadow border-0">
            <img src="assets/images/Crossandar.webp" class="card-img-top product-img" alt="Cold Pressed Oil">
            <div class="card-body text-center">
              <h5 class="card-title">Crossandar</h5>
              <div class="d-flex justify-content-center gap-2">
                <a href="#" data-bs-toggle="modal" data-bs-target="#enquiryModal" class="btn btn-outline-primary">Enquiry</a>
                <a href="Crossandar.php" class="btn btn-primary">Details</a>
              </div>
            </div>
          </div>
        </div>
        <!-- 10 -->
        <div class="col-sm-10 col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
          <div class="card h-100 shadow border-0">
            <img src="assets/images/Jasmin.jpg" class="card-img-top product-img" alt="Cold Pressed Oil">
            <div class="card-body text-center">
              <h5 class="card-title">Jasmin</h5>
              <div class="d-flex justify-content-center gap-2">
                <a href="#" data-bs-toggle="modal" data-bs-target="#enquiryModal" class="btn btn-outline-primary">Enquiry</a>
                <a href="Jasmin.php" class="btn btn-primary">Details</a>
              </div>
            </div>
          </div>
        </div>
        <!-- 11 -->
        <div class="col-sm-10 col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
          <div class="card h-100 shadow border-0">
            <img src="assets/images/Marjoram.jpg" class="card-img-top product-img" alt="Cold Pressed Oil">
            <div class="card-body text-center">
              <h5 class="card-title">Marjoram</h5>
              <div class="d-flex justify-content-center gap-2">
                <a href="#" data-bs-toggle="modal" data-bs-target="#enquiryModal" class="btn btn-outline-primary">Enquiry</a>
                <a href="Marjoram.php" class="btn btn-primary">Details</a>
              </div>
            </div>
          </div>
        </div>
        <!-- 12 -->
        <div class="col-sm-10 col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
          <div class="card h-100 shadow border-0">
            <img src="assets/images/Rose.jpg" class="card-img-top product-img" alt="Cold Pressed Oil">
            <div class="card-body text-center">
              <h5 class="card-title">Rose</h5>
              <div class="d-flex justify-content-center gap-2">
                <a href="#" data-bs-toggle="modal" data-bs-target="#enquiryModal" class="btn btn-outline-primary">Enquiry</a>
                <a href="Rose.php" class="btn btn-primary">Details</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- product ends-->

  <!-- services -->
  <section class="py-5 services-section" id="services">
    <div class="container text-center">
      <h2 class="mb-4" data-aos="fade-up">Our Services</h2>
      <p class="mb-5 section-subtitle" data-aos="fade-up" data-aos-delay="100">
        At <strong>Sutharise Exports and Imports</strong>, we specialize in sourcing, processing, and exporting premium-grade agricultural produce and spices — delivering quality and trust to global and domestic markets.
      </p>

      <div class="row g-4 justify-content-center">

        <!-- Service 1 -->
        <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="100">
          <div class="service-card">
            <i class="bi bi-box2-heart fs-1 icon-purple"></i>
            <h5 class="mt-3">Fresh Produce Export</h5>
            <p>We export high-quality coconuts, small onions, big onions, and lemons — carefully packed to retain freshness and meet international standards.</p>
          </div>
        </div>

        <!-- Service 2 -->
        <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
          <div class="service-card">
            <i class="bi bi-spa fs-1 icon-pink"></i>
            <h5 class="mt-3">Spices & Herbs Supply</h5>
            <p>Premium-grade spices including pepper, anise, cumin, and cardamom — cleaned, sorted, and packaged for both culinary and medicinal use.</p>
          </div>
        </div>

        <!-- Service 3 -->
        <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
          <div class="service-card">
            <i class="bi bi-droplet fs-1 icon-gold"></i>
            <h5 class="mt-3">Drumstick & Oil Seed Supply</h5>
            <p>Supplying fresh drumsticks and drumstick seeds — ideal for food use and oil extraction industries with high purity assurance.</p>
          </div>
        </div>

        <!-- Service 4 -->
        <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="400">
          <div class="service-card">
            <i class="bi bi-nut fs-1 icon-indigo"></i>
            <h5 class="mt-3">Nut & Amla Distribution</h5>
            <p>Exporting naturally sourced amla and various nutritious nuts — rich in vitamins, antioxidants, and shelf-stable for global shipment.</p>
          </div>
        </div>

        <!-- Service 5 -->
        <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="500">
          <div class="service-card">
            <i class="bi bi-gear-wide-connected fs-1 icon-coral"></i>
            <h5 class="mt-3">Custom Packaging & Labeling</h5>
            <p>Offering private labeling and custom packaging options for retailers and international distributors — your brand, our quality.</p>
          </div>
        </div>

        <!-- Service 6 -->
        <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="600">
          <div class="service-card">
            <i class="bi bi-truck fs-1 icon-sky"></i>
            <h5 class="mt-3">Global Logistics & Export</h5>
            <p>Seamless export support including documentation, customs clearance, and on-time delivery — Pan-India and worldwide.</p>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- end services -->

  <!-- FAQ Section -->
  <div class="container-fluid">
    <section class="faq-section container py-5" data-aos="fade-up">
      <div class="faq-header text-center mb-4">
        <h2>Frequently Asked Questions</h2>
        <p class="text-muted">Have questions about our products or export process? We're here to help.</p>
      </div>

      <div class="accordion" id="faqAccordion">

        <!-- FAQ 1 -->
        <div class="accordion-item" data-aos="fade-up" data-aos-delay="100">
          <h2 class="accordion-header" id="faqOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
              What products does Sutharise Exports and Imports offer?
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              We offer a wide range of fresh and natural agricultural products including coconuts, small onions, big onions, pepper, anise, cumin, cardamom, lemon, amla, drumstick, drumstick seeds (for oil extraction), and various types of nuts.
            </div>
          </div>
        </div>

        <!-- FAQ 2 -->
        <div class="accordion-item" data-aos="fade-up" data-aos-delay="150">
          <h2 class="accordion-header" id="faqTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
              Do you export internationally?
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Yes, we export our products across various international markets with complete documentation, packaging, and logistics support to meet country-specific regulations.
            </div>
          </div>
        </div>

        <!-- FAQ 3 -->
        <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
          <h2 class="accordion-header" id="faqThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
              How is product quality ensured?
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Our products are carefully sourced from trusted farms and go through quality checks including grading, sorting, and hygienic packing. We ensure compliance with international food safety standards.
            </div>
          </div>
        </div>

        <!-- FAQ 4 -->
        <div class="accordion-item" data-aos="fade-up" data-aos-delay="250">
          <h2 class="accordion-header" id="faqFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
              Can I place bulk or wholesale orders?
            </button>
          </h2>
          <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Yes, we specialize in bulk and wholesale orders. Whether you're a distributor, retailer, or importer, we provide flexible quantities, custom packaging, and competitive pricing.
            </div>
          </div>
        </div>

        <!-- FAQ 5 -->
        <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
          <h2 class="accordion-header" id="faqFive">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive">
              What is the shelf life of your products?
            </button>
          </h2>
          <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Shelf life depends on the product. For example, spices like cardamom and cumin can last up to 12–18 months when stored properly, while fresh produce like onions and amla should be consumed sooner or stored in a cool, dry place.
            </div>
          </div>
        </div>

        <!-- FAQ 6 -->
        <div class="accordion-item" data-aos="fade-up" data-aos-delay="350">
          <h2 class="accordion-header" id="faqSix">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix">
              Do you provide custom packaging and labeling?
            </button>
          </h2>
          <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Yes, we offer private labeling and custom packaging based on your branding needs, especially for international buyers or retail chains.
            </div>
          </div>
        </div>

        <!-- FAQ 7 -->
        <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
          <h2 class="accordion-header" id="faqSeven">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven">
              What are your payment and shipping terms?
            </button>
          </h2>
          <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              We offer flexible payment terms depending on order volume and client type. Shipping terms (FOB, CIF, etc.) can be discussed and arranged as per buyer requirements.
            </div>
          </div>
        </div>

        <!-- FAQ 8 -->
        <div class="accordion-item" data-aos="fade-up" data-aos-delay="450">
          <h2 class="accordion-header" id="faqEight">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight">
              How do I place an order with Sutharise Exports and Imports?
            </button>
          </h2>
          <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              You can reach out to us through our <a href="contact.php">Contact Page</a> or WhatsApp. Share your product requirements, quantity, destination port, and we’ll guide you through the quotation and shipping process.
            </div>
          </div>
        </div>

      </div>
    </section>
  </div>
  <!-- end faq -->

  <!-- contact us  -->
  <section class="contact-section py-5 bg-light" id="contact">
    <div class="container">
      <!-- Section Title -->
      <div class="text-center mb-5">
        <h2 class="mb-3" data-aos="fade-up">Contact Us</h2>
        <p class="text-muted" data-aos="fade-up" data-aos-delay="100">
          Have a question or business inquiry? Get in touch — we’re here to help!
        </p>
      </div>

      <div class="row g-4 align-items-center justify-content-center">
        <!-- Map Column -->
        <div class="col-lg-6" data-aos="fade-right">
          <div class="rounded-3 overflow-hidden shadow-sm">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3299.1752789016778!2d77.64748833956702!3d10.468885082801954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba9e6ab3de4749d%3A0x1b0784d403760875!2s2%2C%20Palani%20Rd%2C%20Chatrapatti%2C%20Tamil%20Nadu%20624614!5e0!3m2!1sen!2sin!4v1759917936333!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>

        <!-- Form Column -->
        <div class="col-lg-6" data-aos="fade-left">
          <div class="p-4 p-md-5 bg-white shadow-lg rounded-4">
            <h4 class="mb-4 text-center">We’d love to hear from you</h4>
            <form id="contactForm" onsubmit="sendToWhatsApp(); return false;">
              <div class="mb-3">
                <input type="text" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="mb-3">
                <input type="email" class="form-control" id="email" placeholder="Your Email" required>
              </div>
              <div class="mb-3">
                <input type="tel" class="form-control" id="phone" placeholder="Your Phone" required>
              </div>
              <div class="mb-3">
                <textarea class="form-control" id="message" rows="4" placeholder="Your Message"
                  required></textarea>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-success px-4">
                  Send via WhatsApp
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- footer -->
  <?php include('footer.php') ?>
  