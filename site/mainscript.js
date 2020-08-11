	$(document).ready(function()
	{	
	
	
			$("html").queryLoader2();	//chamada do plugin da etla de carregamento				
			window.addEventListener('DOMContentLoaded', function() {
				new QueryLoader2(document.querySelector("html"), {
					barColor: "#efefef",
					backgroundColor: "#111",							//configuração do plugin da tela de carregamento
					percentage: true,
					barHeight: 10,
					minimumTime: 200,
					deepSearch:true,
					fadeOutTime: 1000
				});
			});
			
 
			
		if($("#earth").length) //se existe a div terra(foi carregado), não é mobile e permite carregar os efeitos
		{
			
			
			
			
			
			if (window.addEventListener) window.addEventListener('DOMMouseScroll', wheel, false);				//plugin smoothscroll
			window.onmousewheel = document.onmousewheel = wheel;
			
	
	
			
			
	
	
	
			$(".bg").css('height',($(window).height())*2+'px');					//definição do tamanho e posição do background(estrelas) maior que a tela 
			$(".bg").css('width',($(window).width())*2+'px');					//			original e posicionado no centro
			$(".bg").css('top',-($(window).height())/2+'px');
			$(".bg").css('left',-($(window).width())/2+'px');
			
			
			clonar = 0;
			while (clonar <= 10)												
			{
				$("#bgbackground").clone().css({
								"background-color": "#fff8e9",
								"top":((Math.random())*($(window).height())*2)+"px",
								"left":((Math.random())*($(window).width())*2)+"px",
								"-o-box-shadow": "0 0 10px 1px white",
								"-ms-box-shadow": "0 0 10px 1px white",				//com brilho 1x1
								"-webkit-box-shadow": "0 0 10px 1px white",
								"box-shadow": "0 0 10px 1px white"
				}).appendTo(".bg");
				$("#bgbackground").clone().css({
								"background-color": "#fff8e9",
								"top":((Math.random())*($(window).height())*2)+"px",
								"left":((Math.random())*($(window).width())*2)+"px",
								"-o-box-shadow": "0 0 10px 1px white",
								"-ms-box-shadow": "0 0 10px 1px white",				//com brilho 2x2
								"-webkit-box-shadow": "0 0 10px 1px white",
								"box-shadow": "0 0 10px 1px white",
								"height": "2px",
								"width": "2px"
				}).appendTo(".bg");
				clonar++;
			}
			clonar = 0;
			while (clonar <= 50)												
			{
				$("#bgbackground").clone().css({
								"background-color": "fff8e9",//light gold
								"top":((Math.random())*($(window).height())*2)+"px",
								"left":((Math.random())*($(window).width())*2)+"px"		//criação das estrelas 1x1
				}).appendTo(".bg");
				$("#bgbackground").clone().css({
								"background-color": "fff8e9",//light gold
								"top":((Math.random())*($(window).height())*2)+"px",
								"left":((Math.random())*($(window).width())*2)+"px",	//criação das estrelas 2x2
								"height": "2px",
								"width": "2px"
				}).appendTo(".bg");
				clonar++;
			}
			clonar = 0;
			while (clonar <= 10)												
			{
				$("#bgbackground").clone().css({
								"background-color": "#fffaaa",
								"top":((Math.random())*($(window).height())*2)+"px",
								"left":((Math.random())*($(window).width())*2)+"px",
								"-o-box-shadow": "0 0 10px 1px white",
								"-ms-box-shadow": "0 0 10px 1px white",				//com brilho 1x1
								"-webkit-box-shadow": "0 0 10px 1px white",
								"box-shadow": "0 0 10px 1px white"
				}).appendTo(".bg");
				$("#bgbackground").clone().css({
								"background-color": "#fffaaa",
								"top":((Math.random())*($(window).height())*2)+"px",
								"left":((Math.random())*($(window).width())*2)+"px",
								"-o-box-shadow": "0 0 10px 1px white",
								"-ms-box-shadow": "0 0 10px 1px white",				//com brilho 2x2
								"-webkit-box-shadow": "0 0 10px 1px white",
								"box-shadow": "0 0 10px 1px white",
								"height": "2px",
								"width": "2px"
				}).appendTo(".bg");
				clonar++;
			}
			clonar = 0;
			while (clonar <= 50)												
			{
				$("#bgbackground").clone().css({
								"background-color": "#fffaaa",//lightred
								"top":((Math.random())*($(window).height())*2)+"px",		//criação das estrelas 1x1
								"left":((Math.random())*($(window).width())*2)+"px"
				}).appendTo(".bg");
				$("#bgbackground").clone().css({
								"background-color": "#fffaaa",//lightred
								"top":((Math.random())*($(window).height())*2)+"px",		//criação das estrelas 2x2
								"left":((Math.random())*($(window).width())*2)+"px",
								"height": "2px",
								"width": "2px"
				}).appendTo(".bg");
				clonar++;
			}
			clonar = 0;
			while (clonar <= 10)												
			{
				$("#bgbackground").clone().css({
								"background-color": "#d1d1ff",
								"top":((Math.random())*($(window).height())*2)+"px",
								"left":((Math.random())*($(window).width())*2)+"px",
								"-o-box-shadow": "0 0 10px 1px white",
								"-ms-box-shadow": "0 0 10px 1px white",				//com brilho 1x1
								"-webkit-box-shadow": "0 0 10px 1px white",
								"box-shadow": "0 0 10px 1px white"
				}).appendTo(".bg");
				$("#bgbackground").clone().css({
								"background-color": "#d1d1ff",
								"top":((Math.random())*($(window).height())*2)+"px",
								"left":((Math.random())*($(window).width())*2)+"px",
								"-o-box-shadow": "0 0 10px 1px white",
								"-ms-box-shadow": "0 0 10px 1px white",				//com brilho 2x2
								"-webkit-box-shadow": "0 0 10px 1px white",
								"box-shadow": "0 0 10px 1px white",
								"height": "2px",
								"width": "2px"
				}).appendTo(".bg");
				clonar++;
			}
			clonar = 0;
			while (clonar <= 100)												
			{
				$("#bgbackground").clone().css({
								"background-color": "#d1d1ff",//lightblue
								"top":((Math.random())*($(window).height())*2)+"px",	//criação das estrelas 1x1
								"left":((Math.random())*($(window).width())*2)+"px"
				}).appendTo(".bg");
				$("#bgbackground").clone().css({
								"background-color": "#d1d1ff",//lightblue
								"top":((Math.random())*($(window).height())*2)+"px",	//criação das estrelas 2x2
								"left":((Math.random())*($(window).width())*2)+"px",
								"height": "2px",
								"width": "2px"
				}).appendTo(".bg");
				clonar++;
			}
			clonar = 0;
			while (clonar <= 100)												
			{
				$("#bgbackground").clone().css({
								"background-color": "white",
								"top":((Math.random())*($(window).height())*2)+"px",
								"left":((Math.random())*($(window).width())*2)+"px",
								"-o-box-shadow": "0 0 10px 1px white",
								"-ms-box-shadow": "0 0 10px 1px white",				//com brilho 1x1
								"-webkit-box-shadow": "0 0 10px 1px white",
								"box-shadow": "0 0 10px 1px white"
				}).appendTo(".bg");
				$("#bgbackground").clone().css({
								"background-color": "white",
								"top":((Math.random())*($(window).height())*2)+"px",
								"left":((Math.random())*($(window).width())*2)+"px",
								"-o-box-shadow": "0 0 10px 1px white",
								"-ms-box-shadow": "0 0 10px 1px white",				//com brilho 2x2
								"-webkit-box-shadow": "0 0 10px 1px white",
								"box-shadow": "0 0 10px 1px white",
								"height": "2px",
								"width": "2px"
				}).appendTo(".bg");
				clonar++;
			}
			while (clonar <= 300)												
			{
				$("#bgbackground").clone().css({
								"background-color": "white",
								"top":((Math.random())*($(window).height())*2)+"px",	//criação das estrelas 1x1
								"left":((Math.random())*($(window).width())*2)+"px"
				}).appendTo(".bg");
				$("#bgbackground").clone().css({
								"background-color": "white",
								"top":((Math.random())*($(window).height())*2)+"px",	//criação das estrelas 2x2
								"left":((Math.random())*($(window).width())*2)+"px",
								"height": "2px",
								"width": "2px"
				}).appendTo(".bg");
				clonar++;
			}
			
			
			
			
			
		
			degauto = 0;
			if (($.cookie("efeitos") == 'on')||($("#efeitos").is(':checked')))	
			{
				setInterval(function(){												//leve movimento automatico das estrelas 
					degauto++; 
					$('.bg').css('-webkit-transform','rotate('+ ((degscroll/5) + (degauto/25)) +'deg)');
					$('.bg').css('-moz-transform','rotate('+ ((degscroll/5) + (degauto/25)) +'deg)');
					$('.bg').css('-ms-transform','rotate('+ ((degscroll/5) + (degauto/25)) +'deg)');
					$('.bg').css('-o-transform','rotate('+ ((degscroll/5) + (degauto/25)) +'deg)');
					$('.bg').css('transform','rotate('+ ((degscroll/5) + (degauto/25)) +'deg)');
				},50)
			}
			degscroll = 0;
			$(window).scroll(function(){										//movimento mais acelerado com scroll
				degscroll++;
				earthsatelite();												//chamada do efeito parallax no scroll
				$('.bg').css('-webkit-transform','rotate('+ ((degscroll/5) + (degauto/25)) +'deg)');
				$('.bg').css('-moz-transform','rotate('+ ((degscroll/5) + (degauto/25)) +'deg)');
				$('.bg').css('-ms-transform','rotate('+ ((degscroll/5) + (degauto/25)) +'deg)');
				$('.bg').css('-o-transform','rotate('+ ((degscroll/5) + (degauto/25)) +'deg)');
				$('.bg').css('transform','rotate('+ ((degscroll/5) + (degauto/25)) +'deg)');
			});
			
			
			
		
			xbt = $("#corpo").offset().top;			//posição do inicio do corpo
			$("#contentleft").css("height",$(window).height() + "px");	//definição da altura inicial do conteudo da esquerda do site
				ycl = $("#contentleft").offset().top;	//armazena o valor em relação ao topo do conteudo a esquerda
				$(window).scroll(function(){
									if($(document).scrollTop() > xbt)	//se através da barra de rolagem a tela passar o inicio do corpo
									{								
										$("#contentleft").animate(		//animação do movimento do conteudo da esquerda
										{top: (($(document).scrollTop() - ycl) + 10)  + "px"},		//define a altura do conteudo da esquerda														
										{duration: 500,queue: false}		//define duração da animação
										);
									}else		//caso não satisfaça o if, anima o conteudo da esquerda para posição original
									{									
										$("#contentleft").animate(		
											{top: "0px"},										
											{duration: 500,queue: false}	
										);												
									}
				});
			
			
		
		
		}
		
		function earthsatelite()		//parallax da terra e satelite
			{
				scrolpercent = ($(document).scrollTop() + $(window).height()) / ($(document).height());		//porcentagem do scroll em relação ao topo				
				var scrolled = $(document).scrollTop();
			
				
				$("#satelite").css("top", (scrolled  + ($("#satelite").height()*scrolpercent*0.4)) - 1 + "px");		//satelite irá se mover na proporção de sua altura e da porcentagem do scroll 
				
				if ((scrolled + $("#earth").height()) < ($("#footer-brasil").offset().top + $("#footer-brasil").height()))
				{
					$("#earth").css("top", (scrolled + ($(window).height() - ($("#earth").height()*scrolpercent))) + "px"); //terra irá se mover na proporção de sua altura e da porcentagem do scroll 		
				}
			}
		
		function wheel(event) {
				var delta = 0;
				if (event.wheelDelta) delta = event.wheelDelta / 120;
				else if (event.detail) delta = -event.detail / 3;
			
				handle(delta);
				if (event.preventDefault) event.preventDefault();												//plugin smoothscroll
				event.returnValue = false;
			}		
			function handle(delta) {
				var time = 500; // delay time
				var distance = 150; // delta point 
				// Dom where it will apply 
				$('html, body').stop().animate({
					scrollTop: $(window).scrollTop() - (distance * delta)
				}, time );
			}
		
		
		
		
		
		
		
		
		
		
		
		
			xbt = $("#corpo").offset().top;			//posição do inicio do corpo
			ybt = $("#backtotop").offset().top;		//posição original da ancora
			$(window).scroll(function(){
								if($(document).scrollTop() > xbt)	//se através da barra de rolagem a tela passar o inicio do corpo
								{
									$("#corpo").css("opacity","0.9");
									$("#corpo").css("-moz-opacity","0.9");		//opacidade automatica caso entre no corpo da pagina
									$("#corpo").css("filter","alpha(opacity=90)");
									$("#backtotop").css("visibility","visible"); 	//exibe a ancora 
									$("#backtotop").animate(		//animação do movimento da ancora 
									{top: ybt + $(window).scrollTop() - 300 + "px"},		//define a altura da ancora 														
									{duration: 2000,queue: false}		//define duração da animação
									);				
								}else
								{
									
									$("#backtotop").css("visibility","hidden");		//caso não satisfaça o if, oculta a ancora
								}
			});	
			
			
			
			$("#topo").mouseenter(changecolor);   	//chamada da função changecolor com a entrada do ponteiro no topo
			$("#topo").mouseleave(turnoff);		//chamada da função turnoff com a saida do ponteiro	do topo
			$("#menu td").mouseover(changecolor);   	//chamada da função changecolor com a entrada do ponteiro nos itens do menu
			$("#menu td").mouseleave(turnoff);		//chamada da função turnoff com a saida do ponteiro	dos itens do menu
			$("#corpo").mouseover(changecolor);   	//chamada da função changecolor com a entrada do ponteiro no corpo
			$("#corpo").mouseout(turnoff);		//chamada da função changecolor com a saida do ponteiro do corpo
			$("#textocorpo a").mouseenter(changecolor);   	//chamada da função changecolor com a entrada do ponteiro no link do textocorpo
			$("#textocorpo a").mouseleave(turnoff);		//chamada da função changecolor com a saida do ponteiro do link do textocorpo
			$("#noticiasmenu td").mouseenter(changecolor);   	//chamada da função changecolor com a entrada do ponteiro no menu(noticias)
			$("#noticiasmenu td").mouseleave(turnoff);		//chamada da função changecolor com a saida do ponteiro do menu(noticias)
			$(".itemnoticias").mouseenter(changecolor);   	//chamada da função changecolor com a entrada do ponteiro no item da tabela(noticias)
			$(".itemnoticias").mouseleave(turnoff);		//chamada da função changecolor com a saida do ponteiro no item da tabela(noticias)
			$(".rownoticia").mouseenter(changecolor);   	//chamada da função changecolor com a entrada do ponteiro no item das noticias
			$(".rownoticia").mouseleave(turnoff);		//chamada da função changecolor com a saida do ponteiro no item das noticias
			$(".anymenu").mouseenter(changecolor);   	//chamada da função changecolor com a entrada do ponteiro no item das noticias
			$(".anymenu").mouseleave(turnoff);		//chamada da função changecolor com a saida do ponteiro no item das noticias
			
			$("#backtotop").click(function(){		//ao clicar na âncora de voltar ao topo
				$("html, body").delay(100).animate({scrollTop: $('#topo').offset().top }, 1000); //pequeno delay e animação para subida
			});

			turnoff();		//chamada inicial para definição de estilos estáticos(cor dos links,rodapé,etc)				
			earthsatelite();
			
			
	});
		
		
	function verificarlink(link)		//verifica se o link está vazio e adiciona um (em construção) ao texto
	{
		if( !($(link).attr('href')) )	
		{	
			var strNewString = $(link).html().replace(/\(em construção\)/g,"");
			$(link).html(strNewString + "(em construção)");
			event.preventDefault();
			event.stopImmediatePropagation();
			
		}	
	}
		
	function load()
		{					
			
			/*data = new Date();		//atualização da variável data para ter referência na mudança de cores
			rotate = 0;						
			if (data.getHours()>=0&&data.getHours()<=4)		//inicio da definição de cores por hora
			{												//definição de cor azul marinho (00:00 ~ 4:59)
				r = 10;						
				g = 10;						
				b = 80;										
														
				rshadow= 10;						
				gshadow= 10;	//definição da cor da sombra(ligeiramente diferente)
				bshadow= 90;		
									
				rotate = 180;	//definição do rotate(deg) da função hue-rotate para icone(home)
			}						
			if (data.getHours()==5)		//definição de cor azul escuro (5:00 ~ 5:59)
			{						
				r = 10;				
				g = 90;				
				b = 170;			
									
				rshadow = 10;		
				gshadow = 30;		
				bshadow = 170;		
									
				rotate = 180;		
			}						
			if (data.getHours()==6)		//definição de cor vermelho alaranjado (06:00 ~ 6:59)
			{						
				r = 230;			
				g = 120;			
				b = 10;				
									
				rshadow = 230;		
				gshadow = 89;		
				bshadow = 10;		
									
				rotate = 330;		
			}						
			if (data.getHours()==7)		//definição de cor laranja claro (07:00 ~ 7:59)
			{						
				r = 230;						
				g = 150;						
				b = 10;						
											
				rshadow = 230;						
				gshadow = 130;						
				bshadow = 10;							
											
				rotate = 0;						
			}						
			if (data.getHours()>7&&data.getHours()<=11)		//definição de cor azul claro (08:00 ~ 11:59)
			{							
				r = 10;							
				g = 200;							
				b = 240;							
													
				rshadow= 10;							
				gshadow= 170;							
				bshadow= 240;								
													
				rotate = 150;							
			}							
			if (data.getHours()>11&&data.getHours()<=16)	//definição de cor azul escuro (12:00 ~ 16:59)
			{							
				r = 10;							
				g = 150;							
				b = 240;							
														
				rshadow= 10;							
				gshadow= 130;							
				bshadow= 240;							
											
				rotate = 170;							
			}							
			if (data.getHours()==17)						//definição de cor laranja claro (17:00 ~ 17:59)
			{						
				r = 230;						
				g = 150;						
				b = 10;						
											
				rshadow = 230;						
				gshadow = 130;						
				bshadow = 10;							
						
				rotate = 0;						
			}						
			if (data.getHours()==18)	//definição de cor vermelho alaranjado (18:00 ~ 18:59)
			{						
				r = 230;				
				g = 120;				
				b = 10;					
									
				rshadow = 230;			
				gshadow = 89;			
				bshadow = 10;			
									
				rotate = 330;			
			}						
			if (data.getHours()==19)	//definição de cor azul escuro (19:00 ~ 19:59)
			{						
				r = 10;						
				g = 90;						
				b = 170;						
											
				rshadow = 10;						
				gshadow = 30;						
				bshadow = 170;						
											
				rotate = 180;										
			}						
			if (data.getHours()>19&&data.getHours()<=23)	//definição de cor azul marinho (20:00 ~ 23:59)
			{
				r = 10;
				g = 10;
				b = 80;
								
				rshadow= 10;
				gshadow= 10;
				bshadow= 80;	
					
				rotate = 180;
			}					
			*/
			
			r = 10;							
				g = 150;							
				b = 240;							
														
				rshadow= 10;							
				gshadow= 130;							
				bshadow= 240;
			
			
			if (b < 80)		//verificação para a quantidade de azul na página
			{
				document.getElementById("iconhtml").src = 'http://www.w3.org/Icons/valid-html401';		//sem azul: icones do rodapé tema gold
				document.getElementById("iconcss").src = 'http://www.w3.org/Icons/valid-css2';
			}else
			{
				document.getElementById("iconhtml").src = 'http://www.w3.org/Icons/valid-html401-blue';		//com azul: icones do rodapé tema blue
				document.getElementById("iconcss").src = 'http://www.w3.org/Icons/valid-css2-blue';
			}
			$(".colorir").css("color","rgb("+ r +","+ g +","+ b +")");		//atualização de cores para todos os links com class "colorir"
			$("hr").css("border-color","rgb("+ r +","+ g +","+ b +")");		//cor da borda para as linhas que não suportam a função color em hr
		}
								
	function changecolor()		//função inicialmente usada para mudar as cores mas aproveitada para uso geral
		{
			load();		//atualização das cores
			$("#menu td:hover").css("-o-box-shadow"," 0 0 70px 15px rgb("+ rshadow +","+ gshadow +","+ bshadow +")");		//ao evento hover no menu
			$("#menu td:hover").css("-ms-box-shadow"," 0 0 70px 15px rgb("+ rshadow +","+ gshadow +","+ bshadow +")");		//cria efeito box-shadow
			$("#menu td:hover").css("-webkit-box-shadow"," 0 0 70px 15px rgb("+ rshadow +","+ gshadow +","+ bshadow +")");	
			$("#menu td:hover").css("box-shadow"," 0 0 70px 15px rgb("+ rshadow +","+ gshadow +","+ bshadow +")");
			$("#menu td:hover").css("background-color","rgb("+ r +","+ g +","+ b +")");		//e muda cor de fundo
			$("#menu td:hover a").css("color","rgb(255,255,255)");		//com a cor de fundo colorida, define-se a cor das letras para branco
			$("#menu td:hover a").css("text-decoration","none");		//desativa decoração de link
			$(".sub td a").css("color","rgb("+ r +","+ g +","+ b +")");		//muda cor das letras sem hover do submenu
			$(".sub td:hover a").css("color","rgb(255,255,255)");		//ao evento hover no submenu define a cor das letras para branco 
			$(".sub td").css("height",$("#menu td:hover").height() + "px");		//define altura do submenu para igual a altura do menu
			$(".sub td").css("-o-box-shadow"," 0 0 0 0 rgb("+ rshadow +","+ gshadow +","+ bshadow +")");  //efeito de recuo da função box-shadow(submenu)
			$(".sub td").css("-ms-box-shadow"," 0 0 0 0 rgb("+ rshadow +","+ gshadow +","+ bshadow +")");	
			$(".sub td").css("-webkit-box-shadow"," 0 0 0 0 rgb("+ rshadow +","+ gshadow +","+ bshadow +")");
			$(".sub td").css("box-shadow"," 0 0 0 0 rgb("+ rshadow +","+ gshadow +","+ bshadow +")");	
			$("#menu img:hover").css("filter","grayscale(100%)");			//define a cor do icone(home) para cinza ao evento hover 
			$("#menu img:hover").css("-webkit-filter","grayscale(100%)");	
			$("#menu img:hover").css("-ms-filter","grayscale(100%)");
			$("#menu img:hover").css("-moz-filter","grayscale(100%)");
			$("#corpo:hover").css("opacity","0.9");
			$("#corpo:hover").css("-moz-opacity","0.9");
			$("#corpo:hover").css("filter","alpha(opacity=9)");
			$("#corpo a:hover").css("text-shadow"," 0px 0px 10px rgb("+ r +","+ g +","+ b +")");		// efeito de crescimento do link ao evento hover
			$(".rownoticia:hover").css("background-color","rgb("+ r +","+ g +","+ b +")");	//define cor dos itens ao evento hover da tela de noticias
			$(".rownoticia:hover").css("color","rgb(255, 255, 255)");	//define cor dos itens ao evento hover da tela de noticias	
			
			$(".anymenu:hover").css("background-color","rgb("+ r +","+ g +","+ b +")");	//muda cor de fundo do item do menu noticias
			$(".anymenu:hover a").css("color","rgb(255, 255, 255)");		//com a cor de fundo colorida, define-se a cor das letras para branco
			$(".itemnoticias:hover").css("background-color","rgb("+ r +","+ g +","+ b +")");	//define cor dos itens ao evento hover da tela de noticias(zebrado)			
			$(".itemnoticias:hover").css("color","rgb(255, 255, 255)");	//define cor dos itens ao evento hover da tela de noticias(zebrado)				
		}
	function turnoff()	//função que tem o principal propósito de desfazer as alterações da função changecolor e definir outros estilos estáticos
		{		
			load();															//atualização das cores
			$("#menu td").css("-o-box-shadow"," 0 0 0 0 rgb("+ rshadow +","+ gshadow +","+ bshadow +")");		//ao tirar o mouse do menu
			$("#menu td").css("-ms-box-shadow"," 0 0 0 0 rgb("+ rshadow +","+ gshadow +","+ bshadow +")");      //cria efeito de recuo box-shadow
			$("#menu td").css("-webkit-box-shadow"," 0 0 0 0 rgb("+ rshadow +","+ gshadow +","+ bshadow +")");
			$("#menu td").css("box-shadow"," 0 0 0 0 rgb("+ rshadow +","+ gshadow +","+ bshadow +")");
			$("#menu td").css("background-color","rgb(60,60,60)");		//define-se novamente a cor de fundo para branco
			$("#menu td").css("border-left","1px solid rgb("+ r +","+ g +","+ b +")");
			$("#menu td").css("border-right","1px solid rgb("+ r +","+ g +","+ b +")");		//cor das bordas do menu e itens do menu
			$("#menu td a").css("color","rgb("+ r +","+ g +","+ b +")");	//define-se novamente a cor das letras
			$("#menu td a").css("text-decoration","none");		//desativa a decoração de link	
			$("#menu td img").css("filter","grayscale(0%)");		//retira a cor cinza do icone(home) do evento hover		
			$("#menu td img").css("-webkit-filter","grayscale(0%)");	
			$("#menu td img").css("-ms-filter","grayscale(0%)");
			$("#menu td img").css("-moz-filter","grayscale(0%)");
		//	$("#menu td img").css("-webkit-filter","hue-rotate("+rotate+"deg)");	//define a cor do icone para se ajustar com as letras 	
		//	$("#menu td img").css("filter","hue-rotate("+rotate+"deg)");
		//	$("#menu td img").css("-ms-filter","hue-rotate("+rotate+"deg)");
		//	$("#menu td img").css("-moz-filter","hue-rotate("+rotate+"deg)");
			$(".sub td").css("border-top","1px solid rgb("+ r +","+ g +","+ b +")");
			$(".sub td").css("border-bottom","1px solid rgb("+ r +","+ g +","+ b +")");
			$("#corpo").css("opacity","0.8");		
			$("#corpo").css("-moz-opacity","0.8");			//opacidade(hover) do corpo
			$("#corpo").css("filter","alpha(opacity=80)");
			$("#corpo a").css("font-weight","600");		//define a espessura das letras doos links
			$("#corpo a").css("text-shadow"," 0px 0px 0px rgb("+ r +","+ g +","+ b +")");	//define novamente o tamanho normal dos links para 100% ao sair do evento hover
			$("#footer").css("background-color","rgba("+ (r) +","+ (g) +","+ (b) +",0)");	//define cor de fundo do rodapé
			$("#footer").css("color","#fff");	//define cor branca para as letras do rodapé
			$("#footer-brasil").css("background"," -webkit-linear-gradient(top, rgba("+ (r) +","+ (g) +","+ (b) +",1), rgba("+ (r) +","+ (g) +","+ (b) +",0) 100%)"); 	
			$("#footer-brasil").css("background"," -o-linear-gradient(bottom, rgba("+ (r) +","+ (g) +","+ (b) +",1), rgba("+ (r) +","+ (g) +","+ (b) +",0) 100%)");					//gradient do footer
			$("#footer-brasil").css("background"," -moz-linear-gradient(top, rgba("+ (r) +","+ (g) +","+ (b) +",1), rgba("+ (r) +","+ (g) +","+ (b) +",0) 100%)"); 	
			$("#footer-brasil").css("background"," linear-gradient(to top, rgba("+ (r) +","+ (g) +","+ (b) +",1), rgba("+ (r) +","+ (g) +","+ (b) +",0) 100%)");	
				
				
			$(".rownoticia").css("background-color","rgba(70,70,70, 0.5)");	//define cor dos itens ao evento hover da tela de noticias
			$(".rownoticia").css("color","rgb("+ r +","+ g +","+ b +")");	//define cor dos itens ao evento hover da tela de noticias	
			$("#leftcorpo").css("background"," -webkit-linear-gradient(left, rgba("+ (r) +","+ (g) +","+ (b) +",1), rgba("+ (r) +","+ (g) +","+ (b) +",0))"); 	//gradiente	/* For Safari 5.1 to 6.0 */
			$("#leftcorpo").css("background"," -o-linear-gradient(right, rgba("+ (r) +","+ (g) +","+ (b) +",1), rgba("+ (r) +","+ (g) +","+ (b) +",0))");		 			/* For Opera 11.1 to 12.0 */
			$("#leftcorpo").css("background"," -moz-linear-gradient(right, rgba("+ (r) +","+ (g) +","+ (b) +",1), rgba("+ (r) +","+ (g) +","+ (b) +",0))"); 					/* For Firefox 3.6 to 15 */
			$("#leftcorpo").css("background"," linear-gradient(to right, rgba("+ (r) +","+ (g) +","+ (b) +",1), rgba("+ (r) +","+ (g) +","+ (b) +",0))");						 /* Standard syntax */
			
			$(".anymenu").css("background-color","rgb(70,70,70)");		//define-se novamente a cor de fundo para branco
			$(".anymenu a").css("color","rgb("+ r +","+ g +","+ b +")");	//define-se novamente a cor das letras
			$(".coloreditem").css("background-color","rgb("+ (r+30) +","+ (g+30) +","+ (b+30) +")");		//define cor dos itens coloridos da tela de noticias(zebrado)			
			$(".coloreditem").css("color","rgb(255, 255, 255)");				//define cor dos itens coloridos da tela de noticias(zebrado)			
			$(".whiteitem").css("background-color","rgb(10,10,10)");		//define cor dos itens coloridos da tela de noticias(zebrado)			
			$(".whiteitem").css("color","rgb("+ r +","+ g +","+ b +")");		//define cor dos itens coloridos da tela de noticias(zebrado)			
			
		/*	if((data.getHours()>=0&&data.getHours()<=4)||(data.getHours()>19&&data.getHours()<=23))		//caso a cor da pagina seja azul marinho(20:00 ~ 4:59)
			{
				$("#menu td img").css("filter","grayscale(100%)");		//define cor do icone para cinza(para compensar a falha do hue-rotate)
				$("#menu td img").css("-webkit-filter","grayscale(100%)");
			}*/
		}	

		//
		
		
		/* 
		-	A página abre definindo as configurações da ancora(inicialmente ocultada) e chamando a função turnoff(que definirá inicialmente a 
		estilização dos elementos estáticos como cor dos links,rodapé,etc.). 
		-	Ao se passar o ponteiro sobre um link ou item do menu ativa-se a função "changecolor"(que definirá os efeitos de estilização dinâmico 
		para o elemento em questão através do evento :hover) e que terá suas configurações iniciais restauradas somente ao retirar o ponteiro do
		elemento, ativando assim a função "turnoff".
		-	A função "load" no inicio das funções "changecolor" e "turnoff" tem a finalidade de atualizar a cor do site de acordo com o horário 
		do sistema.
		-	O filtro hue-rotate se baseia na cor inicial da imagem, portanto, caso seja feita a troca de uma imagem que utiliza desse filtro, a cor	
		inicial utilizada (ícone home) é #e7a128 ou rgb(231, 161, 40).
		-	Barra de rolagem aprimorada com o plugin de efeito smooth scroll
		-	Dinâmica do efeito parallax da terra e satelite descrita nas linhas correspondentes
		*/