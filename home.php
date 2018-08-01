<!DOCTYPE html>
<html>
<head>
	<title>GSLS</title>
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/slider.css">
</head>
<body>
	<div id="menu">
		<center> <img  id="libras" src="imagens/libras.png"></center>
	</div>

	<div id="cabecalho">
		<ul id="ul">
			<li class="cabeca"> Home </li>
			<li class="cabeca"> O que é o GSLS? </li>
			<li class="cabeca"> Quem Somos? </li>
			<li class="cabeca"> Sugira algo! </li>
		</ul>
	</div>
	<div id="iniciar">
		<form action="iniciar.php" method="POST">
			<center> <button class="button"> FRASES </button> </center>
			<center> <img id="frases" src="imagens/frases.png"> </center> 
		</form>
	</div>
	<div class="slider" id="slider">
		<div class="slItems">
			<div class="slItem" style="background-image: url('http://www.mobilizadores.org.br/wp-content/uploads/2015/06/Inclusao-crianca-surda.jpeg');">
				<div class="slText">

                    <div class="jquery-script-ads"><script type="text/javascript"><!--
google_ad_client = "ca-pub-2783044520727903";
/* jQuery_demo */
google_ad_slot = "2780937993";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
</div>
				</div>
			</div>
			<div class="slItem" style="background-image: url('https://ocean1025.files.wordpress.com/2018/04/a109172012_n_americansignlanguage_chasegaewski230.jpg?w=1920&h=1080');">
				<div class="slText">
					
				</div>
			</div>
			<div class="slItem" style="background-image: url('https://www.feac.org.br/wp-content/uploads/2014/11/surdez-1.jpg');">
				<div class="slText">
					
				</div>
			</div>
		</div>
	</div>

	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script src="js/slider.min.js"></script>
	<script>
	$(function(){
		$('#slider').rbtSlider({
			height: '100vh', 
			'dots': true,
			'arrows': true,
			'auto': 3
		});
	});
	</script>
    <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>