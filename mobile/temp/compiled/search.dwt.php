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
<link href="images/super-touch-icon.png" rel="apple-touch-icon-precomposed" />
<link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="page" style="right: 0px; left: 0px; display: block;">
  <header id="header" style="z-index:1">
    <div class="header_l"> <a class="ico_10" href="javascript:history.go(-1)"> 返回 </a> </div>
    <div id="search_box2" >
      <div class="search_box" >
        <form method="post" action="search.php" name="searchForm" id="searchForm_id">
          <input name="keywords" type="text" id="keywordfoot" value="<?php if ($this->_var['search_keywords']): ?><?php echo htmlspecialchars($this->_var['search_keywords']); ?><?php else: ?><?php echo $this->_var['cat_name']; ?><?php endif; ?>" />
          <button class="ico_07" type="submit" cursor="hand" onclick="return check('keywordfoot')"> </button>
        </form>
      </div>
    </div>
    <div class="header_r header_search"> <a class="switchBtn switchBtn-album" href="javascript:void(0);"  onclick="changeCl(this)" style="opacity: 1;"> 切换 </a> </div>
  </header>
  <div class="filter" style="position:static; top:0px; width:100%;">
    <form method="GET" class="sort" name="listform">
      <ul class="filter-inner">
        <li class="<?php if ($this->_var['pager']['search']['sort'] == 'goods_id' && $this->_var['pager']['search']['order'] == 'DESC'): ?>filter-cur<?php endif; ?>"> <a href="search.php?keywords=<?php echo $this->_var['keywords']; ?>&display=<?php echo $this->_var['pager']['search']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['search']['page']; ?>&sort=goods_id&order=DESC#goods_list">综合 </a> </li>
        <li class="<?php if ($this->_var['pager']['search']['sort'] == 'click_count' && $this->_var['pager']['search']['order'] == 'DESC'): ?>filter-cur<?php endif; ?>"> <a href="search.php?keywords=<?php echo $this->_var['keywords']; ?>&display=<?php echo $this->_var['pager']['search']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['search']['page']; ?>&sort=click_count&order=<?php if ($this->_var['pager']['search']['sort'] == 'click_count' && $this->_var['pager']['search']['order'] == 'DESC'): ?>DESC<?php endif; ?>#goods_list">人气 <i class="f-ico-arrow-d"></i> </a> </li>
        <li class="<?php if ($this->_var['pager']['search']['sort'] == 'last_update' && $this->_var['pager']['search']['order'] == 'DESC'): ?>filter-cur<?php endif; ?>"> <a href="search.php?keywords=<?php echo $this->_var['keywords']; ?>&display=<?php echo $this->_var['pager']['search']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['search']['page']; ?>&sort=last_update&order=DESC#goods_list">销量</a></li>
        <li class="<?php if ($this->_var['pager']['search']['sort'] == 'shop_price'): ?>filter-cur<?php endif; ?>"> <a href="search.php?keywords=<?php echo $this->_var['keywords']; ?>&display=<?php echo $this->_var['pager']['search']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['search']['page']; ?>&sort=shop_price&order=<?php if ($this->_var['pager']['search']['sort'] == 'shop_price' && $this->_var['pager']['search']['order'] == 'ASC'): ?>DESC<?php else: ?>ASC<?php endif; ?>#goods_list">价格 <span> <i class="f-ico-triangle-mt <?php if ($this->_var['pager']['search']['sort'] == 'shop_price' && $this->_var['pager']['search']['order'] == 'ASC'): ?> f-ico-triangle-slctd<?php endif; ?>"></i> <i class="f-ico-triangle-mb <?php if ($this->_var['pager']['search']['sort'] == 'shop_price' && $this->_var['pager']['search']['order'] == 'DESC'): ?>f-ico-triangle-slctd<?php endif; ?>"></i> </span> </a> </li>
      </ul>
      <input type="hidden" name="category" value="<?php echo $this->_var['category']; ?>" />
      <input type="hidden" name="display" value="<?php echo $this->_var['pager']['search']['display']; ?>" id="display" />
      <input type="hidden" name="brand" value="<?php echo $this->_var['brand_id']; ?>" />
      <input type="hidden" name="price_min" value="<?php echo $this->_var['price_min']; ?>" />
      <input type="hidden" name="price_max" value="<?php echo $this->_var['price_max']; ?>" />
      <input type="hidden" name="filter_attr" value="<?php echo $this->_var['filter_attr']; ?>" />
      <input type="hidden" name="page" value="<?php echo $this->_var['pager']['page']; ?>" />
      <input type="hidden" name="sort" value="<?php echo $this->_var['pager']['search']['sort']; ?>" />
      <input type="hidden" name="order" value="<?php echo $this->_var['pager']['search']['order']; ?>" />
    </form>
  </div>
  <div id="J_ItemList" class="srp album flex-f-row" style="opacity:1;">
    <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods_list']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods_list']['iteration']++;
?> 
    <?php if ($this->_var['goods']['goods_id']): ?> 
    <div class="product flex_in single_item">
      <div class="pro-inner">
        <div class="proImg-wrap"> <a href="<?php echo $this->_var['goods']['url']; ?>" > <img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" alt="<?php echo $this->_var['goods']['goods_name']; ?>"> </a> </div>
        <div class="proInfo-wrap">
          <div class="proTitle"> <a href="<?php echo $this->_var['goods']['url']; ?>" ><?php echo $this->_var['goods']['goods_name']; ?></a> </div>
          <div class="proSKU"></div>
          <div class="proPrice"> <?php if ($this->_var['goods']['promote_price'] != ""): ?> 
              <em><?php echo $this->_var['goods']['promote_price']; ?></em> 
              <?php else: ?> 
              <em><?php echo $this->_var['goods']['shop_price']; ?></em> 
              <?php endif; ?> </div>
          <div class="proService"> <?php if ($this->_var['show_marketprice']): ?> 
              <del><?php echo $this->_var['goods']['market_price']; ?></del> 
              <?php endif; ?> </div>
          <div class="proSales">月销:<em><?php echo $this->_var['goods']['sales_count']; ?></em></div>
          <div class="proIcons"><?php if ($this->_var['goods']['watermark_img']): ?><img width="55" height="16" src="themes/default/images/<?php echo $this->_var['goods']['watermark_img']; ?>.png" alt="<?php echo $this->_var['goods']['goods_name']; ?>" /><?php endif; ?> </div>
        </div>
      </div>
    </div>
    <?php endif; ?> 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
  </div>
</div>
  <?php echo $this->fetch('library/pages.lbi'); ?> 
<?php echo $this->fetch('library/page_footer.lbi'); ?>
<script type="text/javascript" src="themes/default/js/jquery.min.js"></script>
<script type="text/javascript" src="themes/default/js/jquery.more.js"></script>
<script type="text/javascript" src="themes/default/js/supertouch.js"></script>
</body>
</html>