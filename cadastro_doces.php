<?php 
 $titulo = "Doceria - Cadastro de Doces";
include('src/componentes/cabecalho.php'); ?>    
        <div class="conteudo central">
            <h2 align="center">Cadastre o Doce</h2>
            <form class="central" name= "signup" action="cadastro.php" method="POST">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="Nome" name="Nome" />
                </div>
                <div class="form-group">
                    <label for="Quantidade">Quantidade</label>
                    <input type="number" class="form-control" id="Quantidade" name="Quantidade"/>
                </div>
                <div class="form-group">
                    <label for="Valor">Valor</label>
                    <input type="number" step="any" class="form-control" id="Valor" name="Valor"/>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-danger">Cadastrar</button> 
                </div>
                
            </form>
        </div>
        
<?php include('src/componentes/footer.php'); ?>