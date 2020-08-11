		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <!-- Correção para caracteres especiais e acentuação    -->
		<?php include "tphtml.php" ?>
		

		<!-- top -->
				
				<div id="textocorpo">
					<h2  align="center" class="colorir">Opções de Conta</h2>
					<hr width="100%" class="colorir" size="3px"><br>
					
					<?php	
						
							if (!(isset($_SESSION['idsession'])) or ($_SESSION['idsession'] != 1))		 //Caso não seja administrador redireciona para a homepage
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
					
						if (($_POST['nome']) != null)		//verifica se foi inserido o nome da conta
						{		
							$_POST['nome'] = @mc_encrypt($_POST['nome'], ENCRYPTION_KEY);
							$sql2 = "select * from contas where nome = '".$_POST['nome']."'";	//seleciona o nome
							$r2 = mysql_query($sql2);							//executa o sql
							$l2 = mysql_num_rows($r2);					//armazena o numero de colunas afetadas
							if ($l2!=0)		//caso o numero de colunas não seja nula
							{	
								$l = mysql_fetch_assoc($r2);		//armazena o valor da coluna e exibe com os botões de alteração ou exclusão
								echo "
										<span style='font-size: 20px'>Usuário:  </span><span style='font-size: 20px' class='colorir' >".@mc_decrypt($l['usuario'], ENCRYPTION_KEY)."</span><br><br><br>
										<span style='font-size: 20px'>Nickname:  </span><span style='font-size: 20px' class='colorir' >".@mc_decrypt($l['nome'], ENCRYPTION_KEY)."</span><br><br><br>
										<div class='anymenu publicar' style='cursor: pointer; border: 1px solid #efebde; width: 20%; height: 8%; margin-top: 5px' onclick=\"location.href = 'contasalter.php?id=".$l['id']."'\"><a href='contasalter.php?id=".$l['id']."' class='colorir atualizarnoticia'>Atualizar Conta</a></div>
										<div class='anymenu publicar' style='cursor: pointer; border: 1px solid #efebde; width: 20%; height: 8%; margin-top: 5px' onclick=\" if(confirm('Deseja realmente excluir?')){ location.href = 'contasdelete.php?id=".$l['id']."'}else{return false;}\"><a href='contasdelete.php?id=".$l['id']."' class='colorir'>Excluir Conta</a></div>
								";

							}else
							{			//caso o nome não exista, exibe mensagem de erro e retorna a pagina
								echo "<center>conta inexistente<center>
											<center>nome: ". @mc_decrypt($_POST['nome'], ENCRYPTION_KEY)."</center>

											<script>
												setTimeout(function()
												{
													location.href = history.go(-1);
												},3000);
											</script>
									";	
									unset($_POST);
							}
						}else
						{			//caso não tenha inserido o nickmane, exibe mensagem de erro e retorna a pagina
							echo "<center>Insira o nome<center>
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