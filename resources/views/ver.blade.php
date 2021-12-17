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

				<form action="/editar-cadastro">
					<button>Editar 
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>

				<form action="/excluir-cadastros">
					<button>Excluir 
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>

				<form action="/ver-cadastros">
					<button>Voltar 
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>