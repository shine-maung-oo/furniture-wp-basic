<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/includes/shwe-mi-furniture/images/site-logo.png" type="image/x-icon" />
   <!-- <link rel="stylesheet" href="css/bootstrap.min.css" />
   <link rel="stylesheet" href="css/style.css" /> -->
   <title>Shwe Mi Furniture</title>
   <?php wp_head(); ?>
</head>

<body>

   <header class="sticky-top">
      <!-- Active Page -->
      <?php
      $activePage = basename($_SERVER['PHP_SELF'], ".php");
      ?>
      <section class="navbar-section">
         <nav class="navbar navbar-expand-sm py-md-0 shadow">
            <div class="container">
               <div class="d-flex justify-content-between w-sm-100">
                  <a class="navbar-brand py-0" href="/">
                     <img src="<?php echo get_template_directory_uri(); ?>/includes/shwe-mi-furniture/images/logo.png" alt="logo" class="brand-logo">
                  </a>
                  <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                  </button>
               </div>
               <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavId">
                  <ul class="navbar-nav justify-content-between nav-w">
                     <li class="nav-item">
                        <a class="nav-link <?= ($activePage == 'index') ? 'active' : ''; ?>" href="/">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link <?= ($activePage == 'about-us') ? 'active' : ''; ?>" href="about-us">About Us</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link <?= ($activePage == 'products') ? 'active' : ''; ?>" href="products">Products</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link <?= ($activePage == 'contact-us') ? 'active' : ''; ?>" href="contact-us">Contact Us</a>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>

      </section>
   </header>