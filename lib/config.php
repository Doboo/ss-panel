<?php
/*
 * ss-panel配置文件
 * https://github.com/orvice/ss-panel
 * Author @orvice
 * https://orvice.org
 */

//定义流量
$tokb = 1024;
$tomb = 1024*1024;
$togb = $tomb*1024;
//Define DB Connection  数据库信息
define('DB_HOST','104.233.86.89');
define('DB_USER','tuanss');
define('DB_PWD','38196962');
define('DB_DBNAME','tuanDB');
define('DB_CHARSET','utf8');
define('DB_TYPE','mysql'); 
/*
 * 下面的东西根据需求修改
 */

//define Plan
//注册用户的初始化流量
//默认5GiB
$a_transfer = $togb*50;

//签到设置 签到活的的最低最高流量,单位MB
$check_min = 1;
$check_max = 1;

//name
$site_name = "mysitename";
$site_url  = "http://000000.tuanss.xyz:8080";
$salt = "tuanss";

//用户注册后获得的邀请码最低最高
//都设置为0用户就不能邀请
$user_invite_min = '0';
$user_invite_max = '0';


//
//选择邮件服务
// smtp未完成，现在只能用mailgun
//mail-gun
//mail-smtp
$Selectmailservice = "mail-gun";
//邮件发件人
$sender = "zhangxinqi2013@gmail.com";

//mail-gun
// Get your key from https://mailgun.com
$mailgun_key = "key-500c584f7b916adfa4ac3f49d61b9ac7";
$mailgun_domain = "guoke.tuanss.xyz";


//
//mail-smtp
// smtp发件方式暂时无法使用
//设置smtp服务器连接方式:  
//加密连接(ssl) = "1"
//普通连接 = "0"
$mail_smtp_Connection = "1";
//smtp服务器端口 25 , 465 ...
$mail_smtp_Port = 465;
//smtp服务器
$mail_smtp_Server = "smtp.gmail.com";
//邮件帐号
$mail_smtp_Account = "zhangxinqi2013@gmail.com";
//邮件密码
$mail_smtp_password = "guokeguoke";



//
require_once 'do.php';
