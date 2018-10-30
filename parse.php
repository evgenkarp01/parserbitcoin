<?php
	require('simple_html_dom.php');
	$html = file_get_html('https://double-bitcoins-legit.com/');
	$table = $html->find('table', 0);
	$rowData = array();
	foreach($table->find('tr') as $row) {
	    $rowData[] = $row->outertext;
	}
	print json_encode($rowData);
 ?>