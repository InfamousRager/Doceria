<?php 
    $titulo = "Doceria - Consulta por valor";

include("src/componentes/cabecalho.php"); ?>

        <div class="container conteudo justify-content-center">
            <div class="row h-100 justify-content-center align-items-center">
                 <br>
                <form action="resultado_porvalor.php" method="POST">
                    <div class="form-group">
                        <h5 align="center">Digite o preço minimo do doce:</h5>
                        <input  type="number" step="any" class="form-control" id="valor1" name="valor1">
                        <h5 align="center" >Digite o preço maximo do doce:</h5>
                        <input  type="number" step="any" class="form-control" id="valor2" name="valor2">
                        <div class="d-flex justify-content-center mt-2">
                            <button type="submit" class="btn btn-danger">Buscar</button> 
                        </div>
                    </div>
                </form>
            </div>
        </div>
<?php include('src/componentes/footer.php'); ?>