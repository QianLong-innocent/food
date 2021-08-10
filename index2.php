<?php
require './view/init.php';
require './view/function.php';

// 获取当前页码
$page = max(input('get', 'page', 'd'), 1);
// 每页显示的条数
$size = 4;

$sql = 'select * from wish' ;
mysqli_select_db( $link, 'food' );
if(!$res = mysqli_query($link,$sql)){
	exit("sql[$sql]执行失败:". mysqli_error($link));
}
$total = (int) mysqli_fetch_row($res)[0];

// 查询所有愿望
$sql = 'SELECT `id`,`name`,`content`,`time`,`color` FROM `wish` ORDER BY `id` DESC LIMIT ' . page_sql($page, $size);
if (!$res = mysqli_query($link, $sql)) {
    exit("SQL[$sql]执行失败：" . mysqli_error($link));
}
$data = mysqli_fetch_all($res, MYSQLI_ASSOC);
mysqli_free_result($res);

// 查询结果为空时，自动返回第1页
if (empty($data) && $page > 1) {
    header('Location: ./index2.php?page=1');
    exit;
}

// 编辑或删除愿望
$id = max(input('get', 'id', 'd'), 0);
$action = input('get', 'action', 's');
if ($id) {
    $password = input('post', 'password', 's');
    $sql = 'SELECT `name`,`content`,`color`,`password` FROM `wish` WHERE `id`=' . $id;
    if (!$res = mysqli_query($link, $sql)) {
        exit("SQL[$sql]执行失败：" . mysqli_error($link) . $sql);
    }
    if (!$edit = mysqli_fetch_assoc($res)) {
        exit('该愿望不存在！');
    }
    mysqli_free_result($res);
    $checked = isset($_POST['password']) || empty($edit['password']);
    if ($checked && $password !== $edit['password']) {
        $tips = '密码不正确！';
        $checked = false;
    }
    // 删除愿望
    if ($checked && $action == 'delete') {
        $sql = 'DELETE FROM `wish` WHERE `id`=' . $id;
        if (!mysqli_query($link, $sql)) {
            exit('SQL执行失败：' . mysqli_error($link));
        }
        header('Location: ./index2.php');
        exit;
    }
}

require './view/index.html';
