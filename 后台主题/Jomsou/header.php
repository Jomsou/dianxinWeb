<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?php if ( is_home() ) {
        bloginfo('name'); echo " - "; bloginfo('description');
    } elseif ( is_category() ) {
        single_cat_title(); echo " - "; bloginfo('name');
    } elseif (is_single() || is_page() ) {
        single_post_title();
    } elseif (is_search() ) {
        echo "搜索结果"; echo " - "; bloginfo('name');
    } elseif (is_404() ) {
        echo '页面未找到!';
    } else {
        wp_title('',true);
    } ?></title>
<meta name="description" content="">
<meta name="keywords" content="">

<!-- Stylesheets -->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0 - 所有文章" href="<?php echo $feed; ?>" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0 - 所有评论" href="<?php bloginfo('comments_rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
</head>

<?php flush(); ?>

<body>
	<!--头部-->
    <div class="header">
        <div class="header-sub width">
            <div id="xueyuan-logo">
                <img src="<?php bloginfo('template_url'); ?>/images/xueyuan_logo.png" alt="电信学院logo">
            </div>
            <div id="xueyuan-name">
                <div id="xueyuan-name-up">
                    电子信息工程学院
                </div>
                <div id="xueyuan-name-down">
                    School of electronic information and Engineering
                </div>
            </div>
            <div id="school-name">
                <div id="school-name-up">
                    佛山科学技术学院
                </div>
                <div id="school-name-down">
                    FOSHAN UNIVERSITY
                </div>
            </div>
        </div>
        <div class="search-down">
                  <form class=search " action="http://web.fosu.edu.cn/" target="_blank">
                    <input type="text" id="find" name="s" value="站内搜索..." onfocus="if (value =='站内搜索...'){value =''}" onblur="if (value ==''){value='站内搜索...'}" alt="Search">
                    <input type="submit" id="searchsubmit" value=" " onclick="if(document.forms['search'].searchinput.value=='- Search -')document.forms['search'].searchinput.value=' ';">
                  </form>
        </div>
    </div>
    <!--导航栏-->
    <div class="nav">
    	<ul class="width">
    		<li>
                <a href="">
                    首页
                        <ul class="sub-nav">
                            <li><a href="">学校简介</a></li>
                            <li><a href="">学校沿革</a></li>
                            <li><a href="">现任领导</a></li>
                            <li><a href="">机构设置</a></li>
                        </ul>
                </a>
            </li>
    		<li>
                <a href="">
                    学院概况
                        <ul class="sub-nav">
                            <li><a href="">学校简介</a></li>
                            <li><a href="">学校沿革</a></li>
                            <li><a href="">现任领导</a></li>
                            <li><a href="">机构设置</a></li>
                        </ul>
                </a>
            </li>
    		<li>
                <a href="">
                    教学教研
                        <ul class="sub-nav">
                            <li><a href="">学校简介</a></li>
                            <li><a href="">学校沿革</a></li>
                            <li><a href="">现任领导</a></li>
                            <li><a href="">机构设置</a></li>
                        </ul>
                </a>
            </li>
    		<li>
                <a href="">
                    科学研究
                        <ul class="sub-nav">
                            <li><a href="">学校简介</a></li>
                            <li><a href="">学校沿革</a></li>
                            <li><a href="">现任领导</a></li>
                            <li><a href="">机构设置</a></li>
                        </ul>
                </a>
            </li>
    		<li>
                <a href="">
                    实验室建设
                        <ul class="sub-nav">
                            <li><a href="">学校简介</a></li>
                            <li><a href="">学校沿革</a></li>
                            <li><a href="">现任领导</a></li>
                            <li><a href="">机构设置</a></li>
                        </ul>
                </a>
            </li>
    		<li>
                <a href="">
                    成人教育
                        <ul class="sub-nav">
                            <li><a href="">学校简介</a></li>
                            <li><a href="">学校沿革</a></li>
                            <li><a href="">现任领导</a></li>
                            <li><a href="">机构设置</a></li>
                        </ul>
                </a>
            </li>
    		<li>
                <a href="">
                    党建视窗
                        <ul class="sub-nav">
                            <li><a href="">学校简介</a></li>
                            <li><a href="">学校沿革</a></li>
                            <li><a href="">现任领导</a></li>
                            <li><a href="">机构设置</a></li>
                        </ul>
                </a>
            </li>
    		<li>
                <a href="">
                    学生工作
                        <ul class="sub-nav">
                            <li><a href="">学校简介</a></li>
                            <li><a href="">学校沿革</a></li>
                            <li><a href="">现任领导</a></li>
                            <li><a href="">机构设置</a></li>
                        </ul>
                </a>
            </li>
    		<li>
                <a href="">
                    研究生工作
                        <ul class="sub-nav">
                            <li><a href="">学校简介</a></li>
                            <li><a href="">学校沿革</a></li>
                            <li><a href="">现任领导</a></li>
                            <li><a href="">机构设置</a></li>
                        </ul>
                </a>
            </li>
    		<li>
                <a href="">
                    下载中心
                        <ul class="sub-nav">
                            <li><a href="">学校简介</a></li>
                            <li><a href="">学校沿革</a></li>
                            <li><a href="">现任领导</a></li>
                            <li><a href="">机构设置</a></li>
                        </ul>
                </a>
            </li>
    		<li>
                <a href="">
                    专业认证
                        <ul class="sub-nav">
                            <li><a href="">学校简介</a></li>
                            <li><a href="">学校沿革</a></li>
                            <li><a href="">现任领导</a></li>
                            <li><a href="">机构设置</a></li>
                        </ul>
                </a>
            </li>
    	</ul>
    </div>