<?php
/**
 * Created by IntelliJ IDEA.
 * User: FlyeQing
 * Date: 2016/5/26
 * Time: 21:47
 */
error_reporting(E_ERROR);
$host="localhost";
$db_user="root";
$db_pass="123456";
$db_name="t2";

$link=mysql_connect($host,$db_user,$db_pass);
mysql_select_db($db_name,$link);
mysql_query("SET names UTF8");

header("Content-Type: text/html; charset=utf-8");
?>
