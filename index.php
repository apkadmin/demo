<?php 
 header("Access-Control-Allow-Origin: *");
function wh_log($log_msg)
{
    $log_file_data = 'log.log';
    file_put_contents($log_file_data, $log_msg . "\n", FILE_APPEND);
}

if(isset($_GET['mess'])){
	wh_log($_GET['mess']);
	echo $_GET['mess'];
}

 ?>