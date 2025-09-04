<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home首页</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">

    <link rel="shortcut icon" href="时代峰峻.webp" type="image/x-icon">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<style>
     body {
            background-color: #f8f9fa;
            color: #333;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        #header {
            background-color: #fff;
            padding: 10px 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .logo {
            width: 150px;
            height: auto;
            display: block;
            margin: 0 auto;
        }

        #navbar {
            list-style-type: none;
            padding: 0;
            text-align: center;
        }

        #navbar li {
            display: inline-block;
            margin: 0 10px;
        }

        #navbar li a {
            text-decoration: none;
            color: #333;
            font-size: 16px;
        }

        #navbar li a:hover {
            color: #555;
        }

        .button-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
            flex-wrap: wrap; /* 换行显示 */
        }

        .button-container .btn {
            width: 300px; /* 按钮宽度 */
            height: 390px; /* 按钮高度 */
            border-radius: 10px; /* 按钮圆角 */
            font-size: 18px; /* 按钮字体大小 */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            transition: transform 0.3s ease; /* 添加按钮缩放效果 */
        }

        .button-container .btn img {
            max-width: 100%; /* 图片宽度最大为按钮宽度 */
            height: auto; /* 图片高度自适应 */
            margin-bottom: 10px; /* 图片下方间距 */
        }

        @media (max-width: 768px) {
            .button-container .btn {
                width: 45%; /* 按钮宽度调整 */
                height: 200px; /* 按钮高度 */
                margin-bottom: 20px; /* 按钮间距 */
            }
        }

        .btn:hover {
            transform: scale(1.1); /* 悬停时放大按钮 */
        }

        .person-info {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            max-width: 1000px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .person-info img {
            width: 300px;
            height: 280px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .person-info p {
            font-size: 16px;
            color: #666;
            line-height: 1.6;
            text-align: center;
        }

        footer {
            background-color: #f8f9fa;
            text-align: center;
            padding: 20px;
            margin-top: 20px;
        }

        footer p {
            font-size: 12px;
            color: #666;
            margin: 5px 0;
        }

        footer a {
            text-decoration: none;
            color: #666;
        }

        footer a:hover {
            color: #333;
        }

        .section-title {
            text-align: center;
            font-size: 32px;
            margin-bottom: 30px;
            color: #333;
        }

        
    </style>
    <section id="header">
        <a href=""><img src="时代峰峻.webp" width="150px" class="logo" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a href="index.php">Home首页</a></li>
                <li><a href="TF Family.php">TF家族 TF Family</a></li>
                <li><a href="contactus.php">关于我们 About Us</a></li>

            </ul>
        </div>
    </section>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 获取表单数据
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // 验证数据
    if (empty($name) || empty($email) || empty($message)) {
        echo "<h2>错误</h2>";
        echo "<p>所有字段都是必填的。</p>";
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<h2>错误</h2>";
        echo "<p>无效的电子邮箱地址。</p>";
        exit();
    }
    
    // 处理数据（如保存到数据库或发送邮件）
    // 邮件发送（示例，实际使用时请根据实际情况修改）
    $to = "your-email@example.com"; // 收件人邮箱地址
    $subject = "新留言来自 $name";
    $email_body = "姓名: $name\n";
    $email_body .= "电子邮箱: $email\n";
    $email_body .= "留言内容:\n$message\n";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    if (mail($to, $subject, $email_body, $headers)) {
        echo "<h2>感谢您的留言！</h2>";
        echo "<p>您的留言已经发送，我们会尽快回复您。</p>";
    } else {
        echo "<h2>发送失败</h2>";
        echo "<p>您的留言未能发送，请稍后再试。</p>";
    }
} else {
    // 非 POST 请求，跳转到首页或显示错误信息
    header("Location: index.php");
    exit();
}
?>



    <br><br><br><br><br><br>
    <footer class="footer-content">
        <div class="copyright">
            <p style="font-size: 80%; color:black;">
                <a href="https://weibo.com/tfentertainment?is_hot=1">峰峻文化官方微博 |</a>
                <a href="https://weibo.com/u/3899740210?topnav=1&wvr=6">TF家族官方微博 |</a>
                <a href="https://weibo.com/tfent">TFBOYS组合官方微博 |</a>
                <a href="https://weibo.com/u/6620842908?topnav=1&wvr=6&topsug=1">时代少年团微博</a>
            </p>
            <p style="font-size: 60%;">北京时代峰峻文化艺术发展有限公司2024© ALL RIGHTS RESERVED. 京ICP备2021009510号-1</p>
            <p style="font-size: 60%;">京网文（2021）2560-707号</p>
            <p style="font-size: 60%;">经营许可证编号：京B2-20212814</p>
            <p style="font-size: 60%;">北京市密云区经济开发区西统路8号西田各庄镇政府办公楼508室-60 010-84094886</p>
        </div>
    </footer>
    </body>
</html>