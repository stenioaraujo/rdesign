<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
		<title>R-design CG 2015</title>
		<meta name="Distribution" content="Global" />
		<meta name="Rating" content="General" />
		<meta name="Description" content="" />
		<meta name="Keywords" content="" />
		<link rel="stylesheet" href="odometer-theme.css" />
		<script src="odometer.js"></script>
		<style>
		*{
			margin: 0;
			padding: 0;
		}
		html, body {
			height:100%;
			width:100%;
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
			height: 550px;
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
		}
		</style>
		
	</head>
	
	<body>
		<div id="pg1">	
			<div id="logo" class="Absolute-Center">
				<img src="rdesign.png" alt=""></img>
				<h1>Something big is coming...</h1>
				<div id="cont" class="odometer"><?php echo 1420565763 - time();?></div>
				<script type="text/javascript">
					setInterval(function(){decCont()}, 2000);
					var horario = <?php echo 1420565763 - time();?>;

					function decCont(){
						var element = document.getElementById("cont");

						horario -= 2;				
						element.innerHTML = horario;
						
						if (horario <= 0){
							element.innerHTML = 0;
						}
					}
				</script>
			</div>
		</div>
		<div id="pg2">
		
		</div>
	</body>
</html>