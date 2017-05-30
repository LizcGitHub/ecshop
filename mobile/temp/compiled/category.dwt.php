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
<div style="right: 0px; left: 0px; display: block;" id="page">
  <header id="header" style="z-index:1">
    <div class="header_l"> <a class="ico_10" onClick="javascript:history.go(-1);"> 返回 </a> </div>
    <div id="search_box2" >
      <div class="search_box" >
        <form method="post" action="search.php" name="searchForm" id="searchForm_id">
          <input placeholder="请输入商品名称" name="keywords" type="text" id="keywordBox" />
          <button class="ico_07" type="submit" onclick="return check('keywordBox')"> </button>
        </form>
      </div>
    </div>
    <div class="header_r"> <a class="switchBtn switchBtn-album" href="javascript:void(0);"  onclick="changeCl(this)" style="opacity: 1;"> 切换 </a> </div>
  </header>
  <div class="filter" style="position:static; top:0px; width:100%;">
    <form method="GET" class="sort" name="listform">
      <ul class="filter-inner">
        <li class="<?php if ($this->_var['pager']['sort'] == 'goods_id' && $this->_var['pager']['order'] == 'DESC'): ?>filter-cur<?php endif; ?>"> <a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=goods_id&order=DESC#goods_list">综合 </a> </li>
        <li class="<?php if ($this->_var['pager']['sort'] == 'click_count' && $this->_var['pager']['order'] == 'DESC'): ?>filter-cur<?php endif; ?>"> <a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=click_count&order=<?php if ($this->_var['pager']['sort'] == 'click_count' && $this->_var['pager']['order'] == 'DESC'): ?>DESC<?php endif; ?>#goods_list">人气 <i class="f-ico-arrow-d"></i> </a> </li>
        <li class="<?php if ($this->_var['pager']['sort'] == 'sales_count' && $this->_var['pager']['order'] == 'DESC'): ?>filter-cur<?php endif; ?>"> <a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=sales_count&order=DESC#goods_list">销量</a></li>
        <li class="<?php if ($this->_var['pager']['sort'] == 'shop_price'): ?>filter-cur<?php endif; ?>"> <a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=shop_price&order=<?php if ($this->_var['pager']['sort'] == 'shop_price' && $this->_var['pager']['order'] == 'ASC'): ?>DESC<?php else: ?>ASC<?php endif; ?>#goods_list">价格 <span> <i class="f-ico-triangle-mt <?php if ($this->_var['pager']['sort'] == 'shop_price' && $this->_var['pager']['order'] == 'ASC'): ?> f-ico-triangle-slctd<?php endif; ?>"></i> <i class="f-ico-triangle-mb <?php if ($this->_var['pager']['sort'] == 'shop_price' && $this->_var['pager']['order'] == 'DESC'): ?>f-ico-triangle-slctd<?php endif; ?>"></i> </span> </a> </li>
        <li class="filter-navBtn"><a href="javascript:;" class="j_filterBtn disabled" onclick="mtShowMenu()">筛选</a></li>
      </ul>
      <input type="hidden" name="category" value="<?php echo $this->_var['category']; ?>" />
      <input type="hidden" name="display" value="<?php echo $this->_var['pager']['display']; ?>" id="display" />
      <input type="hidden" name="brand" value="<?php echo $this->_var['brand_id']; ?>" />
      <input type="hidden" name="price_min" value="<?php echo $this->_var['price_min']; ?>" />
      <input type="hidden" name="price_max" value="<?php echo $this->_var['price_max']; ?>" />
      <input type="hidden" name="filter_attr" value="<?php echo $this->_var['filter_attr']; ?>" />
      <input type="hidden" name="page" value="<?php echo $this->_var['pager']['page']; ?>" />
      <input type="hidden" name="sort" value="<?php echo $this->_var['pager']['sort']; ?>" />
      <input type="hidden" name="order" value="<?php echo $this->_var['pager']['order']; ?>" />
    </form>
  </div>
  <form name="compareForm" action="compare.php" method="post" onSubmit="return compareGoods(this);">
    <div class="srp album flex-f-row" id="J_ItemList" style="opacity:1;">
      <div class="product flex_in single_item">
        <div class="pro-inner"></div>
      </div>
      <a href="javascript:;" class="get_more"></a> </div>
  </form>
  <?php echo $this->fetch('library/page_footer.lbi'); ?>
</div>
<div style="right:-275px;" class="nav" id="nav">
  <form class="hold-height" action="category.php">
    <div class="attrExtra">
      <input type="hidden" name="category" value="<?php echo $this->_var['category']; ?>"/>
      <button class="attrExtra-submit" type="submit">确定</button>
      <button class="attrExtra-cancel" type="button"  onclick="mtShowMenu()">取消</button>
    </div>
    <div class="attrs attr-fix" style="overflow: auto;height: 100%">
    	<?php if ($this->_var['brands']['1']): ?>
      <div class="attr brandAttr">
        <div class="attrKey"><?php echo $this->_var['lang']['brand']; ?></div>
        <div class="attrValues">
          <ul class="av-collapse filter_list">
            <?php $_from = $this->_var['brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');if (count($_from)):
    foreach ($_from AS $this->_var['brand']):
?>
              <?php if ($this->_var['brand']['selected']): ?>
            <li class="av-selected"> <a href="javascript:void(0);" data="<?php echo $this->_var['brand']['brand_id']; ?>"><?php echo $this->_var['brand']['brand_name']; ?></a></li>
              <?php else: ?>
            <li> <a href="javascript:void(0);" data="<?php echo $this->_var['brand']['brand_id']; ?>"><?php echo $this->_var['brand']['brand_name']; ?></a></li>
              <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <input type="hidden" name="brand" value="<?php echo $this->_var['brand_id']; ?>" />
          </ul>
          <div class="av-options"><a class="j_More avo-more avo-more-down" href="javascript:;">查看更多<i></i></a> </div>
        </div>
      </div>
      <?php endif; ?>
    	<?php if ($this->_var['price_grade']['1']): ?>
      <div class="attr brandAttr">
        <div class="attrKey"><?php echo $this->_var['lang']['price']; ?></div>
        <div class="attrValues">
          <ul class="av-collapse filter_list">
            <?php $_from = $this->_var['price_grade']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'grade');if (count($_from)):
    foreach ($_from AS $this->_var['grade']):
?>
              <?php if ($this->_var['grade']['selected']): ?>
            <li class="av-selected"> <a href="javascript:void(0);" data="<?php echo $this->_var['grade']['start']; ?>|<?php echo $this->_var['grade']['end']; ?>"><?php echo $this->_var['grade']['price_range']; ?></a></li>
              <?php else: ?>
            <li> <a href="javascript:void(0);" data="<?php echo $this->_var['grade']['start']; ?>|<?php echo $this->_var['grade']['end']; ?>"><?php echo $this->_var['grade']['price_range']; ?></a></li>
              <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <input type="hidden" name="price_min" value="<?php echo $this->_var['price_min']; ?>" />
            <input type="hidden" name="price_max" value="<?php echo $this->_var['price_max']; ?>" />
          </ul>
          <div class="av-options"><a class="j_More avo-more avo-more-down" href="javascript:;">查看更多<i></i></a> </div>
        </div>
      </div>
      <?php endif; ?>
      <?php $_from = $this->_var['filter_attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'filter_attr_0_77638700_1492739998');if (count($_from)):
    foreach ($_from AS $this->_var['filter_attr_0_77638700_1492739998']):
?>
      <div class="attr brandAttr">
        <div class="attrKey"><?php echo htmlspecialchars($this->_var['filter_attr_0_77638700_1492739998']['filter_attr_name']); ?></div>
        <div class="attrValues">
          <ul class="av-collapse filter_list">
          <?php $_from = $this->_var['filter_attr_0_77638700_1492739998']['attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');if (count($_from)):
    foreach ($_from AS $this->_var['attr']):
?>
            <?php if ($this->_var['attr']['selected']): ?>
            <li class="av-selected filter_attr"> <a href="javascript:void(0);" data="<?php echo $this->_var['attr']['goods_attr_id']; ?>"><?php echo $this->_var['attr']['attr_value']; ?></a></li>
            <?php else: ?>
            <li class="filter_attr"> <a href="javascript:void(0);" data="<?php echo $this->_var['attr']['goods_attr_id']; ?>"><?php echo $this->_var['attr']['attr_value']; ?></a></li>
            <?php endif; ?>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </ul>
          <div class="av-options"><a class="j_More avo-more avo-more-down" href="javascript:void(0);">查看更多<i></i></a> </div>
        </div>
      </div>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <input type="hidden" name="filter_attr" value="<?php echo $this->_var['filter_attr']; ?>"/>
    </div>
  </form>
</div>
<script type="text/javascript" src="themes/default/js/jquery.min.js"></script>
<script type="text/javascript" src="themes/default/js/jquery.more.js"></script>
<script type="text/javascript" src="themes/default/js/supertouch.js"></script>
<script type="text/javascript">
jQuery(function($){
	$('#J_ItemList').more({'address': 'category.php?act=asynclist&category=<?php echo $this->_var['category']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=<?php echo $this->_var['pager']['sort']; ?>&order=<?php echo $this->_var['pager']['order']; ?>', 'spinner_code':'<div style="text-align:center; margin:10px;"><img src="themes/default/images/loader.gif" /></div>'})
	$(window).scroll(function () {
		if ($(window).scrollTop() == $(document).height() - $(window).height()) {
			$('.get_more').click();
		}
	});
});
</script>
</body>
</html>