<?php exit;?>a:3:{s:8:"template";a:3:{i:0;s:63:"F:/_PHP/_PHP_Study/WWW/demo/oms/mobile/themes/default/goods.dwt";i:1;s:74:"F:/_PHP/_PHP_Study/WWW/demo/oms/mobile/themes/default/library/comments.lbi";i:2;s:77:"F:/_PHP/_PHP_Study/WWW/demo/oms/mobile/themes/default/library/page_footer.lbi";}s:7:"expires";i:1496137848;s:8:"maketime";i:1496134248;}<!DOCTYPE html>
<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta charset="utf-8" />
<title>沙美特罗替卡松粉吸入剂_哮喘_呼吸系统_中西药品_鹭燕健康商城</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<link href="images/touch-icon.png" rel="apple-touch-icon-precomposed" />
<link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href="themes/default/style.css" rel="stylesheet" type="text/css" />
<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="js/js/common.js"></script><script type="text/javascript" src="themes/default/js/TouchSlide.js"></script>
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
<header id="header">
  <div class="header_l header_return"> <a class="ico_10" onClick="javascript:history.go(-1);"> 返回 </a> </div>
  <h1> 商品详情 </h1>
  <div class="header_r header_search"> <a class="ico_15" href="supertouch.php?act=share&content=沙美特罗替卡松粉吸入剂&pic=../images/201702/goods_img/4228_G_1488180698081.jpg"> 分享 </a> </div>
</header>
<section class="goods_slider">
  <div class="blank2"></div>
  <div id="slideBox" class="slideBox">
    <div class="scroller">
      <!--<div><a href="javascript:showPic()"><img src="../images/201702/thumb_img/4228_thumb_G_1488180698313.jpg"  alt="沙美特罗替卡松粉吸入剂" /></a></div>-->
      <ul>
      <li><a href="javascript:showPic()"><img alt="" src="../images/201702/source_img/4228_G_1488180698874.jpg"/></a></li>
       
       
       
       
            <li><a href="javascript:showPic()"><img alt="" src="../images/201702/goods_img/P_20170227153242_17.jpg"/></a></li>
       
       
            <li><a href="javascript:showPic()"><img alt="" src="../images/201702/goods_img/P_20170227153242_48.jpg"/></a></li>
       
       
          </ul>
    </div>
    <div class="icons">
      <ul>
        <i class="current"></i> <i class="current"></i> <i class="current"></i> <i class="current"></i> <i class="current"></i>
      </ul>
    </div>
  </div>
  <div class="blank2"></div>
</section>
<script type="text/javascript">
TouchSlide({ 
	slideCell:"#slideBox",
	titCell:".icons ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
	mainCell:".scroller ul", 
	effect:"leftLoop", 
	autoPage:true,//自动分页
	autoPlay:false //自动播放
});
function showPic(){
	var data = document.getElementById("slideBox").className;
	var reCat = /ui-gallery/;
	//str1.indexOf(str2);
	if( reCat.test(data) ){
		document.getElementById("slideBox").className = 'slideBox';
	}else{
		document.getElementById("slideBox").className = 'slideBox ui-gallery';
		//document.getElementById("slideBox").style.position = 'fixed';
	}
}
</script>
<section class="goodsInfo">
  <a class="collect" id="collect_box" href="javascript:collect(4228)" style="display: inline;">1</a>
  <div class="title">
    <!--<i style="background:url(themes/default/images/rx.png) 0 0 no-repeat;"></i><h1> 沙美特罗替卡松粉吸入剂 </h1>-->
    <a><img src="themes/default/images/rx.png" width="44px"><h1 style="font-size: 12px;color: #000000; display : inline"> 沙美特罗替卡松粉吸入剂 </h1></a>
  </div>
  <ul>
   <p>商品货号：97451 </p>
   <p>生产厂家：Glaxo Wellcome Production法国葛兰素威康</p>
    <p>规格信息：50ug:100ug*60吸</p>
  
                                                                              <li>本店售价：<b class="price">￥168.00元</b>　    <del>￥168.00元</del> 
    </li>
     
	    <!--<li>vip：<b class="price" id="ECS_RANKPRICE_2">￥159.60元</b></li>-->
        <!--<li>金牌会员：<b class="price" id="ECS_RANKPRICE_4">￥168.00元</b></li>-->
      </ul>
         <div class="chuFanText"> <p style="color:#ff0000">处方药说明：本品为处方药，登记成功后，鹭燕大药房审方药师将主动与您联系!</p></div>
   </section>
<div class="wrap">
  <section class="goodsBuy radius5">
    <input id="goodsBuy-open" type="checkbox">
    <label class="info" for="goodsBuy-open">
    <div>请选择<span></span><i></i></div>
    <div class="selected"> </div>
    </label>
    <form action="javascript:addToCart(4228)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
      <div class="fields">
        <ul class="ul1">
          <li>商品总价：<font id="ECS_GOODS_AMOUNT" class="price"></font></li>
        </ul>
        <ul class="ul2">
         
         
         
        </ul>
        <ul class="quantity">
          <h2>数量：</h2>
          <div class="items"> <span class="ui-number radius5">
                    <button type="button" class="decrease" onclick="changenum(-1)">-</button>
          <input class="num" name="number" id="goods_number" autocomplete="off" value="1" min="1" max="100" type="text">
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
             <button type="button" class="btn cart radius5" onclick="showRegisterDiv(4228);">需求登记</button>
     
        <div class="tipMask" id="hidDiv" style="display:none" ></div>
        <div class="popGeneral" id="popDiv" >
          <div class="tit">
            <h4>商品加入购物车</h4>
            <span class="ico_08" onclick="closeDiv()"><a href="javascript:"></a></span> </div>
          <div id="main">
            <div id="left"> <img width="115" height="115" src="../images/201702/goods_img/4228_G_1488180698081.jpg"> </div>
            <div id="right">
              <p>沙美特罗替卡松粉吸入剂</p>
              <span> 加入数量： <b id="cartNum"></b></span> <span> 总计金额： <b id="cartPrice">￥168.00元</b></span> </div>
          </div>
          <div class="popbtn"> <a class="bnt1 flex_in radius5" onclick="closeDiv()" href="javascript:void(0);">继续购物</a> <a class="bnt2 flex_in radius5" href="flow.php">去结算</a> </div>
        </div>
      </div>
    </form>
<form id="uploadImgFrom" name="uploadImgFrom" action="mobile_rx_register.php?act=rx_registration" method="post" enctype="multipart/form-data">
          <script type="text/javascript">
             function showRegisterDiv(){
            				document.getElementById('popRegisterDiv').style.display = 'block';
            				document.getElementById('hidRegisterDiv').style.display = 'block';
             }
            function closeRegisterDiv(){
            				document.getElementById('popRegisterDiv').style.display = 'none';
            				document.getElementById('hidRegisterDiv').style.display = 'none';
            }
            </script>
             <div class="tipMask" id="hidRegisterDiv" style="display:none" ></div>
                <div class="popGeneral" id="popRegisterDiv" >
                <script type="text/javascript" src="js/jquery.json.js"></script><script type="text/javascript" src="js/common.js"></script>
                 <script type="text/javascript">
                            function fsubmit(){
                                    var tmp=document.getElementById("doc").value;
                                    var tmpStr=tmp.substring(tmp.lastIndexOf('.')+1,tmp.length).toLowerCase();
                                    if(tmpStr==""){
                                       alert("您还没有选择图片哦！");
                                       return false;
                                    }
                                    else{
                                       uploadImgFrom.submit();
                                    }
                            }
                          </script>
                  <div class="tit">
                    <h4>药品需求登记</h4>
                    <span class="ico_08" onclick="closeRegisterDiv()"><a href="javascript:"></a></span> </div>
                    <div id="main">
                    <div class="modal-item" style="text-align: center;"><input type="hidden" id="goods_id" name="goods_id" style="border:0; font-size:18px; font-color:#299DD4;" value="4228" readonly="ture"></div>
                    <div class="modal-item" style="display:none"><input type="text" id="goods_price" style="border:0; font-size:18px; font-color:#299DD4;" value="168.00" readonly="ture"></div>
                    <div class="modal-item"style="text-align: center;"><label>药品名：</label><input id="rx_goods_name" name="rx_goods_name" type="text" class="form-control" style="background-color:transparent ;border:0;display: inline;" value="沙美特罗替卡松粉吸入剂" readonly="ture"></div>
                    <div class="modal-item"style="text-align: center;"><label>姓&nbsp;&nbsp;&nbsp;&nbsp;名：</label><input type="text"  id="rx_name" name="rx_name" class="form-control"  placeholder="请输入您的姓名"></div>
                    <!--<div class="modal-item"style="text-align: center;"><label>微信号：</label><input type="text"  id="rx_weixin_id" name="rx_weixin_id" class="form-control" placeholder="请输入您的微信号"></div>-->
                    <div class="modal-item"style="text-align: center;"><label>电&nbsp;&nbsp;&nbsp;&nbsp;话：</label><input type="text" id="rx_phone" name="rx_phone" class="form-control"  placeholder="请输入您的手机号"></div>
                    <div class="modal-item"style="text-align: center;"><label>数&nbsp;&nbsp;&nbsp;&nbsp;量：</label><input type="number" min="1" id="rx_number" name="rx_number" class="form-control"  placeholder="请输入需要的数量"></div>
                    <div class="modal-item"style="text-align: center;"><label>处方单：</label><input  class="a-upload" type="file" name="rx_img" id="doc" accept="image/*" style="width:150px;" capture="camera";></input></div>
                    <div class="modal-item"style="text-align: center;"><label>地&nbsp;&nbsp;&nbsp;&nbsp;址：</label></div>
                    <div class="modal-item"style="text-align: center;"><textarea id="rx_address" name="rx_address" class="form-control" rows="3" placeholder="请输入您需要的地址信息"></textarea></div>
                    <!--<div class="modal-item"style="text-align: center;"><label>备&nbsp;&nbsp;&nbsp;&nbsp;注：</label></div>
                    <div class="modal-item"style="text-align: center;"> <textarea id="rx_remark" name="rx_remark" class="form-control" rows="3" placeholder="请输入您需要的备注信息"></textarea></div>-->
                  </div>
                   <div class="modal-item"style="text-align: center;"><p style="color:#ff0000">药品监管部门提示：如发现本网站有任何直接或变相销售处方药行为，请保留证据，拨打12331举报，举报查实给予奖励</p></div>
                  <div class="popbtn"> <a class="bnt1 flex_in radius5" onclick="closeRegisterDiv()">取消</a> <a class="bnt2 flex_in radius5" onclick="fsubmit()">提交登记</a> </div>
                  </div>
                  </form>
  </section>
</div>
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
<section class="s-detail">
  <header>
    <ul style="position: static;" id="detail_nav">
      <li id="tabs1" onClick="tab(1)" class="current"> 详情 </li>
      <!--<li id="tabs2" onClick="tab(2)" class=""> 评价 <span class="review-count">(0)</span> </li>-->
      <li id="tabs3" onClick="tab(3)" class=""> 热销 </li>
    </ul>
  </header>
  <div id="tab1" class="">
    <div class="desc wrap">
      <div class="blank2"></div>
     <p><img src="/images/201702/271531571.jpg" alt="" /><br />
<img src="/images/201702/271531572.jpg" alt="" /><br />
<img src="/images/201702/271531583.jpg" alt="" /><br />
<img src="/images/201702/271531584.jpg" alt="" /><br />
&nbsp;</p> 
    </div>
  </div>
  <div id="tab2" class="hidden">
    <div class="wrap">
      <div class="blank2"></div>
      <script type="text/javascript" src="js/transport.js"></script><script type="text/javascript" src="js/utils.js"></script>	<div id="ECS_COMMENT"> 554fcae493e564ee0dc75bdf2ebf94cacomments|a:3:{s:4:"name";s:8:"comments";s:4:"type";i:0;s:2:"id";i:4228;}554fcae493e564ee0dc75bdf2ebf94ca</div>
 </div>  
  </div>
  <div id="tab3" class="hidden">
    <div class="wrap">
      <ul class="m-recommend ">
        <div class="blank2"></div>
              </ul>
    </div>
  </div>
</section>
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
var goods_id = 4228;
var goodsattr_style = 1;
var gmt_end_time = 0;
var day = "天";
var hour = "小时";
var minute = "分钟";
var second = "秒";
var end = "结束";
var goodsId = 4228;
var now_time = 1496134249;
onload = function(){
  changePrice();
  fixpng();
  try {onload_leftTime();}
  catch (e) {}
}
/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
function changePrice()
{
  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;
  Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty, changePriceResponse, 'GET', 'JSON');
}
/**
 * 接收返回的信息
 */
function changePriceResponse(res)
{
  if (res.err_msg.length > 0)
  {
    alert(res.err_msg);
  }
  else
  {
    document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;
    if (document.getElementById('ECS_GOODS_AMOUNT'))
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
  }
}
</script>
</body>
</html>