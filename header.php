<?php
// header.php: Contains the header and the navigation
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clockwork Application</title>
    <link rel="icon" type="image/png" href="assets/logo.png">   
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    
    <link rel="stylesheet" href="styles.css">
    <script src="main.js"></script>


</head>
<body>

    <!-- Header Section -->
    <header>
        <div class="fluid-container">
            <div class="container"> 
                <ul class="social-icons">
                    <li><a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a></li>
                </ul>      
                <a href="tel:01223 625695" class="callnow"> 
                    Call us: 01223 625695
                </a>
            </div>
        </div>
        <div class="container">
            <a href="index.php" class="logo">
                <img src="assets/logo.png" alt="Clockwork Logo">
            </a>
            <button class="menu-toggle" aria-label="Toggle menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </button>           
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li class="has-submenu">
                        <a href="#" class="submenu-toggle">Property Management 
                              <svg class="arrow-icon" width="10" height="6" viewBox="0 0 10 6" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1l4 4 4-4" stroke="#4b4b4b" stroke-width="2" fill="none" stroke-linecap="round"/>
                            </svg>
                        </a>
                        <ul class="submenu">
                            <li><a href="index.php#dashboard">Dashboard</a></li>
                            <li><a href="index.php#enquire">Enquiries</a></li>
                            <li><a href="index.php#tenants">Tenants</a></li>
                            <li><a href="index.php#deposits">Deposits</a></li>
                            <li><a href="index.php#landlords">Landlords</a></li>
                            <li><a href="index.php#properties">Properties</a></li>
                            <li><a href="index.php#portal-feeds">Portal Feeds</a></li>
                            <li><a href="index.php#financial-accounts">Financial Accounts</a></li>
                            <li><a href="index.php#key-management">Key Management</a></li>
                            <li><a href="index.php#property-leads">Property Leads</a></li>
                            <li><a href="index.php#inspections-maintenance">Inspections and Maintenance</a></li>
                        </ul>
                    </li>
                    <li><a href="pricing.php">Pricing</a></li>
                    <li><a href="contact-us.php">Contact</a></li>
                    <li><a href="https://agents.clockworkpm.co.uk/" class="cta-button">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>
