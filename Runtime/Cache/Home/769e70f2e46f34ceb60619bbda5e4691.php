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
    <link rel="shortcut icon" href="/Public/Home/my/images/tm.png" type="image/x-icon"/>

    <link href="/Public/Home/my/css/footer.css" rel="stylesheet">
</head>
<body>

<!-- 主体 -->

    <div class="top-background" style="background-image: url('/Public/Home/my/images/back01.jpg')">
        <div class="top-header">
            <div class="top-center">
                <div class="top-center-left">
                    <img src="/Public/Home/my/images/tm.png">
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
                <?php if(is_array($xwzx_lists)): $i = 0; $__LIST__ = $xwzx_lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><div class="swiper-slide">
                        <a href="<?php echo U('Article/detail?id='.$list[0]['id']);?>"><div class="xwzx-detail" style="margin-left: 0">
                            <img src="<?php echo get_cover($list[0]['cover_id'],$field = path);?>">
                            <div class="xwzx-detail-right">
                                <div class="right-a"><?php echo ($list[0]['title']); ?></div>
                                <hr>
                                <span><?php echo ($list[0]['description']); ?></span>
                            </div>
                        </div></a>
                        <a href="<?php echo U('Article/detail?id='.$list[1]['id']);?>"><div class="xwzx-detail">
                            <img src="<?php echo get_cover($list[1]['cover_id'],$field = path);?>">
                            <div class="xwzx-detail-right">
                                <div class="right-a"><?php echo ($list[1]['title']); ?></div>
                                <hr>
                                <span><?php echo ($list[1]['description']); ?></span>
                            </div>
                        </div></a>
                        <a href="<?php echo U('Article/detail?id='.$list[2]['id']);?>"><div class="xwzx-detail" style="margin-left: 0">
                            <img src="<?php echo get_cover($list[2]['cover_id'],$field = path);?>">
                            <div class="xwzx-detail-right">
                                <div class="right-a"><?php echo ($list[2]['title']); ?></div>
                                <hr>
                                <span><?php echo ($list[2]['description']); ?></span>
                            </div>
                        </div></a>
                        <a href="<?php echo U('Article/detail?id='.$list[3]['id']);?>"><div class="xwzx-detail">
                            <img src="<?php echo get_cover($list[3]['cover_id'],$field = path);?>">
                            <div class="xwzx-detail-right">
                                <div class="right-a"><?php echo ($list[3]['title']); ?></div>
                                <hr>
                                <span><?php echo ($list[3]['description']); ?></span>
                            </div>
                        </div></a>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>


            <!-- 如果需要导航按钮 -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>
    </div>
    <div class="jrwm" style="background-image: url('/Public/Home/my/images/back02.jpg')">
        <div class="jrwm-center">
            <div class="jrwm-center-zz"></div>
            <div class="jrwm-center-title">期待你的加入</div>
            <div class="jrwm-center-one">
                我们是一群有理想、有干劲的年轻人，<br>我们不知道什么是成功，但我们知道什么是产品；我们不知道什么努力，
                但我们知道什么是专注；我们不知道什么是勤劳，但我们知道什么是效率；我们不知道什么是完美，但我们知道什么是超越;
                我们不知道什么是商业，但我们知道什么是诚信。
            </div>
            <div class="jrwm-button">加入我们</div>
            <div class="jrwm-center-two">
                <div class="jrwm-center-two-detail">
                    <img src="/Public/Home/my/images/t01.png"><br>
                    <div class="jrwm-center-two-detail-a">经验丰富</div><br>
                    <div  class="jrwm-center-two-detail-b">有着丰富的工作经验和能力</div>
                </div>
                <div class="jrwm-center-two-detail">
                    <img src="/Public/Home/my/images/t02.png"><br>
                    <div class="jrwm-center-two-detail-a">弹性工作</div><br>
                    <div  class="jrwm-center-two-detail-b">我们注重的是效率</div>
                </div>
                <div class="jrwm-center-two-detail">
                    <img src="/Public/Home/my/images/t03.png"><br>
                    <div class="jrwm-center-two-detail-a">分为融洽</div><br>
                    <div  class="jrwm-center-two-detail-b">我们注重的是效率</div>
                </div>
            </div>
        </div>
    </div>
    <div class="lxwm">
        <div class="lxwm-title">联系我们</div>
        <div class="lxwm-center">
            <div class="lxwm-center-left" style="background-image: url('/Public/Home/my/images/map.png')">

                <img class="lxwm-center-left-a" src="/Public/Home/my/images/pointer01.png">
                <img class="lxwm-center-left-b" src="/Public/Home/my/images/pointer02.png">
                <img class="lxwm-center-left-c" src="/Public/Home/my/images/pointer02.png">
                <img class="lxwm-center-left-d" src="/Public/Home/my/images/pointer02.png">
                <img class="lxwm-center-left-e" src="/Public/Home/my/images/pointer02.png">
                <img class="lxwm-center-left-f" src="/Public/Home/my/images/pointer02.png">
                <div class="lxwm-center-left-text">河南 郑州</div>
            </div>
            <div class="lxwm-center-right">
                <div class="lxwm-center-right-a">河南拜特尔软件科技有限公司</div>
                <div class="lxwm-center-right-b" style="margin-top: 50px"><a>地址：</a>郑州市中原中路146号2号楼203室</div>
                <div class="lxwm-center-right-b"><a>联系邮箱：</a>izc@hnbtr.com</div>
                <div class="lxwm-center-right-b"><a>联系电话：</a>0371-53337616</div>
            </div>
        </div>
    </div>









    <!--<div class="span9">-->
        <!--&lt;!&ndash; Contents-->
        <!--================================================== &ndash;&gt;-->
        <!--<section id="contents">-->
            <!--<?php $__CATE__ = D('Category')->getChildrenId(1);$__LIST__ = D('Document')->page(!empty($_GET["p"])?$_GET["p"]:1,10)->lists($__CATE__, '`level` DESC,`id` DESC', 1,true); if(is_array($__LIST__)): $i = 0; $__LIST__ = $__LIST__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$article): $mod = ($i % 2 );++$i;?>-->
                <!--<div class="">-->
                    <!--<h3><a href="<?php echo U('Article/detail?id='.$article['id']);?>"><?php echo ($article["title"]); ?></a></h3>-->
                <!--</div>-->
                <!--<div>-->
                    <!--<p class="lead"><?php echo ($article["description"]); ?></p>-->
                <!--</div>-->
                <!--<div>-->
                    <!--<span><a href="<?php echo U('Article/detail?id='.$article['id']);?>">查看全文</a></span>-->
                    <!--<span class="pull-right">-->
                        <!--<span class="author"><?php echo (get_username($article["uid"])); ?></span>-->
                        <!--<span>于 <?php echo (date('Y-m-d H:i',$article["create_time"])); ?></span> 发表在 <span>-->
                        <!--<a href="<?php echo U('Article/lists?category='.get_category_name($article['category_id']));?>"><?php echo (get_category_title($article["category_id"])); ?></a></span> ( 阅读：<?php echo ($article["view"]); ?> )-->
                    <!--</span>-->
                <!--</div>-->
                <!--<hr/>-->
            <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->

        <!--</section>-->
    <!--</div>-->


<script type="text/javascript">
    $(function(){
        $(window).resize(function(){
            $("#main-container").css("min-height", $(window).height() - 343);
        }).resize();
    })
</script>
<!-- /主体 -->

<!-- 底部 -->

    <footer class="footer">
        <div class="footer-bottom">
            <div class="footer-bottom-center">
                <img src="/Public/Home/my/images/tm.png">
                <div class="footer-bottom-center-one">河南拜特尔软件科技有限公司</div>
                <div class="footer-bottom-center-two">Copyright &copy; 2015 Better Software. All Rights Reserved.</div>
            </div>
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