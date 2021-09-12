<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/main.css?id=<?php echo time(); ?>">

    <!-- Bootstrap 4.4.1 -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- icons font awesome-->
    <link rel="stylesheet" href="css/fontawesome/css/all.css">
    <!-- GoogleFonts Bebas -->
    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">
    <!-- GoogleFonts Roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anthroposp</title>

</head>

<body>
    <!-- header -->
    <header id="topo" class="scroll-ancora">
        <div class="container">
            <!-- header-desktop -->
            <div class="row py-3 d-none d-lg-flex" id="header-desktop">
                <div class="col-lg-4">
                    <div class="header-logo">
                        <a href="index.php"><img src="img/logo-header.png" alt="logo"></a>
                    </div>
                </div>
                <div id="btn-header" class="col-lg-8 my-auto d-flex justify-content-center align-items-center">
                    <div class="butons-header mx-2">
                        <div class="whatsapp">
                            <span class="mx-1 h5">Fale conosco:</span>
                            
                            <a href="https://wa.me/message/VKU4Y5EQGNP7L1" class="text-uppercase rounded-pill mx-2 btn-whatsapp-bg btn-whatsapp-pd btn-whatsapp-sz text-white" target="_blank"><i class="fab fa-whatsapp pr-1" aria-hidden="true"></i><span>Whatsapp</span></a>
                        </div>
                    </div>
                    <div class="redes-sociais-header mx-3">
                        <span class="mx-1 h5">Siga-nos:</span>
                        <a href="https://www.instagram.com/anthroposp/" class="mx-1" target="_blank"><i class="fab fa-instagram text-black-50"  aria-hidden="true"></i></a>
                        <a href="https://www.facebook.com/aanthropos/" class="mx-1" target="_blank"><i class="fab fa-facebook text-black-50"  aria-hidden="true"></i></a>
                        <a href="https://www.facebook.com/aanthropos/" class="mx-1" target="_blank"><i class="fab fa-twitter text-black-50"  aria-hidden="true"></i></a>
                        <a href="https://www.youtube.com/channel/UCQ0S86YVvOdIa0Gby4tvS0w" class="mx-1" target="_blank"><i class="fab fa-youtube text-black-50"  aria-hidden="true"></i></a>
                        <a href="https://www.instagram.com/anthroposp/" class="mx-1" target="_blank"><i class="fab fa-spotify text-black-50"  aria-hidden="true"></i></a>
                    </div>
                    
                    
                </div>
            </div>
            <!-- //header-desktop -->
        </div>

        <div class="border-top border-bottom ">
            <nav id="nav-header" class="navbar navbar-expand-lg navbar-light justify-content-start">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- header-mobile -->
                <div id="header-mobile" class="d-lg-none">
                    <div class="justify-content-center text-center ml-2">
                        <a href="index.php" class="navbar-brand"><img src="img/logo-header-mobile.png" alt="logo"></a>
                    </div>
                </div>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item mx-2">
                            <a class="nav-link btn-lg" href="sobre.php">Sobre</a>
                        </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle btn-lg mx-2" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Produções
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="videoclipe.php">Videoclipe</a>
                            <a class="dropdown-item" href="documentario.php">Documentário</a>
                            <a class="dropdown-item" href="institucional.php">Institucional</a>
                            <a class="dropdown-item" href="ensaio-fotografico.php">Ensaio Fotográfico</a>
                        </div>
                    </li>
                    
                    <li class="nav-item mx-2">
                        <a class="nav-link btn-lg" href="clientes.php">Clientes</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link btn-lg" href="blog.php">Blog</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link btn-lg" href="contato.php">Contato</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link btn-lg" href="trabalhe-conosco.php">Trabalhe Conosco</a>
                    </li>
                    <li class="nav-item mx-2">
                        <form>
                            <input class="btn-pesquisa" type="text" name="txtpesquisa" placeholder="Buscar">
                            <button class="btn-buscar"><i class="fas fa-search"></i></button>
                        </form>
                    </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- whatsapp-fixed -->
        <div class="d-lg-none">
            <a href="https://wa.me/message/VKU4Y5EQGNP7L1" class="whatsapp-fixed text-white" target="_blank">
                <i class="fab fa-whatsapp" aria-hidden="true"></i>
            </a>
        </div>
        <!-- ancora-fixed -->
        <div id="ancora" class="d-none">
            <a href="#topo" class="ancora-fixed text-white">
                <i class="fas fa-angle-up"></i>
            </a>
        </div>
        
        <!-- //whatsapp-fixed -->
    </header>
    <!-- /header -->
