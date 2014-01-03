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

	<article class="report">
		<h2>Kmom02: Programmera med JS</h2>
		<p>It was hard to decide how much time to spend on this course moment. To really learn these things about javascript I would have to spend more time on each task, but I think it is better to move on and come back to these tasks when I need them. I have read all the literature, done all the tasks and I still find it very hard to remember all the important things. Here are some of the things I want to remember:</p>
		
		<h3>Literals and identifiers</h3>
		<p>JavaScript – the definitive guide say that any JavaScript value that is not a number, a string, a boolean, or null or undefined is an object. But when trying the ‘typeof’ function in my test program the datatypes I see are: number, string, boolean, object, undefined and function. The MDN says that ‘null’ and ‘function’ are both objects. So this is a little bit confusing at the moment, especially since all datatypes are supposed to be ‘objectbased datatypes’ according to <a href="http://dbwebb.se/javascript/kmom02/programmera-javascript#datatyper">http://dbwebb.se/javascript/kmom02/programmera-javascript#datatyper</a>. </p>

		<h3>Functions</h3>
		<p>Functions has an argument list. If you call a function with fewer arguments than the argument list specify the extra arguments get set to ‘undefined’. You can use this the give ‘default’ values with the operator ||. You can also handle a variables list with the identifier ‘arguments’ which is available inside the function.</p>
		<p>JavaScript doesn’t have ‘block-scope’, but ‘function-scope’.</p>
		<p>In a closure an inner function has access to non-local variables which exists where the function is defined.</p>

		<h3>Objects</h3>
		<p>Objekts are a collection of name value pair which are called ’properties’. The reference a property use the dot operator. The easiest way to create an object is with the ’object-literal {}.  </p>

		<h3>Arrays</h3>
		<p>There are no ’associative arrays in JavaScript, instead you have to use an object. You can use the ‘array-literal’ [] to create and work with arrays. You can expand an array dynamically by defining more elements in specific positions. A position without a value will have the value ‘undefined’.</p> 

		<h3>Modules</h3>
		<p>Within the Module pattern, variables or methods declared are only available inside the module itself thanks to closure. Variables or methods defined within the returning object however are available to everyone. It took me a long time to understand why modernizer passed in ‘this’ and ‘this.document’, while jQuery passed in ‘window’. But I learned that you can pass in ‘objects’ so that you have access to them using the name of the parameter. The ‘undefined’ variable I learned is used to ensure that the ‘undefined’ variable really is ‘undefined’ because apparently you can set it to something else if you like. It also took a while to understand  that the modernizer example and jquery example really does the same thing even if jquery sets the public interface object directly to the ‘window’ object while modernizer return it to the ‘window’ object.  </p>
		<p>Putting a function in brackets will execute it, so writing $(function(){});, is the same thing as writing $(document).ready().</p>

		<h3>Callbacks</h3>
		<p>A function without a name is often called an ‘anonymous function’ or ‘lambda function’. An ‘anonymous function’ is often used for ‘callbacks’. E.g. when using the addEventListener() function you send in a function to be executed as a second argument when the event of the first argument occurs on the element calling the ‘addEventListener()’. </p>
		<p>Because functions are first-class objects in JavaScript, we can treat functions like objects, so we can pass functions around like variables and return them in functions and use them in other functions. When we pass a callback function as an argument to another function, we are only passing the function definition. We are not executing the function in the parameter. We aren’t passing the function with the trailing pair of executing parenthesis () like we do when we are executing a function. And since the containing function has the callback function in its parameter as a function definition, it can execute the callback anytime. This allows us to execute the callback functions at any point in the containing function.
		<a href="http://javascriptissexy.com/understand-javascript-callback-functions-and-use-them/">http://javascriptissexy.com/understand-javascript-callback-functions-and-use-them/</a></p>
		
		<h3>Prototypes and inheritance</h3>
		<p>I’m not sure whether I’ meant to use object.create(oldObject)’ from now on when creating new objects. It is not clear how important random advice like this is and how well it will work with other random advice. So I will leave this for now and go over it later when I read more about how to use ‘prototypes’.</p> 

		<h3>My js functions</h3>
		<ul>
			<li>Reflection: displays the type of the object</li>
			<li>Properties: display properties (name and values) of an object</li>
			<li>Dump: lists the property names of an object</li>
			<li>deleteLESSFromLocalStorage: Delete cached LESS files from local storage. But it can delete any files from local storage. </li>
			<li>Random: generate a random number with min and max as parameters.</li>
			<li>getOffset: get the position of an element (which you send in as a parameter). It returns an object with the properties top and left. </li>
		</ul>
	</article>
EOD;

// Hand over to the template engine.
include(__DIR__."/theme/template.php"); 