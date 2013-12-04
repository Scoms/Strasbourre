<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<?php 
		echo $this->Html->charset();
		echo $this->Html->script("jquery");

		echo $this->Html->css("Gmap");
		echo $this->Html->css("global");

	?>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300' rel='stylesheet' type='text/css'>
	<title>
		<?php echo ROOT ?> 
	</title>
</head>
<body>
	<h1>Strasbourre</h1>
		<?php 
			echo $this->Session->flash(); 
			echo $this->fetch('content');
			echo WWW_ROOT; 
		?>
	<footer>
		Powered by FactoMiner
	</footer>
</body>
</html>
