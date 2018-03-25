<?
	$obj = json_decode(@file_get_contents("php://input")); 
	$my_file = 'file.txt';
	$handle = fopen($my_file, 'a') or die('Cannot open file:  '.$my_file);
	fwrite($handle, $obj);
	fclose($handle);
?>
