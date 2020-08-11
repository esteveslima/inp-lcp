<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>			
		<!--[if IE]>
			<script type="text/javascript">
				alert("Mantenha seu navegador atualizado");
				location.href="avisonavegador.php";
			</script>
		<![endif]--> 	

		
		<title>LCP - INPE</title>	
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js" type="text/javascript" ></script>		<!-- inclusão da biblioteca jquery-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js" type="text/javascript" ></script>		<!-- inclusão da biblioteca jquery para cookies -->
		<script src="plugins/queryloader2/queryloader2.min.js" type="text/javascript"></script>		<!--inclusão do plugin preloader-->	
		<link href="mainstyle.css" rel="stylesheet" type="text/css" >	 <!--inclusão do estilo principal das páginas-->
		<script src="mainscript.js" type="text/javascript"></script> 	<!--inclusão do script principal das páginas-->
		<script src="plugins/smoothscroll.js" type="text/javascript"></script>	 <!--inclusão do plugin smoothscroll-->

	</head>
	<link rel="icon" type="image/png" href="imagens/favicon.png">
	<body ondragstart="return false;" ondrop="return false;">
		<script type="text/javascript">
				qLoverlay = $("").css(
				{
					width: "100%",
					height: "100%",
					backgroundColor: qLoptions.backgroundColor,
					backgroundPosition: "fixed",
					position: "fixed",
					zIndex: 666999,
					top: 0,
					left: 0
				}).appendTo("html");
				to
				qLoverlay = $("#qLoverlay");	
			$(document).ready(function(){
				$('input[type=range]').val($.cookie('tamanhofonte'));
			});
		</script>
		<div id="qLoverlay"></div>
		<?php	
			$useragent=$_SERVER['HTTP_USER_AGENT'];	
			if(!preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))			
			{
				echo "	<div class='bg'>
						<div id='bgbackground' onselect='return false'></div>
						</div>
						<div id='earth'></div>
						<div id='satelite'></div>";
			}else
			{
				echo "	<script type='text/javascript'>
							$('body').css('background','black');
						</script>";
			}
		?>
		<div id="geral">
			
			<div id="topo" >
				<div id="barra-brasil" style="background:#7F7F7F; height: 20px; padding:0 0 0 10px;display:block;-webkit-border-top-left-radius: 7px !important;-webkit-border-top-right-radius: 7px !important;-moz-border-top-left-radius: 7px !important;-moz-border-top-right-radius: 7px !important;border-top-left-radius: 7px !important;border-top-right-radius: 7px !important;"> 
					<ul id="menu-barra-temp" style="list-style:none;">
						<li style="display:inline; float:left;padding-right:10px; margin-right:10px; border-right:1px solid #EDEDED"><a target="_blank" href="http://brasil.gov.br" style="font-family:sans,sans-serif; text-decoration:none; color:white;">Portal do Governo Brasileiro</a></li>
						<li><a style="font-family:sans,sans-serif; text-decoration:none; color:white;" href="http://epwg.governoeletronico.gov.br/barra/atualize.html">Atualize sua Barra de Governo</a></li>
					</ul>
				</div>
				<img alt="Image" src="imagens/LogoLCP.png" style="position: absolute; top: 50%; margin-top: -89px; margin-left: 30px">
				
				<div style="position: absolute; bottom: 7%; width: 100%; margin-left: 50px">
					<span style="font-size: 25px; color: white" ><i><b>Laboratório Associado de Combustão e Propulsão</b></i></span>
				</div>
				
				<!--		####################################		-->
				<div id="divloginform">	
					
					<?php 
							include "login.php";				
					?>
					
				</div>	
				<!--		#####################################		-->
				
				
							
			</div>
			<div id="menu" >
				<table>
					<tr>
						<td style="cursor: pointer" id="home" onclick="location.href='index.php' "><a href="index.php" ><img alt="Image" src="imagens/home2.png"></a></td>
						<td style="cursor: default" onclick="location.href='historia.php'"><a href="historia.php">História</a></td>
						<td><a href="" style="cursor: default" onclick="return false">Linhas de Pesquisa</a>
							<table class="sub" >
								<tr><td style="cursor: pointer" onclick="location.href='combustao.php' "><a href="combustao.php">Combustão</a></td></tr>
								<tr><td style="cursor: pointer" onclick="location.href='catalise.php' "><a href="catalise.php">Catálise</a></td></tr>
								<tr><td style="cursor: pointer; border: none !important" onclick="location.href='propulsao.php' "><a href="propulsao.php">Propulsão</a></td></tr>
							</table>
						</td>					
						<td style="cursor: default"><a href="posgrad.php">Pós-graduação</a>
							<table class="sub" >
								<tr><td style="cursor: pointer" onclick="location.href='selecaobolsasphp' "><a href="selecaobolsas.php">Seleção / Bolsas</a></td></tr>
								<tr><td style="cursor: pointer" onclick="location.href='inscricaomatriculaphp' "><a href="inscricaomatricula.php">Inscrições / Matrículas</a></td></tr>
								<tr><td style="cursor: pointer" onclick="location.href='calendarioregimentosphp' "><a href="calendarioregimentos.php">Calendário / Regimentos</a></td></tr>
								<tr><td style="cursor: pointer" onclick="location.href='disciplinaementasphp' "><a href="disciplinaementas.php">Disciplinas / Ementas</a></td></tr>
								<tr><td style="cursor: pointer" onclick="location.href='mestrado.php' "><a href="mestrado.php">Mestrado</a></td></tr>
								<tr><td style="cursor: pointer" onclick="location.href='doutorado.php' "><a href="doutorado.php">Doutorado</a></td></tr>
								<tr><td style="cursor: pointer" onclick="location.href='posdoutorado.php' "><a href="posdoutorado.php">Pós-doutorado</a></td></tr>
								<tr><td style="cursor: pointer" onclick="location.href='docentes.php' "><a href="docentes.php">Docentes</a></td></tr>
								<tr><td style="cursor: pointer" onclick="location.href='discentes.php' "><a href="discentes.php">Discentes</a></td></tr>
								<tr><td style="cursor: pointer; border: none !important; " onclick="location.href='reembolso.php' "><a href="reembolso.php">Reembolso (CAPES/PROAP)</a></td></tr>
							</table>
						</td>
						<td><a href="" style="cursor: default" onclick="return false">Equipe</a>
							<table class="sub" >
								<tr><td style="cursor: pointer" onclick="location.href='equipechefia.php' "><a href="equipechefia.php">Chefia</a></td></tr>
								<tr><td style="cursor: pointer" onclick="location.href='equipepesquisadores.php' "><a href="equipepesquisadores.php">Pesquisadores</a></td></tr>
								<tr><td style="cursor: pointer" onclick="location.href='equipetecnologistas.php' "><a href="equipetecnologistas.php">Tecnologistas</a></td></tr>
								<tr><td style="cursor: pointer" onclick="location.href='equipeapoio.php' "><a href="equipeapoio.php">Apoio</a></td></tr>
								<tr><td style="cursor: pointer; border: none !important" onclick="location.href='equipebolsistas.php' "><a href="equipebolsistas.php">Bolsistas</a></td></tr>
							</table>	
						</td>
						<td style="cursor: default"><a href="biblioteca.php">Biblioteca</a>
							<table class="sub" >
								<tr><td style="cursor: pointer" onclick="location.href='biblio_public.php' "><a href="biblio_public.php">Publicações</a></td></tr>
								<tr><td style="cursor: pointer" onclick="location.href='biblio_servicos.php' "><a href="biblio_servicos.php">Serviços Oferecidos</a></td></tr>
								<tr><td style="cursor: pointer; border: none !important" onclick="location.href='biblio_sitesinteressantes.php' "><a href="biblio_sitesinteressantes.php">Sites Interessantes</a></td></tr>
							</table>
						</td>
						<td ><a href="" style="cursor: default" onclick="return false">Instalações</a>
							<table class="sub" >
								<tr><td style="cursor: pointer" onclick="location.href='btsa.php' "><a href="btsa.php">BTSA</a></td></tr>
								<tr><td style="cursor: pointer" onclick="location.href='btca.php' "><a href="btca.php">BTCA</a></td></tr>
								<tr><td style="cursor: pointer" onclick="location.href='instalacoes_labquim.php' "><a href="instalacoes_labquim.php">Laboratório de Química</a></td></tr>
								<tr><td style="cursor: pointer" onclick="location.href='lapl.php' "><a href="lapl.php">LAPL</a></td></tr>
								<tr><td style="cursor: pointer" onclick="location.href='lcpl.php' "><a href="lcpl.php">LCPL</a></td></tr>
								<tr><td style="cursor: pointer" onclick="location.href='lpel.php' "><a href="lpel.php">LPEL</a></td></tr>
								<tr><td style="cursor: pointer" onclick="location.href='instalacoes_oficinamec.php' "><a href="instalacoes_oficinamec.php">Oficina Mecânica</a></td></tr>
								<tr><td style="cursor: pointer; border: none !important" onclick="location.href='instalacoes_predioensaios.php' "><a href="instalacoes_predioensaios.php">Prédio de Ensaios</a></td></tr>
							</table>
						</td>
						<td style="cursor: default" onclick="location.href='linksuteis.php'"><a href="linksuteis.php" >Links Úteis</a></td>
						<td style="cursor: pointer; border-right: none !important" onclick="location.href='noticias.php'"><a href="noticias.php">Notícias</a></td>
					</tr>
				</table>
			</div>
			<div id="corpo">
				<br>
				<div id="leftcorpo"></div>
				<div id="backtotop">
					<img alt="Image" src="imagens/backtotop.png">
				</div>
				<div id="contentleft">	
					<div id="noticias">
						<center><strong class="colorir" style="font-size: 12px; position: relative; top: 10px"><a href="noticias.php" class="colorir">Últimas Notícias</a></strong></center>
						<br>
						<hr size="1px" width="85%" class="colorir" >
						<div id="contentnoticias"> 
							<?php
											/*include "connect.php";
										
											$sql = "select * from noticias order by publicacao desc limit 20";	//modificar para ordeanr por data do servidor
											$r = mysql_query($sql);	
											$x = 0;
											while ($l = mysql_fetch_assoc($r))
											{
													echo"	
															<div class='rownoticia' style='cursor: pointer; border: 1px solid #000' onclick=\"location.href = 'noticiashow.php?id=".$l['id']."'\">
																<div class='coltitle' style='font-size: 15px'><strong>".$l['titulo']."</strong><br>
																<strong style='font-size: 10px'>".$l['assunto']."</strong></div>
															</div>
														";
											}
											if ((mysql_num_rows($r))==0)
											{
												echo "<center style='position: relative; top: 50%; font-size: 100%'>Nenhuma notícia encontrada!</center>";
											}	*/
										?>
									<?php// mysql_close($bd)?>
						</div>
					</div>
					
					<div id="contato">
						<center style="position: relative; margin-top: -45px; top: 50%">
						<a href="mailto:secretaria@lcp.inpe.br"><img alt="Image" src="imagens/iconemail.png" style="position: relative; top: 4px "></a>&nbsp;<a href="mailto:secretaria@lcp.inpe.br" class="colorir" style="font-size: 12px; color: white !important">secretaria@lcp.inpe.br</a>
						<br><img alt="Image" src="imagens/iconphone.png" style="position: relative; top: 8px ">&nbsp;<span style="font-size: 12px; color: white">+55(12)3186-9217</span>
						<br><a href="http://webmail.lcp.inpe.br/" target="_blank"><img alt="Image" src="imagens/arroba.png" style="position: relative; top: 8px "></a>&nbsp;<a href="http://webmail.lcp.inpe.br/" target="_blank" class="colorir" style="font-size: 12px; color: white !important">Webmail</a>
						</center>
					</div>
				</div>
				
				<div id="controlefonte" style="width: 200px; z-index = 999 ">	
					<center><span style="font-size: 15px">a&nbsp;</span>
					<input type="range" name="tamanhofonte" min="0" max="100" id="tamanhofonte" value=""  oninput="$('#textocorpo').css('font-size',((1.5*$(this).val()) + 25)+'%')" onchange="$.cookie('tamanhofonte',$(this).val(),{expires:30});">					
					<span style="font-size: 25px">&nbsp;A</span></center>
					<div id="defaultrange" style="z-index: -1; position: absolute; width: 3px; height: 30px; top: 2px; left:46.5%; background: white"></div>	
					<script type="text/javascript">
						$(document).ready(function(){
							$("#tamanhofonte").val($.cookie('tamanhofonte'));
							$('#textocorpo').css('font-size',((1.5*$("#tamanhofonte").val()) + 25)+'%')
							if (($.cookie("efeitos") == 'on'))	
							{
								$("#efeitos").attr("checked",true);
							}else
							{
								$("#efeitos").attr("checked",false);
							}
							

						});
					</script>
				</div>
				<div >
					<input type="checkbox" id="efeitos" style="z-index: 999; position: absolute; right: 10px; top: 10px" value="efeitos" name="efeitos" onchange="if ($(this).is(':checked'))	{$.cookie('efeitos','on',{expires:30});	}else{	$.cookie('efeitos','off',{expires:30});	}	window.location.reload();">
					<!--<br><span style="font-size: 10px; text-align: justify ; word-wrap: break-word; width: 5px ; position: absolute; right: 18px; top: 25px">efeitos</span>-->
				</div>
