		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <!-- Correção para caracteres especiais e acentuação    -->
		
						
			
		<?php include "tphtml.php" ?>
		
		

		<style type="text/css"><!--Estilo personalizado de pagina especifica-->		
			
			#slideshow
			{
				position: relative;					
				width: 550px;
				height: 100px;
			}
			#slide
			{
				background-color: rgba(0,0,0,1);			
				position: absolute;
				left: 50%;
				margin-left: -160px;
				top: 10px;	
				height: 200px;
				width: 550px;
				z-index: 1;
				top: 200px;
																
				-webkit-border-bottom-left-radius: 7px;  
				-moz-border-bottom-left-radius: 7px;  
				border-bottom-left-radius: 7px;
				-webkit-border-bottom-right-radius: 7px;  
				-moz-border-bottom-right-radius: 7px;  
				border-bottom-right-radius: 7px;
			}
			#textoslide
			{
				color: white;
				position: relative;
				top: -8px;
				font-family: verdana;
			}
			#textoslide:hover
			{
				font-size: 100%;	<!-- correção do link do slide que não pode mudar -->
			}
		</style>
					
		<script type="text/javascript">
			$(document).ready(function(){	
						
						image = ['imagens/lcp.jpg','imagens/btca.jpg','imagens/btsa.jpg','imagens/analisepropelentes.jpg','imagens/catalisepropelentes.jpg','imagens/predioensaio.jpg'];	
						texto = ['Bem-vindo ao Laboratório de Combustão e Propulsão','BTCA - Banco de Testes em Condições Atmosféricas','BTSA - Banco de Testes com Simulação de Altitudes','Laboratório de Análise de Propelentes','Laboratório de Catálise e Propelentes Limpos','Prédio de Ensaios'];
						link = ['historia.php','btca.php','btsa.php','lapl.php','lcpl.php','instalacoes_predioensaios.php'];
						
						// Definição das imagens,textos e links do slideshow
						
						
						ponteiro = 0;			
					function imagechange()
						{				
							if (ponteiro > 5)								//se maior que numero de imagens volta ao início
							{
								ponteiro = 0 ;
							}					
							document.getElementById("slideshow").src = image[ponteiro];									//define imagem dinâmica
							document.getElementById("textoslide").innerHTML = texto[ponteiro];  						 //define texto dinâmico
							document.getElementById("textoslide").href = link[ponteiro];                                 //define link dinâmico
							document.getElementById("linkslide").href = link[ponteiro];                                 //define link dinâmico
							ponteiro++;										// atualiza imagem através do ponteiro	
							$("#textoslide").css("display","none");				//o conteudo deve começar com display none para iniciar o fade
							$("#slideshow").css("display","none");				
							$("#slideshow,#textoslide").fadeIn(4000);			//fadein do texto e imagem
							$("#slideshow").fadeOut(1000,imagechange);			//fadeout e chamada de função para troca de imagem 
						}
						$(document).ready(function(){
									imagechange();						//chamada inicial do slideshow
						});
					});
		</script>

					<!-- top -->
					<div id="slide">
						<a onclick="" href="" id="linkslide"><img src="" id="slideshow" alt="Image" width="100%" height="80%"></a>
						<br>
						<center><h4><a onclick="" href="" id="textoslide" style="text-decoration: none"><!-- aqui fica o texto dinâmico --></a></h4></center>
					</div>
					
				
					<br><br><center><b style="font-size: 180%; position: relative " class="colorir" >Bem-vindo ao LCP</b></center><br><br>
					<hr size="3px" class="colorir" width="70%" style="position: relative; margin-left: auto; margin-right: 5%">
				
					
					
					<div id="textocorpo" style="position: relative; top: 300px">		
						
						<p>O Laboratório Associado de Combustão e Propulsão tem como objetivos desenvolver atividades de pesquisa e desenvolvimento em combustão, propulsão de satélites, propulsão auxiliar e catálise com aplicações em combustão e propulsão, além de realizar testes de qualificação de propulsores de satélites e de propulsores auxiliares. Para isso, é necessário formar pessoal qualificado nas áreas de combustão e propulsão e realizar cooperação com outros órgãos e instituições em áreas correlatas.</p>
						<p>Na área de combustão foram realizadas no LCP, desde sua fundação, pesquisas sobre combustão teórica e aplicada, incluindo estudos de combustão pulsante, combustão industrial, queima de gotas e sprays, combustão de biomassa, flamabilidade de materiais, injetores, fornos, queimadores e outros dispositivos, visando sempre ganhos de eficiência e redução do impacto ambiental. A combustão é uma ciência que permeia todos os setores da sociedade e é responsável por mais de 80% da energia gerada pelo homem. A poluição nas grandes cidades, as queimadas na Amazônia, a tecnologia aeroespacial, a queima do lixo urbano e a geração de energia elétrica são algumas das áreas ligadas diretamente com a combustão que têm grande importância para o país.</p>
						<p>Leia a história completa <a onclick="verificarlink(this)" href="historia.php" class="colorir">aqui</a>.</p>
						<br>
						<hr size="1px" class="colorir" width="100%" style="position: relative; margin-left: auto; margin-right: 5%">			
						<h4><b>Organograma:</b></h4>
						<center><!--<a onclick="verificarlink(this)" href="imagens/instalacoes_pagimg2grande.png" target="_blank">--><img usemap="#organograma" alt="Image" src="imagens/instalacoes_pagimg2.png"><!--</a>--></center>
						<map name="organograma" id="organograma">
							<area  alt="Image" title="Pós-Graduação" href="posgrad.php" shape="rect" coords="34,94,132,121" style="outline:none;" target="_self">
							<area  alt="Propulsão" title="Propulsão" href="propulsao.php" shape="rect" coords="34,155,132,182" style="outline:none;" target="_self">
							<area  alt="Combustão" title="Combustão" href="combustao.php" shape="rect" coords="173,155,271,182" style="outline:none;" target="_self">
							<area  alt="Catálise" title="Catálise" href="catalise.php" shape="rect" coords="343,154,441,182" style="outline:none;" target="_self">
							<!--<area  alt="Lab.prop." title="Lab.prop." href="" shape="rect" coords="436,213,506,251" style="outline:none;" target="_self">-->
							<!--<area  alt="Lab.cat." title="Lab.cat." href="" shape="rect" coords="355,209,428,254" style="outline:none;" target="_self">-->
							<!--<area  alt="Lab.qui." title="Lab.qui." href="" shape="rect" coords="277,210,349,252" style="outline:none;" target="_self">-->
							<area  alt="Prédio de Ensaios" title="Prédio de Ensaios" href="instalacoes_predioensaios.php" shape="rect" coords="186,211,257,252" style="outline:none;" target="_self">
							<area  alt="LAPL" title="LAPL" href="lapl.php" shape="rect" coords="115,212,165,251" style="outline:none;" target="_self">
							<area  alt="BTCA" title="BTCA" href="btca.php" shape="rect" coords="58,211,108,250" style="outline:none;" target="_self">
							<area  alt="BTSA" title="BTSA" href="btsa.php" shape="rect" coords="4,212,54,251" style="outline:none;" target="_self">
							<area  alt="Oficina Mecânica" title="Oficina Mecânica" href="instalacoes_oficinamec.php" shape="rect" coords="537,177,634,207" style="outline:none;" target="_self">
							<area  alt="Biblioteca" title="Biblioteca" href="biblioteca.php" shape="rect" coords="537,93,634,122" style="outline:none;" target="_self">
							<!--<area  alt="Gestão" title="Gestão" href="" shape="rect" coords="537,212,634,241" style="outline:none;" target="_self">-->
							<!--<area  alt="TI" title="TI" href="" shape="rect" coords="541,133,630,169" style="outline:none;" target="_self">-->
							<!--<area  alt="Secretaria" title="Secretaria" href="" shape="rect" coords="539,56,632,82" style="outline:none;" target="_self">-->
							<!--<area  alt="CTE" title="CTE" href="" shape="rect" coords="175,7,268,70" style="outline:none;" target="_self">-->
						</map>
				  </div>
					
				   <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
					<!-- bottom -->				
				
					<?php include "bthtml.php" ?>

<!-- Esteves Lima - estagiário LCP - 2015 -->