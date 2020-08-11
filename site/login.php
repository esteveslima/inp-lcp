						<?php	
							session_start();	//inicia a sessão
							//include "connecti.php"; //conecta com o banco de dados
							error_reporting(E_ALL ^ E_DEPRECATED);		//retira as mensagens de aviso sobre mysql_* obsoleto (possível mudança para mysqli_*)
							define('ENCRYPTION_KEY', 'd0a7e7997b6d5fcd55f4b5c32611b87cd923e88837b63bf2941ef819dc8ca282');

					
							if (isset($_POST['usuariologin']) and isset($_POST['senhalogin']))	//caso a variavel POST exista(submit)
							{	
								if ($sql = $bd->prepare("select * from `contas` where `usuario` = ? and binary `senha` = ?"))	// Prepara uma consulta SQL (binary para comparação com case sentive)
								{
									$_POST['usuariologin'] = mc_encrypt($_POST['usuariologin'], ENCRYPTION_KEY);
									$_POST['senhalogin'] = mc_encrypt($_POST['senhalogin'], ENCRYPTION_KEY);
									$sql->bind_param('ss',$_POST['usuariologin'],$_POST['senhalogin']); // Atribui valores às variáveis da consulta
									$sql->execute();
									$sql->bind_result($id,$user,$pass,$nick);
									if ($sql->fetch())		//verifica se a conta existe e armazena simultaneamente
									{			
										$_SESSION['idsession'] = $id;
										$_SESSION['usuariosession'] = $user;		//caso exista, salva os dados em sessão
										$_SESSION['senhasession'] = $pass;									
										$_SESSION['nomesession'] = $nick;	
										unset($_POST);											//desabilita a variavel POST																
									}else
									{				//caso não exista a conta(referente aos dados enviados por submit) exibe a mensagem de falha no login 
												$_SESSION['falhou'] = true;			
												unset($_POST);
									}
								}
							
								
							}					
							
							echo"
									<script type='text/javascript'>
											$(document).ready(function(){	
														$('#formlogin').submit(function(){		//inicio do submit sem refresh(ajax)
														var dados = $( this ).serialize();		//serializa os dados em uma string
														$.ajax({
															type: 'POST',						//determina tipo de submit
															url: document.location.href,		//determina a url destino
															data: dados,						//determina os dados a serem enviados
															success: function()			
															{															
																$('#divloginform').fadeOut(1000,function(){																
																		$('#divloginform').load('login.php');
																		$('#divloginform').fadeIn(1500);						
																});
															}
																
																													
														});													
														return false;
													});													
											});
									</script>";
							
							if ((isset($_SESSION['usuariosession'])) and (isset($_SESSION['senhasession'])) and ($_SESSION['usuariosession'] != null) and ($_SESSION['senhasession'] != null))	//verifica a existencia da sessão e se seus valores são nulos
							{			
									if ($_SESSION['idsession']==1)	//caso seja administrador(id=1) exibe botão para a pagina de administração 
									{
										echo "<br><br><div class='anymenu' style='cursor: pointer; position: absolute !important; width: 30% !important; height: auto !important; bottom: 5px !important; right: 10px !important; left: auto !important; background-color: rgba(70,70,70,0.5)' onclick=\"location.href='adminpage.php'\"><a href='adminpage.php' class='colorir'  style='color: rgb(10,150,240)'>Editar Contas e Notícias</a></div>";
									}else                       //caso não seja administrador(id<>1) exibe apenas botão de trocar senha                  
									{                                             
										echo "<br><br><div class='anymenu' style='cursor: pointer; position: absolute !important; width: 30% !important; height: auto !important; bottom: 5px !important; right: 10px !important; left: auto !important; background-color: rgba(70,70,70,0.5)' onclick=\"location.href='senhaalter.php?id=".$_SESSION['idsession']."'\"><a href='senhaalter.php?id=".$_SESSION['idsession']."' class='colorir'  style='color: rgb(10,150,240)'>Alterar Senha</a></div>";
									}	
								
									echo"	<script type='text/javascript'>
												$('.publicar').css('visibility','visible');
											</script>
										<h3 style='position: absolute; left: 5px; top: -10px'>Bem Vindo!</h3>
										<span style='position: absolute; left: 5px; top: 40px'>".@mc_decrypt($_SESSION['nomesession'], ENCRYPTION_KEY)."</span> 
										<br><div class='anymenu logout' style='cursor: pointer; position: absolute !important; height: auto !important; bottom: 5px !important; left: 10px !important; background-color: rgba(70,70,70,1)'><a style='color: rgb(10,150,240)'>Sair</a></div>							
										";															
										echo "<script type='text/javascript'>												
											$('.logout').click(function(){						//ao clicar em sair destroi-se a sessão e atualiza o layout do login para o formulario vazio
														event.preventDefault();
														$('.publicar').css('visibility','hidden');			//classe para ocultar os botões caso saia da conta no meio de uma operação que precise dos dados da mesma
														$('#divloginform').fadeOut(1000,function(){																
																		$('#divloginform').load('sessiondestroy.php');																	
																		setTimeout(function(){
																			$('#divloginform').load('login.php');
																			$('#divloginform').fadeIn(1000);						
																		},1000);
														});
												});	
										</script>";
								
							}else
							{			
										if (isset($_SESSION['falhou']))
										{
											echo "	<center style='position: relative; top: 40%'>Login falhou</center>
													<script type='text/javascript'>
														setTimeout(function(){
															$('#divloginform').load('sessiondestroy.php');
															$('#divloginform').fadeOut(1000,function(){																
																		$('#divloginform').load('login.php');
																		$('#divloginform').fadeIn(1500);						
																});
														},3000);
													</script>";
										}else
										{echo "	
											<form id='formlogin' action='' method='post'>
												<table>
													<tr>
														<td><b>Usuário: </b></td>
														<td><input type='text' id='usuariologin' name='usuariologin' value='' style='width: 100%'></td>
													</tr>
													<tr>
														<td><b>Senha: </b></td>
														<td><input type='password' id='senhalogin' name='senhalogin' value='' style='width: 100%'></td>
													</tr>
													<tr>
														<td><input style='position: absolute; left: 5% ' type='submit' value='Efetuar Login' onclick=' $(this).hide(); '></td>
													</tr>
												</table>												
											</form>		
											";	
										}
							}
						
						
		// Encrypt Function
		function mc_encrypt($encrypt, $key){
			$encrypt = serialize($encrypt);
			//$iv = mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_CBC), MCRYPT_DEV_URANDOM);
			$key = pack('H*', $key);
			$mac = hash_hmac('sha256', $encrypt, substr(bin2hex($key), -32));
			$passcrypt = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key, $encrypt.$mac, MCRYPT_MODE_CBC);
			$encoded = base64_encode($passcrypt);
			return $encoded;
		}
		
		// Decrypt Function
		function mc_decrypt($decrypt, $key){
			$decrypt = explode('|', $decrypt.'|');
			$decoded = base64_decode($decrypt[0]);
			//$iv = base64_decode($decrypt[1]);
			//if(strlen($iv)!==mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_CBC)){ return false; }
			$key = pack('H*', $key);
			$decrypted = trim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, $decoded, MCRYPT_MODE_CBC));
			$mac = substr($decrypted, -64);
			$decrypted = substr($decrypted, 0, -64);
			$calcmac = hash_hmac('sha256', $decrypted, substr(bin2hex($key), -32));
			if($calcmac!==$mac){ return false; }
			$decrypted = unserialize($decrypted);
			return $decrypted;
		}
						
						
						
						
						?>
						<?php //$bd->close();		//fecha o banco de dados?>	
