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
		body{
			background: #000;
		}
		#logo{
			text-align: center;
			margin-top: 220px;
		}
		#logo img{
			width: 100px;
		}
		#logo h1{
			color: #fafafa;
			font-family: Roboto Light, sans-serif;
			font-size: 33px;
			margin-top: 50px;
		}
		.odometer{
			color: #fff;
			font-family: sans-serif;
			font-size: 100px;
			margin-top: 100px;
		}
		</style>
		
	</head>
	
	<body>
			
		<div id="logo">
		<img src="rdesign.png" alt=""></img>
		<h1>Something big is coming...</h1>
		<div id="cont" class="odometer"><?php echo 1420565763 - time();?></div>
		<script type="text/javascript">
			setInterval(function(){decCont()}, 2000);
			var horario = <?php echo 1420565763 - time();?>;

			function decCont(){
				var element = document.getElementById("cont");
				
				if (element.innerHTML <= 0){
					element.innerHTML = 0;
					return;
				}

				horario -= 2;
				
				element.innerHTML = horario;
			}
		</script>
		</div>
	</body>
</html>