<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Crud</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="{{url ('assets/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="{{url ('assets/css/style.css')}}">
	</head>

	<body>

		<div class="wrapper">
			<div class="inner">
					<h3>Lista de Alunos</h3>
						<?php foreach($alunos as $aluno){ ?>
						<tr>
							<a href="/ver-aluno/{{$aluno->id}}"><td><?php echo $aluno->nome; ?></td></a>
							<br>
						</tr>
						<?php } ?>
					<form action="/cadastrar-aluno">
						<button>Cadastrar 
							<i class="zmdi zmdi-arrow-right"></i>
						</button>
					</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>