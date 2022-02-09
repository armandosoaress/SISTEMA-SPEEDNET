   <?php
session_start();
include_once("conexao.php");


if(!empty($_SESSION['id'])){
  /*echo "<h5 id='bemvin'>"; 
 echo "<img src='https://img.icons8.com/fluent/54/000000/user-male-circle.png'/>";
 echo "<br>";
  
   echo "</h5>";*/
}else{
  $_SESSION['msg'] = "Área restrita";
  header("Location: ../login/login.php");  
}

?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>
	</body>
		<?php
			include_once("conexao.php");
			$arquivo 	= $_FILES['arquivo']['name'];
			
			//Pasta onde o arquivo vai ser salvo
			$_UP['pasta'] = 'foto/';
			
			//Tamanho máximo do arquivo em Bytes
			$_UP['tamanho'] = 1024*1024*100; //5mb
			
			//Array com a extensões permitidas
			$_UP['extensoes'] = array('png', 'jpg', 'jpeg', 'gif');
			
			//Renomeiar
			$_UP['renomeia'] = false;
			
			//Array com os tipos de erros de upload do PHP
			$_UP['erros'][0] = 'Não houve erro';
			$_UP['erros'][1] = 'O arquivo no upload é maior que o limite do PHP';
			$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especificado no HTML';
			$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
			$_UP['erros'][4] = 'Não foi feito o upload do arquivo';
			
			//Verifica se houve algum erro com o upload. Sem sim, exibe a mensagem do erro
			if($_FILES['arquivo']['error'] != 0){
				
				die("Não foi possivel fazer o upload, erro: <br />". $_UP['erros'][$_FILES['arquivo']['error']]);

				exit; //Para a execução do script
			}
		
			//Faz a verificação da extensao do arquivo
			$extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
			if(array_search($extensao, $_UP['extensoes'])=== false){		
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Aula/upload_imagem.php'>
					<script type=\"text/javascript\">
						alert(\"A imagem não foi cadastrada extesão inválida.\");
					</script>
				";
			}
			
			//Faz a verificação do tamanho do arquivo
			else if ($_UP['tamanho'] < $_FILES['arquivo']['size']){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Aula/upload_imagem.php'>
					<script type=\"text/javascript\">
						alert(\"Arquivo muito grande.\");
					</script>
				";
			}
			
			//O arquivo passou em todas as verificações, hora de tentar move-lo para a pasta foto
			else{
				//Primeiro verifica se deve trocar o nome do arquivo
				if($UP['renomeia'] == true){
					//Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
					$nome_final = time().'.jpg';
				}else{
					//mantem o nome original do arquivo
					$nome_final = $_FILES['arquivo']['name'];

				}
				//Verificar se é possivel mover o arquivo para a pasta escolhida
				$id=$_SESSION['id'];
				if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta']."foto".$_SESSION['id'].".". $extensao)){
					//Upload efetuado com sucesso, exibe a mensagem
					

$consulta = "UPDATE `usuarios` SET `foto` = 'foto$id.$extensao' WHERE `usuarios`.`id`= $id";
 $resultado = $conn->query($consulta) or die($conn->error);
			

		
			
			
$consulta = "SELECT `foto` FROM `usuarios` WHERE `id`= $id";
 $resultado = $conn->query($consulta) or die($conn->error);
 //enquando se dado for igual resultado jogar lista, faça-se a seguência do código abaixo


while($dado = $resultado->fetch_array()){
  
echo  $dado["foto"];


}
					echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../administrativo/configuracao.php'>
						
					";	
				}else{
					//Upload não efetuado com sucesso, exibe a mensagem
					echo "
						<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../configuracao'>
						<script type=\"text/javascript\">
							alert(\"Imagem não foi cadastrada com Sucesso.\");
						</script>
					";
				}
			}
			
			
		?>
		
	</body>
</html>