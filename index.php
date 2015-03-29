<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="estilo.css">
<title>
Tutoriales WebCursos
</title>
<body>
<div id="linea">
</div>
<div id="header">
	<div id="logos">
			<a class="logo" href="http://webcursos.uai.cl/">
				<img src="images/nuevo-logo-wcurso_transp2.gif">
			</a>
		<div class="logo2">
		</div>
	</div>
</div>

<div id="linea">
</div>

<div id="banner">
</div>

<div id="linea2">
</div>

<div id="main">
	<div id="container1" class="clearfix">
		<a class="dest cat1" href="profesores.php">
 			<img width="256" height="256" src="images/profesoresg.png"></img>
 			<div></div>
		</a>
		<a class="dest cat2" href="alumnos.php">
			<img width="256" height="256" src="images/alumnosg.png"></img>
    		<div></div>
		</a>
		<a class="dest cat3" href="coordinadores.php">
			<img width="256" height="256" src="images/coordinadoresg.png"></img>
			<div></div>
		</a>
		<a class="dest cat4" href="administrativos.php">
			<img width="256" height="256" src="images/administrativosg.png"></img>
			<div></div>
		</a>
	</div>
	<div id="separador">
	</div>
	<div id="container3">
		<a href="faq.php">
		<img src="images/faq.png">
		</a>
	</div>
	<div id="separador">
	</div>
	<div id="container2">
		<table width="1024px" height="100%">
		<tr>
			<td class="imagen" colspan="2"></td>
		</tr>
		<tr>
		<?php	
			$feedURL = 'http://gdata.youtube.com/feeds/api/users/UCj20d97aKjQchHl38yLYFCg/uploads?max-results=2';
			$sxml = simplexml_load_file($feedURL);
			foreach ($sxml->entry as $entry) {

     			$media = $entry->children('media', true);
      			$watch = (string)$media->group->player->attributes()->url;
     
				$a = explode("=", $watch);
				$b = explode("&",$a[1]);
		?>
			<td width="50%" height="80%">
				<iframe width="500" height="280" src="//www.youtube.com/embed/<?php echo $b[0];?>" frameborder="0"></iframe>
			</td>
		<td>
		<?php    
		} 
		?>
		</tr>
		</table> 
	</div>
</div>
<div id="linea2">
</div>

<div id="foot">
	<div class="footer">&copy; 2014 Universidad Adolfo Ib&aacute;&ntilde;ez</div>
	<div id="social">
		<div class="facebook">
			<a href="https://www.facebook.com/u.adolfo.ibanez">
			<img width="50" height="50" src="images/facebook.png">
			</a></div>
		<div class="twitter">
			<a href="https://twitter.com/Uai_Comunica">
		<img width="50" height="50" src="images/twitter.png">
		</a></div>
	</div>
</div>
</body>