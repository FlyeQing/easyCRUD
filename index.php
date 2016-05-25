<?php
include_once('connect.php');
$list = '';
$query = mysql_query("select * from catalist order by cid asc limit 0, 15");
while($row=mysql_fetch_array($query)){
    $list .= "<li rel='".$row['cid']."'><span class='del' title='删除'></span><span class='edit' title='编辑'></span><span class='txt'>".$row['title']."</span></li>";
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
        <title>Jquery+Ajax+PHP+MySQL分类增删改查</title>
        <meta name="keywords" content="PHP分类,增删改查" />
        <meta name="description" content="本文将采用Jquery+Ajax+PHP+MySQL来实现客户分类的管理，操作结果提示用jNotify。" />
        <link rel="stylesheet" type="text/css" href="http://www.sucaihuo.com/jquery/css/common.css" />
        <link rel="stylesheet" type="text/css" href="css/alert.css" />
        <style type="text/css">
            .input{width:160px; padding:2px; border:1px solid #d3d3d3}
            .cur_tr{background:#ffc}
            .selectlist{width:280px; margin:30px auto;  border:1px solid #ccc;}
            .selectlist h3{height:32px; line-height:32px; padding:0 4px; border-bottom:1px dotted #d3d3d3; background:#f7f7f7}
            .selectlist h3 span{float:right; font-weight:500}
            .selectlist ul{margin-top:4px; margin-left:20px; list-style-type: disc}
            .selectlist ul li{line-height:26px}
            .selectlist p{line-height:28px; padding-left:6px}
            .selectlist ul li span{width:20px; height:20px}
            .selectlist ul li span.edit{ float:right;background:url(images/edits.gif) no-repeat 0 5px; cursor:pointer}
            .selectlist ul li span.del,.selectlist ul li span.dels,.selectlist ul li span.cancer{ float:right;background:url(images/del.gif) no-repeat 0 5px; cursor:pointer}
            .selectlist ul li span.ok,.selectlist ul li span.oks{float:right;background:url(images/ok.gif) no-repeat 0 5px; cursor:pointer}
            #jSuccess {position:absolute;background:#E6EFC2  url('images/success.png') no-repeat 15px center;color:#264409;border:1px solid #C6D880; font-weight:bold;padding:10px;padding-left:50px;margin:15px;z-index:9999;}
            #jNotify {position:absolute;background:#d8e6fc url('images/info.png') no-repeat 15px center;color:#35517c;border:1px solid #a7c3f0; font-weight:bold; padding:10px;padding-left:50px;margin:15px;z-index:9999;}

        </style>
    </head>
    <body>
        <div class="container">
            <div class="demo">
                <h2 class="title"><a href="http://www.sucaihuo.com/js/58.html">Jquery+Ajax+PHP+MySQL分类增删改查</a></h2>
                <div class="selectlist">
                    <h3>客户类别</h3>
                    <ul id="catalist">
                        <?php echo $list; ?>
                    </ul>
                    <p><a href="javascript:;" onclick="addOpt()">新增一项</a></p>
                </div>

            </div>
        </div>
        <script type="text/javascript" src="http://www.sucaihuo.com/Public/js/other/jquery.js"></script> 
        <script type="text/javascript" src="js/jNotify.jquery.js"></script>
        <script type="text/javascript" src="js/jquery.alert.js"></script>
        <script type="text/javascript" src="js/global.js"></script>
    </body>
</html>

