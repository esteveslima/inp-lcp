		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <!-- Correção para caracteres especiais e acentuação    -->
		<?php include "tphtml.php" ?>

	
		
		<!-- top -->
				
				<?php
							if (!(isset($_SESSION['idsession'])) or ($_SESSION['idsession'] != 1))	//Caso não seja administrador redireciona para a homepage
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
					<h2  align="center" class="colorir">Editar Contas</h2>
					<hr width="100%" class="colorir" size="3px"><br>

					
					
					<span>Insira o nome</span><br>
					<form action="contasoptions.php" method="post">
						<input maxlength='60' type="text" name="nome">
						<input maxlength='60' type="submit" class="publicar" value="Verificar">					
					</form>
					

					
					<!-- bottom -->				
					</div>
					<?php include "bthtml.php" ?>

<!-- Esteves Lima - estagiário LCP - 2015 -->