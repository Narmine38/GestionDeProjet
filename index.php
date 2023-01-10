<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <?php wp_head(); ?>
</head>
<?php
get_header();
?>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<!-- section 1 -->
<section id="section1" class="container-fluid mt-auto ">
    <div id="section_container1" class="container-fluid">
        <div class="container">
            <div class="row ">
                <div class="col-md-6">
                    <ul>
                        <li>
                            <button id="btnresto">Restaurant</button>
                        </li>
                        <li><h2 class="mt-5">Italian <br> Cuisine</h2></li>
                        <li><p class="textmenu mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing <br> elit.
                                Sodales
                                senectus dictum arcu sit tristique <br> donec eget.</p></li>
                        <li class="mt-5">
                            <button class="me-3" id="btnorder">Order now</button>
                            <button id="btnreservatiob">Reservation</button>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid"
                         src="<?php echo get_template_directory_uri(); ?>/img/Illustration.png"
                         alt="Logo">
                </div
            </div>
        </div>
    </div>
</section>
<!-- section 1 -->

<!-- section 2 -->
<section id="section2" class="container-fluid mt-auto">
    <div id="section_container2" class="container-fluid">
        <div class="container">
            <div class="row ">
                <div class="col-md-6">
                    <img class="img-fluid"
                         src="<?php echo get_template_directory_uri(); ?>/img/Picture.png"
                         alt="Logo">
                </div>
                <div class="col-md-6">
                    <ul>
                        <li><h2 class="mt-5">Welcome to</h2></li>
                        <li><h2 class="delizioso">delizioso</h2></li>
                        <li><p class="textmenu mt-3">Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit.
                                Facilisis
                                ultricies at eleifend <br> proin. Congue nibh nulla malesuada <br> ultricies nec quam
                            </p></li>
                        <li class="mt-5">
                            <button class="" id="btnorder">See our menu</button>
                        </li>
                    </ul>
                </div
            </div>
        </div>
    </div>
</section>
<!-- section 2 -->

<!--section 3-->
<section id="section3" class="container-fluid mt-auto">
    <div id="section_container3" class="container-fluid d-flex justify-content-center">
        <img class="img-fluid"
             src="<?php echo get_template_directory_uri(); ?>/img/Our_popular_menu.png"
             alt="Logo">
    </div>
</section>
<!--section 3-->

<!--section 4-->
<section id="section4" class="container-fluid mt-auto">
    <div id="section_container4" class="container-fluid">
        <div class="container">
            <div class="row ">
                <div class="col-md-6">
                    <img class="img-fluid"
                         src="<?php echo get_template_directory_uri(); ?>/img/Reservation.png"
                         alt="Logo">
                </div>
                <div class="col-md-6">
                    <ul>
                        <li><h2 class="mt-5">Let's reserve</h2></li>
                        <li><h2 class="delizioso">a table</h2></li>
                        <li><p class="textmenu mt-3">Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit.
                                Facilisis
                                ultricies at eleifend <br> proin. Congue nibh nulla malesuada <br> ultricies nec quam
                            </p></li>
                        <li class="mt-5">
                            <button class="" id="btnorder">Reservation</button>
                        </li>
                    </ul>
                </div
            </div>
        </div>
    </div>
</section>
<!--section 4-->

<!--section 5-->
<section id="section5" class="container-fluid d-flex justify-content-center mt-auto">
    <div class="container row ">
        <div class="d-flex justify-content-center">
            <h3>Our greatest chef</h3>
        </div>
        <div class="d-flex justify-content-center">
            <div class="me-3" style="width: 18rem;">
                <img class="img-fluid"
                     src="<?php echo get_template_directory_uri(); ?>/img/bertran.png"
                     alt="Logo">
                <div class="card-body">
                    <p class="card-text name">Betran Komar</p>
                    <p class="card-text poste">Head chef</p>
                </div>
            </div>
            <div class="me-3" style="width: 18rem;">
                <img class="img-fluid"
                     src="<?php echo get_template_directory_uri(); ?>/img/ferry.png"
                     alt="Logo">
                <div class="card-body">
                    <p class="card-text name">Ferry Sauwi</p>
                    <p class="card-text poste">Chef</p>
                </div>
            </div>
            <div style="width: 18rem;">
                <img class="img-fluid"
                     src="<?php echo get_template_directory_uri(); ?>/img/iswan.png"
                     alt="Logo">
                <div class="card-body">
                    <p class="card-text name">Iswan Dracho</p>
                    <p class="card-text poste">Chef</p>
                </div>
            </div>
        </div>
</section>
<!--section 5-->

<!--section6-->
<section id="section6" class="container-fluid d-flex justify-content-center mt-auto">
    <div class="container row ">
        <div class="d-flex justify-content-center">
            <h3>Our customers say</h3>
        </div>
        <div class="d-flex justify-content-center">
            <div class="raw">
                <img class="img-fluid"
                     src="<?php echo get_template_directory_uri(); ?>/img/Ellipse%2016.png"
                     alt="Logo">
                <p id="starla">Starla Virgoun</p>
                <p class="poste">Financial advisor</p>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <p class="presentation">Lorem ipsum dolor sit amet, consectetur adipiscing <br> elit. Facilisis ultricies at
                eleifend proin. Congue nibh <br> nulla malesuada ultricies nec quam </p>
        </div>
        <div class="d-flex justify-content-center">
            <img class="img-fluid"
                 src="<?php echo get_template_directory_uri(); ?>/img/User.png"
                 alt="Logo">
        </div>
    </div>
</section>
<!--section6-->

<!--section7-->
<section id="section7" class="container-fluid mt-auto">
    <div id="section_container7" class="container-fluid">
        <div class="container row ">
            <div class="d-flex justify-content-center">
                <h3 id="openfrom">we are open from</h3>
            </div>
            <div class="d-flex justify-content-center">
                <h4 id="date">Monday-Sunday</h4>
            </div>
            <div id="heur" class="d-flex justify-content-center">
                <ul>
                    <li>Launch : Mon-Sun : 11:00am-02:00pm</li>
                    <li>Dinner : sunday : 04:00pm-08:00pm</li>
                    <li>04:00pm-09:00pm</li>
            </div>
            <div class="d-flex justify-content-center">
                <button class="me-3" id="btnorderend">Order now</button>
                <button id="btnreservatiobend">Reservation</button>
            </div>
        </div>
    </div>
</section>
<!--section7-->

<?php get_footer(); ?>

