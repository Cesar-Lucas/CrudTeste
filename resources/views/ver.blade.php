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
				
				<h3><?php echo $aluno->nome; ?></h3>
					<br>

					<h4>ID: <?php echo $aluno->id; ?></h4>
					<br>
					<h4>Contato: <?php echo $aluno->contato; ?></h4>
					<br>
					<h4>Email: <?php echo $aluno->email; ?></h4>
					




				<form action="/editar-aluno/{{$aluno->id}}">
					<button class="btn btn-primary">Editar 
						<i </i>
					</button>
				</form>

				<form action="/excluir-cadastros">
					<button class="btn btn-primary">Excluir 
						<i class=""></i>
					</button>
				</form>

				<form action="/ver-cadastros">
					<button class="btn btn-primary">Voltar 
						<i class=""></i>
					</button>
				</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>