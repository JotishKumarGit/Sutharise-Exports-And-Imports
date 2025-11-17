<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sutharise Exports And Imports- Contact Us</title>
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
            background: url('assets/images/contact.avif') no-repeat center center;
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
            <h1>Welcome To Our Contact Us</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Features</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
    </section>

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