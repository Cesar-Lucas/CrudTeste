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
				<form action="/cadastrar-aluno" method="POST">
					@csrf
					<h3>Cadastrar Aluno</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
					<label class="form-group">
						<input type="text" class="form-control" name="nome" required>
						<span>Nome</span>
						<span class="border"></span>
					</label>
					<label class="form-group">
						<input type="text" class="form-control" name="contato"  required>
						<span for="">Telefone</span>
						<span class="border"></span>
					</label>
					<label class="form-group" >
					<input type="email" class="form-control" name="email"  required>
						<span for="">E-mail</span>
						<span class="border"></span>
					</label>
					<button>Cadastrar 
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>