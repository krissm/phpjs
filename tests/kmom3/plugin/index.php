<?php 
$title = 'Plugin Demo'; 
include(__DIR__ . '/../../src/header.php');
?>
<div id='demo'>
<h1>SwitchSlide Demo</h1>
<p>With the plugin 'SwitchSlide' you can have any number of slideshows take 
turn at being active.</p>
<p>This can be useful if you want the user to focus on one 
slideshow at the time.</p>
	<div id='box1' class='box'>
		<h1>Slideshow  1</h1>
		<div class='slideshow'>
			<img class='img1' src='img/me.jpg' alt='Kristoffer Magnusson' />
			<img src='img/memirror1.png' alt='Kristoffer Magnusson' />
			<img src='img/memirror.png' alt='Kristoffer Magnusson' />
		</div>	
	</div>
	
	<div id='box2' class='box'>
		<h1>Slideshow 2</h1>
		<div class='slideshow'>
			<img class='img1' src='img/boilerplate.jpg' alt='Kristoffer Magnusson' />
			<img src='img/loader.jpg' alt='Kristoffer Magnusson' />
			<img src='img/mvclogo.jpg' alt='Kristoffer Magnusson' />
			<img src='img/LoadingCircle_firstani.gif' alt='Kristoffer Magnusson' />
			<img src='img/windows_vista_loading.gif' alt='Kristoffer Magnusson' />
		</div>
	</div>
</div>
<div>
<h1>How To</h1>
	<ol>
		<li><a href="jquery.switchSlide.js" target="_blank"><strong>Download</strong></a> 
		the 'SwitchSlide' plugin and include it after your jQuery library.</li>
		<li>Add any number of <strong>image tags</strong> inside a <strong>container element
		</strong> e.g. a 'div'. Repeat this for	as many slideshows as you wish to have.</li> 
		<li>Set the same <strong>class attribute</strong> on all these container elements 
		e.g. class='containers'.</li> 
		<li>The only thing left to do now is to call the <strong>method 'switchSlide'</strong> on your 
		collection of slideshows, i.e. $(.containers).switchSlide(), 
		and your slideshows will take turn at being active.</li>
		<li>You can change the duration between each image change by passing in an object literal
		as a parameter with the attribute 'duration' and a value 
		e.g. $(.containers).switchSlide(<strong>{'duration':1000}</strong>)</li> 
	</ol>
</div>

<?php 
$path= __DIR__; 
$d = explode('.', trim($path,'/'));
$srcUrl = '../../../src/source.php?dir=' . end($d) . '&amp;file='.basename($_SERVER['PHP_SELF']) . '#file';
?>

<footer id='footer'>
<p><em>"Hey Luke, use the <a href='<?=$srcUrl?>'>source</a>."</em></p>

</footer>
<script src='../../js/jquery.js'></script>
<script src='../../js/kriss.js'></script>
<script src='jquery.switchSlide.js'></script>
<script src='main.js'></script>
</body>
</html>