<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8"/>
		<title>rDesign2015</title>
		<meta name="author" content="Jeremy Pougnet"/>
		<meta name="author" content="Stenio Elson"/>
		<meta name="description" content=""/>
		<link rel="stylesheet" type="text/css" href="styles.css"/>
		<link rel="stylesheet" href="odometer-theme.css" />
		<script src="odometer.js"></script>
		<script src="jquery-1.7.min.js"></script>
		<style>
			*{
				margin: 0;
				padding: 0;
			}
			html, body {
				height:100%;
				width:100%;
				overflow: hidden;
				cursor: default;
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
				font-size: 22px;
				text-transform: uppercase;
				opacity: .7;
			}
			.odometer{
				color: #fff;
				font-family: sans-serif;
				font-size: 75px;
				margin-top: 50px;
			}
			.Absolute-Center{
				margin: auto;
				position: absolute;
				top: 0; left: 0; bottom: 0; right: 0;
				height: 480px;
				width: 800px;
			}
			#email{
				margin-top: 55px;
				min-height: 50px;
				max-height: 50px;
				transition: 500ms;
			}
			input{
				display: none;
				margin-top: -10px;
				height: 50px;
				border-radius: 10px;
				width: 400px;
				text-align: center;
				font-size: 18px;
				text-transform: uppercase;
				opacity: 0.5;
				color: #fff;
				background: #000;
				border: 1px solid green;
			}
			input:hover{
				opacity: 0.6;
			}
		</style>
	</head>
	<body>
		<div id="container" class="container">
		  <div id="output" class="container">
		  </div>
		  <div id="vignette" class="overlay vignette">
		  </div>
		  <div id="noise" class="overlay noise">
		  </div>
		  <div id="ui" class="wrapper">
			<div id="logo" class="Absolute-Center">
				<img src="rdesign.png" alt=""></img>
				<div id="email">
					<h1>Something big is coming...</h1>
					<form id="wait" action="save.php" method="POST">
						<input name="email" type="email" placeholder="Email" />
					</form>
				</div>
				<div id="cont" class="odometer"><?php echo 1420565763 - time();?></div>
				<script type="text/javascript">
					$(document).ready(function(){
						var clicked = false;

						$("#wait").submit(function(event){
							event.preventDefault();
						    $.post("save.php", {email:$("input[type='email']").val()})
					    	.done(
								function(data){
									alert(data);
									$("html").click();
						    	}
						    )
						    .fail(function(){
							    alert("Please, Try again!");
							});
						});
						
						$("#logo").hover(function(){
							if (clicked == false) {
							    event.stopPropagation();
								setTimeout(function(){$("h1").fadeOut(250)}, 0);
								setTimeout(function(){
								    $("h1").html("CLICK HERE");
								    $("h1").fadeIn()}, 250);
							}
						});
						
						$("#logo").mouseleave(function(){
							if (clicked == false) {
							    event.stopPropagation();
								setTimeout(function(){$("h1").fadeOut(250)}, 0);
								setTimeout(function(){
								    $("h1").html("SOMETHING BIG IS COMING...");
								    $("h1").fadeIn()}, 250);
							}
						});
						
						$("html").click(function(){
							clicked = false;
							setTimeout(function(){$("input").fadeOut(250)}, 0);
							setTimeout(
								function(){
								    $("h1").html("SOMETHING BIG IS COMING...");
									$("h1").fadeIn(250);
								}, 255);
						});
						
						$("#email").click(function(){
						    event.stopPropagation();
						    clicked = true;
							setTimeout(function(){$("h1").fadeOut(250)}, 0);
							setTimeout(function(){$("input").fadeIn()}, 250);
						});
					});
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
		  </div>
		</div>
		<div id="controls" class="controls" style="display: none">
		</div>
		<script src="dat.gui.min.js"></script>
		<script src="fss.min.js"></script>
		<script src="triangle.js"></script>
	</body>
</html>