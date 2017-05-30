<!DOCTYPE html>
<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta charset="utf-8" />
<title><?php echo $this->_var['page_title']; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<link href="images/touch-icon.png" rel="apple-touch-icon-precomposed" />
<link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
<?php echo $this->smarty_insert_scripts(array('files'=>'js/common.js')); ?>
</head>
<body>
<header id="header">
  <div class="header_l header_return"> <a class="ico_10" onClick="javascript:history.go(-1);"> 返回 </a> </div>
  <h1> 登记结果 </h1>
</header>
<?php if ($this->_var['error'] == 1): ?>
<script type="text/javascript">
    alert("<?php echo $this->_var['result']; ?>");
</script>
<?php else: ?>
    <script type="text/javascript">
        alert("处方登记成功！");
    </script>
<?php endif; ?>
<div class="wrap">
  <section class="goodsBuy radius5">
     <label class="info" for="goodsBuy-open" style="text-align: center;">
               登记药品名：<?php echo $this->_var['rxgoods']['rx_goods_name']; ?>
     </label>
     <label class="info" for="goodsBuy-open" style="text-align: center;">
               登记人姓名：<?php echo $this->_var['rxgoods']['rx_name']; ?>
     </label>
     <label class="info" for="goodsBuy-open" style="text-align: center;">
               登记数量：<?php echo $this->_var['rxgoods']['rx_number']; ?>
     </label>
     <label class="info" for="goodsBuy-open" style="text-align: center;">
                处方图片</br>
               <img id="img1" style="height:80px" src="../<?php echo $this->_var['rxgoods']['rx_img']; ?>">
     </label>
     <label class="info" for="goodsBuy-open" style="text-align: center;">
               登记电话：<?php echo $this->_var['rxgoods']['rx_phone']; ?>
      </label>
      <label class="info" for="goodsBuy-open" style="text-align: center;">
               登记地址：<?php echo $this->_var['rxgoods']['rx_address']; ?>
      </label>
      <!--<label class="info" for="goodsBuy-open" style="text-align: center;">
               登记备注：<?php echo $this->_var['rxgoods']['rx_remark']; ?>
      </label>-->
    <form action="" method="post" name="ECS_REGISTRESULT" id="ECS_REGISTRESULT" >
      <div class="option" >
     <button type="button" class="btn buy radius5" onClick="javascript :history.back(-1);">返回上一级</button>
                     <button type="button" class="btn cart radius5" onclick="">
                     <div class="ico_01"></div>
                     <a href="index.php">回主页</a></button>
    </form>
  </section>
</div>
<p class="mf_o4">© 2005-2017 鹭燕健康商城 版权所有，并保留所有权利。</p>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
<script type="text/javascript">
var goods_id = <?php echo $this->_var['goods_id']; ?>;
var goodsattr_style = <?php echo empty($this->_var['cfg']['goodsattr_style']) ? '1' : $this->_var['cfg']['goodsattr_style']; ?>;
var gmt_end_time = <?php echo empty($this->_var['promote_end_time']) ? '0' : $this->_var['promote_end_time']; ?>;
<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var goodsId = <?php echo $this->_var['goods_id']; ?>;
var now_time = <?php echo $this->_var['now_time']; ?>;
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