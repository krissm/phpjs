<?php 
$title = 'Catch an Event'; 
include(__DIR__ . '/../../src/header.php');
?>

<div id='box1' class='box'>
	<img src='img/me.jpg' alt='Kristoffer Magnusson' />
	<h1>Mitt liv som liten</h1>
	<p id='firstP'>Se vad roligt man kan ha när man är liten.</p>
	<label>Image Height</label>
		<input id="moreHeight" type="button" value="+">	  
		<input id="lessHeight" type="button" value="-">
	<br>
	<label>Image Width</label> 
		<input id="moreWidth" type="button" value="+">
		<input id="lessWidth" type="button" value="-">
</div>

<?php 
$path= __DIR__; 
include(__DIR__ . '/../../src/footer.php');
?>