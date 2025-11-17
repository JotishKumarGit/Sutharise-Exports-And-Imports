<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sutharise Exports And Imports - Services</title>
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

  <style>
    .page-header {
      position: relative;
      background: url('assets/images/services.jpg') no-repeat center center;
      background-size: cover;
      padding: 100px 0;
      color: white;
      text-align: center;
    }

    .page-header::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: rgba(0, 0, 0, 0.5);
      /* Dark overlay */
      z-index: 1;
    }

    .page-header .container {
      position: relative;
      z-index: 2;
    }

    .page-header h1 {
      font-size: 3rem;
      font-weight: bold;
      animation: fadeDown 1s ease-out;
    }

    .breadcrumb {
      background-color: transparent;
      justify-content: center;
      margin-top: 20px;
      animation: slideIn 1.2s ease-out;
    }

    .breadcrumb a {
      color: #f8f9fa;
      text-decoration: none;
    }

    .breadcrumb-item.active {
      color: #ffc107;
    }

    @keyframes fadeDown {
      from {
        opacity: 0;
        transform: translateY(-30px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes slideIn {
      from {
        opacity: 0;
        transform: translateX(-50px);
      }

      to {
        opacity: 1;
        transform: translateX(0);
      }
    }
  </style>

</head>

<body>

  <!-- header -->
  <?php include('header.php') ?>

  <!-- Page Header Section -->
  <section class="page-header">
    <div class="container">
      <h1>Welcome To Our Services </h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Features</a></li>
          <li class="breadcrumb-item active" aria-current="page">Services</li>
        </ol>
      </nav>
    </div>
  </section>

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

  <!-- footer -->
  <?php include('footer.php') ?>