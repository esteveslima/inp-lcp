						<div id="noticiastable">
									<?php
										include "connect.php";

										$sql = "select * from noticias order by publicacao desc";		//seleciona todos(sem o limite)
										$r = mysql_query($sql);				//executa sql
										$numrows = mysql_num_rows($r);			//verifica o numero de linhas
										$lastpage = ceil($numrows/10);			//calcula o numero de paginas baseado em 10 itens por pagina
										
										$sql = "select * from noticias order by publicacao desc limit 10 offset ".($pag*10);		//seleciona todas as noticias, ordena por ordem decrescente(mais recente) e limita a 10 noticias por pagina
										$r = mysql_query($sql);	//executa sql
										
										$x = 0;		//valor inicial para criar o menu zebrado
										while ($l = mysql_fetch_assoc($r))			//executa enquanto existir dados e os armazena na variável simultaneamente
										{
											
											
											$sql2 = "select nome from contas where usuario = '".$l['autor']."';";		//seleciona o nome da noticia
											$r2 = mysql_query($sql2);	 		//executa o sql
											$l2 = mysql_fetch_assoc($r2);		//armazena o valor
											$x++;		//atualiza o tipo de item(colorido ou não) do menu zebrado
											if (($x%2) == 0)		//caso seja divisivel por 2(colorido) caso não(branco)
											{
												echo"	
														<div class='itemnoticias coloreditem' style='cursor: pointer; color: white; border: 1px solid' onclick=\"location.href = 'noticiashow.php?id=".$l['id']."'\">
															<div class='inforow' style='border-right: 1px solid #efebde' valign='top'><strong>".$l['titulo']."</strong>
																<p style='font-size: 12px'>Autor: ".$l2['nome']."</p>
																<p style='font-size: 12px'>Publicação: ".$l['publicacao']."</p>
																<p style='font-size: 12px'>Assunto: ".$l['assunto']."</p>							
															</div>
															<div class='previewrow' style='font-size: 75%'>	
																".substr(($l['conteudo']),0,250)."		<!--seleciona os 250 primeiros caracteres para o preview-->
															</div>
														</div>
													";
											}else
											{
												echo"	
														<div class='itemnoticias whiteitem' style='cursor: pointer; border: 1px solid ' onclick=\"location.href = 'noticiashow.php?id=".$l['id']."'\">
															<div class='inforow' style='border-right: 1px solid #efebde ' valign='top'><strong>".$l['titulo']."</strong>
																<p style='font-size: 12px'>Autor: ".$l2['nome']."</p>
																<p style='font-size: 12px'>Publicação: ".$l['publicacao']."</p>
																<p style='font-size: 12px'>Assunto: ".$l['assunto']."</p>	
															</div>
															<div class='previewrow' style='font-size: 75% ;'>	
																".substr(($l['conteudo']),0,250)."		<!--seleciona os 250 primeiros caracteres para o preview-->
															</div>
														</div>
													";
											}
										}
										if ((mysql_num_rows($r))==0)		//caso não exista linhas para verificar
										{
											echo "<center><span style='position: relative; top: 50%; font-size: 200%'>Nenhuma notícia encontrada!</span></center>";
										}
										
									?>
								<?php mysql_close($bd);?>
						
						</div>
						
						<center>
						<div id="paginacao">
							<a href="" class="colorir menupag" style="font-size: 30px; text-decoration: none" onclick="<?php $pag = 0;?>">|<</a>
							<a href="" class="colorir menupag" style="font-size: 30px; text-decoration: none" onclick="<?php $pag--;?>"><</a>
							<?php
								$k = $pag;						//definição da pagina atual será exibida 
		
								$kleft = $k - 5;              //definição de limite de numeros a esquerda
								if ($kleft < 0)                 //se for menor que 0, vai apenas até a primeira pagina 
								{
									$kleft = 0;
								}							
								while ($kleft < $k)				//exibição dos numeros a esquerda da pagina atual
								{
									echo "<a href='#' class='colorir menupag' style='font-size: 20px; text-decoration: none' onclick=''>".$kleft."</a>";
									$kleft++;
								}
								
								
								
								$kright = $pag + 5;	//definição de limite de numeros a direita
								if ($kright > $lastpage)		//se for maior que o numero de resultados encontrados, vai apenas até a ultima pagina 
								{
									$kright = $lastpage;
								}
								while ($k < $kright)			//exibição dos numeros a direita da pagina atual
								{
									echo "<a href='#' class='colorir menupag' style='font-size: 20px; text-decoration: none' onclick=''> ".$k." </a>";
									$k++;
								}
							?>
							<a href="" class="colorir menupag" style="font-size: 30px; text-decoration: none" onclick="<?php $pag++;?>">></a>
							<a href="" class="colorir menupag" style="font-size: 30px; text-decoration: none" onclick="<?php $pag = $lastpage;?>">>|</a>
							
						</div>
						</center>
						
						
						<script type="text/javascript">
							$('.menupag').click(function(){						//ao mudar a paginação da noticia, atualiza
										event.preventDefault();
										$('#displaynoticias').fadeOut(1000,function(){	

														$('#divloginform').load('noticiasdisplay.php');
														$('#divloginform').fadeIn(1000);													
										});
								});	
						</script>