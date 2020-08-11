		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <!-- Correção para caracteres especiais e acentuação    -->
		<?php include "tphtml.php" ?>
		
		<script type="text/javascript" src="plugins/tinymce/tinymce.min.js"></script>	<!-- inclusão do plugin de texto -->
		<script type="text/javascript">					<!-- possibilidade de customizar o plugin, checar o site http://www.tinymce.com/-->
		tinymce.init({
			selector: "textarea",
			language: 'pt_BR',
			entity_encoding : "raw",			


			
			
			// ===========================================
			// Inclue o plugin
			// ===========================================
				
			plugins: [
				"advlist autolink link image lists charmap print preview hr anchor pagebreak",
				"searchreplace wordcount visualblocks code fullscreen textcolor",
				"insertdatetime media table contextmenu paste responsivefilemanager"
			],
			paste_retain_style_properties: "all",	//reter a formatação na colagem
			// ===========================================
			// Coloca os botões na barra de ferramentas
			// ===========================================
				
			toolbar: "insertfile undo redo | styleselect | bold italic | forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages | responsivefilemanager",
				
			external_filemanager_path:"/lcp/site/plugins/responsive_filemanager/filemanager/",				//inclusão do plugin filemanager
			filemanager_title:"Upload de arquivos (máx. 4MB)" ,
			external_plugins: { "filemanager": "/lcp/site/plugins/responsive_filemanager/filemanager/plugin.min.js"}
				
		});
		</script>		
		
		<style type="text/css">
			.textplugin
			{
				height: 50%;
			}
		</style>
		
		

		<!-- top -->
				
				<?php
							if (!(isset($_SESSION['idsession'])))	 //Caso não tenha session(esteja logado) redireciona para homepage
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
					?>
				
				<div id="textocorpo">
					<h2  align="center" class="colorir">Publicar Notícia</h2>
					<hr width="100%" class="colorir" size="3px"><br>
					
					
					<form action="noticiasinsert.php" id="formdanoticia" method="post" accept-charset="UTF-8">
						<div>
						<table align="left" style="position: relative; top: 10%">
							<tr>
								<td></td>
								<td><input type="hidden" name="origem" value="<?php if (getenv('HTTP_X_FORWARDED_FOR')) {					//verificação do tipo de origem e armazenamento automatico
																							$pipaddress = getenv('HTTP_X_FORWARDED_FOR');
																							$ipaddress = getenv('REMOTE_ADDR');
																							$pipaddress = ip2long($pipaddress);
																							echo "$pipaddress";
																						} else {
																							$ipaddress = getenv('REMOTE_ADDR');
																							$ipaddress = ip2long($ipaddress);
																							echo "$ipaddress";
																						}?>" readonly></td>
							</tr>
							<tr>
								<td></td>
								<td><input type="hidden" name="autor" value="<?php echo $_SESSION['usuariosession']; ?>" readonly></td>
							</tr>
							<tr>
								<td></td>
								<td><input type="hidden" name="publicacao" value="<?php  $sql = "select now() as datetime;";  $r = mysql_query($sql);   $l = mysql_fetch_array($r);   echo $l['datetime'];   ?>" readonly></td>
							</tr>
							<tr>
								<td>Assunto:</td>
								<td><input type="text" name="assunto" maxlength="50"></td>
							</tr>
							<tr>
								<td>Titulo:</td>
								<td><input type="text" name="titulo" onchange="alert($(this).val();)" id="titulo" maxlength="100"></td>
							</tr>
							</table>
						</div><br><br><br><br><br><br>
						<div >
							<textarea class="textplugin" id="conteudo" name="conteudo"></textarea>	
						</div>	
						<?php		
						if (($_SESSION['usuariosession'] != null) and ($_SESSION['senhasession'] != null))
						{
							echo"<br><div class='publicar' style='position: relative; left: 90%;'><input style='width: 100px' type='submit' value='publicar'></div>";
							
							echo"<script type='text/javascript'>
									$('#formdanoticia').submit(function(){
										if($('#titulo').val() == '')
										{
											alert('Insira o título');
											return false;
										}
										
									});
								</script>";
						}
						
					?>
					</form>

					<!-- bottom -->				
					</div>
					<?php include "bthtml.php" ?>

<!-- Esteves Lima - estagiário LCP - 2015 -->