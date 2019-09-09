<?php 
$titulo = "Doceria - Consulta";
include("src/componentes/cabecalho.php"); ?>

<div class="container conteudo justify-content-center">
            <div class="row h-100 justify-content-center align-items-center">
                <h2 align="center" class="mr-4">Clique para ver todos os doces:</h2> <br>
                <form action="consulta.php" method="POST">
                    <div class="input-group">
                        
                        <div>
                            <button type="submit" class="btn btn-danger">Buscar</button> 
                        </div>
                    </div>
                </form>
            </div>
        </div>

<?php include("src/componentes/footer.php"); ?>
        
