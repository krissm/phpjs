<?php 
$title = 'Catch an Event'; 
include(__DIR__ . '/../../src/header.php');
?>

<div id='box1' class='box'>
	<img src='img/me.jpg' alt='Kristoffer Magnusson' />
	<h1>Mitt liv som liten</h1>
	<p id='firstP'>Se vad roligt man kan ha när man är liten.</p>
	<label>Slide Image</label>
		<input id="slideIn" type="button" value="Slide In">	  
		<input id="slideOut" type="button" value="Slide Out">
		<input id="slideToggle" type="button" value="Toggle">
	<br>
	<label>Fade Image</label> 
		<input id="fadeIn" type="button" value="Fade In">
		<input id="fadeOut" type="button" value="Fade Out">
		<input id="fadeToggle" type="button" value="Toggle">
</div>

<?php 
$path= __DIR__; 
include(__DIR__ . '/../../src/footer.php');
?>