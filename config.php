<?php
/**
 * General settings, valid for all page requests
 */
 
// Error reporting
error_reporting(-1);

// Change this to __DIR__ whenever PHP5.3 is supported on production environment
if(!defined('__DIR__')) {
  define('__DIR__', dirname(__FILE__));
}

// The contents of the kmoms navlinks
$data['navkmom'] = array(
  'kmom01'   => array('text'=>'kmom01',  'url'=> 'http://www.student.bth.se/~krmc12/phpjs/kmom1/phpjs/index.php'),
	'kmom02'   => array('text'=>'kmom02',  'url'=> 'http://www.student.bth.se/~krmc12/phpjs/kmom2/phpjs/index.php'),
	'kmom03'   => array('text'=>'kmom03',  'url'=> 'http://www.student.bth.se/~krmc12/phpjs/kmom3/phpjs/index.php'),
	'kmom04'   => array('text'=>'kmom04',  'url'=> 'http://www.student.bth.se/~krmc12/phpjs/kmom4/phpjs/index.php')
);

// The contents of the navbar
$data['navbar'] = array(
  'index'         => array('text'=>'Me',  'url'=>'index.php'),
  'reports'			  => array('text'=>'Reports',  'url'=>'reports.php'),
  'tests'					=> array('text'=>'Tests', 		'url'=>'tests.php'),
	//'bookstore'     => array('text'=>'Bookstore',  'url'=>'bookstore.php'),
	'bookstore2'    => array('text'=>'Bookstore2',  'url'=>'', 'id' => 'bookstore2'),
  'empty'         => array('text'=>'Empty page', 'url'=>'empty.php'),
  'viewsource'    => array('text'=>'Source Code', 'url'=>'viewsource.php')
);
