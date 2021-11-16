<?php

    header("Access-Control-Allow-Origin: *");
	header('Content-type:application/json;charset=utf-8');
	header("permissions-policy: interest-cohort=()");
	//cookie問題參考https://www.itread01.com/content/1549400944.html

    $url = "https://48ff-2001-b011-e004-3012-dcf5-e9d9-5b79-6735.ngrok.io/readjson";
    $resutlt1 = file_get_contents($url);

	echo $resutlt1; 

?>