<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/23
 * Time: 13:07
 */

if (!defined('IN_ECS'))
{
    die('Hacking attempt');
}


/**
 * 获取某个登记订单信息
 */
function rx_info($rx_id, $rx_sn = '')
{

    $rx_id = intval($rx_id);
    if ($rx_id > 0)
    {
        $sql = "SELECT * " .
            " FROM " . $GLOBALS['ecs']->table('rx_registration') .
            " WHERE rx_id = '$rx_id'";
    }
    else
    {
        $sql = "SELECT * " .
            "  FROM " . $GLOBALS['ecs']->table('rx_registration') .
            " WHERE rx_sn = '$rx_sn'";
    }
    $rx_order = $GLOBALS['db']->getRow($sql);

    /* 格式化日期字段 */
    if ($rx_order)
    {
       // $rx_order['rx_time']= local_date( $rx_order['rx_time']);
        $rx_order['rx_time']=date("Y-m-d H:i:s", $rx_order['rx_time']) ;
       // $rx_order['rx_time'] = local_date('Y-m-d', $rx_order['rx_time']);
    }

    return $rx_order;
}

/**
 * 获取某个登记订单的订单号信息
 */
function rx_tv_info_sn($rx_id, $rx_sn = '')
{

    $rx_id = intval($rx_id);
    if ($rx_id > 0)
    {
        $sql = "SELECT rx_sn,rx_is_check,rx_img " .
            " FROM " . $GLOBALS['ecs']->table('rx_registration') .
            " WHERE rx_id = '$rx_id'";
    }
    else
    {
        $sql = "SELECT rx_sn,rx_is_check,rx_img " .
            "  FROM " . $GLOBALS['ecs']->table('rx_registration') .
            " WHERE rx_sn = '$rx_sn'";
    }
    $rx_order = $GLOBALS['db']->getRow($sql);

    return $rx_order;
}
/**
 * 生成登记编号
 */
function get_rx_sn()
{
    /* 选择一个随机的方案 */
    mt_srand((double) microtime() * 1000000);

    return 'rx'.date('Ymd') . str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT);
}

/**
 * 判断是否是处方药
 */
function otf_is($goods_id)
{
    clear_cache_files();

    if ($goods_id <= 0)
    {
       // $GLOBALS['err']->add($GLOBALS['_LANG']['invalid_goods_id']);

        return false;
    }
    $sql = "SELECT COUNT(*) FROM " .$GLOBALS['ecs']->table('goods') .
        " WHERE goods_id = '$goods_id'and otc_flag=1";
    if ($GLOBALS['db']->getOne($sql) <= 0)
    {
       // sys_msg('非处方药不需要登记', 1, array(), false);
        return false;
    }
    return true;
}

/**
 * 取得处方药订单商品
 * @param   int     $order_id   订单id
 * @return  array   订单商品数组
 */
function rx_order_goods($rx_id,$rx_sn)
{
    if($rx_id>0)
    {
        $sql = "SELECT *
            FROM " . $GLOBALS['ecs']->table('rx_registration') . " AS r
              LEFT JOIN " . $GLOBALS['ecs']->table('goods') . " AS g
                    ON r.goods_id = g.goods_id
                LEFT JOIN " . $GLOBALS['ecs']->table('brand') . " AS b
                    ON g.brand_id = b.brand_id
            WHERE r.rx_id = '$rx_id'";
    }else{
        $sql = "SELECT *
            FROM " . $GLOBALS['ecs']->table('rx_registration') . " AS r
              LEFT JOIN " . $GLOBALS['ecs']->table('goods') . " AS g
                    ON r.goods_id = g.goods_id
                LEFT JOIN " . $GLOBALS['ecs']->table('brand') . " AS b
                    ON g.brand_id = b.brand_id
            WHERE r.rx_sn = '$rx_sn'";
    }


    $res = $GLOBALS['db']->query($sql);

    while ($row = $GLOBALS['db']->fetchRow($res))
    {

        $row['formated_subtotal']       = price_format($row['goods_price'] * $row['goods_number']);
        $row['formated_goods_price']    = price_format($row['goods_price']);
        $row['log_time'] = local_date('Y-m-d', $row['log_time']);

    }
    $goods_list[] = $row;
    //return $GLOBALS['db']->getAll($sql);
    return $goods_list;
}

/**
 * 得到处方流水号
 * @return  string
 */
function get_rx_new_sn()
{
    /* 选择一个随机的方案 */
    mt_srand((double) microtime() * 1000000);
    $sql = "SELECT delivery_sn,update_time FROM " .$GLOBALS['ecs']->table('delivery_order') .
        "Order by update_time desc Limit 1";
    $sql2 = "SELECT rx_serial_number,rx_delivery_time FROM " .$GLOBALS['ecs']->table('rx_registration') .
        "Order by rx_delivery_time desc Limit 1";

    $row = $GLOBALS['db']->getRow($sql);
    $row2 = $GLOBALS['db']->getRow($sql2);
    $result=0;
    $result_sn=0;
    for($i=0;$i<strlen($row['delivery_sn']);$i++){
        if(is_numeric($row['delivery_sn'][$i])){
            $result_sn.=$row['delivery_sn'][$i];
        }
    }
    $result_sn_2=0;
     for($i=0;$i<strlen($row2['rx_serial_number']);$i++){
        if(is_numeric($row2['rx_serial_number'][$i])){
            $result_sn_2.=$row2['rx_serial_number'][$i];
        }
    }

    if($result_sn>$result_sn_2)
    {
        if(date('Y-m-d') != date('Y-m-d',$row['update_time']))
        {
            $var=sprintf("%04d", 1);
            return 'qh'.date('Ymd') .$var;
        }else
        {
            $result=$result_sn+1;
            return 'qh'.$result;
        }

    }
    elseif($result_sn<$result_sn_2)
    {
        if (date('Y-m-d') != date('Y-m-d',$row2['rx_delivery_time'])) {
            // echo 'y';
            $var=sprintf("%04d", 1);
            return 'qh'.date('Ymd') .$var;
        }
        else
        {
            $result=$result_sn_2+1;
            return 'qh'.$result;
        }

    }
    elseif(empty($row2['rx_serial_number'])&&empty($row['delivery_sn']))
    {
        $var=sprintf("%04d", 1);
        return 'qh'.date('Ymd') .$var;
    }



}


/**
 * 得到处方物流流水号
 * @return  string
 */
function get_rx_wl_new_sn()
{
    /* 选择一个随机的方案 */
    mt_srand((double) microtime() * 1000000);
    $sql = "SELECT logistics_sn,logistics_time FROM " .$GLOBALS['ecs']->table('delivery_order') .
        "Order by logistics_time desc Limit 1";
    $sql2 = "SELECT rx_logistics_sn,rx_logistics_time FROM " .$GLOBALS['ecs']->table('rx_registration') .
        "Order by rx_logistics_time desc Limit 1";

    $row = $GLOBALS['db']->getRow($sql);
    $row2 = $GLOBALS['db']->getRow($sql2);
    $result=0;
    $result_sn=0;
    for($i=0;$i<strlen($row['logistics_sn']);$i++){
        if(is_numeric($row['logistics_sn'][$i])){
            $result_sn.=$row['logistics_sn'][$i];
        }
    }
    $result_sn_2=0;
    for($i=0;$i<strlen($row2['rx_logistics_sn']);$i++){
        if(is_numeric($row2['rx_logistics_sn'][$i])){
            $result_sn_2.=$row2['rx_logistics_sn'][$i];
        }
    }

    if($result_sn>$result_sn_2)
    {
        if(date('Y-m-d') != date('Y-m-d',$row['logistics_time']))
        {
            $var=sprintf("%04d", 1);
            return 'wl'.date('Ymd') .$var;
        }else
        {
            $result=$result_sn+1;
            return 'wl'.$result;
        }

    }
    elseif($result_sn<$result_sn_2)
    {
        if (date('Y-m-d') != date('Y-m-d',$row2['rx_logistics_time'])) {
            // echo 'y';
            $var=sprintf("%04d", 1);
            return 'wl'.date('Ymd') .$var;
        }
        else
        {
            $result=$result_sn_2+1;
            return 'wl'.$result;
        }

    }
    elseif(empty($row2['rx_logistics_sn'])&&empty($row['logistics_sn']))
    {
        $var=sprintf("%04d", 1);
        return 'wl'.date('Ymd') .$var;
    }



}

/**
 * 取得回收信息信息
 * @param   int     $order_id   订单id（如果order_id > 0 就按id查，否则按sn查）
 * @param   string  $order_sn   订单号
 * @return  array   订单信息（金额都有相应格式化的字段，前缀是formated_）
 */
function recovery_info($recovery_id, $recovery_sn = '')
{

    $recovery_id = intval($recovery_id);
    if ($recovery_id > 0)
    {
        $sql = "SELECT * " .
            " FROM " . $GLOBALS['ecs']->table('$recovery') .
            " WHERE recovery_id = '$recovery_id'";
    }
    else
    {
        $sql = "SELECT * " .
            "  FROM " . $GLOBALS['ecs']->table('$recovery') .
            " WHERE recovery_sn = '$recovery_sn'";
    }
    $recovery = $GLOBALS['db']->getRow($sql);

    /* 格式化日期字段 */
    if ($recovery)
    {
        $recovery['recovery_credate']       = local_date( $recovery['recovery_credate']);

    }

    return $recovery;
}

