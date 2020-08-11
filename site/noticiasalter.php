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
				
				
				
				<div id="textocorpo">
					<h2  align="center" class="colorir">Alterar Notícia</h2>
					<hr width="100%" class="colorir" size="3px"><br>
					
				<div id="conteudonoticia">
					<?php
						include "connect.php";
						
						$sql = "select * from noticias where id = '".$_GET['id']."'"; // procura a noticia que se deseja alterar
						$r = mysql_query($sql);					//executa o sql
						$l = mysql_fetch_assoc($r);				//pega os valores da noticia encontrada e coloca nos inputs do formulario e plugin das noticias
				?>
					
					<?php
							if (!(isset($_SESSION['usuariosession'])) or $l['autor'] != (@mc_decrypt($_SESSION['usuariosession'], ENCRYPTION_KEY)) and (!(isset($_SESSION['idsession'])) or ($_SESSION['idsession'] != 1)))	//caso seja administrador ou autor da noticia, exibe o botão de edição da noticia
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
						
						<form action="noticiasupdate.php" id="formnoticia" method="post" accept-charset="UTF-8">
						<div>
						<table align="left" style="position: relative; top: 10%">
							<tr>
								<td><input type="hidden" name="origem" value="<?php if (getenv('HTTP_X_FORWARDED_FOR')) {
																							$pipaddress = getenv('HTTP_X_FORWARDED_FOR');
																							$ipaddress = getenv('REMOTE_ADDR');
																							echo "$pipaddress";
																						} else {
																							$ipaddress = getenv('REMOTE_ADDR');
																							echo "$ipaddress";
																						}?>" readonly></td>
							</tr>
							<tr>
								<td><input type="hidden" name="id" value="<?php echo $l['id']; ?>"></td>
							</tr>
							<tr>
				
								<td><input type="hidden" name="autor" value="<?php echo $l['autor']; ?>" readonly></td>
							</tr>
							<tr>
								<td><input type="hidden" name="publicacao"  value="<?php  $sql2 = "select now() as datetime;";  $r2 = mysql_query($sql2);   $l2 = mysql_fetch_array($r2);   echo $l2['datetime'];   ?>" readonly></td>
							</tr>
							<tr>
								<td>Assunto:</td>
								<td><input type="text" name="assunto" id="assunto" value="<?php echo $l['assunto']; ?>" maxlength="50"></td>
							</tr>
							<tr>					
								<td><input type="hidden" name="titulo" id="titulo" value="<?php echo $l['titulo']; ?>" maxlength="100" readonly></td>
							</tr>
							</table>
						</div><br><br><br><br><br><br>
						<div >
							<textarea class="textplugin" id="conteudo" name="conteudo"><?php echo $l['conteudo']; ?></textarea>	
						</div>	
						<?php		
						if (($_SESSION['usuariosession'] != null) and ($_SESSION['senhasession'] != null))
						{
							echo"<br><div class='publicar' style='position: relative; left: 90%;'><input maxlength='60' style='width: 100px' type='submit' value='publicar'></div>";
						}
					?>
					</form>
					
					<?php mysql_close($bd);?>
				</div>
				</div>
					
				<!-- bottom -->				
				
					<?php include "bthtml.php" ?>

<!-- Esteves Lima - estagiário LCP - 2015 -->