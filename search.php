<?php
if (isset($_GET['query'])) {
    $query = htmlspecialchars($_GET['query']);
    // 处理搜索逻辑，例如查询数据库并显示结果
    echo "你搜索的内容是: " . $query;
}
?>
