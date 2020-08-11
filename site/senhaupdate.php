		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <!-- Correção para caracteres especiais e acentuação    -->
		<?php include "tphtml.php" ?>
		

		<!-- top -->
				
				
				<div id="textocorpo">
					<h2  align="center" class="colorir">Atualizar Senha</h2>
					<hr width="100%" class="colorir" size="3px"><br>
					
					<?php		
							if (!(isset($_SESSION['idsession'])))	 //Caso não tenha session(esteja logado) redireciona para homepage
									{
										echo "	<script type='text/javascript'>											
														location.href = 'index.php';													
												</script>";
									}	
					
						include "connect.php";
					
						if ((($_POST['senhaatual']) != null) and (($_POST['senhanova1']) != null) and (($_POST['senhanova2']) != null)) //verifica se foi inserido as 3 senhas para alteração
						{					
							$sql2 = "select * from contas where senha = '".@mc_encrypt($_POST['senhaatual'], ENCRYPTION_KEY)."' and id = '".$_SESSION['idsession']."'";		//seleciona a senha atual e seu respectivo id da conta
							$r2 = mysql_query($sql2);			//executa o sql
							$l2 = mysql_num_rows($r2);				//armazena o numero de colunas afetadas
							if ($l2 != 0)		//caso seja diferente de 0(senha atual correta)
							{
								if (($_POST['senhanova1']) == ($_POST['senhanova2'])) //verifica se não houve erro durante a confirmação da senha
								{
											//caso as novas senhas sejam iguais
									$sql = "update contas set senha = '".@mc_encrypt($_POST['senhanova1'], ENCRYPTION_KEY)."' where id = '".$_SESSION['idsession']."'"; //atualiza o valor da senha
									$r = mysql_query($sql);		//executa osql
									
									if ($r)		//caso tenha sido alterado
									{
											//exibe mensagem, faz logout e retorna a pagina
										echo "	<center>Atualizado com Sucesso</center><br>
												<script>
													$('#divloginform').load('sessiondestroy.php');
													$('#divloginform').load('login.php');
													setTimeout(function()
													{
														location.href = 'index.php';
													},5000);
												</script>
											";
										
										
									}else
									{		//caso ocorra algum erro, exibe mensagem e retorna a pagina
										echo "	Ocorreu um erro durante a atualização de senha<br>
												
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
								{		//caso erre a confirmação de senha, exibe mensagem e retorna a pagina
									echo "Novas senhas não coincidem
										<script>
											setTimeout(function()
											{
												history.go(-1);
											},5000);
										</script>
								 ";						
								}
							}else
							{		//caso erre a senha atual, exibe mensagem e retorna a pagina
								echo "Senha atual incorreta
										<script>
											setTimeout(function()
											{
												history.go(-1);
											},5000);
										</script>";
							}
						}else
						{		//caso não tenha sido inserido as senhas, exieb mensagem de erro e retorna a pagina
							echo "Forneça todos os dados para atualizar a senha
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