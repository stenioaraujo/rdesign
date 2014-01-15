<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
		<title>R-design CG 2015</title>
		<meta name="Distribution" content="Global" />
		<meta name="Rating" content="General" />
		<meta name="Description" content="" />
		<meta name="Keywords" content="" />
		<link rel="stylesheet" href="arquivos/odometer-theme.css" />
		<script src="arquivos/odometer.js"></script>
		<style>
		*{
			margin: 0;
			padding: 0;
		}
		html, body {
			height:100%;
			width:100%;
			overflow: hidden;
		}
		body{
			background: #000;
		}
		#logo{
			text-align: center;
		}
		#logo img{
			width: 100px;
		}
		#logo h1{
			color: #fafafa;
			font-family: Source Code Pro, sans-serif;
			font-size: 33px;
			margin-top: 80px;
			text-transform: uppercase;
			opacity: .5;
		}
		.odometer{
			color: #fff;
			font-family: sans-serif;
			font-size: 100px;
			margin-top: 75px;
		}
		.Absolute-Center{
			margin: auto;
			position: absolute;
			top: 0; left: 0; bottom: 0; right: 0;
			height: 480px;
			width: 800px;
		}
		#pg1{
			width: 100%;
			height: 100%;
		}
		#pg2{
			background: #333;
			width: 100%;
			height:100%;
			overflow-y: auto;
			position: relative;
			overflow: hidden;
		}
		</style>
		<style>
			* {
				margin: 0;
				padding: 0;
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
			   border-left: 25px solid #fff;
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
			.rotate90 {
			   -webkit-transform: rotate(90deg);
			   -moz-transform:rotate(90deg);
			   -o-transform:rotate(90deg);
			   -ms-transform:rotate(90deg);
			}
			.rotate180 {
			   -webkit-transform: rotate(180deg);
			   -moz-transform:rotate(180deg);
			   -o-transform:rotate(180deg);
			   -ms-transform:rotate(180deg);
			}
			.rotate270 {
			   -webkit-transform: rotate(270deg);
			   -moz-transform:rotate(270deg);
			   -o-transform:rotate(270deg);
			   -ms-transform:rotate(270deg);
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
		<script type="text/javascript" src="arquivos/jquery-1.7.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				var aceso = false;
				var tamanho = "0";
				var cor = "#000";
				var triangulos = $(".triangle");

				function selecionar(maximo) {
					var selecionados = [];
					
					for (var i = 0; i < maximo; i++){
						selecionados[i] = triangulos.get(Math.floor(Math.random() * triangulos.length));
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
						selecionados = selecionar(11);
					}

					for (var i = 0; i < selecionados.length; i++){
						$(selecionados[i]).css("-webkit-filter","drop-shadow(0 1px "+tamanho+"px "+cor+")");						
					}
				}
						
				setInterval(function(){pulsar();}, 2000);

				$("#pg2Form .triangleLittle").click(function(){
					$('#pg1').fadeIn();
				});
				
				$("h1, #pg1 .triangleLittle").click(function(){
					$("input[type='email']").focus();
					$('#pg1').fadeOut();
				});

				$("form").submit(function(event){
					event.preventDefault();
					$.post("email.php", {email : $("input[type='email']").val()},
							function(){
								$("form").html("<h1 style='font-family: sans-serif; color: #eee'>CONTRA O TEMPO</h1>");
							});
				});
			});
		</script>
	</head>
	
	<body>
		<div id="pg1">	
			<div id="logo" class="Absolute-Center">
				<img src="arquivos/rdesign.png" alt=""></img>
				<h1 style="cursor: pointer">Something big is coming...</h1>
				<div id="cont" class="odometer"><?php echo 1420565763 - time();?></div>
				<script type="text/javascript">
					setInterval(function(){decCont()}, 2000);
					var horario = <?php echo 1420565763 - time();?>;

					function decCont(){
						var element = document.getElementById("cont");

						horario -= 2;				
						
						if (horario <= 0){
							element.innerHTML = 0;
						}else{
							element.innerHTML = horario;
						}
					}
				</script>
			</div>
			<div class='triangle triangleLittle rotate270' style="position: relative; cursor: pointer; margin-left: 50%;">
			</div>
		</div>
		<div id="pg2">
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
			<div id="pg2Form" style="position: relative; top: 0; left: 0; width: 100%; height: 100%">
				<div class='triangle triangleLittle rotate90' style="position: relative; cursor: pointer; margin-left: 50%;">
				</div>
				<form action="email" method="POST" style="text-align: center; position: absolute; top: 50%; left: 50%; margin-top: -40px; margin-left: -200px">
					<input type="email" name="email" required="required" placeholder="EMAIL" style="background: #101010; color: #ddd; border: 0;font-family: sans-serif; font-size: 30px; text-align:center; height: 50px; width: 400px;"><br>
					<input type="submit" value="tik tak" style="height: 30px; width: 400px; border: 0; background: #202020; color: #ddd">
				</form>
			</div>
		</div>
	</body>
</html>