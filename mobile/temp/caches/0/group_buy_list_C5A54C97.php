<?php exit;?>a:3:{s:8:"template";a:2:{i:0;s:76:"F:/_PHP/_PHP_Study/WWW/demo/ecchop_/mobile/themes/default/group_buy_list.dwt";i:1;s:81:"F:/_PHP/_PHP_Study/WWW/demo/ecchop_/mobile/themes/default/library/page_footer.lbi";}s:7:"expires";i:1496329417;s:8:"maketime";i:1496325817;}<!DOCTYPE html>
<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta charset="utf-8" />
<title>团购商品_鹭燕健康商城</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<link href="images/touch-icon.png" rel="apple-touch-icon-precomposed" />
<link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href="themes/default/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="page" style="right: 0px; left: 0px; display: block;">
  <header id="header" style="z-index:1">
    <div class="header_l"> <a class="ico_10" href="javascript:history.go(-1);"> 返回 </a> </div>
    <h1> SuperTouch 团购 </h1>
    <div class="header_r header_search"> <a class="ico_17" href="index.php"> 首页 </a> </div>
  </header>
  <div class="srp album flex-f-row" id="J_ItemList" style="opacity:1;">
    <div class="product flex_in single_item">
      <div class="pro-inner"></div>
    </div>
    <a href="javascript:;" class="get_more"></a> </div>
  <div class="mr-t20">
  <div class="footer1">
    <div class="in">
      <div class="footSearch">
        <form id="searchFormfoot" name="searchForm" method="get" action="search.php">
          <input name="keywords" type="text" id="keywordfoot">
          <button type="submit" id="submitfoot"></button>
        </form>
      </div>
      <a href="index.php" class="homeBtn"><span></span></a> <a href="javascript:scroll(0,0)" class="gotop"> <span></span>
      <p>回顶部</p>
      </a> </div>
    <!--<ul class="mf_o2">
            <li><a href="#" >触屏版</a></li>
            <li><a href="#" >电脑版</a></li>
            <li><a href="article.php?id=3" >客户端</a></li>
          </ul>-->
    <p class="mf_o4">厦门鹭燕电子商务有限公司所有，并保留所有权利。</p>
  </div>
</div>
<link href="themes/default/css/global_nav.css?v=20140408" type="text/css" rel="stylesheet"/>
<div class="global-nav global-nav--current">
  <div class="global-nav__nav-wrap">
    <div class="global-nav__nav-item"> <a href="./" class="global-nav__nav-link"> <i class="global-nav__iconfont global-nav__icon-index">&#xf0001;</i> <span class="global-nav__nav-tit">首页</span> </a> </div>
    <div class="global-nav__nav-item"> <a href="catalog.php" class="global-nav__nav-link"> <i class="global-nav__iconfont global-nav__icon-category">&#xf0002;</i> <span class="global-nav__nav-tit">分类</span> </a> </div>
    <div class="global-nav__nav-item"> <a href="javascript:get_search_box();" class="global-nav__nav-link"> <i class="global-nav__iconfont global-nav__icon-search">&#xf0003;</i> <span class="global-nav__nav-tit">搜索</span> </a> </div>
    <div class="global-nav__nav-item"> <a href="flow.php?step=cart" class="global-nav__nav-link"> <i class="global-nav__iconfont global-nav__icon-shop-cart">&#xf0004;</i> <span class="global-nav__nav-tit">购物车</span> <span class="global-nav__nav-shop-cart-num" id="carId">554fcae493e564ee0dc75bdf2ebf94cacart_info_new|a:1:{s:4:"name";s:13:"cart_info_new";}554fcae493e564ee0dc75bdf2ebf94ca</span> </a> </div>
    <div class="global-nav__nav-item"> <a href="user.php" class="global-nav__nav-link"> <i class="global-nav__iconfont global-nav__icon-my-yhd">&#xf0005;</i> <span class="global-nav__nav-tit">会员中心</span> </a> </div>
  </div>
  <div class="global-nav__operate-wrap"> <span class="global-nav__yhd-logo"></span> <span class="global-nav__operate-cart-num" id="globalId">554fcae493e564ee0dc75bdf2ebf94cacart_info_new|a:1:{s:4:"name";s:13:"cart_info_new";}554fcae493e564ee0dc75bdf2ebf94ca</span> </div>
</div>
<script type="text/javascript" src="themes/default/js/zepto.min.js?v=20140408"></script>
<script type="text/javascript">
$(function() {
	$("#submitfoot").click(function() {
	if($("#keywordfoot").val()){
		$("#searchFormfoot").submit();
	} else {
		alert("请输入关键词！");
		return false;
	}
	})
});
Zepto(function($){
   var $nav = $('.global-nav'), $btnLogo = $('.global-nav__operate-wrap');
   //点击箭头，显示隐藏导航
   $btnLogo.on('click',function(){
     if($btnLogo.parent().hasClass('global-nav--current')){
       navHide();
     }else{
       navShow();
     }
   });
   var navShow = function(){
     $nav.addClass('global-nav--current');
   }
   var navHide = function(){          
     $nav.removeClass('global-nav--current');
   }
   
   $(window).on("scroll", function() {           
		if($nav.hasClass('global-nav--current')){
			navHide();
		}
	});
})
function get_search_box(){
	try{
		document.getElementById('get_search_box').click();
	}catch(err){
		document.getElementById('keywordfoot').focus();
 	}
}
</script>
</div>
</div>
<script type="text/javascript" src="themes/default/js/jquery.min.js"></script>
<script type="text/javascript" src="themes/default/js/jquery.more.js"></script>
<script type="text/javascript" src="themes/default/js/supertouch.js"></script>
<script type="text/javascript">
jQuery(function($){
	$('#J_ItemList').more({'address': 'group_buy.php?act=asynclist', 'spinner_code':'<div style="text-align:center; margin:10px;"><img src="themes/default/images/loader.gif" /></div>'})
	$(window).scroll(function () {
		if ($(window).scrollTop() == $(document).height() - $(window).height()) {
			$('.get_more').click();
		}
	});
});
</script>
</body>
</html>