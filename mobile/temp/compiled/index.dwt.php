<!DOCTYPE html>
<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta charset="utf-8" />
<title><?php echo $this->_var['page_title']; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<link href="images/touch-icon.png" rel="apple-touch-icon-precomposed" />
<link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="themes/default/js/TouchSlide.js"></script>
</head>
<body>
<div id="page">
  <header id="header" >
    <div class="header_l"> <a class="ico_02" href="#menu"> 菜单栏 </a> </div>
    <h1> <?php echo $this->_var['shop_name']; ?> </h1>
    <div class="header_r"> <a class="ico_01" href="flow.php"> 购物车 </a> </div>
  </header>
</div>
<?php echo $this->fetch('library/index_ad.lbi'); ?>
<div>
  <div align="center"><img src='themes/default/images/logo.png' width='165' height='24'/></div>
</div>
<div class="blank2"> </div>
<div id="content" class="wrap">
	<?php echo $this->fetch('library/index_search.lbi'); ?>
  <?php echo $this->fetch('library/index_nav.lbi'); ?>
  
<?php echo $this->fetch('library/recommend_best.lbi'); ?>
<?php echo $this->fetch('library/recommend_new.lbi'); ?>

  
<?php $this->assign('cat_goods',$this->_var['cat_goods_1']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_1']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_6']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_6']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_11']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_11']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>

  

  

</div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
<?php echo $this->fetch('library/index_cat.lbi'); ?>
<script type="text/javascript" src="themes/default/js/jquery.min.js"></script>
<script type="text/javascript" src="themes/default/js/jquery.mmenu.js"></script>
<script type="text/javascript" src="themes/default/js/supertouch.js"></script>
<script type="text/javascript">
window.onload = function(){
  $('#menu').css('display','');
}
$(function() {
	$('nav#menu').mmenu();
	$('#get_search_box').click(function(){
		$(".mm-page").children('div').hide();
		$("#main-search").css('position','fixed').css('top','0px').css('width','100%').css('z-index','999').show();
		//$('#keywordBox').focus();
	})
	$("#main-search .close").click(function(){
		$(".mm-page").children('div').show();
		$("#main-search").hide();
	})	
	$("#submit").click(function() {
	if($("#keyword").val() && $("#keyword").val()!="请输入关键词"){
		$("#searchForm").submit();
	} else {
		alert("请输入关键词！");
		$("#keyword").focus();
		return false;
	}
	})
});
</script>
</body>
</html>