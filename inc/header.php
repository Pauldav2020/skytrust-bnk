<?php
  require_once './includes/emails.php';
  ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>SKY TRUST BANK- Online Banking & Payment Processing</title>
    <!-- Favicon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="icon" type="image/png" href="../assets/images/ukfavicon.png"
    <link href="//fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="web_assets/css/style-starter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>

    </style>
</head>

<body>
    <!--header-->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg stroke px-0">
                <h1> <a class="navbar-brand" href="#">
                        <span class="fa fa-bank"></span> STB </a></h1>
                <!-- if logo is image enable this   
                <a class="navbar-brand" href="#index.html">
                    <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                </a> -->
                <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item active dropBtns">
                            <a class="nav-link" href="services">Services</a>
                            <div class="drop-contents">
                                <a class="nav-link" href="personal-banking"><i class="bi bi-caret-right-fill"></i> PERSONAL</a>
                                <a class="nav-link" href="business-banking"><i class="bi bi-caret-right-fill"></i> BUSINESS</a>
                                <a class="nav-link" href="commercial-banking"><i class="bi bi-caret-right-fill"></i> COMMERCIAL</a>
                                <a class="nav-link" href="invest-rt"><i class="bi bi-caret-right-fill"></i> INVESTMENT</a>
                                <a class="nav-link" href="loans"><i class="bi bi-caret-right-fill"></i> LOAN</a>
                                <a class="nav-link" href="rate"><i class="bi bi-caret-right-fill"></i> RATE</a>
                            </div>
                        </li>
                        <li class="nav-item  active">
                        <a class="nav-link" href="about">About</a>
                        </li>
                        <li class="nav-item  active">
                            <a class="nav-link" href="mortgage">Mortgage</a>
                        </li>
                        <!--<li class="nav-item active">
                            <a class="nav-link" href="wealth_management">Wealth Management</a>
                        </li>-->
                        <li class="nav-item  active">
                            <a class="nav-link" href="contact">Contact</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" target="blank" href="login">Internet </a>
                        </li>
                        <!--/search-right-->
                        <div class="search mr-3">
                            <input class="search_box" type="checkbox" id="search_box">
                            <label class="fa fa-search" for="search_box"></label>
                            <div class="search_form">
                                <form action="" method="GET">
                                    <input type="text" placeholder="Search"><input type="submit" value="search">
                                </form>
                            </div>
                        </div>
                        <!--//search-right-->
                    </ul>
                </div>
                <!-- toggle switch for light and dark theme -->
                <div class="mobile-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!--/header-->