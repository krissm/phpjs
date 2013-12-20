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
		<ul>
				<li><a href='tests/template/index.php' target='blank'>Template</a></li>
				<li><a href='http://jsfiddle.net/krissm/hvTEK/' target='blank'>Template in JSFiddle</a></li>
				<li><a href='tests/resize-element/index.php' target='blank'>Resize Element</a></li>
				<li><a href='tests/css3-transitions/index.php' target='blank'>Moving an Element</a></li>
				<li><a href='tests/css3-2d-transformations-with-transitions/index.php' target='blank'>Transforming an Element</a></li>
		</ul>			
</div>
EOD;

// Hand over to the template engine.
include(__DIR__."/theme/template.php"); 