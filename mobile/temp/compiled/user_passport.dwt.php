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
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,user.js,utils.js')); ?>
<script type="text/javascript" src="themes/default/js/jquery-1.4.4.min.js"></script>
</head>
<body>
<?php if ($this->_var['action'] == 'login' || $this->_var['action'] == 'register'): ?>
<div id="page">
  <header id="header">
    <div class="header_l"> <a class="ico_10" onClick="javascript:history.back();"> 返回 </a> </div>
    <h1> 登录/注册 </h1>
    <div class="header_r header_search"> <a class="ico_17" href="index.php"> 首页 </a> </div>
  </header>
</div>
<section class="wrap">
  <div id="leftTabBox" class="loginBox">
    <div class="hd"> <span>欢迎光临，登录后体验更多服务</span>
      <ul>
        <li class="on"><a href="javascript:void(0)">登录</a></li>
        <li><a href="javascript:void(0)">注册</a></li>
      </ul>
    </div>
    <div class="bd">
      <ul>
        <div class="table_box">
          <form name="formLogin" action="user.php" method="post" onSubmit="return userLogin()">
            <dl>
              <dd>
                <input placeholder="用户名" name="username" type="text" class="inputBg" style="border:1px solid #ddd" id="username" />
              </dd>
            </dl>
            <dl>
              <dd>
                <input placeholder="密码"  name="password" type="password" class="inputBg" style="border:1px solid #ddd" />
              </dd>
            </dl>
            <?php if ($this->_var['enabled_captcha']): ?>
            <dl>
            	<dd>
            <input type="text" name="captcha"  id="J_AuthCodeTxt" placeholder="验证码" class="inputBg" style="border:1px solid #ddd" style="width:100px">
             <img src="captcha.php?is_login=1&<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle;cursor: pointer;" onClick="this.src='captcha.php?is_login=1&'+Math.random()" />
             </dd>
            </dl>
            <?php endif; ?>
            <dl>
              <dd>
                <input type="checkbox" value="1" name="remember" id="remember" style="vertical-align:middle; zoom:200%;" />
                <label for="remember"> 一个月内免登录</label>
              </dd>
            </dl>
            <dl>
              <dd>
                <input type="hidden" name="act" value="act_login" />
                <input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" />
                <input type="submit" name="submit"  value="立即登陆" class="c-btn3" />
              </dd>
            </dl>
          </form>
          <dl>
            <!--<dd> <a href="user.php?act=get_password" class="f6">忘记密码</a> </dd>-->
             <script type="text/javascript">
                            function forgetPassword(){
                                alert("请联系鹭燕客服找密码，谢谢！");
                            }
                       </script>
                       <dd> <a href="javascript:"  onclick="forgetPassword()"class="f6">忘记密码</a> </dd>
          </dl>
          <!--<div class="hezuo">
            <p class="t">使用合作账号登录</p>
            <p class="b"><a href="user.php?act=oath&type=qq"><img src="themes/default/images/quicklogin/qq.png"></a> <a href="user.php?act=oath&type=weibo"><img src="themes/default/images/quicklogin/weibo.png"></a> <a href="user.php?act=oath&type=renren"><img src="themes/default/images/quicklogin/renren.png"></a></p>
          </div>-->
        </div>
      </ul>
    </div>
    <div class="bd" style="display:none">
    <?php if ($this->_var['shop_reg_closed'] == 1): ?>
    <section class="innercontent">
		<div style="text-align:center">
		<?php echo $this->_var['lang']['shop_register_closed']; ?>
		</div>
	</section>
    <?php else: ?>
      <ul style="height:25rem">
        <form action="user.php" method="post" name="formUser" onsubmit="return register();">
          <input type="hidden" name="flag" id="flag" value="register" />
          <div class="table_box">
            <dl>
              <dd>
                <input placeholder="请输入用户名" class="inputBg" style="border:1px solid #ddd" name="username" id="username" type="text" />
              </dd>
            </dl>
            <dl>
              <dd>
                <input placeholder="请输入电子邮箱" class="inputBg" style="border:1px solid #ddd" name="email" id="email" type="text" />
              </dd>
            </dl>
            <dl>
              <dd>
                <input placeholder="请输入登录密码" class="inputBg" style="border:1px solid #ddd" name="password" id="password1" type="password" />
              </dd>
            </dl>
            <dl>
              <dd>
                <input placeholder="请重新输入一遍密码" class="inputBg" style="border:1px solid #ddd" name="confirm_password" id="confirm_password" type="password" />
              </dd>
            </dl>
            <?php if ($this->_var['enabled_captcha']): ?>
            <dl>
            	<dd>
            <input name="captcha" type="tel" value="" placeholder="输入验证码" class="inputBg" style="border:1px solid #ddd" style="width:100px">
             <img src="captcha.php?<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle;cursor: pointer;" onClick="this.src='captcha.php?'+Math.random()" /> 
             </dd>
            </dl>
            <?php endif; ?>
            <dl>
              <dd>
                <input id="agreement" name="agreement" type="checkbox" value="1" checked="checked" style="vertical-align:middle; zoom:200%;" />
                <label for="agreement"> <?php echo $this->_var['lang']['agreement']; ?></label>
              </dd>
            </dl>
            <dl>
              <dd>
                <input name="act" type="hidden" value="act_register" />
                <input name="enabled_sms" type="hidden" value="0" />
                <input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" />
                <input name="Submit" type="submit" value="下一步" class="c-btn3" />
              </dd>
            </dl>
          </div>
        </form>
      </ul>
      <?php endif; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if ($this->_var['action'] == 'get_password'): ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>
<script type="text/javascript">
<?php $_from = $this->_var['lang']['password_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
  var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</script> 
<div id="page">
  <header id="header">
    <div class="header_l"> <a class="ico_10" onClick="javascript:history.back();"> 返回 </a> </div>
    <h1> 找回密码 </h1>
    <div class="header_r header_search"> <a class="ico_17" href="index.php"> 首页 </a> </div>
 </header>
</div>
<section class="wrap">
  <div id="leftTabBox" class="loginBox">
    <div class="hd"> <span>您可通过电子邮件重置密码</span> </div>
    <div id="tabBox1-bd">
      <ul>
        <form action="user.php" method="post" name="getPassword" onsubmit="return submitPwdInfo();">
          <div class="table_box">
            <dl>
              <dd>
                <input placeholder="用户名" class="inputBg" style="border:1px solid #ddd" name="user_name" type="text" />
              </dd>
            </dl>
            <dl>
              <dd>
                <input placeholder="电子邮件地址" class="inputBg" style="border:1px solid #ddd" name="email" type="text" />
              </dd>
            </dl>
            <dl>
              <dd>
                <input name="act" type="hidden" value="send_pwd_email" />
                <input name="Submit" type="submit" value="提 交" class="c-btn3" />
              </dd>
            </dl>
          </div>
          <br />
        </form>
      </ul>
    </div>
  </div>
</section>
<?php endif; ?>

<script type="text/javascript">
jQuery(function($){
	$('.hd ul li').click(function(){
		var index = $('.hd ul li').index(this);
		$(this).addClass('on').siblings('li').removeClass('on');
		$('.loginBox .bd:eq('+index+')').show().siblings('.bd').hide();
	})
})
</script>

<script type="text/javascript" src="themes/default/js/sms.js"></script>
<div style="width:1px; height:1px; overflow:hidden"><?php $_from = $this->_var['lang']['p_y']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'pv');if (count($_from)):
    foreach ($_from AS $this->_var['pv']):
?><?php echo $this->_var['pv']; ?><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></div>
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
<?php $_from = $this->_var['lang']['passport_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var username_exist = "<?php echo $this->_var['lang']['username_exist']; ?>";
</script>
</body>
</html>
