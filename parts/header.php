<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./main.css">
</head>

<body>
    <!-- Nav section  -->
    <section>
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white " id="mainNav">
                <a class="navbar-brand" href="index.php"><img src="image/umbrellalogo380.png" loading="lazy"
                        width="300"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded" href="about.php"><b>About</b></a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded" href="testimonials.php"><b>Testimonials</b></a>
                        </li>
                        <li class="nav-item dropdown mx-0 mx-lg-1">
                            <a class="nav-link dropdown-toggle" style="margin-top:0.5rem" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <b>Services</b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="homeowners.php"><b>Homeowners</b></a></li>
                                <li><a class="dropdown-item" href="hoacondo.php"><b>HOA & Condo</b></a></li>

                                <li><a class="dropdown-item" href="propertymanagers.php"><b>Property Managers</b></a></li>
                                <li><a class="dropdown-item" href="buildersdevelopers.php"><b>Builders & Developers</b></a></li>
                            </ul>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded" href="contact.php"><b>Contact us</b></a>
                        </li>
                        <a href="tel:4258766764" class="btn btn-primary py-3 px-lg-3 px-xl-5"><b>(425) 876-6764</b></a>
                    </ul>
                </div>
            </nav>
        </div>
    </section>