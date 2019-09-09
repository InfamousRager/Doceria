<?php

include("src/classe/conexao.php");

$consulta = 'SELECT * FROM loja_doce';
$con = $mysqli->query($consulta) or die ($mysqli->error);

$titulo = "Doceria - Consulta por valor";

include("src/componentes/cabecalho.php"); ?>
<html>
	<head>
		<meta charset='utf8'>
	</head>
	<body>
		<table class="table table-striped">
			<thead>
				<tr>
					<td> ID </td>
					<td> Nome </td>
					<td> Quantidade </td>
					<td> Valor </td>
				</tr>
			</thead>
			<?php while($dado = $con->fetch_array()){ ?>
			<tbody>
				<tr>
					<td><?php echo $dado['id_doce']; ?></td>
					<td><?php echo $dado['nome_doce']; ?></td>
					<td><?php echo $dado['quant_doce']; ?></td>
					<td><?php echo $dado['valor_doce']; ?></td>
				</tr>
			</tbody>
			<?php } ?>
		</table>
	</body>
</html>

<?php
include("src/componentes/footer.php");?>