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

<?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,common.js,user.js')); ?>
<script type="text/javascript" src="themes/default/js/jquery-1.4.4.min.js"></script>
</head>
<body>

<?php if ($this->_var['action'] == 'default'): ?>
<header id="header">
  <div class="header_l header_return"> <a class="ico_10" href="./"> 返回 </a> </div>
  <h1> 会员中心 </h1>
  <div class="header_r header_search"> <a class="ico_16" href="user.php"> 会员中心 </a> </div>
</header>
<dl class="user_top">
  <dt> <img  src="themes/default/images/get_avatar.png"> </dt>
  <dd>
    <p><?php echo $this->_var['info']['username']; ?></p>
    <p><span><?php echo $this->_var['rank_name']; ?></span></p>
  </dd>
  <div class="user_top_list">
    <ul>
      <li> <a href="user.php?act=order_list"> <strong><?php echo $this->_var['info']['order_count']; ?></strong> <img  src="themes/default/images/ico_user_01.png"> <span>30天订单</span> </a> </li>
      <li> <!--<a href="javascript:;"> <strong><?php if ($this->_var['info']['integral1']): ?><?php echo $this->_var['info']['integral1']; ?><?php else: ?>0<?php endif; ?></strong> <img  src="themes/default/images/ico_user_02.png"> <span>积分</span> </a> --></li>
      <li> <!--<a href="javascript:;"> <strong><?php if ($this->_var['info']['surplus1']): ?><?php echo $this->_var['info']['surplus1']; ?><?php else: ?>0.00<?php endif; ?></strong> <img  src="themes/default/images/ico_user_03.png"> <span>余额</span> </a>--> </li>
      <li> <!--<a class="fragment" href="user.php?act=bonus"> <strong>0</strong> <img  src="themes/default/images/ico_user_04.png"> <span>红包</span> </a> --></li>
    </ul>
  </div>
  <div class="quan1"></div>
  <div class="quan2"></div>
  <div class="quan3"></div>
</dl>
<div class="blank3"></div>
<section class="wrap">
  <div class="list_box padd1 radius10" style="padding-top:0;padding-bottom:0;"> <a href="user.php?act=profile" class="clearfix"> <span>用户信息</span><i></i> </a> <a href="user.php?act=order_list" class="clearfix"> <span>我的订单</span><i></i> </a> <a href="user.php?act=address_list"  class="clearfix"> <span>收货地址</span><i></i> </a> <a href="user.php?act=collection_list"  class="clearfix"> <span>我的收藏</span><i></i> </a> </div>
  <div class="blank3"></div>
  <div class="list_box padd1 radius10" style="padding-top:0;padding-bottom:0;"> <a href="user.php?act=message_list" class="clearfix"> <span>我的留言</span><i></i> </a> <a href="user.php?act=affiliate" class="clearfix"> <span>我的推荐</span><i></i> </a> <a href="user.php?act=comment_list"  class="clearfix"> <span>我的评论</span><i></i> </a> </div>
  <div class="blank3"></div>
  <div class="list_box padd1 radius10" style="padding-top:0;padding-bottom:0;">
    <!-- <a href="user.php?act=track_packages" class="clearfix">
				<span>跟踪包裹</span><i></i>
			</a>  -->
    <a href="user.php?act=logout" class="clearfix"> <span>退出登录</span><i></i> </a> </div>
</section>
<?php endif; ?>


<div id="tbh5v0">
<div class="login">
         
         <?php if ($this->_var['action'] == 'message_list'): ?>
<header id="header">
  <div class="header_l header_return"> <a class="ico_10" href="user.php"> 返回 </a> </div>
  <h1> 我的留言 </h1>
  <div class="header_r header_search"> <a class="ico_16" href="user.php"> 会员中心 </a> </div>
</header>
<section class="wrap message_list">
  <section class="order_box padd1 radius10 single_item">
    <table width="100%" border="0" cellpadding="5" cellspacing="0" class="ectouch_table">
      <tr>
        <td class="message"></td>
      </tr>
    </table>
  </section>
  <a href="javascript:;" style="text-align:center" class="get_more"></a>
  <section class="order_box padd1 radius10">
    <form action="user.php" method="post" enctype="multipart/form-data" name="formMsg" onSubmit="return submitMsg()">
      <table width="100%" border="0" cellpadding="5" cellspacing="0" class="ectouch_table">
        <?php if ($this->_var['order_info']): ?>
        <tr>
     
          <td>   <?php echo $this->_var['lang']['order_number']; ?> 
          <a href ="<?php echo $this->_var['order_info']['url']; ?>"><img src="themes/default/images/note.gif" /><?php echo $this->_var['order_info']['order_sn']; ?></a>
          <input name="msg_type" type="hidden" value="5" />
          <input name="order_id" type="hidden" value="<?php echo $this->_var['order_info']['order_id']; ?>" class="inputBg" style="border:1px solid #ddd" />
          </td>
        </tr>
        <?php else: ?>
        <tr>
          <td><input name="msg_type" type="radio" value="0" checked="checked" />
            <?php echo $this->_var['lang']['type']['0']; ?>
            <input type="radio" name="msg_type" value="1" />
            <?php echo $this->_var['lang']['type']['1']; ?>
            <input type="radio" name="msg_type" value="2" />
            <?php echo $this->_var['lang']['type']['2']; ?>
            <input type="radio" name="msg_type" value="3" />
            <?php echo $this->_var['lang']['type']['3']; ?>
            <input type="radio" name="msg_type" value="4" />
            <?php echo $this->_var['lang']['type']['4']; ?> </td>
        </tr>
        <?php endif; ?>
        <tr>
          <td><input name="msg_title" type="text" placeholder="<?php echo $this->_var['lang']['message_title']; ?>" class="inputBg_touch" /></td>
        </tr>
        <tr>
          <td><textarea name="msg_content" placeholder="<?php echo $this->_var['lang']['message_content']; ?>" cols="50" rows="4" wrap="virtual" style="border: 1px #DDD solid; width: 90%;"></textarea></td>
        </tr>
        <tr>
          <td><input type="hidden" name="act" value="act_add_message" />
            <input type="submit" value="<?php echo $this->_var['lang']['submit']; ?>" class="c-btn3" /></td>
        </tr>
      </table>
    </form>
  </section>
</section>
<script type="text/javascript" src="themes/default/js/jquery.more.js"></script>
<script type="text/javascript">
jQuery(function($){
    $('.message_list').more({'address': 'user.php?act=async_message_list', amount: 5, 'spinner_code':'<div style="text-align:center; margin:10px;"><img src="themes/default/images/loader.gif" /></div>'})
	$(window).scroll(function () {
		if ($(window).scrollTop() == $(document).height() - $(window).height()) {
			$('.get_more').click();
		}
	});	
});
</script>
         <?php endif; ?>
         
         
          <?php if ($this->_var['action'] == 'comment_list'): ?>
    <header id="header">
      <div class="header_l header_return"> <a class="ico_10" href="user.php"> 返回 </a> </div>
      <h1> 我的评论 </h1>
      <div class="header_r header_search"> <a class="ico_16" href="user.php"> 会员中心 </a> </div>
    </header>
    <section class="wrap comment_list">
      <section class="order_box padd1 radius10 single_item">
        <table width="100%" border="0" cellpadding="5" cellspacing="0" class="ectouch_table">
          <tr>
            <td class="comment"></td>
          </tr>
        </table>
      </section>
      <a href="javascript:;" style="text-align:center" class="get_more"></a> </section>
    <script type="text/javascript" src="themes/default/js/jquery.more.js"></script>
    <script type="text/javascript">
    jQuery(function($){
        $('.comment_list').more({'address': 'user.php?act=async_comment_list', amount: 5, 'spinner_code':'<div style="text-align:center; margin:10px;"><img src="themes/default/images/loader.gif" /></div>'})
      $(window).scroll(function () {
        if ($(window).scrollTop() == $(document).height() - $(window).height()) {
          $('.get_more').click();
        }
      });
    });
    </script>
          <?php endif; ?>
    
 
    
    <?php if ($this->_var['action'] == 'collection_list'): ?> 
  <?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,utils.js')); ?>
  <header id="header">
    <div class="header_l header_return"> <a class="ico_10" href="user.php"> 返回 </a> </div>
    <h1> 我的收藏 </h1>
    <div class="header_r header_search"> <a class="ico_16" href="user.php"> 会员中心 </a> </div>
  </header>
  <section class="wrap collection_list">
    <section class="order_box padd1 radius10 single_item">
    <table width="100%" border="0" cellpadding="5" cellspacing="0" class="ectouch_table">
      <tr>
          <td class="collection"></td>
      </tr>
    </table>
  </section>
  <a href="javascript:;" style="text-align:center" class="get_more"></a>
  </section>  
  <script type="text/javascript" src="themes/default/js/jquery.more.js"></script>
  <script type="text/javascript">
  jQuery(function($){
      $('.collection_list').more({'address': 'user.php?act=async_collection_list', amount: 6, 'spinner_code':'<div style="text-align:center; margin:10px;"><img src="themes/default/images/loader.gif" /></div>'})
    $(window).scroll(function () {
      if ($(window).scrollTop() == $(document).height() - $(window).height()) {
        $('.get_more').click();
      }
    });
  });
  </script>
  <?php endif; ?>
    
    
    <?php if ($this->_var['action'] == 'booking_list'): ?>
	<header id="header">
	<div class="c-inav">
		<section>
			<button class="back">
			<span><em></em></span><a href="javascript:history.go(-1)">返回</a>
			</button>
			</section>
			<section>
			<span style="font-size:14px; color:#333; font-weight:normal"><?php echo $this->_var['lang']['label_booking']; ?></span>
		</section>
		<section></section>
	</div>
	</header>
    <div class="blank"></div>
	<div class="fullscreen">
     <table width="100%" border="0" cellpadding="5" cellspacing="0" class="ectouch_table">
      <tr align="center">
        <td width="20%" bgcolor="#ffffff">名称</td>
        <td width="20%" bgcolor="#ffffff">数量</td>
        <td width="20%" bgcolor="#ffffff"><?php echo $this->_var['lang']['booking_time']; ?></td>
        <td width="25%" bgcolor="#ffffff">备注</td>
        <td width="15%" bgcolor="#ffffff"><?php echo $this->_var['lang']['handle']; ?></td>
      </tr>
      <?php $_from = $this->_var['booking_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
      <tr>
        <td align="center" bgcolor="#ffffff"><a href="<?php echo $this->_var['item']['url']; ?>" target="_blank" class="f6"><?php echo $this->_var['item']['goods_name']; ?></a></td>
        <td align="center" bgcolor="#ffffff"><?php echo $this->_var['item']['goods_number']; ?></td>
        <td align="center" bgcolor="#ffffff"><?php echo $this->_var['item']['booking_time']; ?></td>
        <td align="center" bgcolor="#ffffff"><?php echo $this->_var['item']['dispose_note']; ?></td>
        <td align="center" bgcolor="#ffffff"><a href="javascript:if (confirm('<?php echo $this->_var['lang']['confirm_remove_account']; ?>')) location.href='user.php?act=act_del_booking&id=<?php echo $this->_var['item']['rec_id']; ?>'" class="f6"><?php echo $this->_var['lang']['drop']; ?></a> </td>
      </tr>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </table>
	</div>
    <?php endif; ?>
    
   
  <?php if ($this->_var['action'] == 'add_booking'): ?>
	<header id="header">
	<div class="c-inav">
		<section>
			<button class="back">
			<span><em></em></span><a href="javascript:history.go(-1)">返回</a>
			</button>
			</section>
			<section>
			<span style="font-size:14px; color:#333; font-weight:normal">{<?php echo $this->_var['lang']['add']; ?><?php echo $this->_var['lang']['label_booking']; ?></span>
		</section>
		<section></section>
	</div>
	</header>  <?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>
    <script type="text/javascript">
    <?php $_from = $this->_var['lang']['booking_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
    var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </script>
   <div class="fullscreen">
    <div class="blank"></div>
     <form action="user.php" method="post" name="formBooking" onsubmit="return addBooking();">
     <table width="100%" border="0" cellpadding="5" cellspacing="0" class="ectouch_table">
      <tr>
        <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['booking_goods_name']; ?></td>
        <td bgcolor="#ffffff"><?php echo $this->_var['info']['goods_name']; ?></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['booking_amount']; ?>:</td>
        <td bgcolor="#ffffff"><input name="number" type="text" value="<?php echo $this->_var['info']['goods_number']; ?>" class="inputBg" style="border:1px solid #ddd" /></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['describe']; ?>:</td>
        <td bgcolor="#ffffff"><textarea name="desc" cols="50" rows="5" wrap="virtual" class="B_blue"><?php echo $this->_var['goods_attr']; ?><?php echo htmlspecialchars($this->_var['info']['goods_desc']); ?></textarea>
        </td>
      </tr>
      <tr>
        <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['contact_username']; ?>:</td>
        <td bgcolor="#ffffff"><input name="linkman" type="text" value="<?php echo htmlspecialchars($this->_var['info']['consignee']); ?>" size="25" class="inputBg" style="border:1px solid #ddd"/>
        </td>
      </tr>
      <tr>
        <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['email_address']; ?>:</td>
        <td bgcolor="#ffffff"><input name="email" type="text" value="<?php echo htmlspecialchars($this->_var['info']['email']); ?>" size="25" class="inputBg" style="border:1px solid #ddd" /></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#ffffff"><?php echo $this->_var['lang']['contact_phone']; ?>:</td>
        <td bgcolor="#ffffff"><input name="tel" type="text" value="<?php echo htmlspecialchars($this->_var['info']['tel']); ?>" size="25" class="inputBg" style="border:1px solid #ddd" /></td>
      </tr>
      <tr>
        <td align="right" bgcolor="#ffffff">&nbsp;</td>
        <td bgcolor="#ffffff"><input name="act" type="hidden" value="act_add_booking" />
          <input name="id" type="hidden" value="<?php echo $this->_var['info']['id']; ?>" />
          <input name="rec_id" type="hidden" value="<?php echo $this->_var['info']['rec_id']; ?>" />
          <input type="submit" name="submit" class="submit" value="<?php echo $this->_var['lang']['submit_booking_goods']; ?>" />
          <input type="reset" name="reset" class="reset" value="<?php echo $this->_var['lang']['button_reset']; ?>" />
        </td>
      </tr>
    </table>
     </form>
	 </div>
    <?php endif; ?>
    
    <?php if ($this->_var['affiliate']['on'] == 1): ?>
     <?php if ($this->_var['action'] == 'affiliate'): ?>
      <?php if (! $this->_var['goodsid'] || $this->_var['goodsid'] == 0): ?>
      <header id="header">
        <div class="header_l header_return"> <a class="ico_10" href="user.php"> 返回 </a> </div>
        <h1> 我的推荐 </h1>
        <div class="header_r header_search"> <a class="ico_16" href="user.php"> 会员中心 </a> </div>
      </header>
	 <div class="blank"></div>
	 <section class="wrap message_list">
      <h5><span><?php echo $this->_var['lang']['affiliate_detail']; ?></span></h5>
      <div class="blank"></div>
   <section class="order_box padd1 radius10 single_item">
	   <table width="100%" border="0" cellpadding="1" cellspacing="1" bgcolor="#dddddd" class="ectouch_table">
	    <tr align="left">
      <td bgcolor="#ffffff"><?php echo $this->_var['affiliate_intro']; ?></td>
	   </tr>
  </table>
  </section>    
    <?php if ($this->_var['affiliate']['config']['separate_by'] == 0): ?>
    
    <div class="blank"></div>
    <h5><span><a name="myrecommend" style="color:#333"><?php echo $this->_var['lang']['affiliate_member']; ?></a></span></h5>
    <div class="blank"></div>
    <section class="order_box padd1 radius10 single_item">
   <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd" class="ectouch_table">
    <tr align="center">
      <td bgcolor="#ffffff"><?php echo $this->_var['lang']['affiliate_lever']; ?></td>
      <td bgcolor="#ffffff"><?php echo $this->_var['lang']['affiliate_num']; ?></td>
      <td bgcolor="#ffffff"><?php echo $this->_var['lang']['level_point']; ?></td>
      <td bgcolor="#ffffff"><?php echo $this->_var['lang']['level_money']; ?></td>
    </tr>
    <?php $_from = $this->_var['affdb']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('level', 'val');$this->_foreach['affdb'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['affdb']['total'] > 0):
    foreach ($_from AS $this->_var['level'] => $this->_var['val']):
        $this->_foreach['affdb']['iteration']++;
?>
    <tr align="center">
      <td bgcolor="#ffffff"><?php echo $this->_var['level']; ?></td>
      <td bgcolor="#ffffff"><?php echo $this->_var['val']['num']; ?></td>
      <td bgcolor="#ffffff"><?php echo $this->_var['val']['point']; ?></td>
      <td bgcolor="#ffffff"><?php echo $this->_var['val']['money']; ?></td>
    </tr>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </table>
  </section>

<?php else: ?>


<?php endif; ?>

<div class="blank"></div>
<h5><span>分成规则</span></h5>
<div class="blank"></div>
<section class="order_box padd1 radius10 single_item">
<table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd" class="ectouch_table">
    <tr align="center">
      <td bgcolor="#ffffff"><?php echo $this->_var['lang']['order_number']; ?></td>
      <td bgcolor="#ffffff"><?php echo $this->_var['lang']['affiliate_money']; ?></td>
      <td bgcolor="#ffffff"><?php echo $this->_var['lang']['affiliate_point']; ?></td>
      <td bgcolor="#ffffff"><?php echo $this->_var['lang']['affiliate_mode']; ?></td>
      <td bgcolor="#ffffff"><?php echo $this->_var['lang']['affiliate_status']; ?></td>
    </tr>
    <?php $_from = $this->_var['logdb']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');$this->_foreach['logdb'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['logdb']['total'] > 0):
    foreach ($_from AS $this->_var['val']):
        $this->_foreach['logdb']['iteration']++;
?>
    <tr align="center">
      <td bgcolor="#ffffff"><?php echo $this->_var['val']['order_sn']; ?></td>
      <td bgcolor="#ffffff"><?php echo $this->_var['val']['money']; ?></td>
      <td bgcolor="#ffffff"><?php echo $this->_var['val']['point']; ?></td>
      <td bgcolor="#ffffff"><?php if ($this->_var['val']['separate_type'] == 1 || $this->_var['val']['separate_type'] === 0): ?><?php echo $this->_var['lang']['affiliate_type'][$this->_var['val']['separate_type']]; ?><?php else: ?><?php echo $this->_var['lang']['affiliate_type'][$this->_var['affiliate_type']]; ?><?php endif; ?></td>
      <td bgcolor="#ffffff"><?php echo $this->_var['lang']['affiliate_stats'][$this->_var['val']['is_separate']]; ?></td>
    </tr>
    <?php endforeach; else: ?>
<tr><td colspan="5" align="center" bgcolor="#ffffff"><?php echo $this->_var['lang']['no_records']; ?></td>
</tr>
    <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <?php if ($this->_var['logdb']): ?>
    <tr>
    <td colspan="5" bgcolor="#ffffff">
 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
  <div id="pager"> <?php echo $this->_var['lang']['pager_1']; ?><?php echo $this->_var['pager']['record_count']; ?><?php echo $this->_var['lang']['pager_2']; ?><?php echo $this->_var['lang']['pager_3']; ?><?php echo $this->_var['pager']['page_count']; ?><?php echo $this->_var['lang']['pager_4']; ?> <span> <a href="<?php echo $this->_var['pager']['page_first']; ?>"><?php echo $this->_var['lang']['page_first']; ?></a> <a href="<?php echo $this->_var['pager']['page_prev']; ?>"><?php echo $this->_var['lang']['page_prev']; ?></a> <a href="<?php echo $this->_var['pager']['page_next']; ?>"><?php echo $this->_var['lang']['page_next']; ?></a> <a href="<?php echo $this->_var['pager']['page_last']; ?>"><?php echo $this->_var['lang']['page_last']; ?></a> </span>
    <select name="page" id="page" onchange="selectPage(this)">
    <?php echo $this->html_options(array('options'=>$this->_var['pager']['array'],'selected'=>$this->_var['pager']['page'])); ?>
    </select>
    <input type="hidden" name="act" value="affiliate" />
  </div>
</form>
    </td>
    </tr>
    <?php endif; ?>
  </table>
  </section> 
 <script type="text/javascript" language="JavaScript">
<!--

function selectPage(sel)
{
  sel.form.submit();
}

//-->
</script>


<div class="blank"></div>
<h5><span><?php echo $this->_var['lang']['affiliate_code']; ?></span></h5>
<div class="blank"></div>
<section class="order_box padd1 radius10 single_item">
<table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd" class="ectouch_table">
<tr>
<td bgcolor="#ffffff"><a href="<?php echo $this->_var['shopurl']; ?>?u=<?php echo $this->_var['userid']; ?>" target="_blank" class="f6"><?php echo $this->_var['shopname']; ?></a> </td>
</tr>
<tr>
  <td bgcolor="#ffffff">
  <textarea onclick="this.select();" name="" cols="" rows=""  class="B_blue" style="font-size:12px; height:40px; width:100%">
  &lt;a href=&quot;<?php echo $this->_var['shopurl']; ?>?u=<?php echo $this->_var['userid']; ?>&quot; target=&quot;_blank&quot;&gt;<?php echo $this->_var['shopname']; ?>&lt;/a&gt;
  </textarea>
 <br/>
  <?php echo $this->_var['lang']['recommend_webcode']; ?></td>
  </tr>
<tr>
<td bgcolor="#ffffff"><a href="<?php echo $this->_var['shopurl']; ?>?u=<?php echo $this->_var['userid']; ?>" target="_blank" title="<?php echo $this->_var['shopname']; ?>"  class="f6"><img src="<?php echo $this->_var['shopurl']; ?><?php echo $this->_var['logosrc']; ?>" /></a> </td>
</tr>
<tr>
  <td bgcolor="#ffffff">
  
  
   
    <textarea onclick="this.select();" name="" cols="" rows=""  class="B_blue" style="font-size:12px; height:60px; width:100%">
 &lt;a href=&quot;<?php echo $this->_var['shopurl']; ?>?u=<?php echo $this->_var['userid']; ?>&quot; target=&quot;_blank&quot; title=&quot;<?php echo $this->_var['shopname']; ?>&quot;&gt;&lt;img src=&quot;<?php echo $this->_var['shopurl']; ?><?php echo $this->_var['logosrc']; ?>&quot; /&gt;&lt;/a&gt;
  </textarea>
   <br/>
  <?php echo $this->_var['lang']['recommend_webcode']; ?>  </td>
  </tr>
<tr>
<td bgcolor="#ffffff"><a href="<?php echo $this->_var['shopurl']; ?>?u=<?php echo $this->_var['userid']; ?>" target="_blank" class="f6"><?php echo $this->_var['shopname']; ?></a> </td>
</tr>
<tr>
  <td bgcolor="#ffffff"> 
  
     <textarea onclick="this.select();" name="" cols="" rows=""  class="B_blue" style="font-size:12px; height:40px; width:100%">
[url=<?php echo $this->_var['shopurl']; ?>?u=<?php echo $this->_var['userid']; ?>]<?php echo $this->_var['shopname']; ?>[/url]
  </textarea>
  <br/>
   <?php echo $this->_var['lang']['recommend_bbscode']; ?></td>
  </tr>
<tr>
<td bgcolor="#ffffff"><a href="<?php echo $this->_var['shopurl']; ?>?u=<?php echo $this->_var['userid']; ?>" target="_blank" title="<?php echo $this->_var['shopname']; ?>" class="f6"><img src="<?php echo $this->_var['shopurl']; ?><?php echo $this->_var['logosrc']; ?>" /></a> </td>
</tr>
<tr>
  <td bgcolor="#ffffff"> 
  
     <textarea onclick="this.select();" name="" cols="" rows=""  class="B_blue" style="font-size:12px; height:40px; width:100%">
[url=<?php echo $this->_var['shopurl']; ?>?u=<?php echo $this->_var['userid']; ?>][img]<?php echo $this->_var['shopurl']; ?><?php echo $this->_var['logosrc']; ?>[/img][/url]
  </textarea>
    <br/>
  <?php echo $this->_var['lang']['recommend_bbscode']; ?></td>
  </tr>
</table>
</section> 
        <?php else: ?>
        
        <style type="text/css">
        .types a{text-decoration:none; color:#006bd0;}
        </style>
    <h5><span><?php echo $this->_var['lang']['affiliate_code']; ?></span></h5>
    <div class="blank"></div>
  <section class="order_box padd1 radius10 single_item">  
  <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd" class="ectouch_table">
    <tr align="center">
      <td bgcolor="#ffffff"><?php echo $this->_var['lang']['affiliate_view']; ?></td>
      <td bgcolor="#ffffff"><?php echo $this->_var['lang']['affiliate_code']; ?></td>
    </tr>
    <?php $_from = $this->_var['types']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');$this->_foreach['types'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['types']['total'] > 0):
    foreach ($_from AS $this->_var['val']):
        $this->_foreach['types']['iteration']++;
?>
    <tr align="center">
      <td bgcolor="#ffffff" class="types"><script src="<?php echo $this->_var['shopurl']; ?>affiliate.php?charset=<?php echo $this->_var['ecs_charset']; ?>&gid=<?php echo $this->_var['goodsid']; ?>&u=<?php echo $this->_var['userid']; ?>&type=<?php echo $this->_var['val']; ?>"></script></td>
      <td bgcolor="#ffffff">javascript <?php echo $this->_var['lang']['affiliate_codetype']; ?><br>
        <textarea cols=30 rows=2 id="txt<?php echo $this->_foreach['types']['iteration']; ?>" style="border:1px solid #ccc;"><script src="<?php echo $this->_var['shopurl']; ?>affiliate.php?charset=<?php echo $this->_var['ecs_charset']; ?>&gid=<?php echo $this->_var['goodsid']; ?>&u=<?php echo $this->_var['userid']; ?>&type=<?php echo $this->_var['val']; ?>"></script></textarea>[<a href="#" title="Copy To Clipboard" onClick="Javascript:copyToClipboard(document.getElementById('txt<?php echo $this->_foreach['types']['iteration']; ?>').value);alert('<?php echo $this->_var['lang']['copy_to_clipboard']; ?>');"  class="f6"><?php echo $this->_var['lang']['code_copy']; ?></a>]
<br>iframe <?php echo $this->_var['lang']['affiliate_codetype']; ?><br><textarea cols=30 rows=2 id="txt<?php echo $this->_foreach['types']['iteration']; ?>_iframe"  style="border:1px solid #ccc;"><iframe width="250" height="270" src="<?php echo $this->_var['shopurl']; ?>affiliate.php?charset=<?php echo $this->_var['ecs_charset']; ?>&gid=<?php echo $this->_var['goodsid']; ?>&u=<?php echo $this->_var['userid']; ?>&type=<?php echo $this->_var['val']; ?>&display_mode=iframe" frameborder="0" scrolling="no"></iframe></textarea>[<a href="#" title="Copy To Clipboard" onClick="Javascript:copyToClipboard(document.getElementById('txt<?php echo $this->_foreach['types']['iteration']; ?>_iframe').value);alert('<?php echo $this->_var['lang']['copy_to_clipboard']; ?>');" class="f6"><?php echo $this->_var['lang']['code_copy']; ?></a>]
<br /><?php echo $this->_var['lang']['bbs']; ?>UBB <?php echo $this->_var['lang']['affiliate_codetype']; ?><br /><textarea cols=30 rows=2 id="txt<?php echo $this->_foreach['types']['iteration']; ?>_ubb"  style="border:1px solid #ccc;"><?php if ($this->_var['val'] != 5): ?>[url=<?php echo $this->_var['shopurl']; ?>goods.php?id=<?php echo $this->_var['goodsid']; ?>&u=<?php echo $this->_var['userid']; ?>][img]<?php if ($this->_var['val'] < 3): ?><?php echo $this->_var['goods']['goods_thumb']; ?><?php else: ?><?php echo $this->_var['goods']['goods_img']; ?><?php endif; ?>[/img][/url]<?php endif; ?>

[url=<?php echo $this->_var['shopurl']; ?>goods.php?id=<?php echo $this->_var['goodsid']; ?>&u=<?php echo $this->_var['userid']; ?>][b]<?php echo $this->_var['goods']['goods_name']; ?>[/b][/url]
<?php if ($this->_var['val'] != 1 && $this->_var['val'] != 3): ?>[s]<?php echo $this->_var['goods']['market_price']; ?>[/s]<?php endif; ?> [color=red]<?php echo $this->_var['goods']['shop_price']; ?>[/color]</textarea>[<a href="#" title="Copy To Clipboard" onClick="Javascript:copyToClipboard(document.getElementById('txt<?php echo $this->_foreach['types']['iteration']; ?>_ubb').value);alert('<?php echo $this->_var['lang']['copy_to_clipboard']; ?>');"  class="f6"><?php echo $this->_var['lang']['code_copy']; ?></a>]
<?php if ($this->_var['val'] == 5): ?><br /><?php echo $this->_var['lang']['im_code']; ?> <?php echo $this->_var['lang']['affiliate_codetype']; ?><br /><textarea cols=30 rows=2 id="txt<?php echo $this->_foreach['types']['iteration']; ?>_txt"  style="border:1px solid #ccc;"><?php echo $this->_var['lang']['show_good_to_you']; ?> <?php echo $this->_var['goods']['goods_name']; ?>

<?php echo $this->_var['shopurl']; ?>goods.php?id=<?php echo $this->_var['goodsid']; ?>&u=<?php echo $this->_var['userid']; ?></textarea>[<a href="#" title="Copy To Clipboard" onClick="Javascript:copyToClipboard(document.getElementById('txt<?php echo $this->_foreach['types']['iteration']; ?>_txt').value);alert('<?php echo $this->_var['lang']['copy_to_clipboard']; ?>');"  class="f6"><?php echo $this->_var['lang']['code_copy']; ?></a>]<?php endif; ?></td>
    </tr>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </table>
  </section> 
<script language="Javascript">
copyToClipboard = function(txt)
{
 if(window.clipboardData)
 {
    window.clipboardData.clearData();
    window.clipboardData.setData("Text", txt);
 }
 else if(navigator.userAgent.indexOf("Opera") != -1)
 {
   //暂时无方法:-(
 }
 else if (window.netscape)
 {
  try
  {
    netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
  }
  catch (e)
  {
    alert("<?php echo $this->_var['lang']['firefox_copy_alert']; ?>");
    return false;
  }
  var clip = Components.classes['@mozilla.org/widget/clipboard;1'].createInstance(Components.interfaces.nsIClipboard);
  if (!clip)
    return;
  var trans = Components.classes['@mozilla.org/widget/transferable;1'].createInstance(Components.interfaces.nsITransferable);
  if (!trans)
    return;
  trans.addDataFlavor('text/unicode');
  var str = new Object();
  var len = new Object();
  var str = Components.classes["@mozilla.org/supports-string;1"].createInstance(Components.interfaces.nsISupportsString);
  var copytext = txt;
  str.data = copytext;
  trans.setTransferData("text/unicode",str,copytext.length*2);
  var clipid = Components.interfaces.nsIClipboard;
  if (!clip)
  return false;
  clip.setData(trans,null,clipid.kGlobalClipboard);
 }
}
                </script> </section>
            
            <?php endif; ?>
        <?php endif; ?>
 
    <?php endif; ?>

  
  
      
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</div>
</div>



<div style="width:1px; height:1px; overflow:hidden"><?php $_from = $this->_var['lang']['p_y']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'pv');if (count($_from)):
    foreach ($_from AS $this->_var['pv']):
?><?php echo $this->_var['pv']; ?><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></div>



</body>
<script type="text/javascript">
<?php $_from = $this->_var['lang']['clips_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</script>
</html>
