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

<?php
    $timestamp = time();
?>

<style>
    
    div.user {margin:20px 0 0 40px}
    div.user2 {margin:20px 0 0 40px;padding-top:20px;border-top:1px solid #ccc}
   
    div.userimg {float:left;width:88px;height:88px;background:#CCC;overflow:hidden;border:2px solid #FFF} 
    div.userimg2 {float:left;width:62px;height:62px;background:#CCC;overflow:hidden;border:2px solid #FFF} 
    
    div.userinfo {float:left;margin-left:10px}

    div.userinfo_1 {font-size:36px;line-height:54px;color:#858585}
    div.userinfo_2 {font-size:28px;color:#858585;line-height:36px;}
    div#userinfo_3 {font-size:30px;color:#858585;line-height:64px;}
    
    div.score {margin-left:130px;margin-top:20px;border-top:1px solid #CCC;padding-top:20px}
    .score_head,.score_nick {float:left;line-height:64px;height:64px;font-size:30px;color:#858585}
    .score_nick {margin-left:30px}
    .score_num {float:right;width:60px;overflow:hidden;line-height:64px;font-size:30px;color:#858585}
    .score_img {border:1px solid #fff;width:60px;height:60px;color:#858585}

    #rank {margin-bottom:60px}

</style>
    

</head>


<?php

    $id = intval($_GET['id']);
    $openid = $_GET['openid'];
    $head = $_GET['head'];
    $nick = $_GET['nick'];
    $score = intval($_GET['score']);
    $award = "";
    if($score==100) {
        $award = "全都答对了！";    
    }
?>
<body>
<!-- 尾页 -->
<section id="s_100" data-index="100" style="display:block">
    
    <div><a href="http://a.app.qq.com/o/simple.jsp?pkgname=com.diaox2.android"><img src="http://a.diaox2.com/exam/img/banner1.jpg" style="width:100%"></a></div>
    <?php
        if ($openid){
    ?>
            <div class="user">
                <div class="userimg">
                    <img id="userhead" src="<?php echo $head?>" width="86px">
                </div>
                <div class="userinfo">
                    <div id="userinfo_1" class="userinfo_1">答完啦！</div>
                    <div class="userinfo_2">你的得分是：</div>
               </div>
               <br clear="all">
            </div>
    <div style="margin-top:30px;width:100%;text-align:center;color:#F00;font-size:120px;"><?php echo $score ?></div>
    <div id="award" style="margin:20px 0;width:640px;height:60px;overflow:hidden;background:url(http://a.diaox2.com/exam/img/tiao.png) no-repeat;text-align:center;color:#FFF;font-size:28px;">
    <?php echo $award;?> 
    </div>
    <div class="pager_end" style="margin-top:30px;"><span id="pager_wish"  class="pager_wish" onclick="showWish()">查看TA的愿望清单</span></div>
    <div class="pager_end"><span id="pager_answer" class="pager_share" onclick="gotoAnswer()">再答一遍</span></div>
    <div class="pager_end"><span id="pager_share" class="pager_make" onclick="showMake()">我也要出题</span></div>
    <?php 
        }else {
    ?>
    <div class="pager_end" style="display:none;margin-top:80px"><span id="pager_share" class="pager_share" onclick="showShare()">去测试好友</span></div>
    <div class="pager_end"><span id="pager_wish" style="margin:80px 0" class="pager_wish" onclick="showWish()">查看我的愿望清单</span></div>
    <div class="pager_end" style="display:none;"><span id="pager_share" class="pager_make" onclick="showMake()">再出一套题</span></div>
    <?php    
        }
    ?>
            <div class="user2">
                <div class="userimg2">
                    <img id="userhead2" src="" width="60px">
                </div>
                <div class="userinfo">
                    <div id="userinfo_3"></div>
               </div>
               <br clear="all">
            </div>

            <div id="rank" class="rank"></div>
</section>

<div id="share" onclick="hideShare();"></div>
<img id="share1" src="http://a.diaox2.com/exam/img/share3.png" border="0" onclick="hideShare();">
<div id="juhua" class="load-container load8"><div class="loader"></div></div>

<script>

	//题目数据
	var examData = null;
	//答案数据
	var answerData = Array(10);
    var examId = '<?php echo $id; ?>'; 
    var score = '<?php echo $score;?>'
    var openid = '<?php echo $openid;?>'
	
    if (score == 100) {
        $("#pager_answer").css("display","none"); 
    }
    /*
		从服务器端读取题目数据JSON	
	*/
	function getRank(){
        showLoad();	
        $.ajax({
            url:"data.php?action=rank",
            cache:false,
            dataType:'json',
            data:{
              'exam_id':'<?php echo $id; ?>'  
            },
            success:function(json){
                hideLoad();   
                var exam = json['exam'];

                $("#userhead2").attr('src',exam['head']);
                $("#userinfo_3").html(exam['nick']+"的好友排名：");
                
                var rank = json['rank'];
                
                $.each(rank,function(i,e){
                   
                   var html = "";
                        html = html + '<div class="score">';
                            html = html + '<div class="score_head"><img class="score_img" src="' + e['head']+ '"></div>';
                            html = html + '<div class="score_nick">'+e['nick']+'</div>';
                            html = html + '<div class="score_num">'+e['score']+'</div>';
                            html = html + '<br clear="all">';
                        html = html + '</div>';
                    if (e['openid'] == openid && score != 100) {
                        $("#award").html("在TA的好友中排名第 "+ (i+1));              
                    } 
                   $(html).appendTo($("#rank")); 
                }); 
    
                var fx_url = "http://g2.diaox2.com/exam/exam.php?step=1&id=<?php echo $id; ?>";
                var fx_title = "测测你有多懂我？"+exam['nick']+"的羊年愿望清单";
                var fx_img = exam['head'];
                var fx_desc = "答过60分，我们还是朋友";

    wx.ready(function(){
    
        wx.onMenuShareAppMessage({title: fx_title,desc: fx_desc,link: fx_url,imgUrl:fx_img});
        wx.onMenuShareTimeline({title: fx_title,desc: fx_desc,link: fx_url,imgUrl:fx_img});
        wx.onMenuShareQQ({title: fx_title,desc: fx_desc,link: fx_url,imgUrl:fx_img});
        wx.onMenuShareWeibo({title: fx_title,desc: fx_desc, link: fx_url,imgUrl:fx_img});
        wx.showOptionMenu();        
    });
        wx.onMenuShareAppMessage({title: fx_title,desc: fx_desc,link: fx_url,imgUrl:fx_img});
        wx.onMenuShareTimeline({title: fx_title,desc: fx_desc,link: fx_url,imgUrl:fx_img});
        wx.onMenuShareQQ({title: fx_title,desc: fx_desc,link: fx_url,imgUrl:fx_img});
        wx.onMenuShareWeibo({title: fx_title,desc: fx_desc, link: fx_url,imgUrl:fx_img});
        wx.showOptionMenu(); 
            },error:function(data){
                hideLoad(); 
                alert("愿望太多啦，网络有些拥挤。\n请稍候再试。");
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
    
    function showLoad(){
        $("#juhua").css("display","block");    
    }
    function hideLoad(){
        $("#juhua").css("display","none");    
    }
     
    function showWish(){
        var url = "http://g2.diaox2.com/exam/wish.php?id=" + examId;
        window.location.href = url;     
    }

    function showMake(){
        var url = "http://g2.diaox2.com/exam/exam.php?step=0";
        window.location.href = url;     
    }

    function gotoAnswer(){
        var url = "http://g2.diaox2.com/exam/exam.php?step=1&id=" + examId;
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

    getRank();	
    
</script>

</body>

</html>
