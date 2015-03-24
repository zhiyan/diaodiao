<?php
    
    require_once("config.php"); 

    $step = intval($_GET["step"]);
    $id = intval($_GET["id"]);    

    //$wechat_auth = "https://open.weixin.qq.com/connect/oauth2/authorize?appid=" . $wxconfig->app_id .  "&redirect_uri=" . urlencode($wxconfig->app_url[$step]) . "&response_type=code&scope=snsapi_userinfo&state=" . $id . "#wechat_redirect";
    
    $wechat_auth = $wxconfig->app_url[$step] . "?state=" . $id;


    Header("HTTP/1.1 301 Moved Permanently");
    Header("Location: " . $wechat_auth);
?>
