<?php
$db = new SQLite3( 'db.sqlite3' );
$method = $_SERVER['REQUEST_METHOD'];
$request = explode( '/', substr( @$_SERVER['PATH_INFO'], 1 ));

switch($method)
{
case 'GET':
  switch($request[0]){
  case 'temperature':
	if($request[1] == 'current')
	  $result = $db->query( 'SELECT * FROM log ORDER BY time DESC LIMIT 1;' );
	else
	  $result = $db->query( 'SELECT * FROM log;' );
	while( $row = $result->fetchArray(SQLITE3_ASSOC) ){
	  echo json_encode($row)."\r\n";
	}
	break;
  default:
	echo "bad parameters!\r\n";
  }

  break;
case 'POST':
  $param = $_POST;
  $result = $db->query( 'INSERT INTO log ( time, t1, t2 ) VALUES (' .$param['date']. ',' .$param['t1']. ',' .$param['t2']. ')' );
  break;
default:
}
?>
