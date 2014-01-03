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
		<h2>KMOM 1</h2>
		<ul>
				<li><a href='tests/template/index.php' target='blank'>Template</a></li>
				<li><a href='http://jsfiddle.net/krissm/hvTEK/' target='blank'>Template in JSFiddle</a></li>
				<li><a href='tests/resize-element/index.php' target='blank'>Resize Element</a></li>
				<li><a href='tests/css3-transitions/index.php' target='blank'>Moving an Element</a></li>
				<li><a href='tests/css3-2d-transformations-with-transitions/index.php' target='blank'>Transforming an Element</a></li>
		</ul>
		<h2>KMOM 2</h2>
		<ul>
			<li><a href='tests/litterals-and-types/index.php' target='blank'>litterals-and-types</a></li>
			<li><a href='tests/datatypes-and-values-using-numbers/index.php' target='blank'>datatypes-and-values-using-numbers</a></li>
			<li><a href='tests/datatypes-and-values-using-strings/index.php' target='blank'>datatypes-and-values-using-strings</a></li>
			<li><a href='tests/throwing-dice-using-functions/index.php' target='blank'>throwing-dice-using-functions</a></li>
			<li><a href='tests/pushing-the-ball/index.php' target='blank'>pushing-the-ball</a></li>
			<li><a href='tests/boulder-dash-with-arrays/index.php' target='blank'>boulder-dash-with-arrays</a></li>
			<li><a href='tests/dates/index.php' target='blank'>dates</a></li>
			<li><a href='tests/reg/index.php' target='blank'>reg</a></li>
			<li><a href='tests/error-handling/index.php' target='blank'>error-handling</a></li>
			<li><a href='tests/roulette/index.php' target='blank'>roulette</a></li>
		</ul>
		
</div>
EOD;

// Hand over to the template engine.
include(__DIR__."/theme/template.php"); 