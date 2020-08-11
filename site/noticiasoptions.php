		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <!-- Correção para caracteres especiais e acentuação    -->
		<?php include "tphtml.php" ?>
		

		<!-- top -->
				
				<div id="textocorpo">
					<h2  align="center" class="colorir">Opções de Notícia</h2>
					<hr width="100%" class="colorir" size="3px"><br>
					
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
					
					
					
						include "connect.php";
					
						if (($_POST['titulo']) != null)		//verifica se foi inserido o titulo
						{		
							$sql2 = "select titulo,id from noticias where titulo = '".$_POST['titulo']."'";		//seleciona a noticia
							$r2 = mysql_query($sql2);						//executa sql
							$l2 = mysql_num_rows($r2);					//verifica o numero de colunas afetadas
							if ($l2!=0)						//caso exista(<>0)
							{	
								$l = mysql_fetch_assoc($r2);		//armazena os dados da coluna
								echo "			
										<span style='font-size: 20px'>Titulo:  </span><span style='font-size: 20px' class='colorir' >".$_POST['titulo']."</span><br><br><br>
										<div class='anymenu publicar' style='cursor: pointer; border: 1px solid #efebde; width: 20%; height: 8%; margin-top: 5px' onclick=\"location.href = 'noticiasalter.php?id=".$l['id']."'\"><a href='noticiasalter.php?id=".$l['id']."' class='colorir atualizarnoticia'>Atualizar Notícia</a></div>
										<div class='anymenu publicar' style='cursor: pointer; border: 1px solid #efebde; width: 20%; height: 8%; margin-top: 5px' onclick=\" if(confirm('Deseja realmente excluir?')){ location.href = 'noticiasdelete.php?titulo=".$_POST['titulo']."'}else{return false;}\"><a href='noticiasdelete.php?titulo=".$_POST['titulo']."' class='colorir'>Excluir Notícia</div>
								";

							}else
							{		//caso não encontre o titulo, exibe mensagem e retorna a pagina
								echo "<center>titulo inexistente<center>
											<center>Titulo: ".$_POST['titulo']."</center>

											<script>
												setTimeout(function()
												{
													location.href = history.go(-1);
												},3000);
											</script>
									";	
									unset($_POST);		//desabilita a variavel POST
							}
						}else
						{			//caso não, exibe mensagem e retorna a pagina
							echo "<center>Insira o título<center>
									".$_POST['titulo']."
										<script>
											setTimeout(function()
											{
												location.href = history.go(-1);
											},3000);
										</script>
								 ";				
							unset($_POST);
						}	
					?>
					<?php mysql_close($bd);?>

					<!-- bottom -->				
					</div>
					<?php include "bthtml.php" ?>

<!-- Esteves Lima - estagiário LCP - 2015 -->