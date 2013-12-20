<?php
/**
 * A page to show all the kmom reports.
 */
include("config.php");

// Create the data array which is to be used in the template file.
$data['title'] = "Reports";
$data['meta_description'] = "All reports collected on one page.";
$data['main'] = <<<EOD
<h1>Reports</h1>
	<article class="report">
		<h2>Kmom01: Getting Started with JS</h2>

		<h3>Vilken utvecklingsmiljö använder du?</h3>
		<p>I’m using eclipse (kepler) with an aptana plugin (for js, css and html ). Eclipse also has a built in github interface. The browser I'm using is chrome with its developer tools. For production environment I use wampserver and for employment environment I use bth's server. I use putty to upload code from my github to the bth server.   	</p>
		
		<h3>Hur väl känner du till JavaScript?</h3>
		<p>Not at all. I’m a complete beginner.</p>

		<h3>Vilken uppfattning har du av JavaScript så här långt?</h3>
		<p>JS seems fairly straight forward and I like that it is very similar to php in many ways. However, like always when you learning a new syntax it is hard and confusing; lots of mix ups and a lot easier to understand than to do it yourself. </p>

		<h3>Berätta vilka exempelprogram du gjorde och länka till dem.</h3>
		<h4>Resize elements:</h4>
		<p>The clientHeight and clientWidth include padding. The offsetHeight offsetWidth include padding and border. While the height and width properties does not include padding, borders, or margins; it sets the width of the area inside the padding, border, and margin of the element.</p>
		<p>This made it really hard to manage the resizing. The most confusing thing is  that; at first page load the “target.clientWidth’ and ‘target.clientHeight’ is written out in the textboxes and they also print out as the same size when you write them out in the log, but once you press the resize button again it says that previous size is somewhat bigger. This is because you change the height and width excluding padding, border and margin, so the clientHeight will now be higher by the amount of the padding. But I don’t understand why the height and width printed in the textboxes don’t change since they use the same functions (i.e. clientWidth and clientHeight)?  I know now that it is because they are outside of the event function so they don’t reset when the button is clicked. </p>
		
		<h4>Move around an element with the keyboard with transition styling:</h4>
		<h4>Transforming elements with transform styling:</h4>

		<h3>Beskriv hur du gjort din baddie och vilka konster den kan.</h3>
		<p>I copied the code but got a new baddie. It took me long enough just to understand what made him do everything so I didn’t do the extra task. </p>
	</article>
EOD;

// Hand over to the template engine.
include(__DIR__."/theme/template.php"); 