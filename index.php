<?php
    include 'header.php';
?>

    <!-- main -->
    <main class="pb-4">
        <!-- slide -->
        <section id="carousel" class="container mt-3">
            <div class="carousel slide" id="slider" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#slider" data-slide-to="0" class="active"></li>
                    <li data-target="#slider" data-slide-to="1"></li>
                    <li data-target="#slider" data-slide-to="2"></li>
                  </ol>
                <div class="carousel-inner bg-dark">
                    <div class="carousel-item active">
                        <img src="img/slide11.png" alt="Slide1" class="d-block mx-auto">
                    </div>
                    <div class="carousel-item">
                        <img src="img/slide22.png" alt="Slide2" class="d-block mx-auto">
                    </div>
                    <div class="carousel-item">
                        <img src="img/slide33.png" alt="Slide3" class="d-block mx-auto">
                    </div>
                </div>
                <a href="#slider" class="carousel-control-prev" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a href="#slider" class="carousel-control-next" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </section>
        <!-- //slide -->

        <!-- conteudo -->
        <section id="conteudo">
        <h2 class="titulo-size titulo-py titulo-px titulo-bg-black text-white display-3 mt-4 mb-3">Blog</h2>
            <div class="container">
                <div class="row d-flex justify-content-center mt-3">
                    <div class="col-12 col-lg-4">
                        <a href="#"><img src="img/slide1.png" alt="" class="img-fluid mb-2">
                        <h4>Titulo do conteudo</h4>
                        <p class="blog-date-cat"><span>02/09/2020 - Categoria<span></p>
                        <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</p></a>
                    </div>
                    <div class="col-12 col-lg-4">
                        <a href="#"><img src="img/slide2.png" alt="" class="img-fluid mb-2">
                        <h4>Titulo do conteudo</h4>
                        <p class="blog-date-cat"><span>02/09/2020 - Categoria<span></p>
                        <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</p></a>
                    </div>
                    <div class="col-12 col-lg-4">
                        <a href="#"><img src="img/slide3.png" alt="" class="img-fluid mb-2">
                        <h4>Titulo do conteudo</h4>
                        <p class="blog-date-cat"><span>02/09/2020 - Categoria<span></p>
                        <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</p></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- //conteudo -->

    </main>
    <!-- /main -->

<?php
    include 'footer.php';
?>