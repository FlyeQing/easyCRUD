<?php
/**
 * Created by IntelliJ IDEA.
 * User: FlyeQing
 * Date: 2016/5/26
 * Time: 21:47
 */
include_once('connect.php');
$list = '';
$query = mysql_query("select * from list order by id");
while($row=mysql_fetch_array($query)){
//    var_dump($row);
    $list .= "<li rel='".$row['id']."'><span class='txt'>".$row['title']."</span><span class='edit' title='编辑'></span><span class='del' title='删除'></span></li>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>JQUERY+AJAX+PHP+MYSQL实现的简单增删改查</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="demo">
    <h2>jQuery+Ajax+PHP+MySQL实现的增删改查</h2>
    <div class="box">
        <div class="box-title">客户类别</div>
        <ul class="box-list" id="list">
            <?php echo $list; ?>
        </ul>
        <p><a id="btn" href="javascript:;">新增一项</a></p>
    </div>
</div>
<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/index.js"></script>
</body>
</html>
