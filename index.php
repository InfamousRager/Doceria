<?php 
    $titulo = "Doceria - Inicio";

include('src/componentes/cabecalho.php'); ?>
<div class="conteudo central">
            <!--<div class="d-flex justify-content-center">
                <img class="mb-3" src="https://media3.giphy.com/media/oiGCnybFPh6Q8/giphy.gif?cid=790b76115cdcca3068516d756313ba15&rid=giphy.gif"> 
            </div> -->
            <div id="carouselExampleControls" class="carousel slide central" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img class="d-block w-100" src="https://s2.glbimg.com/nnBkJTQZcmSnAsu14zq7LyWqvfI=/e.glbimg.com/og/ed/f/original/2018/09/07/800px-brigadeiro.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="https://guiadacozinha.com.br/wp-content/uploads/2018/01/rosquinha-frita.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="https://guiadacozinha.com.br/wp-content/uploads/2012/01/doce-de-batata-doce-e-de-ab%C3%B3bora.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <div class="row"> <!-- 4 + 4 + 4 = 12 -->
                <div class="card-deck">
                    <div class="col-md-4"> 
                        <div class="card border-danger" style="width: 18rem;">
                            <img class="card-img-top" src="https://media3.giphy.com/media/oiGCnybFPh6Q8/giphy.gif?cid=790b76115cdcca3068516d756313ba15&rid=giphy.gif" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Doces magicos</h5>
                                <p class="card-text">Foram inventados e estão ao seu dispor basta alguns cliques para obter.</p>
                                <a href="https://pt.wikipedia.org/wiki/Cannabis_(psicotr%C3%B3pico)" class="btn btn-danger">ver mais...</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4"> 
                        <div class="card border-danger" style="width: 18rem;">
                            <img class="card-img-top" src="https://media3.giphy.com/media/oiGCnybFPh6Q8/giphy.gif?cid=790b76115cdcca3068516d756313ba15&rid=giphy.gif" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Doces magicos</h5>
                                <p class="card-text">Foram inventados e estão ao seu dispor basta alguns cliques para obter.</p>
                                <a href="https://pt.wikipedia.org/wiki/Cannabis_(psicotr%C3%B3pico)" class="btn btn-danger">ver mais...</a>
                            </div>
                        </div>
                    </div> 
                    <div class="col-md-4"> 
                        <div class="card border-danger" style="width: 18rem;">
                            <img class="card-img-top" src="https://media3.giphy.com/media/oiGCnybFPh6Q8/giphy.gif?cid=790b76115cdcca3068516d756313ba15&rid=giphy.gif" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Doces magicos</h5>
                                <p class="card-text">Foram inventados e estão ao seu dispor basta alguns cliques para obter.</p>
                                <a href="https://pt.wikipedia.org/wiki/Cannabis_(psicotr%C3%B3pico)" class="btn btn-danger">ver mais...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php include('src/componentes/footer.php'); ?>