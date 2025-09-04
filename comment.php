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
    <section id="header">
        <a href=""><img src="时代峰峻.webp" width="150px" class="logo" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a href="index.php">Home首页</a></li>
                <li><a href="TF Family.php">TF家族 TF Family</a></li>
                <li><a href="contactus.php">关于我们 About Us</a></li>
                <li><a href="comment.php">给艺人留言</a></li>

            </ul>
        </div>
    </section>

    

</body>
</html>

<style>
    
</style>
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

<style>
    .btn {
        transition: transform 0.3s ease; /* 添加按钮缩放效果 */
    }

    .btn:hover {
        transform: scale(1.1); /* 悬停时放大按钮 */
    }

    body {
            font-family: Arial, sans-serif;
            color: #333;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            width: 80%;
            max-width: 900px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .container h1 {
            font-size: 32px;
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        .container p {
            font-size: 16px;
            color: #555;
            margin-bottom: 20px;
            text-align: justify;
        }

        .container p strong {
            font-size: 18px;
            color: #000;
            display: block;
            margin-bottom: 10px;
        }

        .container .highlight {
            background-color: #fef9e7;
            padding: 10px;
            border-left: 4px solid #f39c12;
            margin-bottom: 20px;
        }

        .container .section-title {
            font-size: 20px;
            color: #e74c3c;
            border-bottom: 2px solid #e74c3c;
            padding-bottom: 5px;
            margin-bottom: 15px;
        }

        
</style>

<style>
        .button-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            padding: 20px;
        }

        .button-container .btn {
            width: 250px;
            height: 300px;
            border-radius: 10px;
            border: 2px solid #f39c12;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            color: #333;
            background-color: #fff;
        }

        .button-container .btn img {
            width: 80%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .button-container .btn:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            background-color: #f8f9fa;
        }

        .button-container .btn:focus {
            box-shadow: 0 0 0 2px #f39c12;
            outline: none;
        }

        .button-container .btn span {
            font-weight: bold;
            font-size: 18px;
            margin-top: 10px;
        }

        .section-title {
            text-align: center;
            font-size: 28px;
            margin: 20px 0;
            color: #333;
        }

        footer {
    background-color: #f1f1f1;
    padding: 20px;
    border-top: 1px solid #ddd;
}

/* 表单样式 */
#contact-form {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

#contact-form .form-label {
    font-weight: bold;
}

#contact-form .form-control {
    margin-bottom: 15px;
    border-radius: 4px;
    border: 1px solid #ccc;
    padding: 10px;
}

#contact-form .btn {
    margin-top: 10px;
}


    </style>
 
 <div class="container">
    <h1 class="section-title"><strong>给艺人留言</strong></h1>
    <form id="contact-form" action="submit_form.php" method="post">
        <div class="mb-3">
            <label for="name" class="form-label">姓名</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">邮箱</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="artist" class="form-label">选择艺人</label>
            <select class="form-control" id="artist" name="artist" required>
                <option value="">请选择艺人</option>
                <option value="TFBOYS">TFBOYS</option>
                <option value="TNT">时代少年团</option>
                <option value="LD">登陆计划</option>
                <option value="TF Family">TF家族</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">留言</label>
            <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-outline-warning">提交留言</button>
    </form>
</div>

    



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