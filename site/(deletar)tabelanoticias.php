<?php
										if (isset($_SESSION['usuariosession']) and $_SESSION['usuariosession']!=null)	//caso seja administrador ou autor da noticia, exibe o botão de edição da noticia
										{
												echo "	<script type='text/javascript'>
															$('.publicar').css('visibility','visible');
														</script>";
										}	
									
										include "connect.php";
										if (isset($_GET['pagina']))
										{
											$pag = $_GET['pagina'];
										}else
										{
											$pag = 1;
										}

										$sql = "select * from noticias order by publicacao desc";		//seleciona todos(sem o limite)
										$r = mysql_query($sql);				//executa sql
										$numrows = mysql_num_rows($r);			//verifica o numero de linhas
										$lastpage = floor($numrows/10) + 1;			//calcula o numero de paginas baseado em 10 itens por pagina
										
										$sql = "select * from noticias order by publicacao desc limit 10 offset ".(($pag*10)-10);		//seleciona todas as noticias e ordena por ordem decrescente(mais recente) e limita a 10 noticias por pagina
										$r = mysql_query($sql);	//executa sql
										
										$x = 0;		//valor inicial para criar o menu zebrado
										while ($l = mysql_fetch_assoc($r))			//executa enquanto existir dados e os armazena na variável simultaneamente
										{		
											$print = true;
											$sql2 = "select nome from contas where usuario = '".@mc_encrypt($l['autor'], ENCRYPTION_KEY)."';";		//seleciona o nome da noticia
											$r2 = mysql_query($sql2);	 		//executa o sql
											$l2 = mysql_fetch_assoc($r2);		//armazena o valor
											
											
											
											if (isset($_POST['chavepesquisa']))
											{
												$searchnoticia = strpos(strip_tags($l['assunto']), $_POST['chavepesquisa']);
												$searchtitulo = strpos($l['titulo'], $_POST['chavepesquisa']);
												if (($searchnoticia === false) and ($searchtitulo === false))
												{
													$print = false;
												}
											}
											
											if ($print)
											{
												$x++;		//atualiza o tipo de item(colorido ou não) do menu zebrado
												if (($x%2) == 0)		//caso seja divisivel por 2(colorido) caso não(branco)
												{		
													echo"	
															<div class='itemnoticias coloreditem' style='cursor: pointer; color: white; border: 1px solid' onclick=\"location.href = 'noticiashow.php?id=".$l['id']."'\">
																<div class='inforow' style='border-right: 1px solid #efebde; height: 100%' valign='top'><strong>".$l['titulo']."</strong>
																	<p style='font-size: 12px'>Autor: ".@mc_decrypt($l2['nome'], ENCRYPTION_KEY)."</p>
																	<p style='font-size: 12px'>Publicação: ".date('d/m/Y H:i', strtotime($l['publicacao']))."</p>
																	<p style='font-size: 12px'>Assunto: ".$l['assunto']."</p>							
																</div>
																<div class='previewrow' style='font-size: 75%'>	
																	".substr(strip_tags($l['conteudo']),0,350)."...		<!--seleciona os 350 primeiros caracteres(sem as tags html) para o preview -->
																</div>
															</div>
														";
												}else
												{
													echo"	
															<div class='itemnoticias whiteitem' style='cursor: pointer; border: 1px solid' onclick=\"location.href = 'noticiashow.php?id=".$l['id']."'\">
																<div class='inforow' style='border-right: 1px solid #efebde; height: 100%' valign='top'><strong>".$l['titulo']."</strong>
																	<p style='font-size: 12px'>Autor: ".@mc_decrypt($l2['nome'], ENCRYPTION_KEY)."</p>
																	<p style='font-size: 12px'>Publicação: ".date('d/m/Y H:i', strtotime($l['publicacao']))."</p>
																	<p style='font-size: 12px'>Assunto: ".$l['assunto']."</p>	
																</div>
																<div class='previewrow' style='font-size: 75% ;'>	
																	".substr(strip_tags($l['conteudo']),0,350)."...		<!--seleciona os 350 primeiros caracteres(sem as tags html) para o preview-->
																</div>
															</div>
														";
												}
											}
											
										}
										if (isset($_POST['chavepesquisa']))
										{
											unset($_POST['chavepesquisa']);
										}
										if ((mysql_num_rows($r))==0)		//caso não exista linhas para verificar
										{
											echo "<center><span style='position: relative; top: 50%; font-size: 200%'>Nenhuma notícia encontrada!</span></center>";
										}
										
								
								 mysql_close($bd);?>