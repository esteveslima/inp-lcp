		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <!-- Correção para caracteres especiais e acentuação    -->
		<?php include "tphtml.php" ?>

	
		
		<!-- top -->
				
					
					<?php
							if (!(isset($_SESSION['idsession'])) or ($_SESSION['idsession'] != 1))	 //Caso não tenha session(esteja logado) redireciona para homepage
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
					<h2  align="center" class="colorir">Editar Notícias</h2>
					<hr width="100%" class="colorir" size="3px"><br>

					
					
					<span>Insira o titulo da noticia</span><br>
					<form action="noticiasoptions.php" method="post">
						<input maxlength='60'type="text" name="titulo">
						<?php		
						
						if (($_SESSION['usuariosession'] != null) and ($_SESSION['senhasession'] != null))	//oculta o botão submit caso faça logout durante a alteração
						{
							echo"<br><div class='publicar' style='position: relative; '><input style='width: 100px' type='submit' value='Verificar notícia'></div>";
						}
					?>					
					</form>
					

					
					<!-- bottom -->				
					</div>
					<?php include "bthtml.php" ?>

<!-- Esteves Lima - estagiário LCP - 2015 -->