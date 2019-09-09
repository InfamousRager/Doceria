<?php 
$titulo = "Doceria - Consulta por titulo";

include("src/componentes/cabecalho.php"); ?>
        <div class="container conteudo justify-content-center">
            <div class="row h-100 justify-content-center align-items-center">
                <h2 align="center" class="mr-4">Digite o nome do doce:</h2> <br>
                <form action="resultado_portitulo.php" method="POST">
                    <div class="input-group">
                        <input type="text" class="form-control" id="nome" name="nome">
                        <div>
                            <button type="submit" class="btn btn-danger" actiont>Buscar</button> 
                        </div>
                    </div>
                </form>
            </div>
        </div>
<?php include('src/componentes/footer.php'); ?>