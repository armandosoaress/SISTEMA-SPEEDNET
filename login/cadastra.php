<?php
session_start();
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Cadastro</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" href="https://img.icons8.com/fluent/50/000000/chat.png" type="image/x-icon" />
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="POST" action="../enviar.php">

	<center>
		<h3 style="font-size:21px;margin-bottom: 20px;">
		

			<?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
		?>
	</h3>
	</center>


							
	<strong><h5 style="font-weight: 900 ;
">Novo aqui?</h5></strong>
<p>Se inscrever é fácil. Só dá alguns passos.</p>
				

					<div class="wrap-input100 validate-input" data-validate = "insira um nome">
						<input class="input100" type="text" name="nome" placeholder="nome">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-address-book-o" aria-hidden="true"></i>
						</span>
					</div>


					<div class="wrap-input100 validate-input" data-validate = "insira um nome de usuário">
						<input class="input100" type="text" name="usuario" placeholder="Usuário">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "insira sua senha">
						<input class="input100" type="password" name="senha" placeholder="senha">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>


		
					<div class="container-login100-form-btn">
						<input style="cursor: pointer;" type="submit" name="btnLogin" value="Cadastrar" class="login100-form-btn">
							
						</input>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							ja tem conta?
						</span>
						<a class="txt2" href="login.php">
							Faça login!!
						</a>
					</div>

				
				</form>
			</div>
		</div>
	</div>

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>