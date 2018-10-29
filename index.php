<?php 
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
	require('simple_html_dom.php');
	$html = file_get_html('https://double-bitcoins-legit.com/');
	$table = $html->find('table', 0);
	$rowData = array();
	foreach($table->find('tr') as $row) {
	    $flight = array();
	    $flight[] = $row->outertext;
	    $rowData[] = $flight;
	}
	print json_encode($rowData);
 ?>