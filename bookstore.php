<?php
/**
 * An empty page to show off how it looks.
 */
include("config.php");

// Create the data array which is to be used in the template file.
$data['title'] = "Bookstore";
$data['meta_description'] = "An online bookstore";
$data['main'] = "bookstore";

$css = "<link id='lessAjax' href='bookstore/shopping-cart-using-jquery-ajax/style.less' type='text/css' rel='stylesheet/less'>";

$headjs = "
<script src='js/less.min.js'></script>
<script src='js/modernizr.js'></script>
					";
$footerjs = "
<script src='js/jquery.js'></script>
<script src='js/kriss.js'></script>
<script id='jsAjax' src='bookstore/shopping-cart-using-jquery-ajax/main.js'></script>
					";

// Hand over to the template engine.
include(__DIR__."/theme/template.php");