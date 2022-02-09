<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
 <link rel="icon" type="image/x-icon" href="../imgdomenu.jpeg">
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

				<form class="login100-form validate-form" method="POST" action="../valida.php">

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
">Olá! vamos começar</h5></strong>
<p>Faça login para continuar.</p>
				

					<div class="wrap-input100 validate-input" data-validate = "insira um nome de usuário">
						<input class="input100" type="text" value="armando@soaresinfornet.com" name="usuario" placeholder="Usuário">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "insira sua senha">
						<input class="input100" type="password" value="imortal123" name="senha" placeholder="senha">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<input style="cursor: pointer;" type="submit" name="btnLogin" value="Entrar" class="login100-form-btn">
							
						</input>
					</div>

					<!-- <div class="text-center p-t-12">
						<span class="txt1">
							não tem conta?
						</span>
						<a class="txt2" href="cadastra.php">
							faça seu cadastro!!
						</a>
					</div> -->

					
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