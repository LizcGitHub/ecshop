<!DOCTYPE html>
<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<title><?php echo $this->_var['page_title']; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<link href="images/touch-icon.png" rel="apple-touch-icon-precomposed" />
<link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,lefttime.js')); ?>
<script type="text/javascript" src="themes/default/js/jquery-1.4.4.min.js"></script>
<script type="text/javascript">
  <?php $_from = $this->_var['lang']['js_languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
    var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
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
          <li><a href="javascript:showPic()"><img src="/<?php echo $this->_var['gb_goods']['goods_thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['gb_goods']['goods_name']); ?>" /></a></li>
        </ul>
      </div>
    </div>
    <div class="blank2"></div>
  </section>
  <section class="goodsInfo">
    <div class="title">
      <h1><?php echo htmlspecialchars($this->_var['gb_goods']['goods_name']); ?></h1>
    </div>
    <ul>
      <?php if ($this->_var['group_buy']['deposit'] > 0): ?>
      <li><?php echo $this->_var['lang']['gb_deposit']; ?> <?php echo $this->_var['group_buy']['formated_deposit']; ?></li>
      <?php endif; ?>

      <?php if ($this->_var['group_buy']['restrict_amount'] > 0): ?>
      <li><?php echo $this->_var['lang']['gb_restrict_amount']; ?> <?php echo $this->_var['group_buy']['restrict_amount']; ?></li>
      <?php endif; ?>

      <?php if ($this->_var['group_buy']['gift_integral'] > 0): ?>
      <li><?php echo $this->_var['lang']['gb_gift_integral']; ?> <?php echo $this->_var['group_buy']['gift_integral']; ?></li>
      <?php endif; ?>

      <?php if ($this->_var['group_buy']['status'] == 0): ?>
      <li><?php echo $this->_var['lang']['gbs_pre_start']; ?>
      <?php elseif ($this->_var['group_buy']['status'] == 1): ?>
      <font class="f4"><?php echo $this->_var['lang']['gbs_under_way']; ?>
      <span id="leftTime"><?php echo $this->_var['lang']['please_waiting']; ?></span></font><br />
      <?php echo $this->_var['lang']['gb_cur_price']; ?> <?php echo $this->_var['group_buy']['formated_cur_price']; ?><br />
      <?php echo $this->_var['lang']['gb_valid_goods']; ?> <?php echo $this->_var['group_buy']['valid_goods']; ?><br />
      <?php elseif ($this->_var['group_buy']['status'] == 2): ?>
      <?php echo $this->_var['lang']['gbs_finished']; ?> <?php echo $this->_var['lang']['gb_cur_price']; ?> <?php echo $this->_var['group_buy']['formated_cur_price']; ?> <?php echo $this->_var['lang']['gb_valid_goods']; ?> <?php echo $this->_var['group_buy']['valid_goods']; ?>
      <?php elseif ($this->_var['group_buy']['status'] == 3): ?>
      <?php echo $this->_var['lang']['gbs_succeed']; ?>
      <?php echo $this->_var['lang']['gb_final_price']; ?> <?php echo $this->_var['group_buy']['formated_trans_price']; ?><br />
      <?php echo $this->_var['lang']['gb_final_amount']; ?> <?php echo $this->_var['group_buy']['trans_amount']; ?>
      <?php elseif ($this->_var['group_buy']['status'] == 4): ?>
      <?php echo $this->_var['lang']['gbs_fail']; ?></li>
      <?php endif; ?>
    </ul>
    <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
     <tr>
        <th width="30%" bgcolor="#FFFFFF"><?php echo $this->_var['lang']['gb_ladder_amount']; ?></th>
       <th width="70%" bgcolor="#FFFFFF"><?php echo $this->_var['lang']['gb_ladder_price']; ?></th>
      </tr>
      <?php $_from = $this->_var['group_buy']['price_ladder']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
      <tr>
        <td width="30%" bgcolor="#FFFFFF"><?php echo $this->_var['item']['amount']; ?></td>
       <td width="70%" bgcolor="#FFFFFF"><?php echo $this->_var['item']['formated_price']; ?></td>
      </tr>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </table>
  </section>
  <div class="wrap">
    <section class="goodsBuy radius5">
    <input id="goodsBuy-open" type="checkbox">
    <label class="info" for="goodsBuy-open">
    <div>请选择<span><?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');if (count($_from)):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
?><?php echo $this->_var['spec']['name']; ?> <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></span><i></i></div>
    <div class="selected"> </div>
    </label>
    <form action="group_buy.php?act=buy" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
      <div class="fields">
        <ul class="ul1">
          <li>商品总价：<font id="ECS_GOODS_AMOUNT" class="price"><?php echo $this->_var['group_buy']['formated_cur_price']; ?></font></li>
        </ul>
        <ul class="ul2">
         
        <?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');if (count($_from)):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
?>
        <li>
          <h2><?php echo $this->_var['spec']['name']; ?>：</h2>
          <div class="items"> 
             
            <?php if ($this->_var['spec']['attr_type'] == 1): ?> 
            <?php if ($this->_var['cfg']['goodsattr_style'] == 1): ?> 
            <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
            <input data-img="" autocomplete="off" value="<?php echo $this->_var['value']['id']; ?>" name="spec_<?php echo $this->_var['spec_key']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?> type="radio">
            <label for="spec_value_<?php echo $this->_var['value']['id']; ?>"><?php echo $this->_var['value']['label']; ?>[<?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?> <?php echo $this->_var['value']['format_price']; ?>]</label>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
            <?php else: ?>
            <select name="spec_<?php echo $this->_var['spec_key']; ?>">
              <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
              <option label="<?php echo $this->_var['value']['label']; ?>" value="<?php echo $this->_var['value']['id']; ?>"><?php echo $this->_var['value']['label']; ?> <?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?><?php if ($this->_var['value']['price'] != 0): ?><?php echo $this->_var['value']['format_price']; ?><?php endif; ?></option>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </select>
            <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
            <?php endif; ?> 
            <?php else: ?> 
            <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
            <input type="checkbox" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>"/>
            <label for="spec_value_<?php echo $this->_var['value']['id']; ?>">
            <?php echo $this->_var['value']['label']; ?> [<?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?> <?php echo $this->_var['value']['format_price']; ?>] </label>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
            <?php endif; ?> 
             
          </div>
        </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
         
        </ul>
        <?php if ($_SESSION['user_id'] > 0): ?>
        <ul class="quantity">
          <h2>数量：</h2>
          <div class="items"> <span class="ui-number radius5">
          <button type="button" class="decrease" onclick="changenum(-1)">-</button>
          <input class="num" name="number" id="goods_number" autocomplete="off" value="1" min="1" max="<?php echo $this->_var['goods']['goods_number']; ?>" type="text">
          <button type="button" class="increase" onclick="changenum(1)">+</button>
          </span></div>
        </ul>
        <?php endif; ?>
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
     	  <?php if ($_SESSION['user_id'] > 0): ?>
        <input type="hidden" name="group_buy_id" value="<?php echo $this->_var['group_buy']['group_buy_id']; ?>" />
        <button type="submit" class="btn cart radius5">
        <div class="ico_01"></div>
        立即购买</button>
        <?php else: ?>
        <?php echo $this->_var['lang']['gb_notice_login']; ?>
        <?php endif; ?>
      </div>
    </form>
  </section>
    <section class="s-detail">
      <div id="tab1">
        <div class="desc wrap">
          <div class="blank2"></div>
          <?php echo $this->_var['group_buy']['group_buy_desc']; ?>
        </div>
      </div>
    </section>
  </div>
</div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
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
var gmt_end_time = "<?php echo empty($this->_var['group_buy']['gmt_end_date']) ? '0' : $this->_var['group_buy']['gmt_end_date']; ?>";
<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var now_time = <?php echo $this->_var['now_time']; ?>;


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