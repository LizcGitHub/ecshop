<?php exit;?>a:3:{s:8:"template";a:2:{i:0;s:77:"F:/_PHP/_PHP_Study/WWW/demo/ecchop_/mobile/themes/default/group_buy_goods.dwt";i:1;s:81:"F:/_PHP/_PHP_Study/WWW/demo/ecchop_/mobile/themes/default/library/page_footer.lbi";}s:7:"expires";i:1496413626;s:8:"maketime";i:1496410026;}<!DOCTYPE html>
<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<title>保丽净假牙清洁片_团购商品_鹭燕健康商城</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<link href="images/touch-icon.png" rel="apple-touch-icon-precomposed" />
<link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href="themes/default/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/common.js"></script><script type="text/javascript" src="js/lefttime.js"></script><script type="text/javascript" src="themes/default/js/jquery-1.4.4.min.js"></script>
<script type="text/javascript">
      var process_request = "正在处理您的请求...";
      var goodsname_not_null = "商品名不能为空！";
  </script>
<script type="text/javascript">
// 筛选商品属性
jQuery(function($) {
	$(".info").click(function(){
		$('.goodsBuy .fields').slideToggle("fast");
	});
})
function changenum(diff) {
	var num = parseInt(document.getElementById('goods_number').value);
	var goods_number = num + Number(diff);
	if( goods_number >= 1){
		document.getElementById('goods_number').value = goods_number;//更新数量
		changePrice();
	}
}
</script>
</head>
<body>
<div id="page" style="right: 0px; left: 0px; display: block;">
  <header id="header" style="z-index:1">
    <div class="header_l"> <a class="ico_10" href="javascript:history.go(-1);"> 返回 </a> </div>
    <h1> 团购商品详情 </h1>
    <div class="header_r header_search"> <a class="ico_17" href="index.php"> 首页 </a> </div>
  </header>
  <section class="goods_slider">
    <div class="blank2"></div>
    <div id="slideBox" class="slideBox">
      <div class="scroller">
        <ul>
          <li><a href="javascript:showPic()"><img src="/images/201702/thumb_img/3107_thumb_G_1487554812070.jpg" alt="保丽净假牙清洁片" /></a></li>
        </ul>
      </div>
    </div>
    <div class="blank2"></div>
  </section>
  <section class="goodsInfo">
    <div class="title">
      <h1>保丽净假牙清洁片</h1>
    </div>
    <ul>
      
            <li>限购数量： 10000</li>
      
      
            <font class="f4">该团购活动正在火热进行中，距离结束时间还有：      <span id="leftTime">请稍等, 正在载入中...</span></font><br />
      当前价格： ￥40.00元<br />
      当前定购数量： 0<br />
          </ul>
    <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
     <tr>
        <th width="30%" bgcolor="#FFFFFF">数量</th>
       <th width="70%" bgcolor="#FFFFFF">价格</th>
      </tr>
            <tr>
        <td width="30%" bgcolor="#FFFFFF">2</td>
       <td width="70%" bgcolor="#FFFFFF">￥40.00元</td>
      </tr>
            <tr>
        <td width="30%" bgcolor="#FFFFFF">5</td>
       <td width="70%" bgcolor="#FFFFFF">￥30.00元</td>
      </tr>
            <tr>
        <td width="30%" bgcolor="#FFFFFF">10</td>
       <td width="70%" bgcolor="#FFFFFF">￥20.00元</td>
      </tr>
          </table>
  </section>
  <div class="wrap">
    <section class="goodsBuy radius5">
    <input id="goodsBuy-open" type="checkbox">
    <label class="info" for="goodsBuy-open">
    <div>请选择<span></span><i></i></div>
    <div class="selected"> </div>
    </label>
    <form action="group_buy.php?act=buy" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
      <div class="fields">
        <ul class="ul1">
          <li>商品总价：<font id="ECS_GOODS_AMOUNT" class="price">￥40.00元</font></li>
        </ul>
        <ul class="ul2">
         
         
         
        </ul>
                <ul class="quantity">
          <h2>数量：</h2>
          <div class="items"> <span class="ui-number radius5">
          <button type="button" class="decrease" onclick="changenum(-1)">-</button>
          <input class="num" name="number" id="goods_number" autocomplete="off" value="1" min="1" max="" type="text">
          <button type="button" class="increase" onclick="changenum(1)">+</button>
          </span></div>
        </ul>
              </div>
      <div class="option" >
        <script type="text/javascript">
            function showDiv(){
							document.getElementById('popDiv').style.display = 'block';
							document.getElementById('hidDiv').style.display = 'block';
							document.getElementById('cartNum').innerHTML = document.getElementById('goods_number').value;
							document.getElementById('cartPrice').innerHTML = document.getElementById('ECS_GOODS_AMOUNT').innerHTML;
            }
            function closeDiv(){
							document.getElementById('popDiv').style.display = 'none';
							document.getElementById('hidDiv').style.display = 'none';
            }
     </script>
     	          <input type="hidden" name="group_buy_id" value="24" />
        <button type="submit" class="btn cart radius5">
        <div class="ico_01"></div>
        立即购买</button>
              </div>
    </form>
  </section>
    <section class="s-detail">
      <div id="tab1">
        <div class="desc wrap">
          <div class="blank2"></div>
                  </div>
      </div>
    </section>
  </div>
</div>
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
<script type="text/javascript">
//介绍 评价 咨询切换
var tab_now = 1;
function tab(id){
	document.getElementById('tabs' + tab_now).className = document.getElementById('tabs' + tab_now).className.replace('current', '');
	document.getElementById('tabs' + id).className = document.getElementById('tabs' + id).className.replace('', 'current');
	tab_now = id;
	if (id == 1) {
		document.getElementById('tab1').className = '';
		document.getElementById('tab2').className = 'hidden';
		document.getElementById('tab3').className = 'hidden';
	}else if (id == 2) {
		document.getElementById('tab1').className = 'hidden';
		document.getElementById('tab2').className = '';
		document.getElementById('tab3').className = 'hidden';
	}else if (id == 3) {
		document.getElementById('tab1').className = 'hidden';
		document.getElementById('tab2').className = 'hidden';
		document.getElementById('tab3').className = '';
	}
}
</script>
<script type="text/javascript">
var gmt_end_time = "1498118400";
var day = "天";
var hour = "小时";
var minute = "分钟";
var second = "秒";
var end = "结束";
var now_time = 1496410026;
onload = function()
{
  try
  {
    onload_leftTime();
  }
  catch (e)
  {}
}
</script>
</body>
</html>