<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Real Estate </title>

   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    
    <link rel="stylesheet" href="styles.css">

  >
    <style>
        body {
            background-color: #f8f9fa; 
        }

        .navbar {
            border-bottom: 2px solid #343a40; 
        }

        .hero-section {
            padding: 40px;
            background-color: #343a40;
            color: #ffffff;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .about-section, .contact-section {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .real-estate-image {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
    </style>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#"> Real Estate</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="offer.html">Featured </a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="owner.html"> Book appointment </a>
                </li>
            </ul>
        </div>

        <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            List of Cities we are located
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Dallas (Tx)</a>
            <a class="dropdown-item" href="#">Oklahoma City (Ok)</a>
            <a class="dropdown-item" href="#">Augusta (Georgia)</a>
            
        </div>
    </li>
</ul>
    </div>
</nav>


<div class="container mt-3">
    <div class="row">
        <div class="col-md-6">
            <section class="hero-section text-center">
                <h1 class="display-4">Welcome to Your Dream Home</h1>
                <p class="lead">Discover the perfect place that feels like home. Explore our listings and find the property of your dreams.</p>
                
            </section>

        </div>

        <div class="col-md-6">
            
            <div class="real-estate-image">
                <img src="https://assets.entrepreneur.com/content/3x2/2000/1691095535-entrepreneur-real-estate-wealth-0823-g912235266.jpg" alt="Real Estate Image" class="img-fluid">
            </div>

            
            <section class="about-section">
                <h2 class="mb-4">About Us</h2>
                <p class="lead">At Your Real Estate, we are committed to helping you find the perfect home. Our experienced team is dedicated to making your real estate journey a seamless and enjoyable experience.</p>
                
            </section>

            
            <section class="contact-section">
    <h2 class="mb-4">Contact Us</h2>
    <p class="lead">Have questions or ready to start your home search? Contact us today!</p>
    

    <div class="contact-icons">
        <a href="tel:+123456789"><i class="fas fa-phone"></i> Call us</a>
        <a href="mailto:info@yourrealestate.com"><i class="fas fa-envelope"></i> Email us</a>
    </div>
</section>
        </div>
    </div>
</div>

