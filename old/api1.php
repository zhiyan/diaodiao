<?php 

//$dbhost = '127.0.0.1';
$dbhost = ':/var/run/mysqld/mysqld.sock';
$dbuser = 'web';
$dbpass = 'web';
$dbname = 'game';

function getAll() {
	return array(
		array(
            "type" => 0,
            "subject" => "羊年最想实现的愿望",
            "options" => array(
                array("label" => "拿Offer"),
                array("label" => "发Paper"),
                array("label" => "8块腹肌/马甲线"),
                array("label" => "减肥"),
                array("label" => "身体健康"),
                array("label" => "谈恋爱"),
                array("label" => "结婚"),
                array("label" => "生孩子"),
                array("label" => "养宠物"),
                array("label" => "升职加薪"),
                array("label" => "中彩票"),
                array("label" => "付出有回报"),
                array("label" => "以上都不是")
            ),
            "score" => 10
        ),
		array(
            "type" => 0,
            "subject" => "羊年最想做的尝试",
            "options" => array(
                array("label" => "支教/做公益"),
                array("label" => "马拉松"),
                array("label" => "徒步旅行"),
                array("label" => "跳伞"),
                array("label" => "潜水"),
                array("label" => "开飞机"),
                array("label" => "创业"),
                array("label" => "炒股"),
                array("label" => "信仰一门宗教"),
                array("label" => "表白"),
                array("label" => "整容"),
                array("label" => "以上都不是")
            ),
            "score" => 10
        ),
		array(
            "type" => 0,
            "subject" => "羊年最想get的新技能",
            "options" => array(
                array("label" => "理财"),
                array("label" => "一门语言"),
                array("label" => "一种乐器"),
                array("label" => "一项运动"),
                array("label" => "做饭/烘焙"),
                array("label" => "开车"),
                array("label" => "摄影"),
                array("label" => "化妆"),
                array("label" => "社交技能"),
                array("label" => "写代码"),
                array("label" => "开脑洞吐槽"),
                array("label" => "以上都不是")
            ),
            "score" => 10
        ),
		array(
            "type" => 0,
            "subject" => "羊年最想改掉的毛病",
            "options" => array(
                array("label" => "拖延症"),
                array("label" => "晚睡"),
                array("label" => "强迫症"),
                array("label" => "管不住嘴吃吃吃"),
                array("label" => "不够独立"),
                array("label" => "不够自信"),
                array("label" => "太八卦"),
                array("label" => "吹牛"),
                array("label" => "浮躁"),
                array("label" => "疑心病"),
                array("label" => "买买买"),
                array("label" => "以上都不是")
            ),
            "score" => 10
        ),
		array(
            "type" => 0,
            "subject" => "羊年最想去的国内目的地",
            "options" => array(
                array("label" => "三亚"),
                array("label" => "香港"),
                array("label" => "台北"),
                array("label" => "拉萨"),
                array("label" => "敦煌"),
                array("label" => "丽江"),
                array("label" => "成都"),
                array("label" => "长白山"),
                array("label" => "厦门"),
                array("label" => "西安"),
                array("label" => "以上都不是")
            ),
            "score" => 10
        ),
		array(
            "type" => 0,
            "subject" => "羊年最想去的国外目的地",
            "options" => array(
                array("label" => "日本"),
                array("label" => "马尔代夫"),
                array("label" => "泰国"),
                array("label" => "大溪地"),
                array("label" => "新西兰"),
                array("label" => "法国"),
                array("label" => "意大利"),
                array("label" => "西班牙"),
                array("label" => "希腊"),
                array("label" => "英国"),
                array("label" => "丹麦"),
                array("label" => "挪威"),
                array("label" => "瑞士"),
                array("label" => "美国"),
                array("label" => "巴西"),
                array("label" => "南非"),
                array("label" => "南极"),
                array("label" => "以上都不是")
            ),
            "score" => 10
        ),
		array(
            "type" => 0,
            "subject" => "羊年最期待的演唱会",
            "options" => array(
                array("label" => "约瑟翰·庞麦郎"),
                array("label" => "TFboys"),
                array("label" => "鹿晗"),
                array("label" => "吴亦凡"),
                array("label" => "李易峰"),
                array("label" => "李宗盛"),
                array("label" => "周杰伦"),
                array("label" => "陈奕迅"),
                array("label" => "孙燕姿"),
                array("label" => "梁静茹"),
                array("label" => "萧敬腾"),
                array("label" => "汪峰"),
                array("label" => "EXO"),
                array("label" => "bigbang"),
                array("label" => "少女时代"),
                array("label" => "Katy Perry"),
                array("label" => "以上都不是")
            ),
            "score" => 10
        ),
		array(
            "type" => 1,
            "subject" => "羊年最期待的电影",
            "options" => array(
                array("label" => "《小黄人》", "pic" => "http://a.diaox2.com/exam/img/1.xiaohuangren.jpg", "desc" => "《小黄人》<br />导演: 凯尔·巴尔达 / 皮埃尔·科芬<br />编剧: 布莱恩·林奇<br />发行公司：环球影业国际<br />上映时间：预计2015年<br />剧情简介：为《卑鄙的我》（Despicable Me）中抢尽风头的迷你小黄人（Minions）拍摄的外传动画片。详细剧情更改不详。<br /><br />推荐理由：只要有萌萌的小黄人在，该系列就永远令人期待！"),
                array("label" => "《小王子》", "pic" => "http://a.diaox2.com/exam/img/2.xiaowangzi.jpg", "desc" => "《小王子》<br />导演: 马克·奥斯本<br />编剧: 安东尼·德·圣-埃克苏佩里<br />制片国家/地区: 法国<br />上映时间：预计2015年<br />剧情简介：故事描述了9岁小女孩和86岁飞行员的一段无法忘记的旅程。小女孩生活的世界由CG特效制成，而小王子的世界则由和纸绘制的一个个镜头拼接合成。<br /><br />推荐理由：任何一个《小王子》的读者都会期待的电影，《功夫熊猫》导演担纲制作。"),
                array("label" => "《海底总动员2》", "pic" => "http://a.diaox2.com/exam/img/3.findingdori.jpg", "desc" => "《海底总动员2》<br />导演: 安德鲁·斯坦顿<br />编剧: Victoria Strouse<br />发行公司：华特·迪士尼影片公司<br />上映时间：预计2015年11月25日<br />剧情简介：故事从上一部结尾的六个月后开始，患上思乡病的蓝藻鱼多莉(Dory)决定去寻找自己的父母查理(Charlie)和安妮(Jenny)，在小丑鱼尼莫(Nemo)和他的父亲马林(Marlin)的帮助下，她从澳大利亚大堡礁来到了美国加州海岸，在这里她遇到了很多新朋友，有章鱼、海狮、白鲸等等。<br /><br />推荐理由：迪士尼最经典的动画之一续作，2015最值得期待的动画。               
                "),
                array("label" => "《复仇者联盟2》", "pic" => "http://a.diaox2.com/exam/img/4.fulian2.jpg", "desc" => "《复仇者联盟2》<br />导演: 乔斯·韦登<br />主演: 斯嘉丽·约翰逊 / 亚伦·泰勒-约翰逊 / 克里斯·埃文斯<br />上映时间：预计2015年<br />剧情简介：托尼·史塔克想要启动一个搁置的维护世界和平的项目，但搞砸了。地球命悬一刻，复联成员除了需要对付老“朋友”奥创，还得分神应对两个神秘而强大的新“对手”：猩红女巫与快银。<br /><br />推荐理由：复联一的基础上加入了猩红女巫和快银，漫威迷必须期待！"),
                array("label" => "《星球大战7》", "pic" => "http://a.diaox2.com/exam/img/5.xingzhan.jpg", "desc" => "《星球大战7》<br />导演: J·J·艾布拉姆斯<br />编剧: J·J·艾布拉姆斯 / 劳伦斯·卡斯丹<br />主演: 哈里森·福特 / 马克·哈米尔<br />上映时间：预计2015年<br />剧情简介：本片故事发生在《星球大战6：绝地大反击》之后的30年。剧情更改不详。<br /><br />推荐理由：星战新系列震感归来，好想去看传说中的十字光剑。"),
                array("label" => "《终结者：创世纪》", "pic" => "http://a.diaox2.com/exam/img/6.zhongjiezhe.jpg", "desc" => "《终结者：创世纪》<br />导演: 阿兰·泰勒<br />编剧: 詹姆斯·卡梅隆 / 盖尔·安妮·赫德<br />主演: 艾米莉亚·克拉克 / 杰·科特尼 / 阿诺·施瓦辛格<br />上映时间：预计2015年。<br />剧情简介：《终结者：创世》是《终结者》系列中的第五部影片，也是对该系列的一次“重启”。据悉，影片剧情与1984年老版有着密切的联系，更像是老版叙事时空的一个平行世界，创意与《回到未来》非常类似。<br /><br />推荐理由：终结者系列本身看点不多，但为了看《权力的游戏》中的龙女（女主角）和施瓦辛格大叔，还是很期待~"),
                array("label" => "《小时代4》", "pic" => "http://a.diaox2.com/exam/img/7.xiaoshidai.jpg", "desc" => "《小时代4》<br />导演: 郭敬明<br />编剧: 郭敬明<br />主演: 杨幂 / 郭采洁 / 柯震东 / 郭碧婷 / 谢依霖<br />上映时间：2015年7月<br />剧情简介：《小时代4：灵魂尽头》将延续《小时代3：刺金时代》的故事，进一步讲述顾源坐牢、顾里癌症以及这一群人的友谊方向是如何发展的。<br /><br />推荐理由：《小时代》系列收官之作，看过前三部你能忍住不看么？"),
                array("label" => "《冲上云霄》", "pic" => "http://a.diaox2.com/exam/img/8.chongshangyunxiao.jpg", "desc" => "《冲上云霄》<br />导演: 叶伟信 / 邹凯光<br />主演: 古天乐 / 郑秀文 / 吴镇宇 / 张智霖 / 佘诗曼<br />上映时间：2015年2月19日<br />剧情简介：年青机师Branson（古天乐 饰），另一身分是富商儿子，从爸爸手上接管生意后，全力打理Skylette天颂航空。他对公司的空中服务员Cassie（佘诗曼 饰）照顾有加，原来二人是前度关系……<br /><br />TVB《冲上云霄》的剧场版，一定是该剧集粉丝最期待的电影。"),
                array("label" => "《暴疯语》", "pic" => "http://a.diaox2.com/exam/img/9.baofengyu.jpg", "desc" => "《暴疯语》<br />导演: 李光耀<br />编剧: 李光耀 / 吕冠南 / 尔冬升<br />主演: 刘青云 / 黄晓明 / 方中信 / 薛凯琪 / 叶璇<br />上映时间：2015年3月<br />剧情简介：太子永康楼一桩手段极其残忍的杀妻案震惊全港，当事人范国生（刘青云 饰）却因被诊断有精神问题逃脱法律的制裁，改进精神病院接受治疗。在舆论哗然的时刻，意气风发的医学界才俊周明君（黄晓明 饰）宣布主动担任范的主治医生……<br /><br />推荐理由：刘青云、黄晓明、薛凯琪，你想要的类型都有了！"),
                array("label" => "《三少爷的剑》", "pic" => "http://a.diaox2.com/exam/img/10.sanshaoye.jpg", "desc" => "《三少爷的剑》<br />导演: 尔冬升<br />监制：徐克<br />主演: 林更新 / 何润东 / 江一燕 / 蒋梦婕<br />上映时间：2015年7月<br />剧情简介：“剑气纵横三万里，一剑光寒十九洲”，神剑山庄三少爷谢晓峰（林更新 饰）惊才绝艳，十年来历经上千大战未尝一败，被天下人尊为“剑神”。传奇剑客燕十三（何润东 饰）一直以谢晓峰为目标，苦修剑道，终于在生死边缘悟出惊天地泣鬼神的“绝命十三剑”……<br /><br />推荐理由：古龙小说改编，徐克监制，再加上林更新，年度最期待武侠片。"),
                array("label" => "以上都不是", "pic" => "http://a.diaox2.com/exam/img/none_movie.jpg", "desc" => "都不是，没简介")
            ),
            "score" => 10
        ),
		array(
            "type" => 1,
            "subject" => "羊年最想攒钱买的东西",
            "options" => array(
                array("label" => "相机", "pic" => "http://a.diaox2.com/exam/img/camera.jpg", "desc" => "很多人都想带着一台单反去旅行，那如果你想跳伞呢？<br />图中的Gopro HERO 4，是世界上最好的运动摄像机——是的，没有之一。<br />坚固、耐用、便携、防水、抗震，能够适应十分艰苦的自然环境（比如春节的大东北）。能够解决那些用普通相机或手机无法拍摄的场景，比如跳伞、冲浪。<br /><br />下载「调调」App，搜索“相机”可以看到更多个性相机。"),
                array("label" => "手帐", "pic" => "http://a.diaox2.com/exam/img/notebook.jpg", "desc" => "Traveler's notebook可能是最有名的的一本手帐。<br />封皮采用泰国清迈牛皮，透着高贵优雅的沧桑感。内芯则是日本纸张制成，书写流畅且不易渗透墨水。<br />内芯由绑带系着，可以随意添加或更换不同格式的内芯。无论是安排日程、记录事项、画小插画还是做剪报，总有一款内芯适合你。<br /><br />下载「调调」App，搜索“手帐”或“笔记本”可以看到更多介绍。"),
                array("label" => "香水", "pic" => "http://a.diaox2.com/exam/img/perfume.jpg", "desc" => "不知道哪位名媛说过：看一个人有没有至高品位，就看他的家里有没有Acqua di Parma的身影。<br />Acqua di Parma品牌隶属于全球最大的奢侈品集团——路易·威登集团（LVMH）。<br />品牌最经典的“克罗尼亚古龙水”，被誉为世上最经典的古龙水。<br />举世闻名的香氛蜡烛系列，全球仅由2名意大利师傅手工制作，每天限量生产80枚。<br /><br />下载「调调」App，搜索“香水”或“香氛”可以看到更多介绍。"),
                array("label" => "包包", "pic" => "http://a.diaox2.com/exam/img/bags.jpg", "desc" => "每个女生都有一只自己梦想中的包包吧？Lady Dior还是Chanel Le Boy？自然是各有所爱。<br />让男人送一只，不如自己赚钱买一只来得舒心吧。希望大家都能早点实现。<br /><br />下载「调调」App，搜索“手袋”或“包”可以看到更多包包。"),
                array("label" => "腕表", "pic" => "http://a.diaox2.com/exam/img/watch.jpg", "desc" => "腕表是男士身份的象征，更是品位和气质的体现。<br />图中的Daniel Wellington腕表，当红潮牌，街拍出镜率很高，被称为全球最出名的尼龙手表。品牌标志性的大圆盘，加上条纹尼龙表带，有一种简洁的文艺感。更为关键的是，品质高但却不贵。<br /><br />当然，每个男生喜欢的风格会不一样。可以下载「调调」App，搜索“表”看到更多时尚的腕表。"),
                array("label" => "电动牙刷", "pic" => "http://a.diaox2.com/exam/img/brush.jpg", "desc" => "牙齿的损伤是不可逆的，保护牙齿健康是很重要的。<br />电动牙刷比普通牙刷要刷的更干净，而且对牙齿和牙龈的损伤更小。如果有条件的话，建议大家都换电动牙刷。<br /><br />图中是飞利浦声波震动牙刷，下载「调调」App，搜索“牙刷”会看到更多介绍。"),
                array("label" => "铸铁珐琅锅", "pic" => "http://a.diaox2.com/exam/img/pot.jpg", "desc" => "一口好的珐琅铸铁锅，不仅受热均匀、密封性好、保温时间长，而且非常好看！<br />作为容器直接端上桌，让整个餐桌的格调都顿时提升，拍照发朋友圈不在话下。<br /><br />下载「调调」App，搜索“铸铁锅”会看到更多介绍。"),
                array("label" => "胶囊咖啡机", "pic" => "http://a.diaox2.com/exam/img/coffee.jpg", "desc" => "胶囊咖啡机可能是家用咖啡机里最方便的选择了。<br />出品稳定，口味多样，操作简单，清洗方便，不需要技术的情况下就能喝到正宗的意式咖啡。<br />Nespresso是胶囊咖啡机的典型代表。<br /><br />下载「调调」App，搜索“咖啡机”会看到更多介绍。"),
                array("label" => "扫地机器人", "pic" => "http://a.diaox2.com/exam/img/robot.jpg", "desc" => "扫地机器人简直是工作繁忙的白领们的福音！<br />白天不在家的时候，它也可以自己在家里打扫，扫完了就自己滚回去充电，是不是萌萌哒~<br />Neato和iRobot都是家用机器人不错的品牌。<br /><br />下载「调调」App，搜索“扫地”会看到更多介绍。"),
                array("label" => "懒人沙发", "pic" => "http://a.diaox2.com/exam/img/sofa.jpg", "desc" => "MUJI懒人沙发，可能是日本最舒服的沙发，会让人沉醉其中不能自拔。<br />由于它的“可塑性”设计，让这款小巧的沙发获得了充足的延伸性。沙发内部填充着一颗颗约0.5mm的小颗粒，这种颗粒不易变形，也让沙发不易塌陷，在提供柔软舒适感的同时，又帮助沙发维持理想形状。<br /><br />下载「调调」App，搜索“沙发”会看到更多介绍。"),
                array("label" => "机甲战士", "pic" => "http://a.diaox2.com/exam/img/jijia.jpg", "desc" => "在脑洞非常大的11区，一个机器人爱好者组织，真的制造出了一个机甲战士！<br />高3.8米，重5吨，绝对是一个庞然大物，可以在《环太平洋》里打水怪了。<br />需要真人驾驶员操控，或者iphone远程操控。<br />如果咱们自己赶不上，是不是可以攒钱给儿子买一台呀。<br />价格也是非常imba，JP￥120,000,000<br /><br />下载「调调」App，搜索“机甲”会看到更多介绍。"),
                array("label" => "以上都不是", "pic" => "http://a.diaox2.com/exam/img/none.jpg", "desc" => "都不是，没简介")
            ),
            "score" => 10
        ),
		array(
            "type" => 1,
            "subject" => "羊年最想收到的礼物",
            "options" => array(
                array("label" => "日本时光婚戒", "pic" => "http://a.diaox2.com/exam/img/1.jpg", "desc" => "时光婚戒<br /><br />婚戒是两个人婚姻的见证，但当岁月流逝，两个人慢慢头发斑白，婚戒也慢慢褪色老去了。<br />Torafu Architects就擅长利用这些温暖的细节，尝试在纯金戒指的外层镀一层银，随着时间流逝、镀银会渐渐被磨掉，但银光褪去后就会露出底下的黄金本色。<br />50年后，当两个人金婚的时候，再看看手上的戒指，也已经变成了金色，十分浪漫。<br /><br />详细介绍及购买方式，请下载「调调」App，搜索“时光婚戒”查看。"),
                array("label" => "《S》", "pic" => "http://a.diaox2.com/exam/img/2.jpg", "desc" => "《S.》<br /><br />颠覆纸书体验的悬疑巨作，复杂的谜团和人物关系让人深深沉溺于其中不可自拔，用一本书换一场悬疑之旅。<br />说《S.》是一本小说，不如说它是一个游戏。用原著+评论的方式，主线讲述着一个悬疑故事，副线是两个读者的评论笔迹，是他们发现了原著作者的秘密。而你要把两条线索结合起来，才能慢慢解开一切的谜团。<br /><br />详细介绍及购买方式，请下载「调调」App，搜索“S.”查看。"),
                array("label" => "古罗玩具", "pic" => "http://a.diaox2.com/exam/img/3.jpg", "desc" => "古罗可动玩具<br /><br />古罗是一个需要组装拼接的小骷髅，组装前的样子如上图。组装后古罗的高度是12厘米，很小巧，放在办公室放在家里都蛮不错。<br />古罗最有趣的地方在于，由于配件很小，关节很灵活，你可以把它组装成各种各样的姿势。据说能模仿80%的人类姿势呢！卖萌、耍帅、逗比无所不能哦~<br /><br />详细介绍及购买方式，请下载「调调」App，搜索“古罗”查看。"),
                array("label" => "磁悬浮音响Mars", "pic" => "http://a.diaox2.com/exam/img/4.jpg", "desc" => "Mars磁悬浮音响<br /><br />最酷莫过于磁悬浮，更那堪、拥有这般颜值。<br />飞碟一样悬浮在上方的是一个可以随身携带的发声单元，圆柱形的底座兼备低音炮和充电两个功能。当飞碟没电了，它就会自动降落下来与底座连接充电，这个细节能狠狠地打动人。<br />音响主体全部采用航空级别铝合金，极轻极优雅。采用全球最先进和稳定的磁悬浮系统，保证发声系统的稳定和音质的纯净——这就是科技之美。<br /><br />详细介绍及购买方式，请下载「调调」App，搜索“磁悬浮音响”查看。"),
                array("label" => "宝丽来Socialmatic相机", "pic" => "http://a.diaox2.com/exam/img/5.jpg", "desc" => "宝丽来相机<br /><br />传说中的宝丽来Socialmatic终于来了！，虽然和概念版的Instagram相机在外观上有诸多不同，但方方正正的造型，经典的彩虹条纹，都足以让粉丝们尖叫一番！<br />它拥有1400万像素后置摄像头，内置wifi和蓝牙，拥有一个4.5寸的触摸屏，搭载安卓系统！相当于一台手机+一台便携式打印机，可以先修图后打印再上传朋友圈，简直是妹子们的大福音哦。<br /><br />详细介绍及购买方式，请下载「调调」App，搜索“宝丽来”查看。"),
                array("label" => "S'well保温瓶", "pic" => "http://a.diaox2.com/exam/img/6.jpg", "desc" => "S'well保温瓶<br /><br />来自纽约的品牌 S'well，让保温瓶变得十分美丽。<br />保温瓶的材质做出了多种变化，从沧桑的原木到野性的鳄鱼皮，从冷静的古铜到闪光的亮漆，极大跨度的色彩质感差异带来完全不同的视觉感官。<br />S’well提供3种型号和多种色彩选择。品质上也是十分考究，热可以保温12小时，冷可以保持24小时。绝对不是中看不中用哦。<br /><br />详细介绍及购买方式，请下载「调调」App，搜索“S'well”查看。"),
                array("label" => "钢铁侠水壶", "pic" => "http://a.diaox2.com/exam/img/7.jpg", "desc" => "钢铁侠同款KOR ONE水杯<br /><br />钢铁侠这位自带逼格的超级英雄使用的水壶确实有品质：杯口经过了精心设计，没有螺旋纹，让饮用的口感变好；大小合适，既能减少液体飞溅，又刚好适合放冰块下去。<br />杯盖有按钮可以一键式开合，便于单手饮水。杯盖内部可以放入照片、图片、字条，非常贴心的个性化功能。<br />这可不只是钢铁侠同款哦，还是贝克汉姆、科比、希拉里·达芙……的同款。<br /><br />详细介绍及购买方式，请下载「调调」App，搜索“钢铁侠”查看。"),
                array("label" => "Lumio书灯", "pic" => "http://a.diaox2.com/exam/img/8.jpg", "desc" => "Lumio书灯<br /><br />文人最爱书与灯，若二者结合在一起则美丽不可方物。<br />Lumio的外型如同普通的书本一样，能够自由开合，根据书展开的角度大小来调节亮度。<br />“书皮”由真木制成，可选胡桃木、樱桃木、枫木。而每一本都由手工打造，更增添了它的文艺气息。<br /><br />详细介绍及购买方式，请下载「调调」App，搜索“书灯”查看。"),
                array("label" => "好看的巧克力", "pic" => "http://a.diaox2.com/exam/img/9.jpg", "desc" => "Norman Love巧克力<br /><br />这款外形美妙绝伦而又味美可口的巧克力糖，让人相信，每一款特别的巧克力背后可能都有美丽的灵感来源。<br />店主Norman Love曾说过，“巧克力就是我的激情”。在巧克力磨具里手绘或者喷上彩色的图案，然后放上从比利时、法国和瑞士进口的优质巧克力。每一颗精心打造的Normal Love巧克力都是对追求完美的人最好的献礼。<br /><br />详细介绍及购买方式，请下载「调调」App，搜索“Norman Love”查看。"),
                array("label" => "化妆品", "pic" => "http://a.diaox2.com/exam/img/10.jpg", "desc" => "化妆品<br /><br />无需多言，女人的化妆盒里，永远都少一件化妆品。<br />说到全亚洲最会化妆的妹子，非Pony莫属。素颜经她手可以粉嫩的像个娃娃，也可以狂野的魅力四射。这些年，多少妹子追随着Pony的步伐，学到了各式各样的化妆技巧。<br />图中这款眼影，来自韩国第一美妆电商Memebox和Pony合作彩妆，八色眼影盘Shine Easy Glam第二代。<br /><br />详细介绍及购买方式，请下载「调调」App，搜索“眼影”查看。"),
                array("label" => "以上都想要", "pic" => "http://a.diaox2.com/exam/img/all.jpg", "desc" => "全部都是我的！")
            ),
            "score" => 10
        )
	);
}

function connect() {
    global $dbhost, $dbuser, $dbpass, $dbname;
    //echo "dbuser = " . $dbuser . "  dbhost = " . $dbhost . " and pass = " . $dbpass . "<== connect param\n";
	$conn = @mysql_connect($dbhost, $dbuser, $dbpass, false);

    //echo mysql_errno() . ": " . mysql_error(). " <==== connect error\n";

        
	if(!@mysql_select_db($dbname, $conn)) {
        //halt('数据库选择失败');
	}
    //mysql_query("set names 'utf8'");
    mysql_set_charset('utf8', $conn);
	return $conn;
}
function disconnect($conn) {
	@mysql_close($conn);
}
function getExam($exam_id) {
	$conn = connect();
	//$exam_id = mysql_real_escape_string($exam_id);
	$sql = "select * from exam where exam_id ='" . $exam_id . "'";
	$res = mysql_query($sql, $conn);
	$arr = array();
	if($res != false) {
		//single result
		$arr = mysql_fetch_array($res, MYSQL_ASSOC);
	}
    /*
    +---------+---------+-------+--------------------------+-------------------+
    | exam_id | openid  | nick  | head                     | exam_json         |
    +---------+---------+-------+--------------------------+-------------------+
    |       1 | openid1 | nick1 | http://mp.qq.com/xxx.jpg | {"key": "value"}  |
    +---------+---------+-------+--------------------------+-------------------+
    */
    disconnect($conn);
    return $arr;
}
function saveExam($exam_json, $openid, $nick, $head) {
	$conn = connect();
	//if not exist
	$exam_json = mysql_real_escape_string($exam_json);
	$openid = mysql_real_escape_string($openid);
	$nick = mysql_real_escape_string($nick);
	$head = mysql_real_escape_string($head);
    #INSERT INTO exam VALUES('0', 'openid2', 'nick2', 'http://mp.qq.com/yyy.png', '{"key": "value1"}');
	$sql = "insert into exam values('0', '" . $openid . "', '" . $nick . "' ,'" . $head . "', '" . $exam_json . "')";
	
    //echo "\n\n\n\n" . $sql;

    $res = mysql_query($sql, $conn);
    if($res == true) {
        $sql = "select LAST_INSERT_ID()";
        $res = mysql_query($sql, $conn);
        if($res == true) {
            $arr = mysql_fetch_array($res, MYSQL_ASSOC);
            disconnect($conn);
            return $arr['LAST_INSERT_ID()'];
        }
    }
    disconnect($conn);
	return false;
}

function existScore($exam_id,$openid){
   
	$conn = connect();
	
    $exam_id = mysql_real_escape_string($exam_id);
    $openid  = mysql_real_escape_string($openid);
	
    $sql = "select * from score where exam_id = '" . $exam_id . "' and openid = '" . $openid . "'";
	$res = mysql_query($sql, $conn);
    $exist = NULL;
	if($res != false) {
		$exist = mysql_fetch_array($res, MYSQL_ASSOC);
	}else {
	    $exist = NULL;
    }
    
    disconnect($conn);

	return $exist;
    
}
function getScore($exam_id) {
	$conn = connect();
	$exam_id = mysql_real_escape_string($exam_id);
	$sql = "select * from score where exam_id ='" . $exam_id . "' order by score desc";
	$score = array();
	$res = mysql_query($sql, $conn);
	if($res != false) {
		while($row = mysql_fetch_array($res, MYSQL_ASSOC)){
			$score[] = $row;
		}
	} else {
		//echo "<span> Error! </span><br />";
	}
    /*
    +---------+---------+-------+-----------------------------+-------+
    | exam_id | openid  | nick  | head                        | score |
    +---------+---------+-------+-----------------------------+-------+
    |       1 | openidA | nickA | http://m.weibo.com/zzz.jpeg |    90 |
    |       1 | openidB | nickB | http://m.weibo.com/987.jpeg |    80 |
    +---------+---------+-------+-----------------------------+-------+
    */
    disconnect($conn);
	return $score;
}
function saveScore($exam_id, $openid, $nick, $head, $score) {
	$conn = connect();
	#INSERT INTO score VALUES('1', 'openidA', 'nickA', "http://m.weibo.com/zzz.jpeg", '{"score": "90"}');
	$exam_id = mysql_real_escape_string($exam_id);
	$openid = mysql_real_escape_string($openid);
	$nick = mysql_real_escape_string($nick);
	$head = mysql_real_escape_string($head);
	$score = mysql_real_escape_string($score);

    $delsql = "delete from score where exam_id = '" . $exam_id . "' and openid = '" . $openid . "' ";
    mysql_query($delsql, $conn);   

	$sql = "insert into score values('" . $exam_id . "', '" . $openid . "', '" . $nick . "', '" . $head . "', '" . $score . "')";
	$res = mysql_query($sql, $conn);
    disconnect($conn);
	if($res != false) {
		return true;
	} else {
		return false;
	}
}
function generateExamJSON($examData, $answers){
	//example : answers = [10,4,7,2,3,4,6,7,2,1,2,10]; 代表用户出题用户的选择
	$json = array();
    $i = 0;
	for ($i = 0; $i < 10; $i++) {
		$question = $examData[$i];
		$answer = $answers[$i];
        //保存目标答案体, {label, pic ..}
        $goal = $question['options'][$answer];
        //删掉
        array_splice($question['options'], $answer, 1);
        //生成答案数组
        $options = array();
        $j = 0;
        for($j = 0; $j < 4; $j++) {
            //$options[] = array_rand($question['options']);
            $pos = rand(0, count($question['options']) - 1);
            $options[] = $question['options'][$pos];
            array_splice($question['options'], $pos, 1);
        }
        //随机生成正确答案位置，插入
        $pos = rand(0, 3);
        $options[$pos] = $goal;
        //根据是否有'以上都...'选项调整，检查前三即可
        for($j = 0; $j < 3; $j++) {
            if(preg_match('/以上都/', $options[$j]['label'])) {
                $tmp = $options[$j];
                $options[$j] = $options[3];
                $options[3] = $tmp;
                if($pos == 3) {
                    //如果原来正确答案就在3
                    $pos = $j;
                } else if($j == $pos) {
                    //恰好调整了目标答案
                    $pos = 3;
                }
                break;
            }
        }
        //保存正确答案的位置和答案
        $question['goal'] = $pos;
        $question['options'] = $options;
        $json[] = $question;
	}
	return json_encode($json); 
}


//START
//进入活动，因为允许重复出题，所以不检查，最后只会save_exam
//进入答题，先判断是否出题人
//出题人看排序, get_score -> 排序
//答题人看回答, -> 没答过, generateExamJSON, 答题 -> save_score
//              -> 答过 -> get_score，看排名

$answers = array(11,3,4,5,6,7,8,9,1,2);
//var_dump(json_encode(getAll()));
//var_dump(generateExamJSON(getAll(), $answers));

/*
//活动页保存题
$answers = $_POST['answers'];
$exam_json = generateExamJSON(getAll(), $answers);
$openid = $_POST['openid'];
$nick = $_POST['nick'];
$head = $_POST['head'];
$exam_id = saveExam($exam_json, $openid, $nick, $head);
$arr = array("result" => "true");
if($exam_id == false) {
    $arr["result"] = "false";
} else {
    $arr['exam_id'] = $exam_id;
}
return json_encode($arr);

//判断当前这家伙是不是这个页的出题人用的
//返回某个题的题主的openid
$exam_id = $_GET['exam_id'];
$result = getExam($exam_id);    //可能为空，不存在的exam_id
$arr = array("result" => "true");
if(empty($result)) {
    $arr["result"] = "false";
} else {
    $arr['openid'] = $result['openid'];
}
return json_encode($arr);


//出题人看排序
//答题人看回答
$exam_id = $_GET['exam_id'];
$result = getScore($exam_id);
return json_encode($result);    //可能为空

//答题人需要做题
$exam_id = $_GET['exam_id'];
$result = getExam($exam_id);
$arr = array("result" => "true");
if(empty($result)) {
    $arr["result"] = "false";
} else {
    $arr['exam'] = $result;
}
return json_encode($arr);
*/
?>
