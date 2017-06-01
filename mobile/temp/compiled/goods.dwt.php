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
<script type="text/javascript" src="themes/default/js/TouchSlide.js"></script>
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
  <div class="header_r header_search"> <a class="ico_15" href="supertouch.php?act=share&content=<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>&pic=<?php echo $this->_var['goods']['goods_img']; ?>"> 分享 </a> </div>
</header>
<section class="goods_slider">
  <div class="blank2"></div>
  <div id="slideBox" class="slideBox">
    <div class="scroller">
      <!--<div><a href="javascript:showPic()"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>"  alt="<?php echo $this->_var['goods']['goods_name']; ?>" /></a></div>-->
      <ul>
      <li><a href="javascript:showPic()"><img alt="" src="<?php echo $this->_var['goods']['original_img']; ?>"/></a></li>
      <?php if ($this->_var['pictures']): ?> 
      <?php $_from = $this->_var['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'picture');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['picture']):
        $this->_foreach['no']['iteration']++;
?> 
      <?php if ($this->_foreach['no']['iteration'] > 1): ?>
      <li><a href="javascript:showPic()"><img alt="" src="<?php echo $this->_var['picture']['img_url']; ?>"/></a></li>
      <?php endif; ?> 
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
      <?php endif; ?>
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
  <a class="collect" id="collect_box" href="javascript:collect(<?php echo $this->_var['goods']['goods_id']; ?>)" style="display: inline;"><?php echo $this->_var['record_count']; ?></a>
  <div class="title">
    <!--<?php if ($this->_var['goods']['otc_flag'] == 1): ?><i style="background:url(themes/default/images/rx.png) 0 0 no-repeat;"></i><?php endif; ?><h1> <?php echo $this->_var['goods']['goods_style_name']; ?> </h1>-->
    <a><?php if ($this->_var['goods']['otc_flag'] == 1): ?><img src="themes/default/images/rx.png" width="44px"><?php endif; ?><h1 style="font-size: 12px;color: #000000; display : inline"> <?php echo $this->_var['goods']['goods_style_name']; ?> </h1></a>
  </div>
  <ul>
   <p><?php echo $this->_var['lang']['goods_sn']; ?><?php echo $this->_var['goods']['goods_sn']; ?> </p>
   <p>生产厂家：<?php echo $this->_var['goods']['factory_name']; ?></p>
    <p>规格信息：<?php echo $this->_var['goods']['product_type']; ?></p>
  <?php if ($this->_var['cfg']['show_goods_sn']): ?>
                      <p><?php echo $this->_var['lang']['goods_sn']; ?><?php echo $this->_var['goods']['goods_sn']; ?> </p>
                      <?php endif; ?>

                      <?php if ($this->_var['goods']['goods_brand'] != "" && $this->_var['cfg']['show_brand']): ?>
                      <p> <?php echo $this->_var['lang']['goods_brand']; ?><a href="<?php echo $this->_var['goods']['goods_brand_url']; ?>" ><?php echo $this->_var['goods']['goods_brand']; ?></a> </p>
                      <?php endif; ?>
                      <?php if ($this->_var['cfg']['show_factoryname']): ?>
                      <p><?php echo $this->_var['lang']['goods_factoryname']; ?><?php echo $this->_var['goods']['factory_name']; ?></p>
                      <?php endif; ?>
                      <?php if ($this->_var['cfg']['show_producttype']): ?>
                      <p><?php echo $this->_var['lang']['goods_producttype']; ?><?php echo $this->_var['goods']['product_type']; ?></p>
                      <?php endif; ?>
    <?php if ($this->_var['goods']['goods_brand'] != "" && $this->_var['cfg']['show_brand']): ?>
    <li><?php echo $this->_var['lang']['goods_brand']; ?><a class="price" href="<?php echo $this->_var['goods']['goods_brand_url']; ?>" ><?php echo $this->_var['goods']['goods_brand']; ?></a></li>
    <?php endif; ?>
    <?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?>
    <li><?php echo $this->_var['lang']['promote_price']; ?><b class="price"><?php echo $this->_var['goods']['promote_price']; ?></b>　<?php if ($this->_var['cfg']['show_marketprice']): ?>
    <del><?php echo $this->_var['goods']['market_price']; ?></del> 
    <?php endif; ?></li> 
    
    <?php else: ?>
    <li><?php echo $this->_var['lang']['shop_price']; ?><b class="price"><?php echo $this->_var['goods']['shop_price_formated']; ?></b>　<?php if ($this->_var['cfg']['show_marketprice']): ?>
    <del><?php echo $this->_var['goods']['market_price']; ?></del> 
    <?php endif; ?></li>
    <?php endif; ?> 
	<?php $_from = $this->_var['rank_prices']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'rank_price');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['rank_price']):
?>
    <!--<li><?php echo $this->_var['rank_price']['rank_name']; ?>：<b class="price" id="ECS_RANKPRICE_<?php echo $this->_var['key']; ?>"><?php echo $this->_var['rank_price']['price']; ?></b></li>-->
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </ul>
  <?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?> 
  <?php echo $this->smarty_insert_scripts(array('files'=>'lefttime.js')); ?>
  <ul>
    <li> <span class="time">时间剩余：<time class="countdown" id="leftTime"><?php echo $this->_var['lang']['please_waiting']; ?></time></span> </li>
  </ul>
  <?php endif; ?>
  <?php if ($this->_var['promotion']): ?>
  <ul>
    <li>
    <?php $_from = $this->_var['promotion']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
    <?php echo $this->_var['lang']['activity']; ?>
    <?php if ($this->_var['item']['type'] == "snatch"): ?>
    <a href="snatch.php" title="<?php echo $this->_var['lang']['snatch']; ?>" class="rule c333">[<?php echo $this->_var['lang']['snatch']; ?>]</a>
    <?php elseif ($this->_var['item']['type'] == "group_buy"): ?>
    <a href="group_buy.php" title="<?php echo $this->_var['lang']['group_buy']; ?>" class="rule c333">[<?php echo $this->_var['lang']['group_buy']; ?>]</a>
    <?php elseif ($this->_var['item']['type'] == "auction"): ?>
    <a href="auction.php" title="<?php echo $this->_var['lang']['auction']; ?>" class="rule c333">[<?php echo $this->_var['lang']['auction']; ?>]</a>
    <?php elseif ($this->_var['item']['type'] == "favourable"): ?>
    <a href="activity.php" title="<?php echo $this->_var['lang']['favourable']; ?>" class="rule c333">[<?php echo $this->_var['lang']['favourable']; ?>]</a>
    <?php endif; ?>
    <a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo $this->_var['lang'][$this->_var['item']['type']]; ?> <?php echo $this->_var['item']['act_name']; ?><?php echo $this->_var['item']['time']; ?>" class="rule c333"><?php echo $this->_var['item']['act_name']; ?></a><br />
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </li>
  </ul>
  <?php endif; ?>
  <?php if ($this->_var['goods']['otc_flag'] == 1): ?>
   <div class="chuFanText"> <p style="color:#ff0000">处方药说明：本品为处方药，登记成功后，鹭燕大药房审方药师将主动与您联系!</p></div>
   <?php endif; ?>
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
    <form action="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
      <div class="fields">
        <ul class="ul1">
          <li>商品总价：<font id="ECS_GOODS_AMOUNT" class="price"></font></li>
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
            <input data-img="" autocomplete="off" value="<?php echo $this->_var['value']['id']; ?>" name="spec_<?php echo $this->_var['spec_key']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?> type="radio" onclick="changePrice()">
            <label for="spec_value_<?php echo $this->_var['value']['id']; ?>"><?php echo $this->_var['value']['label']; ?>[<?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?> <?php echo $this->_var['value']['format_price']; ?>]</label>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
            <?php else: ?>
            <select name="spec_<?php echo $this->_var['spec_key']; ?>" onchange="changePrice()">
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
            <input type="checkbox" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" onclick="changePrice()" />
            <label for="spec_value_<?php echo $this->_var['value']['id']; ?>">
            <?php echo $this->_var['value']['label']; ?> [<?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?> <?php echo $this->_var['value']['format_price']; ?>] </label>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
            <?php endif; ?> 
             
          </div>
        </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
         
        </ul>
        <ul class="quantity">
          <h2>数量：</h2>
          <div class="items"> <span class="ui-number radius5">
          <?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['is_gift'] == 0 && $this->_var['goods']['parent_id'] == 0): ?>
          <button type="button" class="decrease" onclick="changenum(-1)">-</button>
          <input class="num" name="number" id="goods_number" autocomplete="off" value="1" min="1" max="<?php echo $this->_var['goods']['goods_number']; ?>" type="text">
          <button type="button" class="increase" onclick="changenum(1)">+</button>
          <?php else: ?> 
          <?php echo $this->_var['goods']['goods_number']; ?> 
          <?php endif; ?> 
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
     <?php if ($this->_var['goods']['otc_flag'] == 1): ?>
        <button type="button" class="btn cart radius5" onclick="showRegisterDiv(<?php echo $this->_var['goods']['goods_id']; ?>);">需求登记</button>


     <?php else: ?>
     <button type="button" class="btn buy radius5" onClick="addToCart_quick(<?php echo $this->_var['goods']['goods_id']; ?>)">立即购买</button>
                     <button type="button" class="btn cart radius5" onclick="addToCart(<?php echo $this->_var['goods']['goods_id']; ?>);">
                     <div class="ico_01"></div>
                     加入购物车</button>
     <?php endif; ?>



        <div class="tipMask" id="hidDiv" style="display:none" ></div>
        <div class="popGeneral" id="popDiv" >
          <div class="tit">
            <h4>商品加入购物车</h4>
            <span class="ico_08" onclick="closeDiv()"><a href="javascript:"></a></span> </div>
          <div id="main">
            <div id="left"> <img width="115" height="115" src="<?php echo $this->_var['goods']['goods_img']; ?>"> </div>
            <div id="right">
              <p><?php echo $this->_var['goods']['goods_name']; ?></p>
              <span> 加入数量： <b id="cartNum"></b></span> <span> 总计金额： <b id="cartPrice"><?php if ($this->_var['goods']['is_promote']): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price_formated']; ?><?php endif; ?></b></span> </div>
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
                <?php echo $this->smarty_insert_scripts(array('files'=>'jquery.json.js,common.js')); ?>

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
                    <div class="modal-item" style="text-align: center;"><input type="hidden" id="goods_id" name="goods_id" style="border:0; font-size:18px; font-color:#299DD4;" value="<?php echo $this->_var['goods']['goods_id']; ?>" readonly="ture"></div>
                    <div class="modal-item" style="display:none"><input type="text" id="goods_price" style="border:0; font-size:18px; font-color:#299DD4;" value="<?php echo $this->_var['goods']['shop_price']; ?>" readonly="ture"></div>
                    <div class="modal-item"style="text-align: center;"><label>药品名：</label><input id="rx_goods_name" name="rx_goods_name" type="text" class="form-control" style="background-color:transparent ;border:0;display: inline;" value="<?php echo $this->_var['goods']['goods_style_name']; ?>" readonly="ture"></div>
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
      <!--<li id="tabs2" onClick="tab(2)" class=""> 评价 <span class="review-count">(<?php echo $this->_var['goods']['commnet_count']; ?>)</span> </li>-->
      <li id="tabs3" onClick="tab(3)" class=""> 热销 </li>
    </ul>
  </header>
  <div id="tab1" class="">
    <div class="desc wrap">
      <div class="blank2"></div>
     <?php echo $this->_var['goods']['goods_desc']; ?> 
    </div>
  </div>
  <div id="tab2" class="hidden">
    <div class="wrap">
      <div class="blank2"></div>
      <?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,utils.js')); ?>
	<?php echo $this->fetch('library/comments.lbi'); ?> </div>  
  </div>
  <div id="tab3" class="hidden">
    <div class="wrap">
      <ul class="m-recommend ">
        <div class="blank2"></div>
        <?php $_from = $this->_var['related_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'releated_goods_data');$this->_foreach['promotion_foreach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['promotion_foreach']['total'] > 0):
    foreach ($_from AS $this->_var['releated_goods_data']):
        $this->_foreach['promotion_foreach']['iteration']++;
?> 
        <li class="flex_in"<?php if (($this->_foreach['promotion_foreach']['iteration'] - 1) % 2 == 1): ?> style="float:right"<?php endif; ?>> <a href="<?php echo $this->_var['releated_goods_data']['url']; ?>">
          <div class="summary radius5"> <img src="../<?php echo $this->_var['releated_goods_data']['goods_thumb']; ?>" alt=""/>
            <div class="price"> 
              <?php if ($this->_var['releated_goods_data']['promote_price'] != 0): ?> 
              <?php echo $this->_var['releated_goods_data']['formated_promote_price']; ?> 
              <?php else: ?> 
              <?php echo $this->_var['releated_goods_data']['shop_price']; ?> 
              <?php endif; ?> 
            </div>
          </div>
          </a> </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </ul>
    </div>
  </div>
</section>
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