		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <!-- Correção para caracteres especiais e acentuação    -->
		<?php include "tphtml.php" ?>
		

		<!-- top -->
				
				<div id="textocorpo">
					<h2  align="center" class="colorir">Exclusão de Notícia</h2>
					<hr width="100%" class="colorir" size="3px"><br>
					
					<?php	
						
							if (!(isset($_SESSION['idsession'])) or ($_SESSION['idsession'] != 1))		//Caso não seja administrador redireciona para a homepage
							{
								echo "	<script type='text/javascript'>											
												location.href = 'index.php';													
										</script>";
							}	
							
					
						include "connect.php";
					
						if (($_GET['titulo']) != null)	//caso o titulo da noticia a ser procurada tenha sido inserido
						{		
							$sql = "delete from noticias where titulo = '".$_GET['titulo']."'";	//deleta a coluna do respectivo titulo
							$r = mysql_query($sql);						//executa o sql
							if (mysql_affected_rows()==1)		//verifica se o numero de colunas afetadas é igual a 1
							{	//caso sim, exibe mensagem de excluido com sucesso
								echo "				
										<center><span>Excluído com sucesso</span></center><br>
										<center><span>Título: ".$_GET['titulo']."</span></center>
										
										<script>
												setTimeout(function()
												{
													location.href = 'adminpage.php';
												},3000);
											</script>
									";

							}else
							{		//caso não, envia mensagem de erro e retorna a pagina
								echo "		<center><span>Houve um problema durante a exclusão</span></center>
											<center><span>titulo: ".$_GET['titulo']."</span></center>

											<script>
												setTimeout(function()
												{
													location.href = history.go(-2);
												},3000);
											</script>
									";	
									unset($_GET);		//desabilita a variavel GET
							}
						}else
						{		//caso não tenha inserido titulo, exibe mensagem de erro e retorna a pagina
							echo "<center>Insira o título<center>
										<script>
											setTimeout(function()
											{
												location.href = history.go(-2);
											},3000);
										</script>
								 ";				
							unset($_GET);
						}	
					?>
					<?php mysql_close($bd);?>

					<!-- bottom -->				
					</div>
					<?php include "bthtml.php" ?>

<!-- Esteves Lima - estagiário LCP - 2015 -->