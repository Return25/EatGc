<?php
$link = new mysqli('localhost','Return','27wc5hi2hg2DGew','fuckzgc16972NM');
mysqli_set_charset($link, 'utf8');
if ($link->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
$ranking = "zgc_rank";//排行榜表名