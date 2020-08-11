
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <!-- Correção para caracteres especiais e acentuação    -->
		<?php include "tphtml.php" ?>

		<script type="text/javascript">				
				$(document).ready(function(){
							$("#chefialink").click(function(){								//ao clicar no link
												$(".chefia").css("display","block");		//					exibe o conteudo
							});
							$(".chefia a").click(function(){								// ao clicar em ocultar
												$(".chefia").css("display","none");			//					oculta o conteudo
							});
							$("#pesquisadoreslink").click(function(){
												$(".pesquisadores").css("display","block");
							});
							$(".pesquisadores a").click(function(){
												$(".pesquisadores").css("display","none");
							});
							$("#tecnologistaslink").click(function(){
												$(".tecnologistas").css("display","block");
							});
							$(".tecnologistas a").click(function(){
												$(".tecnologistas").css("display","none");
							});
							$("#ctdlink").click(function(){
												$(".ctd").css("display","block");
							});
							$(".ctd a").click(function(){
												$(".ctd").css("display","none");
							});
							$("#apoiolink").click(function(){
												$(".apoio").css("display","block");
							});
							$(".apoio a").click(function(){
												$(".apoio").css("display","none");
							});
							$("#bolsistaslink").click(function(){
												$(".bolsistas").css("display","block");
							});
							$(".bolsistas a").click(function(){
												$(".bolsistas").css("display","none");
							});
							$("#allhidden a").click(function(){								//oculta todos
												$(".chefia").css("display","none");	
												$(".pesquisadores").css("display","none");
												$(".tecnologistas").css("display","none");		
												$(".ctd").css("display","none");
												$(".apoio").css("display","none");
												$(".bolsistas").css("display","none");
		
							});
				});
		</script>

					<!-- top -->
				
				
				
				<div id="textocorpo">
					<h2  align="center" class="colorir">Equipe</h2>
					<hr width="100%" class="colorir" size="3px" ><br>				
					
					<center><b id="allhidden" style="font-size: 15px"><a onclick="verificarlink(this)" href="#corpo" class="colorir">Ocultar tudo</a></b></center>
					<br><br><br><br>
					
					<h3><a onclick="verificarlink(this)" href="#chefialink" class="colorir" id="chefialink" >Chefia</a></h3>
					<br>
					<div class="chefia" style="display: none">
						<hr width="100%" class="colorir" size="3px" ><br>
						<p>Dr. Fernando de Souza Costa</p>
						<p><b>Chefe Titular</b></p>
						<p>fernando@lcp.inpe.br</p>
						<p>55 12 3186-9215</p>
						<br>
						<p>MSc. Cláudio Bressan</a></p>
						<p><b>Chefe Substituto</b></p>
						<p>bressan@lcp.inpe.br</p>
						<p>55 12 3186-9508</p>
						<br>
						<p><a onclick="verificarlink(this)" href="#corpo" class="colorir chefia" style="display: none">ocultar</a></p>
						<hr width="100%" class="colorir" size="3px" ><br>
					</div>
					<br>
				<h3><a onclick="verificarlink(this)" href="#pesquisadoreslink" class="colorir" id="pesquisadoreslink">Pesquisadores</a></h3>	
					<br>
					<div class="pesquisadores" style="display: none">
						<hr width="100%" class="colorir" size="3px" ><br>
						<ul>
							<li>Carlos Eduardo Rolfsen Salles, Doutor, FEG, 2004</a></li>
							<li>David dos Santos Cunha, Doutor, FAENQUIL, 1995</a></li>
							<li>Fernando Fachini Filho, Doutor, Univ. Politec. Madri, 1992</a></li>
							<li>Fernando de Souza Costa, Ph.D., Univ. Michigan, 1995</a></li>
							<li>Rodrigo Intini Marques, Ph.D., University of Southampton - UK, 2009</a></li>
							<li>Roman Ivanovitch Savonov</li>
							<li>Turíbio Gomes Soares Neto, Doutor, Unicamp, 1998</a></li>
							<li>Wilson F. N. Santos, Ph.D., Univ. Maryland, 2001</a></li>			
						</ul>
						<br>
						<p><a onclick="verificarlink(this)" href="#corpo" class="colorir pesquisadores" style="display: none">ocultar</a></p>
						<hr width="100%" class="colorir" size="3px" ><br>
					</div>
					<br>
				<h3><a onclick="verificarlink(this)" href="#tecnologistaslink" class="colorir" id="tecnologistaslink" >Tecnologistas</a></h3>
					<br>
					<div class="tecnologistas" style="display: none">
						<hr width="100%" class="colorir" size="3px" ><br>
						<ul>
							<li>Dr. José Augusto Jorge Rodrigues</a>     		jajr@lcp.inpe.br</li>
							<li>Dr. Júlio César Batista</a>                   julio@lcp.inpe.br</li>
							<li>Dr. Marco Aurélio Ferreira</a>               	marco@lcp.inpe.br</li>
							<li>Dr. Ricardo Vieira</a>                       	rvieira@lcp.inpe.br</li>
							<li>Msc. Aguinaldo M. Serra Jr.</a>          		agnaldo@lcp.inpe.br</li>
							<li>Msc. Claúdio Bressan</a>                      bressan@lcp.inpe.br</li>			
						</ul>						
						<br>
						<p><a onclick="verificarlink(this)" href="#corpo" class="colorir tecnologistas" style="display: none">ocultar</a></p>
						<hr width="100%" class="colorir" size="3px" ><br>
					</div>
					<br>
				<h3><a onclick="verificarlink(this)" href="#ctdlink" class="colorir" id="ctdlink">CDT</a></h3>
					<br>
					<div class="ctd" style="display: none">
					<hr width="100%" class="colorir" size="3px" ><br>
					<p><b>Contrato por Tempo Determinado</b></p>
					<br>
						<ul>
							<li>Álvaro Ribeiro Filho - Químico</li>
							<li>Carlos Dolberth Jaeger - Engenheiro Elétrico</li>
							<li>Fabiana Ferrari Dias - Doutorado em Geociência</li>
							<li>Henrique César Sampaio - Engenheiro Eletricista, MSc.</li>
							<li>Jefferson Luiz Nogueira - Engenheiro Químico</li>
							<li>Luis Francisco Chrispim Marin - Bacharel em Ciência da Computação</li>
							<li>Marcelo Renato Anselmo - Engenheiro Eletricista</li>
							<li>Sayuri Okamoto - Química Analítica, MSc.</li>
						</ul>
						<br>
						<p><a onclick="verificarlink(this)" href="#corpo" class="colorir ctd" style="display: none">ocultar</a></p>
						<hr width="100%" class="colorir" size="3px" ><br>
					</div>
					<br>
				<h3><a onclick="verificarlink(this)" href="#apoiolink" class="colorir" id="apoiolink">Apoio</a></h3>
					<br>
					<div class="apoio" style="display: none">
					<hr width="100%" class="colorir" size="3px" ><br>
					<br>
						<h4><b>ANALISTA EM CIÊNCIA E TECNOLOGIA</b></h4>
						<p>LACG          Ely Vieira Cortez           3186-9569     evcortez@lcp.inpe.br</p>
						<p>PESQUISA   Geraldo F. Gomes         3186-9368     gfgomes@lcp.inpe.br</p>
						<br>
						<hr width="100%" class="colorir" size="1px" ><h4><b>AUXILIAR EM CIÊNCIA E TECNOLOGIA</b></h4>
						<p>BTSA          Domingos J. A. Souza    3186-9403     domingos@lcp.inpe.br</p>
						<p>ENSAIOS     José R. dos Santos        3186-9262     beto@lcp.inpe.br</p>
						<br>
						<hr width="100%" class="colorir" size="1px" ><h4><b>SECRETARIAS</b></h4>
						<p>BTSA                                            3186-9401</p>
						<p>PESQUISA  Dinorah C. A. Oliveira     3186-9217     dinorah@lcp.inpe.br</p>
						<br>
						<hr width="100%" class="colorir" size="1px" ><h4><b>TÉCNICOS EM ELETRÔNICA</b></h4>
						<p>LACG         José C. de Andrade      3186-9572     andrade@lcp.inpe.br</p>
						<p>PESQUISA  José C. dos Santos       3186-9267     jcarlos@lcp.inpe.br</p>
						<p>PESQUISA  Roberto F. Bastos         3186-9248     roberto@lcp.inpe.br</p>
						<br>
						<hr width="100%" class="colorir" size="1px" ><h4><b>TÉCNICOS EM INFORMÁTICA</b></h4>
						<p>PESQUISA  Anderson O. Neves       3186-9394     anderson.neves@lcp.inpe.br</p>
						<p>PESQUISA  Ricardo A. Andrade       3186-9432     ricardo.andrade@lcp.inpe.br</p>
						<br>
						<hr width="100%" class="colorir" size="1px" ><h4><b>TÉCNICOS EM MECÂNICA</b></h4>
						<p>ENSAIOS    Carlos A. dos Santos    3186-9365     carlosantos@lcp.inpe.br</p>
						<p>ENSAIOS    Francisco C. Almeida    3186-9255     francisco@lcp.inpe.br/p>
						<p>BTSA         Francisco J. Ribeiro      3186-9403     ribeiro@lcp.inpe.br</p>
						<br>
						<p><a onclick="verificarlink(this)" href="#corpo" class="colorir apoio" style="display: none">ocultar</a></p>
						<hr width="100%" class="colorir" size="3px" ><br>
					</div>
					<br>
					<h3><a onclick="verificarlink(this)" href="#bolsistaslink" class="colorir" id="bolsistaslink" >Bolsistas / Estagiários</a></h3>			
					<br>
					<div class="bolsistas" style="display: none">
					<hr width="100%" class="colorir" size="3px" ><br>
					<br>
						<h4><b>ESTAGIÁRIOS</b></h4>
						<p>Adriele Mranda dos Santos Juares - Técnico em Administração</p>
						<p>Lillian Costa - Técnico em Administração</p>
						<p>Mayara Costa Rodrigues - Superior em Administração</p>
						<p>Sabrina Regiani Medeiros Triska - Técnico em Informática</p>
						<br>
						<hr width="100%" class="colorir" size="1px" ><h4><b>PCI</b></h4>
						<p>André Navarro de Miranda</p>
						<p>Luis Gustavo Ferroni Pereira</p>
						<p>Renato Dias Barbosa - Engenheiro Químico</p>
						<p>Robson Maria - Técnico em Química</p>
						<br>
						<hr width="100%" class="colorir" size="1px" ><h4><b>OUTROS</b></h4>
						<p>Gilberto Marques da Cruz - Bolsista</p>
						<p>Jorge Damião de Souza - Técnico Químico</p>
						<p>Márcio Steinmetz Soarez - Bolsista CNPQ</p>
						<p>Rafael Ribeiro Cardoso - Superior em Engenharia Elétrica/Eletrônica</p>
						<br>
						<p><a onclick="verificarlink(this)" href="#corpo" class="colorir bolsistas" style="display: none">ocultar</a></p>
						<hr width="100%" class="colorir" size="3px" ><br>
					</div>
					<br>			
				</div>
	
					<!-- bottom -->				
				
					<?php include "bthtml.php" ?>

<!-- Esteves Lima - estagiário LCP - 2015 -->