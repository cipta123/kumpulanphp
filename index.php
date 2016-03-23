<?php 

try {

$handler = new PDO('mysql:host=127.0.0.1;dbname=srs_pendas', 'root', '');
$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {

echo $e->getMessage();
die();
}

//$query = $handler->query('SELECT * FROM m_data_pribadi');

//if($query->rowCount()) {
//	echo $query->rowCount();
//} else {
	//echo 'no results';
//}