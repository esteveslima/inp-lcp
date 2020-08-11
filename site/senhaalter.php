		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <!-- Correção para caracteres especiais e acentuação    -->
		<?php include "tphtml.php" ?>	
			

		<!-- top -->
				
				
				<div id="textocorpo">
					<h2  align="center" class="colorir">Alterar Senha</h2>
					<hr width="100%" class="colorir" size="3px"><br>
					
					<?php
							if (!(isset($_SESSION['idsession'])))	 //Caso não tenha session(esteja logado) redireciona para homepage
									{
										echo "	<script type='text/javascript'>											
														location.href = 'index.php';													
												</script>";
									}	
									echo "	<script type='text/javascript'>
												$('.logout').click(function(){
													$('#divloginform').load('sessiondestroy.php');
													window.location.reload();
												})
											</script>";
											
											
							
							include "connect.php";
							
							if (($_GET['id']) != null)		//verifica se recebeu o id da conta(se existe)
							{
								//caso seja encontrado exibe o formulario de alteração
									
									echo "<form action='senhaupdate.php' method='post'>
											<div>
												<table align='left' style='position: relative; top: 10%'>
													<tr>
														<td>Digite sua senha atual  :</td>
														<td><input type='password' name='senhaatual'></td>
													</tr>
													<tr>
														<td>Digite sua nova senha :</td>
														<td><input type='password' name='senhanova1'></td>
													</tr>
													<tr>
														<td>Digite sua nova senha novamente :</td>
														<td><input type='password' name='senhanova2'></td>
													</tr>
												</table>					
											</div>";
										if ((isset($_SESSION['usuariosession'])) and (isset($_SESSION['senhasession'])) and ($_SESSION['usuariosession'] != null) and ($_SESSION['senhasession'] != null))	//verifica a existencia da sessão e se seus valores são nulos
										{
											echo"<br><div class='publicar' style='position: relative; left: 10%; top: 70px;'><input style='width: 150px' type='submit' value='Atualizar senha'></div>";
										}
										echo "</form>";
									
							}else
							{		//caso não tenha sido encontrado, exibe mensagem de erro e retorna a pagina
								
								echo "<center>Usuário não encontrado<center>
										<script>
											setTimeout(function()
											{
												location.href = history.go(-2);
											},3000);
										</script>
								 ";	
							
							}	
							unset($_GET);	//desabilita variavel GET
					?>
					
					
					

					<!-- bottom -->				
					</div>
					<?php include "bthtml.php" ?>

<!-- Esteves Lima - estagiário LCP - 2015 -->