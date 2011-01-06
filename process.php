<?php
if (!$_POST["data"]) {
	echo "Error";
	exit;
}


// decode JSON data received from AJAX POST request
$data = $_POST['data'];
$json = str_replace('\\','',$data);
$decoded = json_decode($json);

echo '<pre>';
	print_r($decoded);
echo '</pre>';


foreach($decoded->items as $item)
{
	$col = preg_replace('/[^\d\s]/', '', $item->column);
	
	$column_id = ($col == 0 ? 1 : $col);    // check if column id has a value, if it doesnt set the value to 1
	$panel_id = preg_replace('/[^\d\s]/', '', $item->id);
	$sort_no = $item->order;
	$table = $item->table;
	
	// DO SOME DATABASE STUFF HERE
	
	// heres some fake databse stuff showing the result of what could have been.
	echo 'column_id: '.$column_id;
	echo '<br />';
	echo 'panel: '.$panel_id;
	echo '<br />';
    echo 'sort_no: '.$sort_no;
    echo '<br />';
    echo 'table: '.$table;
    echo '<hr />';
    

}


echo "success";

?>