<!DOCTYPE html>
<html>
<head>

<?php
    $id = intval($_GET['id']);
    $head = $_GET['head'];
    $nick = $_GET['nick'];
?>

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
    var fx_url = "http://g2.diaox2.com/exam/exam.php?step=1&id=<?php echo $id; ?>";
    var fx_title = "测测你有多懂我？<?php echo $nick; ?>的羊年愿望清单";
    var fx_img = '<?php echo $head;?>';
    var fx_desc = "答过60分，我们还是朋友";

    wx.ready(function(){
    
        wx.onMenuShareAppMessage({title: fx_title,desc: fx_desc,link: fx_url,imgUrl:fx_img});

        wx.onMenuShareTimeline({title: fx_title,desc: fx_desc,link: fx_url,imgUrl:fx_img});

        wx.onMenuShareQQ({title: fx_title,desc: fx_desc,link: fx_url,imgUrl:fx_img});
  
        wx.onMenuShareWeibo({title: fx_title,desc: fx_desc, link: fx_url,imgUrl:fx_img});
        
        wx.showOptionMenu();    
    });
</script>
<?php
    $timestamp = time();
?>

 

</head>
<body>


<!-- 尾页 -->
<section id="s_100" data-index="100" style="display:block">
    <div><a href="http://a.app.qq.com/o/simple.jsp?pkgname=com.diaox2.android"><img src="http://a.diaox2.com/exam/img/banner.jpg" style="width:100%"></a></div>
    <div style="margin-top:156px;width:100%;text-align:center;color:#e75280;font-size:38px;line-height:38px">题目设置完成啦！</div>
    <!-- <div style="margin-top:16px;margin-bottom:100px;width:100%;text-align:center;color:#898989;font-size:28px;line-height:28px">快分享给TA吧~</div> -->
    <div style="margin-top:16px;margin-bottom:100px;width:100%;text-align:center;color:#898989;font-size:28px;line-height:28px">快测测朋友多懂你~</div>
    <div class="pager_end"><span id="pager_wish"  class="pager_wish" onclick="showWish()">查看我的愿望清单</span></div>
    <!-- <div class="pager_end"><span id="pager_share" class="pager_share" onclick="showShare()">分享题目给好友</span></div> -->
    <div class="pager_end"><span id="pager_share" class="pager_share" onclick="showShare()">去测试好友</span></div>
    <!-- <div style="width:320px;margin:auto;color:#898989;font-size:20px">参与的人越多你的愿望就更有可能被「调调」实现哦！</div> -->
    <div style="width:320px;margin:auto;color:#898989;font-size:20px"></div>
    <div style="margin:100px auto 0 auto;color:#898989;font-size:28px;text-align:center">想要的东西在 <span style="color:#e42660">「调调」</span> 都能买得到哦~</div>
    <div style="margin:20px auto 0 auto;font-size:34px;text-align:center;line-height:56px"><img src="http://a.diaox2.com/exam/img/littleicon.png" style="vertical-align:middle;border:0;margin-right:16px"><span style="text-decoration:underline">下载调调</span></div>
</section>

<div id="share" onclick="hideShare();"></div>
<img id="share1" src="http://a.diaox2.com/exam/img/share3.png" border="0" onclick="hideShare();">


<script>

	//题目数据
	var examData = null;
	//答案数据
	var answerData = Array(10);
    var examId = <?php echo $id;?>; 

	/*
		从服务器端读取题目数据JSON	
	*/
	function loadExamData(){
	
        $.ajax({
            url:"data.php?action=all",
            dataType:'json',
            cache:false,
            success:function(json){
                examData = json;
                renderPage();
            }
        });	
	
	}

    function showShare(){
        $("#share").css("display","block");    
        $("#share1").css("display","block");    
    }
    
    function hideShare(){
        $("#share").css("display","none");    
        $("#share1").css("display","none");    
    }
     
    function showWish(){
        var url = "http://g2.diaox2.com/exam/wish.php?id=" + examId;
        window.location.href = url;     
    }

	/*
		计算改用户的得分
	*/
	function caculateScore(){
		var sum = 0;

		for (var i=0;i<10;i++) {
			
			if (answerData[i] == examData[i]['goal']) {
				sum += parseInt(examData[i]['score']);
			}
		
		}

		saveScore();

		$("#score").html('<h1>得分：'+sum+'</h1>');
	}
	
	/*
		得到用户得分排名
	*/
	function getScoreRank(){
	}
	
	
	/*
		将本次得分存储到服务器
	*/
	function saveScore(){
	}

	/*
		生成通用banner
	*/
	function getBanner(){
		return '<div><a href="http://a.app.qq.com/o/simple.jsp?pkgname=com.diaox2.android"><img src="http://a.diaox2.com/exam/img/banner.jpg" style="width:100%"></a></div>';
	}



	/*
		生成通用进度条
	*/
	function getProgressBar(){
	
	}

    /*
        
    */
    function getDesc(){
       var html = '<div class="desc">';
            html = html + '<span>游戏规则：</span><br>'; 
            html = html + '<span>1. 设置10道题及答案让朋友来答；</span><br>'; 
            html = html + '<span>2. 朋友答过后会有得分排名，看看谁最了解你。</span><br>'; 
            html = html + '<span>3. 参与的人越多，你的愿望越可能会被调调实现哦~</span><br>'; 
       html = html + '</div>';
        
       return html; 
    }



	/*
		生成通用翻页按钮
	*/
	function getPager(index){
		
		var html = ""; 
        

		if (index==0) {
            html = '<div class="pager_index">';
			html = html 
					+ '<span class="pager_start" onclick="javascript:showSection(1)">开始设题</span>';
		
		}else if (index==1) {
            html = '<div class="pager">';
			html = html 
					+ '<span class="pager_1" onclick="javascript:showSection('+ (index+1)  +')">下一题</spab>';
		
		}else if(index==10){
            html = '<div class="pager">';
			html = html 
					+ '<span class="pager_pre" onclick="javascript:showSection('+ (index-1)  +')">上一题</span>'
					+ '<span class="pager_finish" onclick="javascript:saveQuestions();showSection(100)">完成</spab>';
		}else if(index==100){

		}else {
            html = '<div class="pager">';
			html = html 
					+ '<span class="pager_pre" onclick="javascript:showSection('+ (index-1)  +')">上一题</span>'
					+ '<span class="pager_next" onclick="javascript:showSection('+ (index+1)  +')">下一题</span>';
		}	
		
		
		html = html + '</div>';

		return html;		
	}
	



	/*
		根据题目数据生成题目
	*/
	function getQuestion(i,data){
		
		var html = '<div>'
					+'<h1>'+data['subject']+'</h1>';
	
		if (data['type']==0){
			html = html + '<ol id="q_'+i+'" class="q_list_text">';
			$.each(data['options'],function(index,item){
				html = html + '<li class="q_list_noselect" data-attach="'+i+'" data-index="'+index+'" onclick="answer('+data['type']+',this)">'+item['label']+'</li>' 
			});
			html = html + '</ol>';
		}else if(data['type']==1){
			html = html + '<div id="q_'+i+'" class="q_list_image">';
			$.each(data['options'],function(index,item){
				html = html + '<div class="q_list_imageitem" data-attach="'+i+'" data-index="'+index+'" onclick="answer('+data['type']+',this)">'
							+ '<div><img src="'+item['pic']+'" style="width:100%"></div>'
							+ '<div>'+item['label']+'</div>'
							+ '<img class="q_list_imageicon" src="http://a.diaox2.com/exam/img/p0.png">'
							+ '</div>' 
			});
			html = html + '</div>';
		
		}

		html = html + '</div>';
		return html;
	}


	/*
		选择题目答案选项
	*/
	function answer(type,obj){
		var attach= parseInt($(obj).attr("data-attach"));
		var goal = parseInt($(obj).attr("data-index"));
		
		if (type==0) {
			$("#q_"+attach).find("li").attr("class","q_list_noselect");
			$(obj).attr("class","q_list_select");
		}else if (type==1){
			$("#q_"+attach).find("img.q_list_imageicon").attr("src","http://a.diaox2.com/exam/img/p0.png");
			$(obj).find("img.q_list_imageicon").attr("src","http://a.diaox2.com/exam/img/p1.png");
		}	
		answerData[attach-1] = goal;	
	}

	/*
		动态创建每个section的内容
	*/
    function renderPage(){
        $("section").each(function(i,e){

                var id = parseInt($(e).attr("data-index")); 

                //首页
                if (id==0) {

                    $('<div><img src="http://a.diaox2.com/exam/img/main.jpg" style="width:100%"></div>').appendTo(e);
                    $('<div style="margin:30px 0;width:100%;text-align:center"><span style="font-size:24px;color:#eb467a">想知道你的朋友有多了解你！</span><br><span style="line-height:1.5">测测TA对你的了解程度</span></div>').appendTo(e);
                    $(getPager(id)).appendTo(e);	
                    $(getDesc()).appendTo(e);
                //尾页
                }else if (id==100){
                //$('<div id="score"></div>').appendTo(e);
                //普通页
                }else {
                    $(getBanner()).appendTo(e);
                    $(getQuestion(id,examData[id-1])).appendTo(e);
                    $(getPager(id)).appendTo(e);	
                }
        });
    }

function showSection(index){
    $("section").css("display","none");
    window.scrollTo(0,0);
    $("#s_"+index).css("display","block");
}
	
    
</script>

</body>

</html>
