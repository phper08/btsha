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
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PWD','password');
define('DB_DBNAME','ss');
define('DB_CHARSET','utf8');
define('DB_TYPE','mysql'); 
/*
 * 下面的东西根据需求修改
 */

//define Plan
//注册用户的初始化流量
//默认100G
$a_transfer = $togb*100;

//签到设置 签到活的的最低最高流量,单位MB
$check_min = 1;
$check_max = 100;

//name
$site_name = "SS管理系统";
$site_url  = "http://btsha.com/";
/**
 * 站点盐值，用于加密密码
 * 第一次安装请修改此值，安装后请勿修改！！否则会使所有密码失效，仅限加密方式不为1的时候有效
 */
$salt = "SP";
/**
 * 密码加密方式，注意： 2.4以前的版本，请修改加密方式为「1」，否则会使密码失效！
 * 更多说明见wiki https://github.com/orvice/ss-panel/wiki/Install-Guide-zh_cn
 * 加密方式:
 * 1 md5
 * 2 带salt的Sha256加密，新安装建议使用此加密方式！
 */
$pwd_mode = 2;

//用户注册后获得的邀请码最低最高
//都设置为0用户就不能邀请
//设定为1则需要邀请码注册,0则允许直接注册
$user_invite_min = '0';
$user_invite_max = '0';
$user_need_invite = '0';


//选择邮件服务
//mailgun问题太多,被我改成smtp了,设置smtp那个
//mail-gun
//mail-smtp
$Selectmailservice = "mail-smtp";
//邮件发件人
$sender = "";

//mail-gun
// Get your key from https://mailgun.com
$mailgun_key = "key-";
$mailgun_domain = ".mailgun.org";


//
//mail-smtp
//设置smtp服务器连接方式:  
//加密连接(ssl) = "1"
//普通连接 = "0"
$mail_smtp_Connection = "1";
//smtp服务器端口 25 , 465 ...
$mail_smtp_Port = 465;
//smtp服务器
$mail_smtp_Server = "smtp.qq.com";
//邮件帐号
$mail_smtp_Account = "954977564@qq.com";
//邮件密码
$mail_smtp_password = "your email code ";



//
require_once 'do.php';
