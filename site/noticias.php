		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <!-- Correção para caracteres especiais e acentuação    -->
		<?php include "tphtml.php" ?>

		<style type="text/css">
			#noticias
			{
				visibility: hidden;
			}
			#noticiastable
			{
				-webkit-border-radius: 7px;  
				-moz-border-radius: 7px;  
				border-radius: 7px;
				border: 1px solid black;
				min-height: 1000px;
				overflow: hidden;	
				background: #000;
			}
			.itemnoticias 
			{
				-webkit-border-radius: 7px;  
				-moz-border-radius: 7px;  
				border-radius: 7px;
				
				-webkit-transition: all 500ms ease;
				-moz-transition: all 500ms ease;
				-ms-transition: all 500ms ease;
				-o-transition: all 500ms ease;
				transition: all 500ms ease;
				
				position: relative;
				display: block;
				width: 100%;
				height: 130px;
				overflow: hidden;
			}
			.inforow
			{
				position: absolute;
				width: 50%;
				word-wrap: break-word;
			}
			.previewrow
			{
				position: absolute;
				left: 50%;
				width: 50%;
				word-wrap: break-word;
				overflow: hidden;
			}
			#noticiasmenu table
			{
				-webkit-border-top-left-radius: 7px;  
				-moz-border-top-left-radius: 7px;  
				border-top-left-radius: 7px;
				width: 20%;
				min-height: 100px;
				position: absolute;
				left: 2.5%;
				top: 10%;

			}
			#noticiasmenu td
			{		
				-webkit-transition: all 500ms ease;
				-moz-transition: all 500ms ease;
				-ms-transition: all 500ms ease;
				-o-transition: all 500ms ease;
				transition: all 500ms ease;
			
				position: relative;
				-webkit-border-radius: 7px;  
				-moz-border-radius: 7px;  
				border-radius: 7px;
				text-align: center;
			}
			#noticiastable img
			{
				display: none;
			}
			#noticiastable table
			{
				display: none;
			}
			#noticiastable iframe
			{
				display: none;
			}
			#pesquisanoticias
			{
				position: absolute;
				top: 100px;
				left: 2%;
				width: 20%;
				height: 130px;
				border: 1px solid #dedacd;
				-webkit-border-radius: 7px;  
				-moz-border-radius: 7px;  
				border-radius: 7px;
				
				background: rgba(0,0,0,0.3);
				
				-webkit-transition: all 500ms ease;
				-moz-transition: all 500ms ease;
				-ms-transition: all 500ms ease;
				-o-transition: all 500ms ease;
				transition: all 500ms ease;
			}
			#pesquisanoticias:hover
			{
				background: rgba(0,0,0,0.9);
			}

		</style>
		
		<!-- top -->
			
				<div class='anymenu publicar' style='cursor: pointer; position: absolute; left: 10px !important; top: 10px !important; visibility: hidden' onclick=\"location.href='noticiasadd.php'\"><a href='noticiasadd.php' class='colorir'>Publicar Notícia</a></div>
				<div id="pesquisanoticias">
					<form action="#" method="post" id="formpesquisa" onsubmit="$.cookie('chavepesquisa',$('#chavepesquisa').val());">
							<center><span style="position: relative; top: 10px">Termo para pesquisa:</span></center>
							<center><input style="position: relative; top: 20px" type="text" id="chavepesquisa" name="chavepesquisa"  maxlength="50"  size="15" oninput="  if($(this).val() == ''){	$('#submitpesquisa').attr('disabled','disabled');  	}else{	$('#submitpesquisa').removeAttr('disabled'); 	}"></center>
							<center><input style="position: relative; top: 35px" type="submit" id="submitpesquisa" value="Pesquisar" maxlength="100" disabled="disabled" disabled="disabled"></center>											
							<center><input style="position: relative; top: 35px" type="reset" onclick=" document.cookie = 'chavepesquisa' + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;'; delete_cookie('chavepesquisa');" value="Limpar pesquisa" style="width: auto" id="limparpesquisa"></center>										
					</form>
				</div>
				<script type="text/javascript">
						$(document).ready(function(){
							if ($.cookie('chavepesquisa'))
							{
								$("#chavepesquisa").val($.cookie('chavepesquisa'));
								$('#limparpesquisa').css('display','block');
								$('#submitpesquisa').css('display','none');
								$('#chavepesquisa').prop('readonly',true);
								$('#chavepesquisa').css('background','gray');
								$('#chavepesquisa').css('color','black');
							}else
							{
								$('#limparpesquisa').css('display','none');
								$('#submitpesquisa').css('display','block');
								$('#chavepesquisa').prop('readonly',false);
							}
						});
						
						$("#limparpesquisa").click(function(){
							location.href='noticias.php';
						});
						
				</script>
				<div id="textocorpo">
					<h2 align="center" class="colorir">Notícias</h2>
					<hr width="100%" class="colorir" size="3px"><br>
		
					<br>
					<div id="noticiastable">								
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
										$numrows = 0;
										while($l2 = mysql_fetch_assoc($r))
										{
											$print = true;
											if (isset($_COOKIE['chavepesquisa']))
											{
												$conteudopesq = $l['conteudo'];
												$titulopesq = $l['titulo'];
												$assuntopesq = $l['assunto'];
												$searchnoticia = stripos(strip_tags($conteudopesq), $_COOKIE['chavepesquisa']);
												$searchtitulo = stripos($titulopesq, $_COOKIE['chavepesquisa']);
												$searchassunto = stripos($assuntopesq, $_COOKIE['chavepesquisa']);
												if (($searchnoticia === false) and ($searchtitulo === false) and ($searchassunto === false))
												{
													$print = false;
												}
											}
												
											if($print)
											{
												$numrows++;
				
											}
										}
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
											
											
											
											if (isset($_COOKIE['chavepesquisa']))
											{
												$searchnoticia = strpos(strip_tags($l['conteudo']), $_COOKIE['chavepesquisa']);
												$searchtitulo = strpos($l['titulo'], $_COOKIE['chavepesquisa']);
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
															<div class='itemnoticias whiteitem' style='cursor: pointer; color: white; border: 1px solid' onclick=\"location.href = 'noticiashow.php?id=".$l['id']."'\">
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
															<div class='itemnoticias coloreditem' style='cursor: pointer; border: 1px solid' onclick=\"location.href = 'noticiashow.php?id=".$l['id']."'\">
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
	
										if ($x == 0)		//caso não exista linhas para verificar
										{
											echo "<center><span style='position: relative; top: 50%; font-size: 200%'>Nenhuma notícia encontrada!</span></center>";
										}
										
								
								 mysql_close($bd);?>
					</div>
						<br>
						<center>
						<div id="paginacao" style="background: black; border-radius: 7px; height: auto; width: 100%">
							<div id="menupaginacao" style="margin: 0px; width: 100%">
							<a href="" class="colorir menupag" style="font-size: 20px; text-decoration: none; margin-right: 20px" onclick="primeirapag(); return false"> |< </a>
							<a href="" class="colorir menupag" style="font-size: 20px; text-decoration: none; margin-right: 30px" onclick="retornavariaspag(); return false"><< </a>
							<a href="" class="colorir menupag" style="font-size: 20px; text-decoration: none; margin-right: 50px" onclick="retornapag(); return false"> < </a>
							<?php
								$k = $pag;						//definição da pagina atual será exibida 
		
								$kleft = $k - 5;              //definição de limite de numeros a esquerda
								if ($kleft < 1)                 //se for menor que 0, vai apenas até a primeira pagina 
								{
									$kleft = 1;
								}							
								while ($kleft < $k)				//exibição dos numeros a esquerda da pagina atual
								{
									echo "<a href='noticias.php?pagina=".$kleft."' class='colorir menupag' style='font-size: 14px; text-decoration: none'> ".$kleft." </a>";
									$kleft++;
								}
								
								
								
								$kright = $pag + 5;	//definição de limite de numeros a direita
								if ($kright > $lastpage)		//se for maior que o numero de resultados encontrados, vai apenas até a ultima pagina 
								{
									$kright = $lastpage;
								}
								echo "<a href='' class='colorir menupag' style='font-size: 18px; text-decoration: none' onclick='return false'> ".$k." </a>";	//exibição do numero da pagina atual
								$k++;
								while ($k <= $kright)			//exibição dos numeros a direita da pagina atual
								{
									echo "<a href='noticias.php?pagina=".$k."' class='colorir menupag' style='font-size: 14px; text-decoration: none'> ".$k." </a>";
									$k++;
								}
							?>							
							<a href="" class="colorir menupag" style="font-size: 20px; text-decoration: none; margin-left: 50px" onclick="avancapag(); return false"> > </a>	
							<a href="" class="colorir menupag" style="font-size: 20px; text-decoration: none; margin-left: 30px" onclick="avancavariaspag(); return false"> >> </a>							
							<a href="" class="colorir menupag" style="font-size: 20px; text-decoration: none; margin-left: 20px" onclick="ultimapag(); return false">>| </a>
							
							<script type="text/javascript">		
								function primeirapag()
								{
									<?php	
										$pag = 1;	
									?>		
									location.href = "noticias.php?pagina=<?php echo $pag;?>";
								}
								function avancapag()
								{
									<?php	
										if (isset($_GET['pagina']))
										{
											$pag = $_GET['pagina'];
										}else
										{
											$pag = 1;
										}
										$pag++;									
										if($pag > $lastpage)
										{
											$pag--;
										}
									?>		
									location.href = "noticias.php?pagina=<?php echo $pag;?>"		
								}
								function avancavariaspag()
								{
									<?php	
										if (isset($_GET['pagina']))
										{
											$pag = $_GET['pagina'];
										}else
										{
											$pag = 1;
										}
										$pag = $pag + 5;									
										if($pag > $lastpage)
										{
											$pag = $lastpage;
										}
									?>		
									location.href = "noticias.php?pagina=<?php echo $pag;?>"		
								}
								function retornapag()
								{ 
									<?php	
									
										if (isset($_GET['pagina']))
										{
											$pag = $_GET['pagina'];
										}else
										{
											$pag = 1;
										}	
										$pag--;
										if($pag < 1)
										{
											$pag++;
										}
									?>	
									location.href = "noticias.php?pagina=<?php echo $pag;?>"
								}
								function retornavariaspag()
								{
									<?php	
										if (isset($_GET['pagina']))
										{
											$pag = $_GET['pagina'];
										}else
										{
											$pag = 1;
										}
										$pag = $pag - 5;									
										if($pag < 1)
										{
											$pag = 1;
										}
									?>		
									location.href = "noticias.php?pagina=<?php echo $pag;?>"		
								}
								function ultimapag()
								{
									<?php	
										$pag = $lastpage;				
									?>	
									location.href = "noticias.php?pagina=<?php echo $pag;?>"
								}
							</script>
							</div>
						</div>
						</center>
				</div>
					
					
					
					<!-- bottom -->				
			
								
			<?php include "bthtml.php" ?>

<!-- Esteves Lima - estagiário LCP - 2015 -->