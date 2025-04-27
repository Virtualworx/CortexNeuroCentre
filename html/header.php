<?php
// Získání názvu aktuální stránky
$pageName = basename($_SERVER['PHP_SELF'], ".php");

// Nahrazení "-" mezerami a převedení na správný formát (např. "o-nas" → "O Nás")
$pageTitle = ($pageName === "index") ? "Domů" : ucwords(str_replace("-", " ", $pageName));
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Awaiken">

    <!-- Page Title (Změna "Index" na "Domů") -->
    <title><?php echo $pageTitle; ?> | CortexNeuroCentre</title>

    <link href="css/kamel.css" rel="stylesheet" media="screen">

    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
    <!-- Google Fonts Css -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@100..900&family=DM+Sans:wght@100..1000&display=swap" rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- SlickNav Css -->
    <link href="css/slicknav.min.css" rel="stylesheet">
    <!-- Swiper Css -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <!-- Font Awesome Icon Css -->
    <link href="css/all.css" rel="stylesheet" media="screen">
    <!-- Animated Css -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Mouse Cursor Css File -->
    <link rel="stylesheet" href="css/mousecursor.css">
    <!-- Main Custom Css -->
    <link href="css/custom.css" rel="stylesheet" media="screen">

</head>
<body>

    <!-- Preloader Start -->
    <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon"><img src="images/cortex-podklady/Cortex_vertical-white.png" alt=""></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Topbar Section Start -->
    <div class="topbar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-9 col-md-12">
                    <!-- Topbar Contact Information Start -->
                    <div class="topbar-contact-info">
                        <ul>
                            <li><a href="#"><img src="images/icon-phone.svg" alt="">+(420) 702 127 286</a></li>
                            <li><a href="#"><img src="images/icon-mail.svg" alt=""> info@cortexneurocentre.cz</a></li>
                            <li class="hide-mobile"><a href="https://www.google.com/maps?ll=50.114671,14.467651&z=17&t=m&hl=en&gl=CZ&mapclient=embed&cid=12347777600494666582"><img src="images/icon-location.svg" alt="">Chlumčanského 497/5, 180 00 Praha 8</a></li>
                        </ul>
                    </div>
                    <!-- Topbar Contact Information End -->
                </div>
                <div class="col-lg-3 col-md-0">
                    <!-- Topbar Social Links Start -->
                    <div class="topbar-social-links">
                        <ul>
                            <li><a href="https://www.facebook.com/cortexneurocentre"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="https://www.instagram.com/cortexneurocentre/"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a></li>
                        </ul>
                    </div>
                    <!-- Topbar Social Links End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar Section End -->

    <!-- Header Start -->
    <header class="main-header">
        <div class="header-sticky">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <!-- Logo Start -->
                    <a class="navbar-brand" href="./">
                        <img src="images/cortex-podklady/cortex-logo-horizontal3.png" width="350px" height="auto" alt="Logo">
                    </a>
                    <!-- Logo End -->

                    <!-- Main Menu Start -->
                    <div class="collapse navbar-collapse main-menu">
                        <div class="nav-menu-wrapper">
                            <ul class="navbar-nav mr-auto" id="menu">
                                <li class="nav-item"><a class="nav-link" href="o-nas.php">O NÁS</a>

                                </li>
                                <li class="nav-item"><a class="nav-link" href="nas-tym.php">NÁŠ TÝM</a></li>
                                <li class="nav-item submenu"><a class="nav-link" href="terapie.php">TERAPIE</a>
                                    <ul>
                                        <li class="nav-item"><a class="nav-link" href="intenzivni-terapie.php">INTENZIVNÍ TERAPIE</a></li>
                                        <li class="nav-item"><a class="nav-link" href="ergoterapie.php">ERGOTERAPIE</a></li>
                                        <li class="nav-item"><a class="nav-link" href="vyvojova-poradna.php">VÝVOJOVÁ PORADNA</a></li>
                                        <li class="nav-item"><a class="nav-link" href="fyzioterapie-pro-deti.php">FYZIOTERAPIE PRO DĚTI</a></li>
                                        <li class="nav-item"><a class="nav-link" href="fyzioterapie-domu.php">FYZIOTERAPIE DOMŮ</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="cenik.php">CENÍK</a></li>
                                <li class="nav-item"><a class="nav-link" href="blog.php">BLOG</a></li>
                                <li class="nav-item"><a class="nav-link" href="kariera.php">KARIÉRA</a></li>
                                <li class="nav-item"><a class="nav-link" href="kontakt.php">KONTAKT</a></li>
                            </ul>
                        </div>
                        <!-- Let’s Start Button Start -->
                        <div class="header-btn d-inline-flex">
                            <a href="https://my.medevio.cz/cortex-neuro-centre" target="_blank" class="btn-default">VSTUPNÍ KONZULTACE</a>
                        </div>
                        <!-- Let’s Start Button End -->
                    </div>
                    <!-- Main Menu End -->
                    <div class="navbar-toggle"></div>
                </div>
            </nav>
            <div class="responsive-menu"></div>
        </div>
    </header>
    <!-- Header End -->

    <?php if ($pageName !== "index") : ?>
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque"><?php echo $pageTitle; ?></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./">Domů</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo $pageTitle; ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <?php endif; ?>


<!-- WhatsApp Chat Bubble -->
<a href="https://wa.me/420702127286" target="_blank" class="whatsapp-bubble">
    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" />
</a>

<style>
    .whatsapp-bubble {
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 1000;
        width: 60px;
        height: 60px;
        background-color: #25d366;
        border-radius: 50%;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .whatsapp-bubble img {
        width: 35px;
        height: 35px;
    }

    .whatsapp-bubble:hover {
        background-color: #1ebe57;
        box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
    }
</style>


</script>
</body>
</html>
