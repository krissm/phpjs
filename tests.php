<?php
/**
 * A page to show all the kmom reports.
 */
include("config.php");

// Create the data array which is to be used in the template file.
$data['title'] = "JS Tests";
$data['meta_description'] = "All tests collected on one page.";

$data['main'] = <<<EOD
<div id='test_navbar' style=float:left;>
		<h1>JS Tests</h1>
		<h2>KMOM 1 - Getting Started with JS</h2>
		<ul>
				<li><a href='tests/kmom1/template/index.php' target='blank'>Template</a></li>
				<li><a href='http://jsfiddle.net/krissm/hvTEK/' target='blank'>Template in JSFiddle</a></li>
				<li><a href='tests/kmom1/resize-element/index.php' target='blank'>Resize Element</a></li>
				<li><a href='tests/kmom1/css3-transitions/index.php' target='blank'>Moving an Element</a></li>
				<li><a href='tests/kmom1/css3-2d-transformations-with-transitions/index.php' target='blank'>Transforming an Element</a></li>
		</ul>
		<h2>KMOM 2 - Programmera med JS</h2>
		<ul>
			<li><a href='tests/kmom2/litterals-and-types/index.php' target='blank'>litterals-and-types</a></li>
			<li><a href='tests/kmom2/datatypes-and-values-using-numbers/index.php' target='blank'>datatypes-and-values-using-numbers</a></li>
			<li><a href='tests/kmom2/datatypes-and-values-using-strings/index.php' target='blank'>datatypes-and-values-using-strings</a></li>
			<li><a href='tests/kmom2/throwing-dice-using-functions/index.php' target='blank'>throwing-dice-using-functions</a></li>
			<li><a href='tests/kmom2/pushing-the-ball/index.php' target='blank'>pushing-the-ball</a></li>
			<li><a href='tests/kmom2/boulder-dash-with-arrays/index.php' target='blank'>boulder-dash-with-arrays</a></li>
			<li><a href='tests/kmom2/dates/index.php' target='blank'>dates</a></li>
			<li><a href='tests/kmom2/reg/index.php' target='blank'>reg</a></li>
			<li><a href='tests/kmom2/error-handling/index.php' target='blank'>error-handling</a></li>
			<li><a href='tests/kmom2/roulette/index.php' target='blank'>roulette</a></li>
		</ul>
		<h2>KMOM 3 - Grunderna i jQuery</h2>
		<ul>
			<li><a href='tests/kmom3/catchEvents/index.php' target='blank'>Catch an Event with jQuery</a></li>
			<li><a href='tests/kmom3/propagation/index.php' target='blank'>Stop Propagation with jQuery</a></li>
			<li><a href='tests/kmom3/addAndDeleteElements/index.php' target='blank'>Add and Delete Elements with jQuery</a></li>
			<li><a href='tests/kmom3/resizeElements/index.php' target='blank'>Resize Elements with jQuery</a></li>
			<li><a href='tests/kmom3/slideAndFade/index.php' target='blank'>Slide and Fade with jQuery</a></li>
			<li><a href='tests/kmom3/lightbox/index.php' target='blank'>Lightbox with jQuery</a></li>
			<li><a href='tests/kmom3/gallery/index.php' target='blank'>Gallery with jQuery</a></li>
			<li><a href='tests/kmom3/slideshow/index.php' target='blank'>Slideshow with jQuery</a></li>
			<li><a href='tests/kmom3/plugin/index.php' target='blank'>Plugin Demo</a></li>
		</ul>
		<h2>KMOM 4 - Ajax and JSON with jQuery</h2>
		<ul>
			<li><a href='tests/kmom4/marvin/index.php' target='_blank'>Quotes from Marvin using Ajax</a></li>
			<li><a href='tests/kmom4/login-and-set-php-session-though-ajax/index.php' target='_blank'>Login and maintain session though Ajax</a></li>
			<li><a href='tests/kmom4/shopping-cart-using-jquery-ajax/index.php' target='_blank'>A shopping cart using jQuery and ajax</a></li>
			<li><a href='tests/kmom4/one-page-checkout-using-ajax/index.php' target='_blank'>One page checkout using ajax</a></li>
		</ul>
</div>
EOD;

// Hand over to the template engine.
include(__DIR__."/theme/template.php"); 