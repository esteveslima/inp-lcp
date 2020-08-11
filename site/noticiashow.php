		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <!-- Correção para caracteres especiais e acentuação    -->
		
		<style type="text/css">
			#noticiatitle{
				text-overflow: break-word;
			}
			#conteudonoticia
			{
				align: justify;
				word-wrap: break-word;				
			}
			
		</style>
		<script type="text/javascript">
			$(document).ready(function(){
				if ($("table tr td").css("border-color") == "black")||($("table tr td").css("border-color") == "#fff")
				{
					$("table tr td").css("border-color","white");
				}
			});
		</script>
		<?php include "tphtml.php" ?>
					<!-- top -->	
				
				
				
				<div id="textocorpo">
					<h2  align="center" class="colorir">Notícia</h2>
					<hr width="100%" class="colorir" size="3px"><br>
					
				<div id="conteudonoticia">
					<?php
						echo "	<script type='text/javascript'>
												$('.logout').click(function(){
													$('#divloginform').load('sessiondestroy.php');
													window.location.reload();
												})
												$('#formlogin').submit(function(){
													window.location.reload();
												});
											</script>";
					
					
						include "connect.php";
						
						$sql = "select * from noticias where id = '".$_GET['id']."'";		//procura a noticia selecionada
						$r = mysql_query($sql);			//executa o sql
						$l = mysql_fetch_assoc($r);			//resgata os valores da coluna encontrada
						if ($r)		//caso tenha sido encontrada, exibe a noticia
						{			
							$l['autor'] =@mc_encrypt($l['autor'], ENCRYPTION_KEY);		//criptografa o autor para comparar com as contas do banco
							$sql2 = "select nome from contas where usuario = '".$l['autor']."';";  //procura o nome do autor da noticias
							$r2 = mysql_query($sql2);	 	//executa o sql
							$l2 = mysql_fetch_assoc($r2);	//resgata os valores da coluna encontrada
							
							echo "
									<center id='noticiatitle' style='font-size: 150%'><strong>".$l['titulo']."</strong></center>
									<br>
									<u style='font-size: 80%; position: relative; left: 10px'>Publicado por: ".@mc_decrypt($l2['nome'], ENCRYPTION_KEY)."</u><br>
									<u style='font-size: 80%; position: relative; left: 10px'>Assunto: ".$l['assunto']."</u><br>
									<u style='font-size: 80%; position: relative; left: 10px'>Atualizado em: ".date('d/m/Y H:i', strtotime($l['publicacao']))."</u><br><br>
																	
							";
							echo "<hr width='100%' class='colorir' size='1px'><br>";
							echo $l['conteudo'];
							
							
							echo "	<div class='anymenu publicar' style='cursor: pointer; position: absolute !important; left: 0% !important; top: -20px !important; visibility: hidden'  onclick=\"location.href = 'noticiasalter.php?id=".$l['id']."'\"><a href='noticiasalter.php?id=".$l['id']."' class='colorir'>Editar Notícia</a></div>";
							if (((isset($_SESSION['usuariosession'])) and ($l['autor'] == $_SESSION['usuariosession']))  or ((isset($_SESSION['idsession'])) and ($_SESSION['idsession']==1)))	//caso seja administrador ou autor da noticia, exibe o botão de edição da noticia
							{
									echo "	<script type='text/javascript'>
												$('.publicar').css('visibility','visible');
											</script>";
							}	
							unset($_GET); //desabilita a variavel GET
						}else
						{		//caso, por algum motivo, não encontre a noticia, exibe a mensagem de erro
							echo "<center style='font-size: 200%; position: relative; top: 50%;'> Notícia não encontrada </center>";					
							unset($_GET);
						}		
						
	
					?>
					<?php mysql_close($bd);?>
					
				</div>
				</div>
				<script type="text/javascript">
					$(document).ready(function(){
						$("a").addClass("colorir");
						turnoff();
					});
				</script>
				<!-- bottom -->				
				
					<?php include "bthtml.php" ?>

<!-- Esteves Lima - estagiário LCP - 2015 -->