<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sutharise Exports And Imports - Crossandra</title>

    <!-- bootstrap icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        .product-img { height: 250px; object-fit: cover; }
        .card:hover { transform: translateY(-5px); transition: 0.3s ease; }
        footer a:hover { color: #0dcaf0 !important; transition: 0.3s ease; }
    </style>

    <!-- page-header -->
    <style>
        .page-header {
            position: relative;
            background: url('assets/images/Crossandar.webp') no-repeat center center;
            background-size: cover;
            padding: 100px 0;
            color: white;
            text-align: center;
        }
        .page-header::before {
            content: "";
            position: absolute;
            top:0; left:0; right:0; bottom:0;
            background-color: rgba(0,0,0,0.5);
            z-index:1;
        }
        .page-header .container { position: relative; z-index:2; }
        .page-header h1 { font-size:3rem; font-weight:bold; animation: fadeDown 1s ease-out; }
        .breadcrumb { background-color: transparent; justify-content:center; margin-top:20px; animation: slideIn 1.2s ease-out; }
        .breadcrumb a { color:#f8f9fa; text-decoration:none; }
        .breadcrumb-item.active { color:#ffc107; }
        @keyframes fadeDown { from { opacity:0; transform:translateY(-30px); } to { opacity:1; transform:translateY(0); } }
        @keyframes slideIn { from { opacity:0; transform:translateX(-50px); } to { opacity:1; transform:translateX(0); } }
    </style>

    <!-- products -->
    <style>
        .product-image { transition: transform 0.3s ease; border-radius:10px; box-shadow:0 4px 12px rgba(0,0,0,0.15); width:100%; height:auto; }
        .product-image:hover { transform: scale(1.05); }
        .product-section { padding:60px 0; }
        .product-details h2 { font-weight:700; }
        .product-details ul { padding-left:1.2rem; }
        .product-details li { margin-bottom:10px; line-height:1.6; }
        .btn-enquiry { padding:10px 25px; font-size:1.1rem; border-radius:50px; }
    </style>
</head>
<body>

    <!-- header -->
    <?php include('header.php') ?>

    <!-- Page Header Section -->
    <section class="page-header">
        <div class="container">
            <h1>Welcome To Our Products</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Features</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Crossandra</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Product Details Section -->
    <div class="container-fluid bg-light product-section" id="product-crossandra">
        <div class="container">
            <div class="row align-items-center">
                <!-- Product Image -->
                <div class="col-md-6 mb-4 mb-md-0" data-aos="fade-right">
                    <img src="assets/images/Crossandar.webp" alt="Crossandra Flower" class="product-image">
                </div>

                <!-- Product Content -->
                <div class="col-md-6 product-details" data-aos="fade-left">
                    <h2>Fresh Crossandra Flowers</h2>
                    <p>Our <strong>fresh Crossandra flowers</strong> are known for their vibrant orange blooms and long-lasting freshness. Popular in floral decorations, religious offerings, and landscaping, these flowers are handpicked to maintain premium quality.</p>

                    <ul>
                        <li>Bright, colorful blooms with excellent shelf life</li>
                        <li>Ideal for floral arrangements and decorations</li>
                        <li>Widely used in temples and traditional ceremonies</li>
                        <li>Handpicked and hygienically packed for export</li>
                        <li>Maintains natural freshness and fragrance</li>
                    </ul>

                    <button class="btn btn-primary btn-enquiry mt-3" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                        Enquiry Now
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include('footer.php') ?>

</body>
</html>
