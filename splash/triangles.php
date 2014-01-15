<html>
	<head>
		<style>
			* {
				margin: 0;
				padding: 0;
			}
			
			body{
			   overflow: hidden;
			}
			.triangleLittle, .triangleMiddle, .triangleBig{
			   width: 0;
			   height: 0;
			   display: block;
			   float: left;
				-webkit-filter: drop-shadow(0 1px 10px #000);
				-moz-filter: drop-shadow(0 1px 20px rgba(0,0,0,1));
				-ms-filter: drop-shadow(0 1px 20px rgba(0,0,0,1));
				-o-filter: drop-shadow(0 1px 20px rgba(0,0,0,1));
				filter: drop-shadow(0 1px 20px rgba(0,0,0,1));
				transition: 2000ms;
			}
			.seis{
			   margin-left: 8.8%;
			}
			.sete{
			   margin-right: 8.65%;
			}
			.triangleLittle{
			   border-right: 25px solid black;
			   border-top: 15px solid transparent;
			   border-bottom: 15px solid transparent;
			}
			.triangleMiddle{
			   border-right: 50px solid black;
			   border-top: 25px solid transparent;
			   border-bottom: 25px solid transparent;
			}
			.triangleBig{
			   border-right: 100px solid black;
			   border-top: 50px solid transparent;
			   border-bottom: 50px solid transparent;
			}
			.rotate20 {
			   -webkit-transform: rotate(20deg);
			   -moz-transform:rotate(20deg);
			   -o-transform:rotate(20deg);
			   -ms-transform:rotate(20deg);
			}
			.rotate50 {
			   -webkit-transform: rotate(35deg);
			   -moz-transform:rotate(35deg);
			   -o-transform:rotate(35deg);
			   -ms-transform:rotate(35deg);
			}
			.rotate80 {
			   -webkit-transform: rotate(80deg);
			   -moz-transform:rotate(80deg);
			   -o-transform:rotate(80deg);
			   -ms-transform:rotate(80deg);
			}
			.linha{
			   width: 1600px;
			   padding-bottom: 50px;
			   margin: 0 auto;
			}
			#triangulos{
			   width: 1600px;
			   height: 746px;
			   background: black;
			   margin: -373px 0 0 -700px;
			   top: 50%;
			   left: 50%;
			   position: absolute;
			}
			.clear{
			   clear: both;
			}
		</style>
		<script type="text/javascript" src="jquery-1.7.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				var aceso = false;
				var tamanho = "0";
				var cor = "#000";

				function selecionar(seletor, maximo) {
					var selecionados = [];
					
					for (var i = 0; i < maximo; i++){
						selecionados[i] = $(seletor).get(Math.floor(Math.random() * $(seletor).length));
					}

					return selecionados;
				}

				var selecionados;
				function pulsar(){
					if (aceso){
						tamanho = "0";
						cor = "#000";
						aceso = false;
					}else {
						tamanho = "10";
						cor = "#197D19";
						aceso = true;
						selecionados = selecionar(".triangle", 20);
					}

					for (var i = 0; i < selecionados.length; i++){
						$(selecionados[i]).css("-webkit-filter","drop-shadow(0 1px "+tamanho+"px "+cor+")");						
					}
				}
						
				setInterval(function(){pulsar();}, 2000);
			});
		</script>
	</head>
	<body>
	<div id="triangulos">
	<?php for ($j = 0; $j < 8; $j++) {?>
		<div class="linha">
			<?php 
			$angulus = [20, 50, 80];
			$qnt = [[7,"seis"],[8,"sete"]];
			$ultimo = "";
			for ($i = 0; $i < $qnt[$j%count($qnt)][0]; $i++) {
				$rand = $angulus[rand(0,2)];
				do{
					$rand = $angulus[rand(0,2)];
				} while ($ultimo == $rand);
				echo "<div class='triangle ".$qnt[$j%count($qnt)][1]." triangleMiddle rotate".$rand."'></div>\n";
				$ultimo = $rand;
			}?>
			<div class="clear"></div>
		</div>
	<?php }?>
	</div>
	</body>
</html>