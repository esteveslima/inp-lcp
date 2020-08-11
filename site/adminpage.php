		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <!-- Correção para caracteres especiais e acentuação    -->
		<?php include "tphtml.php" ?>
		
		<!-- top -->
				
				
				<div id="textocorpo">
					<h2  align="center" class="colorir">Editar Contas</h2>
					<hr width="100%" class="colorir" size="3px"><br>
					
					<?php
							if (!(isset($_SESSION['idsession'])) or ($_SESSION['idsession'] != 1))	 //Caso não seja administrador redireciona para a homepage
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
					
					<div class="anymenu publicar" style='cursor: pointer; border: 1px solid #efebde; width: 20%; height: 8%; margin-top: 5px' onclick="location.href='contasadd.php'"><a href='contasadd.php' class='colorir'>Adicionar conta</a></div>
					<div class="anymenu publicar" style='cursor: pointer; border: 1px solid #efebde; width: 20%; height: 8%; margin-top: 5px' onclick="location.href='contasedit.php'"><a href='contasedit.php' class='colorir'>Editar conta</a></div>
					<div class="anymenu publicar" style='cursor: pointer; border: 1px solid #efebde; width: 20%; height: 8%; margin-top: 5px' onclick="location.href='noticiasedit.php'"><a href='noticiasedit.php' class='colorir'>Editar Notícia</a></div>
					
					

					<!-- bottom -->				
					</div>
					<?php include "bthtml.php" ?>

<!-- Esteves Lima - estagiário LCP - 2015 -->