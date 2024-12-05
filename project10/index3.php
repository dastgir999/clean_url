<?php

function URL($key = null){
		$arr= explode("/",trim($_GET['url'],"/"));


	if(!is_numeric($key))
	return $arr;

    return $arr[$key] ?? '';

}




define('ROOT', 'http://localhost/project10');

echo "<pre>";

print_r(URL());

echo "page name is:".URL(0);


echo "</pre>";


?>

<img src="<?=ROOT?>/one.png">




