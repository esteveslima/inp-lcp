		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <!-- Correção para caracteres especiais e acentuação    -->
		<?php include "tphtml.php" ?>	
			

		<!-- top -->
				
				
				<div id="textocorpo">
					<h2  align="center" class="colorir">Editar Conta</h2>
					<hr width="100%" class="colorir" size="3px"><br>
					
					
					<form action="contasinsert.php" method="post">
						<div>
							<table align="left" style="position: relative; top: 10%">
								<tr>
									<td>Usuário :</td>
									<td><input type="text" name="usuario" value=""></td>
								</tr>
								<tr>
									<td>Nome :</td>
									<td><input type="text" name="nome" value=""></td>
								</tr>
							</table>					
						</div>
						<br><br><br><div style='position: relative; left: 10%;'><input style='width: 100px' type='submit' value='Adicionar conta'></div>
					</form>
					

					<!-- bottom -->				
					</div>
					<?php include "bthtml.php" ?>

<!-- Esteves Lima - estagiário LCP - 2015 -->