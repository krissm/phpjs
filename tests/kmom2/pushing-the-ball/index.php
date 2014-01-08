<?php
$title = 'Pushing the ball'; 
include(__DIR__ . '/../../src/header.php');
?>

<div id='flash'>
	<p id='text' class='red'>Hi this text shold be replaced when page and DOM is loaded.</p>
	<div id='ball'></div>
</div>


<?php
$path= __DIR__; 
include(__DIR__ . '/../../src/footer.php');
?>