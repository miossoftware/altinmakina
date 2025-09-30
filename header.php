<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Altın Makina</title>

    <!-- Favicon -->
    <link rel="icon" href="img/logo.png">

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">

</head>

<body>
<!-- ***** Preloader Start ***** -->
<div id="preloader">
    <div class="mosh-preloader"></div>
</div>

<!-- ***** Header Area Start ***** -->
<header class="header_area clearfix">
    <div class="container-fluid h-100">
        <div class="row h-100">
            <!-- Menu Area Start -->
            <div class="col-12 h-100">
                <div class="menu_area h-100">
                    <nav class="navbar h-100 navbar-expand-lg align-items-center">
                        <!-- Logo -->
                        <a class="navbar-brand" href="index.php"><img src="img/logo.png" width="200" height="200" alt="logo"></a>

                        <!-- Menu Area -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mosh-navbar" aria-controls="mosh-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                        <div class="collapse navbar-collapse justify-content-end" id="mosh-navbar">
                            <ul class="navbar-nav animated" id="nav">
                                <?php
                                // Şu anki sayfanın dosya adını al
                                $current_page = basename($_SERVER['PHP_SELF']);
                                ?>

                                <li class="nav-item <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">
                                    <a class="nav-link" href="index.php">Anasayfa</a>
                                </li>

                                <li class="nav-item dropdown <?php echo in_array($current_page, ['cnc_machine.php','serim.php','kalip_ve_pastal.php','kumas_kontrol.php','ekipman_masa_sehba.php','dikis_makinalari.php','plotter_cizici.php']) ? 'active' : ''; ?>">
                                    <a class="nav-link dropdown-toggle" href="#" id="moshDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ürünlerimiz</a>
                                    <div class="dropdown-menu" aria-labelledby="moshDropdown">
                                        <a class="dropdown-item <?php echo ($current_page == 'cnc_machine.php') ? 'active' : ''; ?>" href="cnc_machine.php">CNC Kesim Makinaları</a>
                                        <a class="dropdown-item <?php echo ($current_page == 'serim.php') ? 'active' : ''; ?>" href="serim.php">Serim Makinaları</a>
                                        <a class="dropdown-item <?php echo ($current_page == 'kalip_ve_pastal.php') ? 'active' : ''; ?>" href="kalip_ve_pastal.php">Kalıp Ve Pastal Hazırlama Sistemleri</a>
                                        <a class="dropdown-item <?php echo ($current_page == 'kumas_kontrol.php') ? 'active' : ''; ?>" href="kumas_kontrol.php">Kumaş Kontrol Makinaları</a>
                                        <a class="dropdown-item <?php echo ($current_page == 'ekipman_masa_sehba.php') ? 'active' : ''; ?>" href="ekipman_masa_sehba.php">Ekipmanlar, Masa Ve Sehpalar</a>
                                        <a class="dropdown-item <?php echo ($current_page == 'dikis_makinalari.php') ? 'active' : ''; ?>" href="dikis_makinalari.php">Dikiş Makinaları</a>
                                        <a class="dropdown-item <?php echo ($current_page == 'plotter_cizici.php') ? 'active' : ''; ?>" href="plotter_cizici.php">Plotter Çiziciler</a>
                                    </div>
                                </li>

                                <li class="nav-item <?php echo ($current_page == 'about.php') ? 'active' : ''; ?>">
                                    <a class="nav-link" href="about.php">Hakkımızda</a>
                                </li>
                                <li class="nav-item <?php echo ($current_page == 'services.php') ? 'active' : ''; ?>">
                                    <a class="nav-link" href="services.php">Hizmetlerimiz</a>
                                </li>
                                <li class="nav-item <?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>">
                                    <a class="nav-link" href="contact.php">İletişim</a>
                                </li>

                            </ul>
                            <!-- Search Form Area Start -->
                            <div class="search-form-area animated">
                                <form action="location.php" method="get">
                                    <input type="search" name="query" id="search" placeholder="Ürünlerimizde Arayın">
                                    <button type="submit" class="d-none"><img src="img/logo.png" alt="Search"></button>
                                </form>
                            </div>
                            <!-- Search btn -->
                            <div class="search-button">
                                <a href="#" id="search-btn"><img src="img/core-img/search-icon.png" alt="Search"></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->
