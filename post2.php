<?php
include_once('connect.php');
$action = $_POST['action'] ? $_POST['action'] : $_GET['action'];
switch ($action) {
    case 'add':  //新增项
        $title = htmlspecialchars($_POST['title']);
        $query = mysql_query("insert into catalist (cid,title) values (NULL,'$title')");
        if ($query) {
            $insertid = mysql_insert_id($link);
            $arr = array('id' => $insertid, 'title' => $title, 'success' => 1);
        } else {
            $arr = array('success' => 2);
        }
        echo json_encode($arr);
        break;
    case 'del':  //删除项
        $id = $_POST['id'];
        $query = mysql_query("delete from catalist where cid=" . $id);
        if ($query) {
            echo '1';
        } else {
            echo '2';
        }
        break;
    case 'edit':  //编辑项
        $id = $_POST['id'];
        $title = $_POST['title'];
        $query = mysql_query("update catalist set title='$title' where cid='$id'");
        if ($query) {
            echo '1';
        } else {
            echo '2';
        }
        break;
    case '':
        break;
}


?>