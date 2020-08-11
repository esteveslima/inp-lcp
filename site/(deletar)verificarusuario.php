<?php					
		if (isset($_POST['usuariologin']) and isset($_POST['senhalogin']))	//caso a variavel POST exista(submit)
		{	
			$sql = "select * from contas where usuario = '".$_POST['usuariologin']."' and senha = '".$_POST['senhalogin']."'";	//procura pela conta
			$r = mysql_query($sql);			//executa o sql
			if ($l = mysql_fetch_assoc($r))		//verifica se a conta existe e armazena(caso exista) ao mesmo tempo na variavel $l
			{			
				$_SESSION['usuariosession'] = $_POST['usuariologin'];		//caso exista, salva os dados em sessão
				$_SESSION['senhasession'] = $_POST['senhalogin'];
				$_SESSION['idsession'] = $l['id'];
				$_SESSION['nomesession'] = $l['nome'];	
				unset($_POST);											//desabilita a variavel POST							
				echo "	<script type='text/javascript'>
							$('.publicar').css('visibility','visible');			//classe para ocultar os botões caso saia da conta no meio de uma operação que precise dos dados da mesma																																				
						</script>";
			}else
			{				//caso não exista a conta(referente aos dados enviados por submit) exibe a mensagem de falha no login 
				echo "<center>Login falhou</center><br>";
				echo "<script type='text/javascript'>
							$('#divloginform').fadeIn(1000);
							setTimeout(function(){
											$('#divloginform').fadeOut(1000,function(){	
																	$('#divloginform').load('login.php');
																	$('#divloginform').fadeIn(1000);
											});
																																						
								},3000);					
						</script>";				
						unset($_POST);
			}
		}
		
?>