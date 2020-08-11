		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <!-- Correção para caracteres especiais e acentuação    -->
		<?php include "tphtml.php" ?>	
			

		<!-- top -->
				
				
				<div id="textocorpo">
					<h2  align="center" class="colorir">Alterar Conta</h2>
					<hr width="100%" class="colorir" size="3px"><br>
					
					<?php
							if (!(isset($_SESSION['idsession'])) or ($_SESSION['idsession'] != 1))//Caso não seja administrador redireciona para a homepage
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
							
							if (($_GET['id']) != null)		//verifica se recebeu o id
							{
									$sql = "select * from contas where id = '".$_GET['id']."'";		//seleciona os dados das contas do id correspondente
									$r = mysql_query($sql);			//executa o sql
									$l = mysql_fetch_assoc($r);			//armazena o valor da coluna encontrada e preenche os campos automaticamente para alteração
									
									echo "<form action='contasupdate.php' method='post'>
											<div>
												<table align='left' style='position: relative; top: 10%'>
													<tr>
														<td><input type='hidden' name='id' value='".$l['id']."'></td>
													</tr>
													<tr>
														<td><span>Id: ".$l['id']."</span></td>
													</tr>
													<tr>
														<td>Usuário:</td>
														<td><input type='text' name='usuario' value='".@mc_decrypt($l['usuario'], ENCRYPTION_KEY)."' maxlength='50'></td>
													</tr>
													<tr>
														<td>Senha:</td>
														<td><input type='text' name='senha' value='".@mc_decrypt($l['senha'], ENCRYPTION_KEY)."' maxlength='50'></td>
													</tr>
													<tr>
														<td>Nome:</td>
														<td><input type='text' name='nome' value='".@mc_decrypt($l['nome'], ENCRYPTION_KEY)."' maxlength='50'></td>
													</tr>
												</table>					
											</div>";
										if (($_SESSION['usuariosession'] != null) and ($_SESSION['senhasession'] != null))	//oculta o botão submit caso faça logout durante a alteração
										{
											echo"<br><div class='' style='position: relative; left: 10%; top: 100px;'><input style='width: 150px' type='submit' value='Atualizar Conta'></div>";
										}
										echo "</form>";
									
							}else
							{		//caso nao tenha encontrado o id recebido, exibe mensagem e retorna a pagina
								echo "<center>Usuário do nome não encontrado<center>
										<script>
											setTimeout(function()
											{
												location.href = history.go(-2);
											},3000);
										</script>
								 ";	
							
							}			
							unset($_GET);		//desabilita variavel get
					?>
					
					
					

					<!-- bottom -->				
					</div>
					<?php include "bthtml.php" ?>

<!-- Esteves Lima - estagiário LCP - 2015 -->