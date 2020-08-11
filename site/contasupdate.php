		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <!-- Correção para caracteres especiais e acentuação    -->
		<?php include "tphtml.php" ?>
		

		<!-- top -->
				
				
				<div id="textocorpo">
					<h2  align="center" class="colorir">Atualizar Conta</h2>
					<hr width="100%" class="colorir" size="3px"><br>
					
					<?php	
						if (!(isset($_SESSION['idsession'])) or ($_SESSION['idsession'] != 1))	 //Caso não seja administrador redireciona para a homepage
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
					
						if ((($_POST['usuario']) != null) and (($_POST['senha']) != null) and (($_POST['nome']) != null))	//verifica se os dados para atualizar foram inseridos
						{					
							$sql = "update contas set usuario = '".@mc_encrypt($_POST['usuario'], ENCRYPTION_KEY)."', senha = '".@mc_encrypt($_POST['senha'], ENCRYPTION_KEY)."', nome = '".@mc_encrypt($_POST['nome'], ENCRYPTION_KEY)."' where id = '".$_POST['id']."'";	//atualiza os valores da conta
							$r = mysql_query($sql);		//executa o sql
							if ($r)					//caso tenha sido alterado
							{			//exibe mensagem e redireciona a pagina
								echo "	Atualizado com Sucesso<br><br>
								
										Usuário: ".$_POST['usuario']."<br>
										Senha: ".$_POST['senha']."<br>
										Nickname: ".$_POST['nome']."<br>
										Id: ".$_POST['id']."<br>

										<script>
											setTimeout(function()
											{
												location.href = 'adminpage.php';
											},5000);
										</script>
									";
								
							}else
							{		//caso tenha ocorrido um erro, exibe mensagem e retorna a pagina
								echo "	Ocorreu um erro durante a atualização<br>
										
										Desculpe o Transtorno
										<script>
											setTimeout(function()
											{
												history.go(-1);
											},5000);
										</script>
									 ";
							}
						}else
						{			//caso não tenha inserido os dados, exibe mensagem de erro e retorna a pagina
							echo "Forneça todos os dados para atualizar
										Usuário: ".$_POST['usuario']."<br>
										Senha: ".$_POST['senha']."<br>
										Nickname: ".$_POST['nome']."<br>
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