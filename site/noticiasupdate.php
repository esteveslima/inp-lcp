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
					
						if ((($_POST['conteudo']) != null) and (($_POST['titulo']) != null))	//verifica se recebeu os dados para atualizar
						{		
									
								$sql = "update noticias set autor = '".$_POST['autor']."', titulo = '".$_POST['titulo']."', assunto = '".$_POST['assunto']."', publicacao = '".$_POST['publicacao']."', conteudo = '".$_POST['conteudo']."', origem = '".$_POST['origem']."' where id = '".$_POST['id']."'";		//atualiza coluna
								$r = mysql_query($sql);		//executa sql
								if ($r)						//verifica se foi executado com sucesso
								{
									echo "	Atualizado com Sucesso<br><br>
									
											Autor: ".$_POST['autor']."<br>
											Publicação: ".$_POST['publicacao']."<br>
											assunto: ".$_POST['assunto']."<br>
											Titulo: ".$_POST['titulo']."<br><br><br>
											Conteudo: ".$_POST['conteudo']."
											<script>
												setTimeout(function()
												{
													location.href = 'noticias.php';
												},3000);
											</script>
										";
									
								}else	
								{			//caso não, exibe mensagem e retorna a pagina
									echo "	Ocorreu um erro durante a atualização<br>
											
											Desculpe o Transtorno
											<script>
												setTimeout(function()
												{
													history.go(-1);
												},3000);
											</script>
										";
								}
							
						}else
						{		//caso não tenha recebido os dados, exibe mensagem e retorna a pagina
							echo "Insira algo para atualizar e não esqueça o título<br><br>
										Autor: ".$_POST['autor']."<br>
										Publicação: ".$_POST['publicacao']."<br>
										assunto: ".$_POST['assunto']."<br>
										Titulo: ".$_POST['titulo']."<br><br><br>
										Conteudo: ".$_POST['conteudo']."
										<script>
											setTimeout(function()
											{
												history.go(-1);
											},3000);
										</script>
								 ";	
						}	
					?>
					<?php mysql_close($bd);?>

					<!-- bottom -->				
					</div>
					<?php include "bthtml.php" ?>

<!-- Esteves Lima - estagiário LCP - 2015 -->