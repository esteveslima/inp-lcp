		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <!-- Correção para caracteres especiais e acentuação    -->
		<?php include "tphtml.php" ?>
		

		<!-- top -->
				
				<div id="textocorpo">
					<h2  align="center" class="colorir">Exclusão de Conta</h2>
					<hr width="100%" class="colorir" size="3px"><br>
					
					<?php	
						
							if (!(isset($_SESSION['idsession'])) or ($_SESSION['idsession'] != 1)) //Caso não seja administrador redireciona para a homepage
							{
								echo "	<script type='text/javascript'>											
												location.href = 'index.php';													
										</script>";
							}	
					
					
						include "connect.php";
					
						if (($_GET['id']) != null)		//verifica se recebeu o id
						{		
							$sql = "delete from contas where id = '".$_GET['id']."'";		//deleta a conta do respectivo id
							$r = mysql_query($sql);						//executa o sql
							if (mysql_affected_rows()==1)				//verifica se o numero de colunas afetadas é igual a 1(se foi excluido)
							{						//caso sim, exibe mensagem de sucesso e redireciona a pagina
								echo "	
										<span>Excluído com sucesso</span><br>
										<span>id: ".$_GET['id']."</span><br>
										
										<script>
												setTimeout(function()
												{
													location.href = 'adminpage.php';
												},5000);
											</script>
									";

							}else
							{					//caso não, exibe mensagem e retorna a pagina	
								echo "		<span>Houve um problema durante a exclusão</span><br>
											<span>id: ".$_GET['id']."</span><br>

											<script>
												setTimeout(function()
												{
													location.href = history.go(-2);
												},5000);
											</script>
									";	
							}
						}else
						{							//caso nao tenha encontrado o id recebido, exibe mensagem e retorna a pagina
							echo "Insira o nome para identificarmos o usuário
										<script>
											setTimeout(function()
											{
												location.href = history.go(-2);
											},5000);
										</script>
								 ";	
						}	
					?>
					<?php mysql_close($bd);?>

					<!-- bottom -->				
					</div>
					<?php include "bthtml.php" ?>

<!-- Esteves Lima - estagiário LCP - 2015 -->