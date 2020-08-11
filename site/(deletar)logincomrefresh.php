						<?php	
							session_start();	//inicia a sessão
							include "connect.php"; //conecta com o banco de dados
							error_reporting(E_ALL ^ E_DEPRECATED);		//retira as mensagens de aviso sobre mysql_* obsoleto (possível mudança para mysqli_*)
							
							
							
							
							echo"
									<script type='text/javascript'>
											$(document).ready(function(){	
														$('#formlogin').submit(function(){		//inicio do submit (ajax)
														var dados = $( this ).serialize();		//serializa os dados em uma string
														$.ajax({
															type: 'POST',						//determina tipo de submit
															url: document.location.href,		//determina a url destino
															data: dados,						//determina os dados a serem enviados
															success: function()			
															{
																window.location.reload();
																$('#divloginform').fadeOut(1000,function(){										
																		$('#divloginform').load('login.php');																		
																		$('#divloginform').fadeIn(1500);
																		
																	});
						";?>
			
		<!--
				/*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
		//														if ((isset($_SESSION['usuariosession'])) and (isset($_SESSION['senhasession'])) and (isset($_SESSION['nomesession'])) and (isset($_SESSION['idsession'])))
		//														{
		//															echo  "$('#divloginform').fadeOut(1000,function(){										
		//																		$('#divloginform').load('login.php');																		
		//																		$('#divloginform').fadeIn(1500);
		//																		$('.publicar').css('visibility','visible');			//classe para ocultar os botões caso saia da conta no meio de uma operação que precise dos dados da mesma																																				
		//																	});";
		//														}else
		//														{
		//			Codigo para submit sem refresh(retirar
		//		refresh por javascript). Problemas no if		 echo	"$('#divloginform').fadeOut(1000,function(){
		//		da session onde, por algum motivo, faz 						$('#divloginform').fadeIn(1000);
		//		com que o echo com os fechamentos depois														});	
		//		do if seja exibido na tela mas não seja 					<center>Login falhou</center><br>
		//		interpretado pelo php.										<script type='text/javascript'>												
		//			Ao retirar a variavel correspondente						setTimeout(function(){
		//		da SESSION(deixar $_SESSION apenas), não							$('#divloginform').fadeOut(1000,function(){
		//		executa o else do if(continua executando
		//		as intruções normais do if) causando varios								$('#divloginform').load('login.php');
		//		problemas como a liberação dos botões de 								$('#divloginform').fadeIn(1000);
		//		publicação ao falhar login											});																						
		//																		},3000);					
		//																	</script>";
		//														}	
				/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		->			
														<?php echo "	
															}
														
														});
														
														return false;
													});
													
											});
									</script>
							";
							
							if ((isset($_SESSION['usuariosession'])) and (isset($_SESSION['senhasession'])) and ($_SESSION['usuariosession'] != null) and ($_SESSION['senhasession'] != null))	//verifica a existencia da sessão e se seus valores são nulos
							{			
									if ($_SESSION['idsession']==1)	//caso seja administrador(id=1) exibe botão para a pagina de administração 
									{
										echo "<br><br><div class='anymenu' style='cursor: pointer; position: absolute !important; width: 30% !important; height: auto !important; bottom: 5px !important; right: 10px !important; left: auto !important; background-color: rgba(70,70,70,0.5)' onclick=\"location.href='adminpage.php'\"><a href='adminpage.php' class='colorir'>Editar Contas e Notícias</a></div>";
									}else                       //caso não seja administrador(id<>1) exibe apenas botão de trocar senha                  
									{                                             
										echo "<br><br><div class='anymenu' style='cursor: pointer; position: absolute !important; width: 30% !important; height: auto !important; bottom: 5px !important; right: 10px !important; left: auto !important; background-color: rgba(70,70,70,0.5)' onclick=\"location.href='senhaalter.php?id=".$_SESSION['idsession']."'\"><a href='senhaalter.php?id=".$_SESSION['idsession']."' class='colorir' >Alterar Senha</a></div>";
									}	
								
									echo"
										<h3 style='position: absolute; left: 5px; top: -10px'>Bem Vindo!</h3>
										<span style='position: absolute; left: 5px; top: 40px'>".$_SESSION['nomesession']."</span> 
										<br><div class='anymenu logout' style='cursor: pointer; position: absolute !important; height: auto !important; bottom: 5px !important; left: 10px !important; background-color: rgba(70,70,70,1)'><a href=''>Sair</a></div>							
										";															
										echo "<script type='text/javascript'>												
											$('.logout').click(function(){						//ao clicar em sair destroi-se a sessão e atualiza o layout do login para o formulario vazio
														event.preventDefault();
														$('.publicar').css('visibility','hidden');			//classe para ocultar os botões caso saia da conta no meio de uma operação que precise dos dados da mesma
														$('#divloginform').fadeOut(1000,function(){																
																		$('#divloginform').load('sessiondestroy.php');
																		setTimeout(1000);
																		$('#divloginform').load('login.php');
																		$('#divloginform').fadeIn(1500);						
														});
												});	
										</script>";
								
							}

							
							
							if (isset($_POST['usuariologin']) and isset($_POST['senhalogin']))	//caso a variavel POST exista(submit)
							{	
								$sql = "select * from contas where usuario = '".$_POST['usuariologin']."' and senha = '".$_POST['senhalogin']."'";	//procura pela conta
								$r = mysql_query($sql);			//executa o sql
								if ($l = mysql_fetch_assoc($r))		//verifica se a conta existe e armazena(caso exista), simultaneamente, na variavel $l
								{			
									$_SESSION['usuariosession'] = $_POST['usuariologin'];		//caso exista, salva os dados em sessão
									$_SESSION['senhasession'] = $_POST['senhalogin'];
									$_SESSION['idsession'] = $l['id'];
									$_SESSION['nomesession'] = $l['nome'];					
												
								}else
								{				//caso não exista a conta(referente aos dados enviados por submit) exibe a mensagem de falha no login 
									echo "<center>Login falhou</center><br>";
									echo "<script type='text/javascript'>												
												setTimeout(function(){
															$('#divloginform').fadeOut(1000,function(){
																						$('#divloginform').load('login.php');
																						$('#divloginform').fadeIn(1000);
															});																						
													},3000);					
											</script>";															
								}
							}else
							{		//caso não tenha sido enviado nada por POST e salvo na SESSION, exibe o formulário de login
								if (!(isset($_SESSION['usuariosession'])) and !(isset($_SESSION['senhasession']))) 		
								{
									echo "	
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
						?>
						<?php mysql_close($bd);		//fecha o banco de dados?>	