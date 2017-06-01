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
  <div id="page" style="right: 0px; left: 0px; display: block;">
    <header id="header" style="z-index:1">
      <div class="header_l"> <a class="ico_10" href="javascript:history.go(-1);"> 返回 </a> </div>
      <h1> SuperTouch 团购 </h1>
      <!--<div class="header_r header_search"> <a class="ico_17" href="index.php"> 首页 </a> </div>-->
      
      <div class="header_r"> <a class="switchBtn switchBtn-album" href="javascript:void(0);" onclick="changeCl(this)" style="opacity: 1;"> 切换 </a>        </div>
    </header>
    
    <div class="srp album flex-f-row" id="J_ItemList" style="opacity:1;">
      <div class="product flex_in single_item">
        <div class="pro-inner"></div>
      </div>
      <a href="javascript:;" class="get_more">上滑更多哦</a>
    </div>
    <?php echo $this->fetch('library/page_footer.lbi'); ?>
  </div>

  <script type="text/javascript" src="themes/default/js/jquery.min.js"></script>
  <script type="text/javascript" src="themes/default/js/jquery.more.js"></script>
  <script type="text/javascript" src="themes/default/js/supertouch.js"></script>
  <script type="text/javascript">
    // jQuery(function($){
    //     console.log("这里");
    // 	$('#J_ItemList').more(
    // {'address': 'group_buy.php?act=asynclist',
    // 'spinner_code':'<div style="text-align:center; margin:10px;"><img src="themes/default/images/loader.gif" /></div>'}
    // 	);
    // 	$(window).scroll(function () {
    // 	    console.log("奇怪只要这样点击");
    // 		if ($(window).scrollTop() == $(document).height() - $(window).height()) {
    // 			$('.get_more').click();

    // 		}
    // 	});
    // });


    jQuery(function ($) {
      $('#J_ItemList').more({
        'address': 'group_buy.php?act=asynclist',
        'spinner_code': '<div style="text-align:center; margin:10px;"><img src="themes/default/images/loader.gif" /></div>'
      })
      $(window).scroll(function () {
        if ($(window).scrollTop() == $(document).height() - $(window).height()) {
          $('.get_more').click();
        }
      });
    });

  </script>
</body>

</html>