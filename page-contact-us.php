<?php get_header(); ?>

<main>
    <section class="banner">
        <div class="container-fluid position-relative">
            <div class="row">
                <div class="col-12 g-0">
                    <img src="<?php echo get_template_directory_uri();?>/includes/shwe-mi-furniture/images/banner.png" alt="banner" class="w-100 d-block">
                    <div class="header-position">
                        <h2 class="banner-header text-uppercase fade_effect">Contact Us</h2>
                        <nav class="breadcrumb fade_effect">
                            <a class="breadcrumb-item" href="/">Home</a>
                            <img src="<?php echo get_template_directory_uri();?>/includes/shwe-mi-furniture/images/icons/right.svg" alt="right" class="right-icon">
                            <a class="breadcrumb-item" href="contact-us">Contact Us</a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="map-address fade_effect">
        <div class="container py-lg-5 py-4 my-lg-5 my-4">
            <div class="row gx-4 gy-5 align-items-center">
                <div class="col-lg-8 col-md-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d122194.4768668432!2d95.99741233906248!3d16.847308199999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1956815792753%3A0xce5f379d60f453c7!2sShwe%20Mi%20Factory!5e0!3m2!1sen!2smm!4v1692179114265!5m2!1sen!2smm" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-lg-4 col-md-12 ps-lg-4">
                    <?php 
                        $address= new WP_Query(array(
                            'post_type' => 'address',
                            'posts_per_page' => 1,
                        ));
                        while($address->have_posts()) : $address->the_post() 
                    ?>
                        
                    <div class="">
                        <div class="d-flex">
                            <div class="">
                                <img src="<?php echo get_template_directory_uri();?>/includes/shwe-mi-furniture/images/icons/location.svg" alt="location" class="contact-icon">
                            </div>
                            <h5 class="footer-header">Address</h5>
                        </div>
                        <div class="contact-text">
                            <?php echo the_field('address');?>
                            <!-- No.285, Sayar San Road, 33-Ward, <br>
                            North Dagon Township, Yangon. -->
                        </div>
                    </div>
                    <div class="contact-margin">
                        <div class="d-flex">
                            <div class="">
                                <img src="<?php echo get_template_directory_uri();?>/includes/shwe-mi-furniture/images/icons/phone.svg" alt="phone" class="contact-icon">
                            </div>
                            <h5 class="footer-header">Phone</h5>
                        </div>
                        <div class="contact-text">
                            <!-- 09-455751316, 09-262547360 -->
                            <?php echo the_field('phone');?>
                        </div>
                    </div>
                    <div class="">
                        <div class="d-flex">
                            <div class="">
                                <img src="<?php echo get_template_directory_uri();?>/includes/shwe-mi-furniture/images/icons/mail.svg" alt="location" class="contact-icon">
                            </div>
                            <h5 class="footer-header">Email</h5>
                        </div>
                        <a href="mailto:<?php echo the_field('email');?>" class="contact-text text-decoration-none">
                            <!-- info@shwemifurniture.com -->
                            <?php echo the_field('email');?>
                        </a>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
            <!-- form  -->
            <form action="#" class="mt-md-5 mt-4 pt-lg-3 contact-form">
                <div class="row g-lg-4 g-md-3 gy-3">
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="col-md-4">
                        <input type="number" class="form-control" placeholder="Phone">
                    </div>
                    <div class="col-md-4">
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="col-md-12">
                        <textarea class="form-control" rows="10" placeholder="Message"></textarea>
                    </div>
                    <div class="col-md-12 text-center mt-lg-5 mt-4">
                        <input type="submit" value="send message" class="text-uppercase send-btn">
                    </div>
                </div>
            </form>
        </div>

    </section>
</main>

<?php get_footer(); ?>