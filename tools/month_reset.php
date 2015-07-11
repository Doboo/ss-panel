<?php
/*
 * 清空流量
 */



//日期符合就清零
$sql = "UPDATE shadowsocks.`user` SET money=money-1,transfer_enable=5368709120,u=0,d=0 where user_name='heavenbird";
    $dbc->query($sql);
