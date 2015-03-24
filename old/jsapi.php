<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<?php
require_once("config.php"); 
$jsticket = $wxconfig->getJsApi();
//var_dump($jsticket); 
?>
<script>
wx.config({
debug: false,
appId: 'wx7037e2695533d929',
timestamp: <?php echo $jsticket['timestamp']?>,
nonceStr: '<?php echo $jsticket['noncestr']?>',
signature: '<?php echo $jsticket['signature']?>',
jsApiList: [
'checkJsApi',
'onMenuShareTimeline',
'onMenuShareAppMessage',
'onMenuShareQQ',
'onMenuShareWeibo',
'hideOptionMenu',
'showOptionMenu',
'hideMenuItems',
'showMenuItems',
'hideAllNonBaseMenuItem',
'showAllNonBaseMenuItem'
]
});
</script>
