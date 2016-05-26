<?php
/**
 * Created by IntelliJ IDEA.
 * User: FlyeQing
 * Date: 2016/5/26
 * Time: 21:47
 */
include_once('connect.php');
$list='';
$query=
    while
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>JQUERY+AJAX+PHP+MYSQL实现的简单增删改查</title>
    <style>
        .demo {
            width: 500px;
            margin: 50px auto;
        }
        .box {
            border: 2px solid #35517c;
            width: 200px;
            margin: 0 auto;

        }

        .box-title {
            font-size: 14px;
            background: #C6D880;
            padding: 5px;
            border-bottom:2px solid #35517c;
        }

        .box-list {
            padding:0 25px;
        }

        .box a {
            text-decoration: none;
            font-size: 12px;
            padding-left:10px;
            color: #0099CC;
        }
    </style>
</head>
<body>
<div class="demo">
    <h2>jQuery+Ajax+PHP+MySQL实现的增删改查</h2>
    <div class="box">
        <div class="box-title">客户类别</div>
        <ul class="box-list" id="list">
            <?php echo $list;?>
            <li>hello</li>
            <li>h</li>
        </ul>
        <p><a id="btn" href="javascript:;">新增一项</a></p>
    </div>
</div>
<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
</body>
</html>
