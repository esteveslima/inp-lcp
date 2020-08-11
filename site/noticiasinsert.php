		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <!-- Correção para caracteres especiais e acentuação    -->
		<?php include "tphtml.php" ?>
			

		<!-- top -->
				
				
				<div id="textocorpo">
					<h2  align="center" class="colorir">Publicar Notícia</h2>
					<hr width="100%" class="colorir" size="3px"><br>
					
					<?php
							if (!(isset($_SESSION['idsession'])))	 //Caso não tenha session(esteja logado) redireciona para homepage
									{
										echo "	<script type='text/javascript'>											
														location.href = 'index.php';													
												</script>";
									}	
					?>
					
					<?php	
						include "connect.php";
					
						if ((($_POST['conteudo']) != null) and (($_POST['titulo']) != null))
						{	
							$sql2 = "select titulo from noticias where titulo = '".$_POST['titulo']."'";
							$r2 = mysql_query($sql2);						
							$l = mysql_num_rows($r2);
							if ($l!=0)
							{	
								echo "Título ja existente, por favor escolha outro<br><br>
											titulo: ".$_POST['titulo']."

											<script>
												setTimeout(function()
												{
													location.href = history.go(-1);
												},5000);
											</script>
									";	

							}else
							{		
								$_POST['autor'] = @mc_decrypt($_POST['autor'], ENCRYPTION_KEY);
								$sql = "insert into noticias (id, autor, titulo, assunto, publicacao, conteudo, origem) values ( null, '".$_POST['autor']."', '".$_POST['titulo']."', '".$_POST['assunto']."', '".$_POST['publicacao']."', '".$_POST['conteudo']."', '".$_POST['origem']."')" ;
								$r = mysql_query($sql);
								if ($r)
								{
									echo "	Publicado com Sucesso<br><br>
									
											Autor: ".$_POST['autor']."<br>
											Publicação: ".$_POST['publicacao']."<br>
											assunto: ".$_POST['assunto']."<br>
											Titulo: ".$_POST['titulo']."<br><br><br>
											Conteudo: ".$_POST['conteudo']."
											<script>
												setTimeout(function()
												{
													location.href = 'noticias.php';
												},5000);
											</script>
										";
									
								}else
								{
									echo "	Ocorreu um erro durante a publicação<br>
											
											Desculpe o Transtorno
											<script>
												setTimeout(function()
												{
													history.go(-1);
												},5000);
											</script>
										";
								}
							}
						}else
						{
							echo "Insira algo para publicar e não esqueça o título<br><br>
										Autor: ".$_POST['autor']."<br>
										Publicação: ".$_POST['publicacao']."<br>
										assunto: ".$_POST['assunto']."<br>
										Titulo: ".$_POST['titulo']."<br><br><br>
										Conteudo: ".$_POST['conteudo']."
										<script>
											setTimeout(function()
											{
												history.go(-1);
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