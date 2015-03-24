<?php

    require_once("config.php");
    function msectime() {
        list($tmp1, $tmp2) = explode(' ', microtime());
        return (float)sprintf('%.0f', (floatval($tmp1) + floatval($tmp2)) * 1000);
    }


    $code = $_GET['code'];
    $state = $_GET['state'];

    $t1 = msectime();

    $auth_json = $wxconfig->getAccessToken($code);

    $userinfo = $wxconfig->getUserInfo($auth_json);

    $t2 = msectime() - $t1;

    if ($t2>1000) {
        error_log("WeixinAuthTime : " . $t2 . "ms",0);
    }


?>
