<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<style>
    /* 基本的全局样式 */
body {
    margin: 0;
    font-family: Arial, sans-serif;
}

/* 头部样式 */
#header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
    background-color: #333; /* 你可以调整背景颜色 */
    color: #fff;
}

/* Logo 样式 */
#header .logo {
    display: block;
    max-height: 50px; /* 限制 logo 的最大高度 */
}

/* 导航样式 */
nav {
    flex-grow: 1;
}

/* 导航菜单样式 */
#navbar {
    list-style-type: none;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: flex-end;
}

#navbar li {
    margin-left: 20px;
}

#navbar a {
    text-decoration: none;
    color: #fff;
    font-size: 16px;
}

#navbar a:hover {
    color: #f0f0f0; /* 鼠标悬停时的颜色 */
}

</style>
</body>
</html>