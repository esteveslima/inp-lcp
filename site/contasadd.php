		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <!-- Correção para caracteres especiais e acentuação    -->
		<?php include "tphtml.php" ?>	
			
			
		<!-- top -->
				<?php
							if (!(isset($_SESSION['idsession'])) or ($_SESSION['idsession'] != 1)) //Caso não seja administrador redireciona para a homepage
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
					?>
				
				<div id="textocorpo">
					<h2  align="center" class="colorir">Adicionar Conta</h2>
					<hr width="100%" class="colorir" size="3px"><br>
					
					
					<form id="formadd" action="contasinsert.php" method="post">
						<div>
							<table align="left" style="position: relative; top: 10%">
								<tr>
									<td>Usuário: </td>
									<td><input id="usuario" type="text" name="usuario" value="" maxlength="50"></td>
								</tr>
								<tr>
									<td>Senha: </td>
									<td><input type="text" name="senha" value="" maxlength="50"></td>
								</tr>
								<tr>
									<td>Nome: </td>
									<td><input id="nome" type="text" name="nome" value="" maxlength="50" style="text-transform: capitalize"></td>
								</tr>
							</table>					
						</div>
						<br><br><br><br><div class="publicar" style='position: relative; left: 10%;'><input style='width: 150px' type='submit' value='Adicionar conta'></div>
					</form>
					<script type="text/javascript">
						$("#usuario").keyup(function(){
								string = $("#usuario").val().replace(/\./g," ");			//trocando os pontos por espaços 
								$("#nome").val(string);			
						});
					</script>

					<!-- bottom -->				
					</div>
					<?php include "bthtml.php" ?>

<!-- Esteves Lima - estagiário LCP - 2015 -->