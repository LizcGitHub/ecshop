<?php if ($this->_var['new_goods']): ?>
<style type="text/css">
.picScroll{margin:10px auto; text-align:center;}
.picScroll .bd ul{width:100%;  float:left; padding-top:10px;}
.picScroll .bd li{width:33%; float:left; font-size:14px; text-align:center;}
.picScroll .bd li a{-webkit-tap-highlight-color:rgba(0, 0, 0, 0); /* 取消链接高亮 */}
.picScroll .bd li img{width:100px; height:100px;}
.picScroll .hd{display:None}
</style>
<div class="item_show_box2 box1 region" style="overflow:hidden">

    <div id="picScroll" class="picScroll">
        <div class="hd">
            <ul></ul>
        </div>
        <div class="bd">
            <ul>
                <?php $_from = $this->_var['new_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_77884900_1496395960');$this->_foreach['new_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['new_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_77884900_1496395960']):
        $this->_foreach['new_goods']['iteration']++;
?>
                <li><a href="<?php echo $this->_var['goods_0_77884900_1496395960']['url']; ?>"><img src="<?php echo $this->_var['site_url']; ?><?php echo $this->_var['goods_0_77884900_1496395960']['thumb']; ?>" /></a>
                <br/>
                <?php if ($this->_var['goods_0_77884900_1496395960']['promote_price'] != ""): ?> 
                <span class="price_s"> <?php echo $this->_var['goods_0_77884900_1496395960']['promote_price']; ?> </span> 
                <?php else: ?> 
                <span class="price_s"> <?php echo $this->_var['goods_0_77884900_1496395960']['shop_price']; ?> </span> 
                <?php endif; ?>
                <br><?php echo sub_str(htmlspecialchars($this->_var['goods_0_77884900_1496395960']['name']),12); ?>
                </li>
                <?php if ($this->_foreach['new_goods']['iteration'] % 3 == 0 && $this->_foreach['new_goods']['iteration'] != $this->_foreach['new_goods']['total']): ?></ul><ul><?php endif; ?>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </div>
    </div>

    <div class="position_a_lt">
      <div> </div>
      <a href="search.php?intro=new">
      <p> 新品 </p>
      <p class="ico_04"> </p>
      </a> </div>
    <div class="position_a_rb">
      <div> </div>
      <a href="search.php?intro=new">
      <p class="ico_04_b"> </p>
      <p> 更多 </p>
      </a> </div>
  </div>
<div class="blank2"></div>

<script type="text/javascript">
TouchSlide({
    slideCell:"#picScroll",
    titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
    autoPage:true, //自动分页
    pnLoop:"false", // 前后按钮不循环
    //switchLoad:"_src" //切换加载，真实图片路径为"_src" 
});
</script>
<?php endif; ?>