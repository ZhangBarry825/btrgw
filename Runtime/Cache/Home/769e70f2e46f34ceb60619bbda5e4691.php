<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
<title><?php echo C('WEB_SITE_TITLE');?></title>
<!--<link href="/Public/static/bootstrap/css/bootstrap.css" rel="stylesheet">-->
<!--<link href="/Public/static/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">-->
<!--<link href="/Public/static/bootstrap/css/docs.css" rel="stylesheet">-->
<!--<link href="/Public/static/bootstrap/css/onethink.css" rel="stylesheet">-->

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="/Public/static/bootstrap/js/html5shiv.js"></script>
<![endif]-->

<!--[if lt IE 9]>
<script type="text/javascript" src="/Public/static/jquery-1.10.2.min.js"></script>
<![endif]-->
<!--[if gte IE 9]><!-->
<script type="text/javascript" src="/Public/static/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="/Public/static/bootstrap/js/bootstrap.min.js"></script>
<!--<![endif]-->
<!-- 页面header钩子，一般用于加载插件CSS文件和代码 -->
<?php echo hook('pageHeader');?>

	
    <link href="/Public/Home/my/css/index.css" rel="stylesheet">
    <link rel="stylesheet" href="/Public/Home/my/css/swiper.min.css">
    <script src="/Public/Home/my/js/swiper.min.js"></script>
    <script src="/Public/Home/my/js/index.js"></script>

</head>
<body>

	<!-- 主体 -->
	
    <div class="top-background" style="background-image: url('/Public/Home/my/images/back01.jpg')">
        <div class="top-header">
            <div class="top-center">
                <div class="top-center-left">
                    <img src="/Public/Home/my/images/logo02.png">
                    <a>河南拜特尔软件科技有限公司</a>
                </div>
                <div class="top-center-right">
                    <ul>
                        <?php $__NAV__ = M('Channel')->field(true)->where("status=1")->order("sort")->select(); if(is_array($__NAV__)): $i = 0; $__LIST__ = $__NAV__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i; if(($nav["pid"]) == "0"): ?><li>
                                    <a href="<?php echo (get_nav_url($nav["url"])); ?>"
                                       target="<?php if(($nav["target"]) == "1"): ?>_blank<?php else: ?>_self<?php endif; ?>"><?php echo ($nav["title"]); ?></a>
                                </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="gywm">
        <div class="gywm-title">关于我们</div>
        <div class="gywm-middle">
            <div class="gywm-middle-left">
                <img src="/Public/Home/my/images/pic01.jpg">
            </div>
            <div class="gywm-middle-right">
                <div class="gywm-middle-top">
                    <span>河南拜特尔软件科技有限公司</span> 隶属于香港明码集团，独创技术为理念的新型企业，集团总部设在香港，并于深圳、厦门、上海、苏州、
                    昆山、天津、唐山等区域设立下属多家企业，产品主要聚焦于标识、科技电子、互联网、软件等相关产业，与美国、德国、英国、意大利
                    等多家巨头企业合作，共同开发或自主研发行业产品，多个产品先后获得发明专利、应用新型专利证书，且应用模式开创多个全球第一！
                </div>
                <div class="gywm-middle-bottom">
                    <span>不求最好，只愿更强！</span><br>
                    <a>——Better</a>
                </div>
            </div>
        </div>

    </div>
    <div class="jtjs">
        <div class="jtjs-left" style="background-image: url('/Public/Home/my/images/pic02.jpg')">
        </div>
        <div class="jtjs-right">
            <div class="jtjs-right-title">集团介绍</div>
            <div class="jtjs-right-one">
                <a>明码集团</a> &nbsp;&nbsp;&nbsp;是以企业社会责任为信条，独创技术为理念的新型企业，集团总部设在香港，并于深圳、厦门、上海、苏州、
                昆山、天津、唐山等区域设立下属多家企业，产品主要聚焦于标识、科技电子、互联网、软件等相关产业，与美国、德国、英国、意大利
                等多家巨头企业合作，共同开发或自主研发行业产品，多个产品先后获得发明专利、应用新型专利证书，且应用模式开创多个全球第一！
            </div>
            <div class="jtjs-right-two">
                <a>明码理念</a><br>
                提倡“以人为本”的理念，在细节中处处体现对人的尊重，人尽其才的用人观让员工与企业共同成长。<br>
                提供优质的产品和服务，以顾客满意为中心，不断创新产品和服务，唯有创新才能够源源不断地提供企业发展的动力。
            </div>
            <div class="jtjs-right-three">
                <a>集团企业</a><br>
                <div class="jtjs-right-three-detail" style="margin-left: 0">
                    <img src="/Public/Home/my/images/logo01.png">
                    <a>明码实业</a>
                </div>
                <div class="jtjs-right-three-detail">
                    <img src="/Public/Home/my/images/logo02.png">
                    <a>拜特尔软件</a>
                </div>
                <div class="jtjs-right-three-detail">
                    <img src="/Public/Home/my/images/logo03.png">
                    <a>钦轩科技</a>
                </div>
            </div>
        </div>
    </div>
    <div class="xwzx">
        <div class="xwzx-title">新闻中心</div>
        <div class="xwzx-button">查看更多</div>



        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="xwzx-detail" style="margin-left: 0">
                        <img src="/Public/Home/my/images/lbt01.png">
                        <div class="xwzx-detail-right">
                            <div class="right-a">【明码】2017第8届亚洲国际标签印刷展|明码集团获行业内外一致认可【明码】2017第8届亚洲国际标签印刷展|明码集团获行业内外一致认可</div>
                            <hr>
                            <span>2017年12月5日-8日，第八届亚洲国际标签印刷展览会于上海新国际博览展中心如期举办。2017年12月5日-8日，第八届亚洲国际标签印刷展览会于上海新国际博览展中心如期举办。</span>
                        </div>
                    </div>
                    <div class="xwzx-detail">
                        <img src="/Public/Home/my/images/lbt02.png">
                        <div class="xwzx-detail-right">
                            <a>【明码】2017第8届亚洲国际标签印刷展|明码集团获行业内外一致认可</a>
                            <hr>
                            <span>2017年12月5日-8日，第八届亚洲国际标签印刷展览会于上海新国际博览展中心如期举办。</span>
                        </div>
                    </div>
                    <div class="xwzx-detail" style="margin-left: 0">
                        <img src="/Public/Home/my/images/lbt03.png">
                        <div class="xwzx-detail-right">
                            <a>【明码】2017第8届亚洲国际标签印刷展|明码集团获行业内外一致认可</a>
                            <hr>
                            <span>2017年12月5日-8日，第八届亚洲国际标签印刷展览会于上海新国际博览展中心如期举办。</span>
                        </div>
                    </div>
                    <div class="xwzx-detail">
                        <img src="/Public/Home/my/images/lbt03.png">
                        <div class="xwzx-detail-right">
                            <a>【明码】2017第8届亚洲国际标签印刷展|明码集团获行业内外一致认可</a>
                            <hr>
                            <span>2017年12月5日-8日，第八届亚洲国际标签印刷展览会于上海新国际博览展中心如期举办。</span>
                        </div>
                    </div>
                </div>

            </div>


            <!-- 如果需要导航按钮 -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>




    </div>











    <div class="span9">
        <!-- Contents
        ================================================== -->
        <section id="contents">
            <?php $__CATE__ = D('Category')->getChildrenId(1);$__LIST__ = D('Document')->page(!empty($_GET["p"])?$_GET["p"]:1,10)->lists($__CATE__, '`level` DESC,`id` DESC', 1,true); if(is_array($__LIST__)): $i = 0; $__LIST__ = $__LIST__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$article): $mod = ($i % 2 );++$i;?><div class="">
                    <h3><a href="<?php echo U('Article/detail?id='.$article['id']);?>"><?php echo ($article["title"]); ?></a></h3>
                </div>
                <div>
                    <p class="lead"><?php echo ($article["description"]); ?></p>
                </div>
                <div>
                    <span><a href="<?php echo U('Article/detail?id='.$article['id']);?>">查看全文</a></span>
                    <span class="pull-right">
                        <span class="author"><?php echo (get_username($article["uid"])); ?></span>
                        <span>于 <?php echo (date('Y-m-d H:i',$article["create_time"])); ?></span> 发表在 <span>
                        <a href="<?php echo U('Article/lists?category='.get_category_name($article['category_id']));?>"><?php echo (get_category_title($article["category_id"])); ?></a></span> ( 阅读：<?php echo ($article["view"]); ?> )
                    </span>
                </div>
                <hr/><?php endforeach; endif; else: echo "" ;endif; ?>

        </section>
    </div>


<script type="text/javascript">
    $(function(){
        $(window).resize(function(){
            $("#main-container").css("min-height", $(window).height() - 343);
        }).resize();
    })
</script>
	<!-- /主体 -->

	<!-- 底部 -->
	
    <!-- 底部
    ================================================== -->
    <footer class="footer">
      <div class="container">
          <p> 本站由 <strong><a href="http://www.onethink.cn" target="_blank">OneThink</a></strong> 强力驱动</p>
      </div>
    </footer>

<script type="text/javascript">
(function(){
	var ThinkPHP = window.Think = {
		"ROOT"   : "", //当前网站地址
		"APP"    : "/index.php", //当前项目地址
		"PUBLIC" : "/Public", //项目公共目录地址
		"DEEP"   : "<?php echo C('URL_PATHINFO_DEPR');?>", //PATHINFO分割符
		"MODEL"  : ["<?php echo C('URL_MODEL');?>", "<?php echo C('URL_CASE_INSENSITIVE');?>", "<?php echo C('URL_HTML_SUFFIX');?>"],
		"VAR"    : ["<?php echo C('VAR_MODULE');?>", "<?php echo C('VAR_CONTROLLER');?>", "<?php echo C('VAR_ACTION');?>"]
	}
})();
</script>
 <!-- 用于加载js代码 -->
<!-- 页面footer钩子，一般用于加载插件JS文件和JS代码 -->
<?php echo hook('pageFooter', 'widget');?>
<div class="hidden"><!-- 用于加载统计代码等隐藏元素 -->
	
</div>

	<!-- /底部 -->
</body>
</html>