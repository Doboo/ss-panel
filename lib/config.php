<?php
/*
 * ss-panel配置文件
 * https://github.com/orvice/ss-panel
 * Author @orvice
 * https://orvice.org
 */

//Define DB Connection
define('DB_HOST','104.225.252.30');
define('DB_USER','tuanss');
define('DB_PWD','guoke');
define('DB_DBNAME','guoke');
define('DB_CHARSET','utf8');

/*
 * 下面别修改
 */

//Define system Path
define('SS_PATH','');

//Version
$version   ="0.2.8";

//set timezone
date_default_timezone_set('PRC');

//Using Mysqli
$dbc = new mysqli(DB_HOST,DB_USER,DB_PWD,DB_DBNAME);
$db_char = DB_CHARSET;
$dbc->query("SET NAMES utf8");
$dbc->query("SET time_zone = '+8:00'");

//定义流量
$tomb = 1024*1024;
$togb = $tomb*1024;



/*
 * 下面的东西根据需求修改
 */

//define Plan
//注册用户的初始化流量
//默认2GiB
$a_transfer = $togb*50;

//签到设置 签到活的的最低最高流量,单位MB
$check_min = 1;
$check_max = 1;

//name
$site_name = "过客SS";

//invite only
$invite_only = true;
