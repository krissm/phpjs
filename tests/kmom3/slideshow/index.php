<?php 
$title = 'Catch an Event'; 
include(__DIR__ . '/../../src/header.php');
?>

<div id='box1' class='box'>
	<h1>My Slideshow</h1>
	<p>Click on an image to change it.</p>
	<div class='slideshow'>
		<img id='img1' src='img/me.jpg' alt='Kristoffer Magnusson' />
		<img id='img2' src='img/boilerplate.jpg' alt='Kristoffer Magnusson' />
		<img id='img3' src='img/loader.jpg' alt='Kristoffer Magnusson' />
		<img id='img4' src='img/memirror1.png' alt='Kristoffer Magnusson' />
		<img id='img5' src='img/memirror.png' alt='Kristoffer Magnusson' />
		<img id='img6' src='img/mvclogo.jpg' alt='Kristoffer Magnusson' />
		<img id='img7' src='img/LoadingCircle_firstani.gif' alt='Kristoffer Magnusson' />
		<img id='img8' src='img/windows_vista_loading.gif' alt='Kristoffer Magnusson' />
	</div>
</div>

<?php 
$path= __DIR__; 
include(__DIR__ . '/../../src/footer.php');
?>