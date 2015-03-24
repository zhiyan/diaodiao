<!DOCTYPE html>

<html>
<head>

<meta charset="utf-8">		
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=640,minimum-scale=0.5,maximum-scale=1.0,user-scalable=0,target-densitydpi=high-dpi">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">

<title>你懂我吗</title>

<link rel="icon" href="http://a.diaox2.com/cms/diaodiao/assets/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="exam.css" />

<script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>

<?php

    require_once("jsapi.php");
    
?>
<script>
    var fx_url = "http://g2.diaox2.com/exam/exam.php?step=0";
    var fx_title = "测测你的朋友多懂你";
    var fx_img = "http://a.diaox2.com/exam/img/icon.jpg";
    var fx_desc = "许下你的羊年愿望，测测你的朋友们多懂你";

    wx.ready(function(){
    
        wx.onMenuShareAppMessage({
          title: fx_title,
          desc: fx_desc, 
          link: fx_url,
            imgUrl:fx_img 
         });

    wx.onMenuShareTimeline({
      title: fx_title,
      desc: fx_desc, 
      link: fx_url,
      imgUrl:fx_img 
    });

    wx.onMenuShareQQ({
      title: fx_title,
      desc: fx_desc, 
      link: fx_url,
      imgUrl:fx_img 
    });
  
    wx.onMenuShareWeibo({
      title: fx_title,
      desc: fx_desc, 
      link: fx_url,
      imgUrl:fx_img 
    });
            
   wx.showOptionMenu(); 
    });
</script>

<style>

    body {background:#f6f6f6}

	section {width:100%;}
	section#s_0 {display:block}

	.pager_wish {overflow:hidden;height:128px;width:100%;text-align:center;background:#eae7e7;position:fixed;bottom:0}
	.pager_wish span {text-align:center;background:#eb467a;font-size:34px;width:40%;line-height:86px;height:86px;color:#FFF;margin:20px 15px;display:inline-block;
				-webkit-border-radius: 4px;
				border-radius: 4px;
	}

	 span.pager_wish_fav {background-color:#23cdb7}

	 span.pager_wish_down {}
	
	h1 {margin-left:40px;color:#898989;font-weight:normal;font-size:34px;line-height:44px}
    div.answer {margin-left:40px;padding-left:45px;font-size:28px;line-height:36px;color:#e75280;background:url(http://a.diaox2.com/exam/img/check5.png) no-repeat left center}

    div.sep {margin:15px 40px;height:1px;background-color:#ccc;overflow:hidden}
    
    div.banner {position:relative;margin-bottom:90px;}
    
    div.user {position:absolute;bottom:-40px;left:40px}
   
    div.userimg {float:left;width:120px;height:120px;background:#CCC;overflow:hidden;border:2px solid #FFF} 
    
    div.userinfo {float:left;margin-left:32px}

    div.userinfo_1 {font-size:36px;line-height:76px;color:#FFF;text-shadow:2px 2px 2px #000}
    div.userinfo_2 {margin-top:18px;font-size:28px;color:#999;}
</style>


</head>
<body>

<!-- 首页  -->
<section id="s_0">
		<div class="banner">
            <img src="http://a.diaox2.com/exam/img/wish_bg.jpg" style="width:100%">
            <div class="user">
                <div class="userimg">
                    <img id="userhead" src="about:blank" width="118px">
                </div>
                <div class="userinfo">
                    <div id="userinfo_1" class="userinfo_1">愿望清单</div>
                    <div class="userinfo_2">By 「调调」</div>
                </div>
                <br clear>
            </div>
        </div>
        
</section>
<div id="favor" onclick="hideFavor();"></div>
<img id="favor1" src="http://a.diaox2.com/exam/img/favor.png" border="0"  onclick="hideFavor();">
<div id="juhua" class="load-container load8"><div class="loader"></div></div>
<?php
 $id = intval($_GET['id']);
?>
<script>

	//题目数据
	var examData = null;
	//答案数据
	var answerData = [0,0,0,0,0,0,0,0,0,0];
	//用户信息
    var examId = "<?php echo $id ?>";
    var userhead = "";
    var nick = "";
	/*
		从服务器端读取题目数据JSON	
	*/
	function loadExamData(){

        showLoad();	
        $.ajax({
            url:"data.php?action=get&id=" + examId,
            dataType:'json',
            success:function(json){

                examData = $.parseJSON(json['exam_json']);
                userhead = json['head'];
                nick = json['nick'];
                hideLoad();
                renderPage();
            },error:function(data){
                hideLoad();
                alert("愿望太多啦，网络有些拥挤。\n请稍候再试。");
            }
        });	
	
	}

    	
	
	/*
		得到用户得分排名
	*/
	function getScoreRank(){
	}
    
    function showLoad(){
        $("#juhua").css("display","block");    
    }
    function hideLoad(){
        $("#juhua").css("display","none");    
    }
	
	

	/*
		生成通用banner
	*/
	function getBanner(){
	}

    function showFavor(){
        $("#favor").css("display","block");    
        $("#favor1").css("display","block");    
    }
    
    function hideFavor(){
        $("#favor").css("display","none");    
        $("#favor1").css("display","none");    
    }
     
    function showWish(){
        var url = "http://g2.diaox2.com/exam/wish.php?id=" + examId;
        window.location.href = url;     
    }


	/*
		生成通用进度条
	*/
	function getProgressBar(){
	
	}

	/*
		动态创建每个section的内容
	*/
    function renderPage(){
        
        $("#userhead").attr("src",userhead);
        $("#userinfo_1").html(nick + "的愿望清单");
          
        $.each(examData,function(i,e){
             var question = (i+1) + '. ' + e['subject'];
             var answer = e['options'][e['goal']]['label'];
            
             if(/以上都/.test(answer)) answer = "你猜！";

             var html = '<div>';
                
                html = html + '<h1>' + question + '</h1>';
                html = html + '<div class="answer">' + answer + '</div>';
                
                if (i!=9) html = html + '<div class="sep"></div>';
             
             html = html + '</div>';
             $(html).appendTo($("#s_0"));
        });
		
        var html = '<div class="gap"></div><div class="pager_wish">';

			html = html 
					+ '<span class="pager_wish_fav" onclick="javascript:showFavor()">收藏到微信</span>'
					+ '<span class="pager_wish_down" onclick="javascript:download();">下载调调<img src="http://a.diaox2.com/exam/img/littleicon.png" style="vertical-align:middle;border:0;margin-left:16px"></span>';
            html = html + "</div>";

            $(html).appendTo($("#s_0"));
		
    }


function showSection(index){
    $("section").css("display","none");
    $("#s_"+index).css("display","block");
}
function download(){
    window.open("http://a.app.qq.com/o/simple.jsp?pkgname=com.diaox2.android","_blank" );
}	
    
    loadExamData();
</script>

</body>

</html>
