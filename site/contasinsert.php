		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <!-- Correção para caracteres especiais e acentuação    -->
		<?php include "tphtml.php" ?>
			
	
			
		<!-- top -->
				
				
				<div id="textocorpo">
					<h2  align="center" class="colorir">Adicionar Conta</h2>
					<hr width="100%" class="colorir" size="3px"><br>
					
					<?php	
						if (!(isset($_SESSION['idsession'])) or ($_SESSION['idsession'] != 1)) //Caso não seja administrador redireciona para a homepage
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
					
						if ((($_POST['usuario']) != null) and (($_POST['senha']) != null) and (($_POST['nome']) != null)) //verifica se foi inserido os valores para criar a conta
						{					
							$sql2 = "select usuario from contas where usuario = '".@mc_encrypt($_POST['usuario'], ENCRYPTION_KEY)."'";			//seleciona as colunas com os valores inseridos, para verificar se ja existe
							$r2 = mysql_query($sql2);						//executa o sql
							$l = mysql_num_rows($r2);				//verifica o numero de colunas encontradas
							if ($l!=0)		//caso seja diferente de 0
							{						//exibe mensagem de erro e retorna a pagina
									 echo "Usuário já existente: ".$_POST['usuario']."<br>

											<script>
												setTimeout(function()
												{
													location.href = history.go(-1);
												},5000);
											</script>
									";	
									unset($_POST);//desabilita a variavel post

							}else
							{		//caso o usuario ainda não exista, faz a inserção da conta
								$nick = ucwords($_POST['nome']);		//capitalização do nome	
								$nick = @mc_encrypt($nick, ENCRYPTION_KEY);			//criptografia das variaveis
								$_POST['usuario'] = @mc_encrypt($_POST['usuario'], ENCRYPTION_KEY);
								$_POST['senha'] = @mc_encrypt($_POST['senha'], ENCRYPTION_KEY);
								$sql = "insert into contas (id, usuario, senha, nome) values ( null, '".$_POST['usuario']."', '".$_POST['senha']."', '".$nick."')"; //insere os valores 
								$r = mysql_query($sql);		//executa o sql
								if ($r)		//caso tenha inserido
								{	
									
									mkdir("plugins/responsive_filemanager/uploads/".ucwords($_POST['nome'])) or die("ocorreu um erro durante a criação da pasta de usuário");
									echo "	Adicionado com Sucesso<br>
									
											
											Usuario: ".@mc_decrypt($_POST['usuario'], ENCRYPTION_KEY)."<br>
											Senha: ".@mc_decrypt($_POST['senha'], ENCRYPTION_KEY)."<br>
											Nome: ".@mc_decrypt($nick, ENCRYPTION_KEY)."<br>
											<script>
												setTimeout(function()
												{
													location.href = 'adminpage.php';
												},5000);
											</script>
										";

								}else
								{		//caso tenha ocorrido um erro, exibe mensagem e retorna a pagina
									echo "	Ocorreu um erro durante a inclusão<br>
											
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
						{			//caso não tenha inserido os dados para ciração de conta, exibe mensagem de erro e retorna a pagina
							
							  echo "Insira o usuário, senha e nome
											
											<script>
												setTimeout(function()
												{
													location.href = history.go(-1);
												},5000);
											</script>
									";
									
									
						}
						
					
					
					

						
					?>
					<?php mysql_close($bd);;?>

					<!-- bottom -->				
					</div>
					<?php include "bthtml.php"; ?>

<!-- Esteves Lima - estagiário LCP - 2015 -->