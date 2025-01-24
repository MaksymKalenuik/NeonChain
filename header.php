<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="NeonChain theme for NFT'S selling">
    <meta name="author" content="Maksym Kaleniuk">
    <meta property="og:title" content="NeonChain">
    <meta property="og:description" content="NeonChain theme for NFT'S selling">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">


    <!-- Основний стиль -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/sidebar.css">

    <link rel="stylesheet" href="css/blog.css">

    <link rel="stylesheet" href="css/post.css">

    <link rel="stylesheet" href="css/contact.css">

    <link rel="stylesheet" href="css/store.css">

    <link rel="stylesheet" href="css/responsive.css">
    <title>NeonChain</title>
</head>

<body>
    <header class="sticky-top wow animate__animated animate__fadeIn">
        <nav class="navbar navbar-expand-lg navbar-light mx-auto">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img class="img-fluid " src="images/logo.webp" alt="logo">
                    <span class="sr-only">(current)</span>
                </a>

                <button class="navbar-toggler d-block mx-3" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                    aria-label="Toggle navigation">

                    <div class="navbar-line navbar-line-first">
                    </div>

                    <div class="navbar-line navbar-line-second">
                    </div>

                    <div class="navbar-line navbar-line-third">
                    </div>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <ul class="navbar-nav mt-2 mt-lg-0 d-flex justify-content-between w-100">
                        <div class="d-flex justify-content-start">
                            <li class="nav-item active mx-2">
                                <a class="nav-link general-text-color-hover text-color-neon" href="blog.php">Blog</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link general-text-color-hover text-color-neon"
                                    href="contact.php">Contact</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link general-text-color-hover text-color-neon" href="store.php">Store</a>
                            </li>
                        </div>
                        <div class="d-flex align-items-center">
                            <li class="nav-item mx-2">
                                <a class="nav-link text-white d-flex align-items-center" href="#">
                                    <img class="img-fluid" src="../images/metamasklogo.webp" alt="">
                                </a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link text-white d-flex align-items-center" href="#">
                                    <img class="img-fluid" src="images/trustwalletlogo.png" alt="">
                                </a>
                            </li>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>

    </header>

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    <!-- WOW.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="scripts/scripts.js"></script>

    <script>
        const togglerButton = document.querySelector('.navbar-toggler');

        // Add event listener to toggle the 'open' class on click
        togglerButton.addEventListener('click', function () {
            // Toggle the 'open' class
            togglerButton.classList.toggle('open');
        });
    </script>
    <?php get_sidebar() ?>