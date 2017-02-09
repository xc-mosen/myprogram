<?php
//方法一：
function create_password($pw_length = 8){
	$randpwd = '';
	for ($i = 0; $i < $pw_length; $i++){
		$randpw .= chr(mt_rand(33, 126));
	}
	return $randpwd;
}
?>
