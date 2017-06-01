<?php

/**
 * ECSHOP 提交处方药登记
 * ============================================================================
 * * 版权所有 2005-2012 上海商派网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: liubo $
 * $Id: comment.php 17217 2011-01-19 06:29:08Z liubo $
 */

define('IN_ECS', true);
require(dirname(__FILE__) . '/includes/init.php');
require(ROOT_PATH . 'includes/cls_json.php');
include_once(ROOT_PATH . 'includes/lib_rx.php');
if (!isset($_REQUEST['act']))
{
    /* 只有在没有提交登记内容以及没有act的情况下才跳转 */
    ecs_header("Location: ./\n");
    exit;
}
if($_REQUEST['act'] == 'rx_registration') {


    include_once(ROOT_PATH . '/includes/cls_image.php');//会员头像 by neo
    $image = new cls_image($_CFG['bgcolor']);//会员头像 by neo
    $allow_suffix = array('gif', 'jpg', 'png', 'jpeg', 'bmp');//会员头像 by neo

    // $_POST['rxgoods'] = isset($_POST['rxgoods']) ? json_str_iconv($_POST['rxgoods']) : '';
  //  $_POST['rxgoods'] = strip_tags(urldecode($_POST['rxgoods']));
 //   $_POST['rxgoods'] = json_str_iconv($_POST['rxgoods']);
    $json = new JSON;
    $result = array('error' => 0, 'message' => '', 'content' => '');
    $cur_time = gmtime();
//    $rxgoods = $json->decode($_POST['rxgoods']);
//    if (empty($rxgoods)) {
//        $result['error'] = 1;
//        $result['message'] = $_LANG['rx_goodsid_no'];
//    }
    //$result['message'] =$rxgoods->rx_price;
    if (!otf_is($_POST['goods_id'])) {
        $result['error'] = 1;
        $result['message'] = $_LANG['rx_registration_no'];
    }
    if (empty($_POST['goods_id'])) {
        $result['error'] = 1;
        $result['message'] = $_LANG['rx_goodsid_no'];
    }
    /* 检查：商品数量是否合法 */
    if (!is_numeric($_POST['rx_number']) || intval($_POST['rx_number']) <= 0)
    {
        $result['error']   = 1;
        $result['message'] = $_LANG['invalid_number'];
    }



    /* 没有验证码时，用时间来限制机器人发帖或恶意发评论 */
    if (!isset($_SESSION['send_time4'])) {
        $_SESSION['send_time4'] = 0;
    }


    if (($cur_time - $_SESSION['send_time4']) < 30) // 小于30秒禁止发评论
    {
        $result['error'] = 1;
        $result['message'] = $_LANG['rx_spam_warning'];
    }


    if (!empty($rx_exist))
    {
        $rx_sn = get_rx_sn();
    }

    do
    {
        $rx_sn = get_rx_sn();
        $sql = "SELECT rx_sn FROM " . $GLOBALS['ecs']->table('rx_registration') .
            " WHERE rx_sn = '$rx_sn'";
        $rx_exist = $GLOBALS['db']->getOne($sql);


    }
    while (!empty($rx_exist)); //如果是订单号重复则重新提交数据


    $rx_img = isset($_FILES['rx_img'])? $_FILES['rx_img'] : '';//会员头像 by neo
    if(!empty($rx_img))
    {

        if (isset($_FILES['rx_img']['error'])) // php 4.2 版本才支持 error
        {
            // 最大上传文件大小
            $php_maxsize = ini_get('upload_max_filesize');
            $htm_maxsize = '10M';

            // 会员头像
            if ($_FILES['rx_img']['error'] == 0)
            {
                if (!$image->check_img_type($_FILES['rx_img']['type']))
                {
                    $result['error'] = 1;
                    $result['message'] ="图片格式不正确！";

                }
            }
            elseif ($_FILES['rx_img']['error'] == 1)
            {
                $result['error'] = 1;
                $result['message'] ="图片文件太大了(最大值：1M)，无法上传";

            }
            elseif ($_FILES['rx_img']['error'] == 2)
            {
                $result['error'] = 1;
                $result['message'] ="图片文件太大了(最大值：1M)，无法上传";
            }

        }
        /* 4.1版本 */
        else
        {
            // 会员头像
            if ($_FILES['rx_img']['tmp_name'] != 'none')
            {
                if (!$image->check_img_type($_FILES['rx_img']['type']))
                {
                    $result['error'] = 1;
                    $result['message'] ="图片格式不正确！";
                }
            }
        }


        //会员头像 by neo
        if (!empty($_FILES['rx_img']['name']))
        {
            /* 更新会员头像之前先删除旧的头像 */
            $sql = "SELECT rx_img " .
                " FROM " . $GLOBALS['ecs']->table('rx_registration') .
                " WHERE user_id = '$user_id'";

            $row = $GLOBALS['db']->getRow($sql);

            if ($row['rx_img'] != '')
            {
                @unlink($row['rx_img']);
            }

            $img_name = $user_id . '.' . end(explode('.', $_FILES['rx_img']['name']));

          //  $target = ROOT_PATH . DATA_DIR . '/rx_img/';
            $target = '../' . IMAGE_DIR .  '/'.date('Ym'). '/rx_img/';
            $original_img = $image->upload_image($_FILES['rx_img'], 'rx_img', $img_name); // 原始图片

            $rx_img = $image->make_thumb($original_img, 100, 100, $target);

            if ($rx_img === false)
            {
                $result['error'] = 1;
                $result['message'] ="图片保存出错！";

            }
        }
    }

    /* 无错误就保存留言 */
   if (empty($result['error']))
   {
        rx_registration_commit($rx_img,$rx_sn);
        $_SESSION['send_time4'] = $cur_time;
        $result['message'] = $_LANG['rx_registration_ok'];

   }

// $result['content'] = $smarty->fetch("js/common.js");

         //echo $json->encode($result);
    $smarty->assign('error', $result['error']);
    $smarty->assign('result', $result['message']);
    $rxgoods= array('rx_goods_name' =>$_POST['rx_goods_name'] ,'rx_img' =>$rx_img ,'rx_number' =>$_POST['rx_number'] , 'rx_phone' =>$_POST['rx_phone'] , 'rx_remark' => $_POST['rx_remark'] , 'rx_name' => $_POST['rx_name'] , 'rx_address' => $_POST['rx_address'] , 'rx_weixin_id' => $_POST['rx_weixin_id'] );
    $smarty->assign('rxgoods',$rxgoods);
    $smarty->display('rxRegistResult.dwt');
}
    /*------------------------------------------------------ */
//-- PRIVATE FUNCTION
    /*------------------------------------------------------ */

    /**
     * 添加登记内容
     *
     * @access  public
     * @param   object  $cmt
     * @return  void
     */
    function rx_registration_commit($rx_img,$rx_sn)
    {
        $rx_goods_id =$_POST['goods_id'];
        $time=gmtime();
        $sql = "SELECT is_promote,promote_start_date,promote_end_date,promote_price,shop_price FROM " . $GLOBALS['ecs']->table('goods') .
            " WHERE goods_id = '$rx_goods_id'";

   $price_result=$GLOBALS['db']->getRow($sql);
   if($price_result['is_promote']==1&&($price_result['promote_start_date'] < $time and $price_result['promote_end_date']>$time))
   {
       $rx_goods_price=$price_result['promote_price'];
   }else
    {
        $rx_goods_price=$price_result['shop_price'];
    }

        $rx_time = intval(gmtime());
        $rx_number   = !empty($_POST['rx_number'])   ? intval($_POST['rx_number']) : 0;
        $rx_phone   = !empty($_POST['rx_phone'])  ? trim($_POST['rx_phone']) : "";
        $rx_price=floatval($rx_goods_price)*$rx_number;
       // $rx_price   =$rxgoods->rx_price;//总价
       // $rx_goods_price   = floatval($rx_price)/floatval($rx_number);//单价
        $rx_remark =!empty($_POST['rx_remark'])  ? compile_str($_POST['rx_remark']) : "";
        $rx_jcr =!empty($_POST['rx_jcr'])  ? compile_str($_POST['rx_jcr']) : "";
        $rx_content =!empty($_POST['rx_content'])  ? compile_str($_POST['rx_content']) : "";
     //   $rx_jcr = trim($_POST['rx_jcr']);
     //   $rx_content = compile_str($_POST['rx_content']);
        $user_id = empty($_SESSION['user_id']) ? 0 : $_SESSION['user_id'];
        $rx_name   = !empty($_POST['rx_name'])   ? trim($_POST['rx_name']) : "visitor";
        $goods_id = intval($_POST['goods_id']);
         $rx_address   = !empty($_POST['rx_address'])   ? trim($_POST['rx_address']) : "";
        $rx_weixin_id   = !empty($_POST['rx_weixin_id'])   ? trim($_POST['rx_weixin_id']) : "";

      $sql = "INSERT INTO " .$GLOBALS['ecs']->table('rx_registration') .
           "(rx_sn, rx_name, rx_time,rx_phone,rx_remark,rx_number,goods_id,user_id,rx_status,rx_address,rx_weixin_id,rx_money,rx_img,rx_jcr,rx_content,rx_goods_price) VALUES " .
         "('$rx_sn', '$rx_name', '$rx_time', '$rx_phone', '$rx_remark', '$rx_number', '$goods_id','$user_id',0,'$rx_address','$rx_weixin_id','$rx_price','$rx_img','$rx_jcr','$rx_content','$rx_goods_price')";



       // $sql = "INSERT INTO " . $GLOBALS['ecs']->table('rx_registration') . " (rx_sn, rx_name, rx_time,rx_phone,rx_remark,rx_number,goods_id，user_id，rx_address，rx_status，rx_money，rx_weixin_id) " .
       //   "VALUES ('$rx_sn', '$rx_name','$rx_time','$rx_time','$rx_remark','$rx_number','$goods_id'，'$user_id'，'$rx_address'，'5'，'$rx_price'，'$rx_weixin_id')";
      $result = $GLOBALS['db']->query($sql);

//        $rx_id =  $GLOBALS['db']->insert_id();
//
//        $check_type=4;   //添加状态
//        $log_time = intval(gmtime());
//        /* 发货单发货记录log */
//        rx_order_action($rx_id, $rx_remark,$check_type,$log_time);
      return $result;
    }

function compile_str($str)
{
    $arr = array('<' => '＜', '>' => '＞','"'=>'”',"'"=>'’');

    return strtr($str, $arr);
}


?>