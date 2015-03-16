<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Welcome to CodeIgniter</title>

        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        
        
        <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
        <link href="<?= base_url() ?>assets/css/reset.css" rel="stylesheet">
        <link href="<?= base_url() ?>assets/css/main.css" rel="stylesheet">
        
        <script src="<?= base_url() ?>assets/plugins/flexslider/jquery.flexslider-min.js"></script>
        <link href="<?= base_url() ?>assets/plugins/flexslider/flexslider.css" rel="stylesheet">

    </head>
    <body>
        <div class="wrapper">
            <div id="top_nav">
                <div id="nav_table">
                    <span id="quick_contact">
                        <a href="">Quick Contact</a>
                    </span>
                    <span id="contact_us">
                        <img src="http://www.dynaprodirect.com/wp-content/uploads/2014/10/TopButton.png">
                    </span>
                    <div class="clear_float"></div>
                </div>
                <div class="clear_float"></div>
            </div>
            <div id="header">
                <div id="logo">
                    <a href="<?= base_url() ?>">
                        <img src="http://dynaprodirect.com/wp-content/uploads/2014/10/dynapro-logo.jpg">
                    </a>
                </div>
                <div id="navigation">
                    <nav>
                        <ul>
                            <li><a href="<?= base_url() ?>" class="<?= ($page_name === "home") ? "active" : "" ?>">Home</a></li>
                            <li><a href="<?= base_url() ?>about" class="<?= ($page_name === "about") ? "active" : "" ?>">About</a></li>
                            <li><a href="<?= base_url() ?>products" class="<?= ($page_name === "products") ? "active" : "" ?>">Products</a></li>
                            <li><a href="<?= base_url() ?>workouts" class="<?= ($page_name === "workouts") ? "active" : "" ?>">Workouts</a></li>
                            <li><a href="<?= base_url() ?>prograde-vs-standard" class="<?= ($page_name === "prograde") ? "active" : "" ?>">Prograde vs. Standard</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="clear_float"></div>
            </div>
            <div id="main_container">