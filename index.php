<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Integracja różnych źródeł danych opisujących wpływ na wypadki drogowe</title>
	<link rel="stylesheet" href="vendor/components/jqueryui/themes/redmond/jquery-ui.min.css">
	<script src="vendor/components/jquery/jquery.min.js" type="text/javascript"></script>
	<script src="vendor/components/jqueryui/ui/jquery-ui.js" type="text/javascript"></script>
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
    </script>
    <style type="text/css">
    </style>
</head>
<body>

<h1>Integracja różnych źródeł danych opisujących wpływ na wypadki drogowe</h1>
<div id="tabs">
<?php 
	$tabs = array(
		'Liczby' => 'counts',
		'Czas' => 'times',
		'Lokalizacja - Polska' => 'pl',
		'Świat' => 'world',
		'Wiek kierujących' => 'ages',
		'Warunki pogodowe' => 'weather',
	);
?>
  <ul>
  	<?php 
  		foreach($tabs as $tabLabel => $tabKey):
  	?>
    <li><a href="#tabs-<?=$tabKey?>"><?=$tabLabel?></a></li>
  	<?php endforeach;?>
  </ul>
  <?php 
  		foreach($tabs as $tabKey):
  ?>
  <div id="tabs-<?=$tabKey?>">
  	<?php include 'tabs/' . $tabKey . '.php'; ?>
  </div>
  <?php endforeach;?>
</div>

<script>
  $(window).load(function() {
    $( "#tabs" ).tabs();
  });
</script>
  
<h2>Projekt z przedmiotu Zaawansowane Techniki Integracji Systemów</h2>
<h3>IEiT, AGH 2014</h3>
<h3>Dykacz Mateusz, Frącz Wojciech</h3>
  
</body>
</html>