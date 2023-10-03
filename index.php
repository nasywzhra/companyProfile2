<?php

require 'function.php';
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" <link
    <link rel="stylesheet" type="text/css" a href="../dist/css/style.css">

    <style>
        project-title:hover {
            transform: scale(1.1);
            z-index: 2;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bs-body-color-rgb: #{to-rgb($white)};">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="asset/img/logo.png" alt="" width="150px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item px-2">
                            <a class="nav-link active" aria-current="page" href="/home">Home</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link" href="#services-section">Services</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link" href="#about-section">About</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link" href="#product-section">Product</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link" href="/news.html">News</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link" href="#contact-section">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section id="home">
        <div class="teks-home">
            <img class="background-image" src="asset/img/cloud2.png" width="1220" height="532">
        </div>

 

    </section>

    <section>
        <!-- <img src="asset/img/cloud.png" alt="header" width="1218" height="532"> -->
        <div class="container">
            <div class="row">
                <div class="col">
                    <center>
                        <header id="services-section">
                            <h2>SERVICES</h2>
                            <svg class="line-1" width="164" height="5" viewBox="0 0 164 1" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.0185547 6.10352e-05L163.019 1.00006" stroke="#FFC100" stroke-width="6"
                                    stroke-linecap="round" />
                            </svg>
                        </header>
                    </center>

                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-3">
                        <img src="asset/img/storage.png" class="card-img-top" alt="storage">
                        <div class="card-body">
                            <h5 class="card-title">Tank Storage Rental</h5>
                            <p class="card-text">We provide internal floating roof tanks for chemical storage, Other
                                available services are heating, cooling, nitrogen blanketing, dry air, drum filling, and
                                internal/external storage facilities.</p>
                            <div class="row justify-content-center">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <img src="asset/img/truck.png" class="card-img-top" alt="storage">
                        <div class="card-body">
                            <h5 class="card-title">Logistic and Trucking</h5>
                            <p class="card-text">we provide a comprehensive logistic solution for our customer. Using
                                innovative technology and highly trained staffs, we continuously improve our delivery
                                and warehouse performance.</p>
                            <div class="row justify-content-center">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <img src="asset/img/drum.png" class="card-img-top" alt="storage">
                        <div class="card-body">
                            <h5 class="card-title">Drum / IBC Filling Solution</h5>
                            <p class="card-text">We have the facilities to carry out all the operations relating to
                                drumming/IBCs - from the filling of empty drums/IBCs to the storage of filled ones and
                                always referring to strict safety procedures.</p>
                            <div class="row justify-content-center">
                            </div>
                        </div>
                    </div>
                </div>

    </section>
    <img src="asset/img/about.png" alt="about" width="1220" height="532">
    <div style="width: 1220px; height: 141px; background: #136FB5"></div>
    <div class="about">
        <header id="about-section">
            <svg width="100" height="10" fill="none">
            </div>
            <div class="product">
                <div class="row">
                    <div class="col">
                        <center>
                            <header id="product-section">
                                <h2>PRODUCT</h2>
                                <svg class="line-1" width="164" height="5" viewBox="0 0 164 1" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.0185547 6.10352e-05L163.019 1.00006" stroke="#FFC100" stroke-width="6"
                                        stroke-linecap="round" />
                                </svg>
                            </header>
                        </center>
                    </div>
        </header>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-3">
                <img src="asset/img/mug.png" class="card-img-top">
                <div class="card-body">
                    <p class="row justify-content-center">
                        <div class="col-6">
                        </div>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-3" style=" height: auto;">
                <img src="asset/img/powder.png" class="card-img-top">
                <div class="card-body">
                    <p class="row justify-content-center">
                        <div class="col-6">
                        </div>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-3" style="height: auto;">
                <img src="asset/img/colorfull.png" class="card-img-top">
                <div class="card-body">
                    <p class="row justify-content-center">
                        <div class="col-6">
                        </div>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-3">
                <img src="asset/img/karung.png" class="card-img-top">
                <div class="card-body">
                    <p class="row justify-content-center">
                        <div class="col-6">
                        </div>
                    </p>
                </div>
            </div>
        </div>

        <div class="contact">
            <center>
                <header id="contact-section">
                    <h2>CONTACT</h2>
                    <svg class="line-1" width="164" height="5" viewBox="0 0 164 1" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.0185547 6.10352e-05L163.019 1.00006" stroke="#FFC100" stroke-width="6"
                            stroke-linecap="round" />
                    </svg>
                </header>
            </center>

            <div class="email">
                <h3>Email</h3>
                <svg class="line-1" width="80" height="3" viewBox="0 0 164 1" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.0185547 6.10352e-05L163.019 1.00006" stroke="#FFC100" stroke-width="6"
                        stroke-linecap="round" />
                    <h6>Services <br><br></h6>
                    <ul>
                        <li>Logistic & Trecking Services <br><b>(sales.jetty@dovechem.com)</b></li>
                        <li>Tank Storage Rental Series <br><b>(sales.jetty@dovechem.com)</b></li>

                    </ul>
            </div>

            <div class="product">
                <h6>Product <br><br></h6>
                <ul>
                    <li>Construction Chemicals Sales - PCE, DEIPA, SAF <br> <b> (sales.cons@dovechem.co.id) </b>
                    </li>
                    <li>Formaldehyde Resins Sales - PF, MF, MUF, Hardener & Catcher
                        <br><b>(sales.resin@dovechem.co.id)</b></b></li>
                    <li>Formaldehyde Sales <br> <b>(sales.for@dovechem.co.id)</b></li>
                    <li>Paraformaldehyde Sales <br><b>(sales.pfa@dovechem.co.id)</b></li>
                    <li>Personal Care Sales - ZPT <br><b> (sales.pc@dovechem.co.id)</b></li>
                    <li>Polyurethane Binder Sales <br><b>(sales.pu@dovechem.co.id)</b></li>
                    <li>Preservatives (Feed/Food) Sales - Dotative Ben, Dotative Pion <br><b>
                            (sales.prv@dovechem.co.id) </b></li>
                    <li>Specialty Chemicals Sales - ADH, NMA 48 <br><b>(sales.sc@dovechem.co.id)</b></li>
                    <li>Synthetic Resins (Solvent Based - Automotive) Sales <br><b>
                            (sales.sb@dovechem.co.id)</b></li>
                    <li>Synthetic Resins (Water Based) Sales <br> <b>(sales.emu@dovechem.co.id)</b></li>
                </ul>
                <h6>General inquiry <br><br></h6>
                <ul>
                    <li>General inquiry <b> (inquiry@dovechem.co.id)</b></li>
                </ul>
            </div>

            <div class="Factory" style="width: 900; text-align: right">
                <h3>Factory and Tank Terminal</h3>
                <svg class="line-1" width="90" height="10" viewBox="0 0 164 1" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.0185547 6.10352e-05L163.019 1.00006" stroke="#FFC100" stroke-width="6"
                        stroke-linecap="round">
                        <p>
                            Jalan Raya Merak Km 117 <br>
                            Kelurahan Gerem, Kecamatan Grogol <br>
                            Kodya Cilegon 42438 <br>
                            Banten, Indonesia <br <p>Tel: +62-254-571 064 <br> Fax: +62-254-571 224</p>
                    </path>

                    <h3>Jakarta Office</h3>
                    <svg class="line-1" width="90" height="10" viewBox="0 0 164 1" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.0185547 6.10352e-05L163.019 1.00006" stroke="#FFC100" stroke-width="6"
                            stroke-linecap="round" />
                        <p>
                            Gedung Blugreen-Boutique Office<br>
                            3rd Floor, Suite BG-03 & BC-03<br>
                            Jl. Lingkar luar barat Kav.88,<br>
                            Puri Kembangan, Jakarta 11610 Indonesia<br>
                        </p>

                        <p>Tel: +62-21-2952 7180 <br> Tel: +62-21-8062 5280 <br> Fax: +62-21-2952 7183</p>

                        <h3>Employment</h3>
                        <svg class="line-1" width="90" height="10" viewBox="0 0 164 1" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.0185547 6.10352e-05L163.019 1.00006" stroke="#FFC100" stroke-width="6"
                                stroke-linecap="round" />
                            <p>
                                Please send your application letter and CV to the <br>
                                following address : <b> hrd.mrk@devechem.co.id </b> <br>
                                (please specify your position code at email title)
                            </p>
                       
            </div>
        </div>
    </div>
</body>

</html>
