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
</head>
<body>
<header id="header">
  <div class="header_l header_return"> <a class="ico_10" href="index.php"> 返回 </a> </div>
  <h1> 所有分类页 </h1>
  <div class="header_r header_search"> <a class="ico_03"  onClick="showSearch()"> 搜索 </a> </div>
  <div id="search_box">
    <div class="search_box">
      <form method="post" action="search.php" name="searchForm" id="searchForm_id">
        <input placeholder="请输入商品名称" name="keywords" type="text" id="keywordBox" />
        <button class="ico_07" type="submit" onclick="return check('keywordBox')"> </button>
      </form>
    </div>
    <a class="ico_08" onClick="closeSearch()"></a> </div>
</header>
<div class="clist">
  <ul>
  	<?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['categories'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['categories']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['categories']['iteration']++;
?>
    <li class="crow level1">
      <div class="crow_row">
        <div class="crow_icon"> <img alt="" src="themes/default/images/cate<?php echo $this->_foreach['categories']['iteration']; ?>.png"> </div>
        <div class="crow_title"> <span><?php echo $this->_var['cat']['name']; ?></span> </div>
        <div class="crow_arrow"> <img src="themes/default/images/ico_11.png"> </div>
        <div>&nbsp;</div>
      </div>
    </li>
    <ul class="clist clist_sub clearfix" style="opacity: 1; display: none;">
      <li class="crow">
      	<?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
        <div class="crow_item crow_item_clear"><a href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a></div>
        <?php $_from = $this->_var['child']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer');if (count($_from)):
    foreach ($_from AS $this->_var['childer']):
?>
        <div class="crow_item"> <a href="<?php echo $this->_var['childer']['url']; ?>"><?php echo htmlspecialchars($this->_var['childer']['name']); ?></a></div>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </li>
    </ul>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </ul>
</div>
<script type="text/javascript" src="themes/default/js/zepto.min.js"></script>
<script type="text/javascript">
/*头部搜索点击关闭或者弹出搜索框*/  
function showSearch( ){
	document.getElementById("search_box").style.display="block";
}
function closeSearch(){
	document.getElementById("search_box").style.display="none";
}
/* 搜索验证 */
function check(Id){
	var strings = document.getElementById(Id).value;
	if(strings.replace(/(^\s*)|(\s*$)/g, "").length == 0){
		return false;
	}
	return true;
}

(function($) {
	var btn_up = new Image(), btn_down = new Image();
	btn_up.src = "themes/default/images/ico_12.png";
	btn_down.src = "themes/default/images/ico_11.png";
	var Menu = {
		// 初始化事件
		initEvent : function() {
			$().ready(
					function() {
						$("div.clist").click(function(e) {
							Menu.router(e);
						});
						$("#allClass").click(function(e) {
							Menu.showMenu1();
						});
						$(window).on(
								"hashchange",
								function(e) {
									var name = decodeURIComponent(location.hash
											.replace(/^#/, ""));
									if (name != "") {
										Menu.showMenu3(name);
									}else{
										Menu.showMenu1();
									}
								});
					});
		},
		// 事件分发路油
		router : function(_event) {
			var target = $(_event.target || _event.srcElement);
			var _tar = target.closest(".level1");

			// 显示二级菜单
			if (_tar.length > 0) {
				Menu.showMenu2(_tar);
				/*var _gp = target.closest(".crow_row");// 点击事件对应此行的祖父级节点
				var _top = _gp.offset().top;
				setTimeout(function(){
					if (_top > 100) {
						window.scroll(0, _gp.offset().top);
					} else {
						window.scroll(0, _gp.offset().top - 50);
					}					
				},15)*/
				return;
			}
		},
		// 显示一级菜单
		showMenu1 : function() {
			$("#contentsub").hide();
			$("#content").show();
		},
		// 显示二级菜单
		showMenu2 : function($curMenuDom) {
			var next = $curMenuDom.next("ul");
			if (next.css("display") == "none") {
				//$("ul.clist_sub").hide();
				//$("div.crow_arrow").each(function(i, dom) {
				//	$(dom).html(btn_down.cloneNode(true));
				//});
				next.css("opacity", "0").show().animate({
					opacity : 1
				}, 500);
				//next.show();
				$("div.crow_arrow", $curMenuDom).html(btn_up.cloneNode(true));
			} else {
				next.hide();
				$("div.crow_arrow", $curMenuDom).html(btn_down.cloneNode(true));
			}
		},
		
	}
	window.Menu = Menu;
	Menu.initEvent();// 初始化事件
})($);
</script>
</body>
</html>