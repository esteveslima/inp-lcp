		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <!-- Correção para caracteres especiais e acentuação    -->
		<?php include "tphtml.php" ?>
					<!-- top -->
				
				
				
				<div id="textocorpo">
					<h2  align="center" class="colorir">DSMC</h2>
					<hr width="100%" class="colorir" size="3px"><br>
					
					<center><img alt="Image" src="imagens/dsmc_pagimg.png"></center>
					<br><br>
					<hr width="100%" class="colorir" size="1px" ><h4><b>Método Direct Simulation Monte Carlo (DSMC)</b></h4>
					
					<p>O método DSMC é uma técnica de simulação numérica baseada na dinâmica das partículas. O método DSMC é fundamentado nos conceitos físicos dos gases rarefeitos e nas hipóteses físicas que formam a base para a derivação da equação de Boltzmann. Entretanto, o método DSMC não é derivado diretamente da equação de Boltzmann. Como ambos, o método DSMC e a equação de Boltzmann, são fundamentados na teoria cinética clássica, então o método DSMC está sujeito as mesmas restrições da equação de Boltzmann, i.e., a hipótese de caos molecular e a restrição de gases diluídos.</p>

					<p>Atualmente, o método DSMC tem sido reconhecido como uma técnica poderosa capaz de avaliar uma variedade ilimitada de escoamentos rarefeitos em regimes onde nem as equações de Navier-Stokes e nem as equações para escoamento molecular livre (escoamentos onde as colisões entre partículas são desprezadas quando comparadas com aquelas colisões com o corpo) são apropriadas. O método tem sido testado em escoamentos no regime de transição nos últimos 40 anos, e tem apresentado excelentes resultados quando comparados com dados experimentais. Comparações com dados experimentais têm dado credibilidade ao método, o que tem sido vital na receptividade do mesmo. Entre as vantagens do método que fazem com que ele seja útil nas aplicações de engenharia pode-se citar (1) a simplicidade na mudança de um problema unidimensional (1-D) para 2-D e 3-D, (2) a possibilidade de se incorporar modelos complexos de interação gás/partículas, incluindo-se os modelos de graus internos de liberdade e reações químicas sem maiores complicações no algoritmo computacional e sem significante aumento no custo computacional e, (3) a aplicação do método em computação paralela.</p>
					
					<p>O método DSMC modela o escoamento como sendo uma coleção de partículas (ou moléculas). Cada partícula possui posição, velocidade e energia interna. O estado da partícula e armazenado e modificado com o tempo quando as partículas se movem, colidem e interagem com a superfície no domínio físico simulado. A hipótese de gás diluído (onde o diâmetro molecular médio é muito menor que o espaço molecular médio no gás) permite que o movimento das moléculas seja desacoplado do processo de colisão das moléculas. O movimento das moléculas é modelado deterministicamente, enquanto que as colisões são tratadas estatisticamente. Considerando-se ser impossível simular o número real de moléculas no domínio computacional, um número muito menor de moléculas é empregado, cada molécula simulada representando um grande número de moléculas reais. As simulações podem variar de milhares para milhões de moléculas nos problemas de escoamentos rarefeitos.</p>
					
					<p>Uma malha computacional, representando o espaço físico a ser investigado, é utilizada na execução do método. As células na malha computacional servem como referência na obtenção das propriedades macroscópicas do gás. As células são divididas em subcélulas, onde os possíveis pares de moléculas a serem utilizadas nas colisões são escolhidos. Esse procedimento melhora a precisão do método por assegurar que as colisões ocorram somente entre moléculas vizinhas. As moléculas nas células são consideradas como representativas das moléculas reais na posição da célula, e a posição relativa das moléculas no interior das células é ignorada no processo de colisão das moléculas. As dimensões das células devem ser obtidas de modo que as mudanças nas propriedades do escoamento através de cada célula sejam pequenas. As dimensões lineares das células devem ser pequenas comparadas com o livre caminho médio das moléculas nas direções onde os gradientes das propriedades são mais acentuados.</p>
					
					<p>Uma outra exigência do método DSMC diz respeito ao passo no tempo. As trajetórias das moléculas no espaço físico são acompanhadas considerando-se o desacoplamento entre o movimento das moléculas e as colisões intermoleculares. De modo a satisfazer esse desacoplamento, o passo no tempo deve ser pequeno quando comparado com o tempo médio entre as colisões. O tempo na simulação pode ser identificado com o tempo real, e o escoamento é sempre calculado como um escoamento transiente. As condições iniciais não dependem de uma predição do campo de escoamento, mas podem ser especificadas em termos dos estados, tais como escoamento uniforme ou vácuo, que permite uma exata especificação. O escoamento permanente corresponde ao escoamento transiente para grandes períodos de tempo. É importante mencionar que não existem processos iterativos e problemas relacionados com estabilidade ou convergência. Conseqüentemente, o método DSMC não está sujeito a critérios de estabilidade como a condição Courant-Friendrichs-Lewy encontrada em CFD. As condições de contorno são especificadas em termos do comportamento individual das moléculas, e todos os procedimentos podem ser especificados tal que o tempo computacional seja linearmente dependente do número de moléculas.</p>		
				</div>
					
					
					
					
					<!-- bottom -->				
				
					<?php include "bthtml.php" ?>

<!-- Esteves Lima - estagiário LCP - 2015 -->