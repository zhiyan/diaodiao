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

    wx.hideOptionMenu();             
    
    });
</script>

<style>
    
    div.user {margin:40px 0 0 40px}
   
    div.userimg {float:left;width:88px;height:88px;background:#CCC;overflow:hidden;border:2px solid #FFF} 
    
    div.userinfo {float:left;margin-left:10px}

    div.userinfo_1 {font-size:36px;line-height:54px;color:#eb467a}
    div.userinfo_2 {font-size:28px;color:#858585;line-height:36px;}
</style>


</head>
<?php

    require_once("user.php");

?>
<body>

<!-- 首页  -->
<section id="s_0" data-index="0">
</section>

<!-- 第1题 -->
<section id="s_1" data-index="1">
</section>
<!-- 第2题 -->
<section id="s_2" data-index="2">
</section>
<!-- 第3题 -->
<section id="s_3" data-index="3">
</section>
<!-- 第4题 -->
<section id="s_4" data-index="4">
</section>
<!-- 第5题 -->
<section id="s_5" data-index="5">
</section>
<!-- 第6题 -->
<section id="s_6" data-index="6">
</section>
<!-- 第7题 -->
<section id="s_7" data-index="7">
</section>
<!-- 第8题 -->
<section id="s_8" data-index="8">
</section>
<!-- 第9题 -->
<section id="s_9" data-index="9">
</section>
<!-- 第10题 -->
<section id="s_10" data-index="10">
</section>

<!-- 尾页 -->
<section id="s_100" data-index="100">
</section>
<div id="juhua" class="load-container load8"><div class="loader"></div></div>
<script>

	//题目数据
	var examData = null;
	//答案数据
	var answerData = Array(10);
	//用户信息

	var userInfo = {
		'nick':"<?php echo $userinfo['nickname']?>",
		'head':"<?php echo $userinfo['headimgurl']?>",
		'openid':"<?php echo $userinfo['openid']?>" 
	};
	
    var answerInfo = []; 

    var examId = "<?php echo $state ?>" || 8;
    var userhead = "";
    var authornick = "";

	/*
		从服务器端读取题目数据JSON	
	*/
	function loadExamData(){
        showLoad();	
        $.ajax({
   
            url:"data.php?action=get&id=" +examId+ "&openid=" + userInfo['openid'],
            dataType:'json',
            cache:false,
            success:function(json){
                examData = $.parseJSON(json['exam_json']);
                userhead = json['head'];
                authornick = json['nick'];
                if (userInfo['openid']==json['openid']){
                    
                    var url = "result.php?id="+examId;
                    window.location.href = url; 
                
                }                  
                
                answerInfo = json['answerd'];    
                hideLoad(); 
                renderPage();
            },error:function(data){
                hideLoad(); 
                alert("愿望太多啦，网络有些拥挤。\n请稍候再试。");
            }
        });	
	
	}
    
    function getDesc(){
       var html = '<div class="desc" style="width:100%;text-align:center;margin:40px auto">';
            html = html + '<span style="font-size:32px">本次活动已结束，谢谢参与</span><br>'; 
            html = html + '<br><br><span style="color:red;font-size:32px">更多活动请关注微信号diaox2<br><br>或在应用商店<a href="http://a.app.qq.com/o/simple.jsp?pkgname=com.diaox2.android" style="color:red">下载调调App</a> </span><br>'; 
       html = html + '</div>';
        
       return html; 
    }

    function getUser(){
        
        var html = ""; 
            html = html + '<div class="user">';
                html = html + '<div class="userimg">';
                    html = html + '<img id="userhead" src="about:blank" width="86px">';
                html = html + '</div>';
                html = html + '<div class="userinfo">';
                    html = html + '<div id="userinfo_1" class="userinfo_1">亲爱的朋友，你有多了解我？</div>';
                    html = html + '<div class="userinfo_2">还不赶快答我给你出的题！</div>';
                html = html + '</div>';
                html = html + '<br clear="all">';
            html = html + '</div>';
    
        return html;    
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

		saveScore(sum);

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
	
    function myscore(){
        
        var url = "result.php?id="+examId;
        //&openid="+answerInfo['openid']+"&score="+answerInfo['score']+"&nick=" + encodeURIComponent(answerInfo['nick']) + "&head=" + encodeURIComponent(answerInfo['head']);
        window.location.href = url; 
    }	
	/*
		将本次得分存储到服务器
	*/
	function saveScore(score){
        
        showLoad(); 
        $.ajax({
            url:'data.php?action=ans',
            method:'post',
            data:{
                'score':score,
                'exam_id':examId,
                'openid':userInfo['openid'],
                'nick':userInfo['nick'],
                'head':userInfo['head']
            },
            success:function(data){
                hideLoad(); 
               var url = "result.php?id="+examId+"&openid="+userInfo['openid']+"&score="+score+"&nick=" + encodeURIComponent(userInfo['nick']) + "&head=" + encodeURIComponent(userInfo['head']);
            
               window.location.href = url; 
            },error:function(data){
                hideLoad();
                alert("愿望太多啦，网络有些拥挤。\n请稍候再试。");
            }
        });
	
    
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
	function getProgressBar(index){
		return '<div class="pb pb_'+index+'"></div>';
	}


	/*
		生成通用翻页按钮
	*/
	function getPager(index){
		
		var html = "";  
		
        if (index==0) {
            html = '<div class="pager_index" style="display:none">';
			html = html 
					+ '<span class="pager_start" style="display:none" onclick="javascript:showSection(1)">开始答题</span>' 
                    + '</div><div class="pager_end" id="myscorediv" style="margin-top:60px">'
					+ '<span class="pager_wish" onclick="javascript:myscore()">好友排名</span>';
		
		}else if (index==1) {
            html = '<div class="pager" id="pager_div_' +index  +'">';
			html = html 
					+ '<span class="pager_1" onclick="javascript:showSection('+ (index+1)  +')">下一题</spab>';
		
		}else if(index==10){
            html = '<div class="pager" id="pager_div_' +index  +'">';
			html = html 
					+ '<span class="pager_pre" onclick="javascript:showSection('+ (index-1)  +')">上一题</span>'
					+ '<span class="pager_finish" onclick="javascript:caculateScore();">完成</spab>';
		}else if(index==100){

		}else {
            html = '<div class="pager" id="pager_div_' +index  +'">';
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
					+'<h1>'+ authornick + data['subject']+'</h1>';
	
		if (data['type']==0){
			html = html + '<ol id="q_'+i+'" class="q_list_text">';
			$.each(data['options'],function(index,item){
				html = html + '<li class="q_list_noselect" data-attach="'+i+'" data-index="'+index+'" onclick="answer('+data['type']+',this)">'+item['label']+'</li>' 
			});
			html = html + '</ol>';
		}else if(data['type']==1){
            html = html + '<div id="q_'+i+'" class="q_list_image">';
			$.each(data['options'],function(index,item){
				html = html + '<div id="q_list_image_'+i+'_item_'+index+'" class="q_list_imageitem" data-attach="'+i+'" data-index="'+index+'" onclick="showDetail('+data['type']+',this)">'
							+ '<div><img src="'+item['pic']+'" style="width:100%"></div>'
							+ '<div class="q_list_imagelabel">'+item['label']+'</div>'
							+ '<img class="q_list_imageicon" src="http://a.diaox2.com/exam/img/p0.png">'
							+ '</div>' 
			});
			html = html + '</div>';
		
		}

		html = html + '<div class="gap"></div></div>';
		return html;
	}

    function showDetail(type,obj){
		
        var attach= parseInt($(obj).attr("data-attach"));
		var goal = parseInt($(obj).attr("data-index"));
       
        var title = examData[attach-1]['options'][goal]['label']; 
        var content = examData[attach-1]['options'][goal]['desc']; 

         
        var html = "";
            html = html + '<div class="detail_mask" id="detail_mask_'+attach+'"></div>';
            html = html + '<div class="detail" id="detail_'+attach+'">';
                html = html + '<div class="detail_title">'+title+'</div>';
                html = html + '<div class="detail_content">'+content+'</div>';
                html = html + '<div class="detail_btns">';
                    html = html + '<span class="detail_btn_cancel" onclick="hideDetail('+attach+')">返回</span>';
                    html = html + '<span class="detail_btn_ok" data-attach="'+attach+'" data-index="'+goal+'" onclick="answer('+type+',this);hideDetail('+attach+')">选择</span>';
                html = html + '</div>';
            html = html + '</div>';

        $(html).appendTo(document.body);
        $("#detail_mask_"+attach).css("height",document.body.clientHeight+"px");    
        

        $("#detail_"+attach).bind("touchmove",function(e){
            e.stopPropagation();
        }); 
        $(document.body).bind("touchmove",function(e){
            e.preventDefault();
        });
         
    }


    function hideDetail(id){
        $("#detail_mask_"+id).remove();    
        $("#detail_"+id).remove();    
        $(document.body).unbind("touchmove");
    }
	/*
		选择题目答案选项
	*/
	function answer(type,obj){
		var attach= parseInt($(obj).attr("data-attach"));
		var goal = parseInt($(obj).attr("data-index"));
		
        $("#pager_div_"+ attach).css("display","block");
		
        if (type==0) {
			$("#q_"+attach).find("li").attr("class","q_list_noselect");
			$(obj).attr("class","q_list_select");
		}else if (type==1){
			$("#q_"+attach).find("img.q_list_imageicon").attr("src","http://a.diaox2.com/exam/img/p0.png");
			$("#q_list_image_"+attach+"_item_"+goal).find("img.q_list_imageicon").attr("src","http://a.diaox2.com/exam/img/p1.png");
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
                $(getUser()).appendTo(e);
                $(getPager(id)).appendTo(e);	
                $(getDesc()).appendTo(e);

                //尾页
                }else if (id==100){
                $(getBanner()).appendTo(e);
                $('<div id="score"></div>').appendTo(e);
                //普通页
                }else {
                $(getBanner()).appendTo(e);
                $(getProgressBar(id)).appendTo(e);
                $(getQuestion(id,examData[id-1])).appendTo(e);
                $(getPager(id)).appendTo(e);	
                }
        });
        $("#userhead").attr("src",userhead);


        if(answerInfo){
            $("#myscorediv").css("display","block");
        }else {
        }
    }

function showSection(index){
    window.scrollTo(0,0);
    $("section").css("display","none");
    $("#s_"+index).css("display","block");
}


loadExamData();
</script>

</body>

</html>
