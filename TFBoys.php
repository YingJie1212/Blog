<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TFBOYS - 时代峰峻</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        :root {
            --primary-color: #FF9500;
            --primary-dark: #E67E22;
            --primary-light: #FFB143;
            --primary-extra-light: #FFE0B8;
            --primary-gradient: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            --primary-gradient-light: linear-gradient(135deg, var(--primary-light), var(--primary-color));
            
            --secondary-color: #2C3E50;
            --secondary-light: #34495E;
            
            --light-color: #F8F9FA;
            --dark-color: #2C3E50;
            
            --gray-light: #ECF0F1;
            --gray-medium: #BDC3C7;
            
            --success-color: #27AE60;
            --warning-color: #F39C12;
            --info-color: #3498DB;
            --danger-color: #E74C3C;
            
            --border-radius: 12px;
            --border-radius-sm: 8px;
            
            --box-shadow: 0 5px 20px rgba(230, 126, 34, 0.12);
            --box-shadow-hover: 0 10px 30px rgba(230, 126, 34, 0.2);
            --box-shadow-primary: 0 5px 15px rgba(243, 156, 18, 0.4);
            
            --transition: all 0.3s ease;
            --transition-slow: all 0.5s ease;
            --transition-fast: all 0.15s ease;
            
            --section-padding: 80px 0;
            --section-padding-sm: 60px 0;
            
            --font-family-primary: 'Helvetica Neue', Arial, 'PingFang SC', 'Microsoft YaHei', sans-serif;
            --font-weight-light: 300;
            --font-weight-normal: 400;
            --font-weight-medium: 500;
            --font-weight-semibold: 600;
            --font-weight-bold: 700;
            
            --line-height-normal: 1.7;
            --line-height-tight: 1.3;
        }
        
        /* CSS Reset */
        *, *::before, *::after {
            box-sizing: border-box;
        }
        
        * {
            margin: 0;
            padding: 0;
        }
        
        html, body {
            height: 100%;
        }
        
        body {
            line-height: var(--line-height-normal);
            -webkit-font-smoothing: antialiased;
        }
        
        img, picture, video, canvas, svg {
            display: block;
            max-width: 100%;
        }
        
        input, button, textarea, select {
            font: inherit;
        }
        
        p, h1, h2, h3, h4, h5, h6 {
            overflow-wrap: break-word;
        }
        
        /* 基础样式 */
        body {
            background-color: var(--light-color);
            color: var(--dark-color);
            font-family: var(--font-family-primary);
            font-weight: var(--font-weight-normal);
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        
        /* 布局容器 */
        .container-custom {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            width: 100%;
        }
        
        /* 头部导航样式 */
        #header {
            background-color: rgba(255, 255, 255, 0.98);
            padding: 16px 0;
            box-shadow: var(--box-shadow);
            position: sticky;
            top: 0;
            z-index: 1000;
            width: 100%;
            backdrop-filter: blur(8px);
            border-bottom: 1px solid var(--primary-extra-light);
        }
        
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .brand {
            display: flex;
            align-items: center;
            gap: 15px;
            text-decoration: none;
        }
        
        .brand-text {
            font-size: 1.5rem;
            font-weight: var(--font-weight-bold);
            color: var(--primary-color);
            letter-spacing: 0.5px;
        }
        
        #navbar {
            display: flex;
            list-style: none;
            gap: 40px;
            margin: 0;
        }
        
        #navbar li a {
            text-decoration: none;
            color: var(--secondary-color);
            font-weight: var(--font-weight-semibold);
            font-size: 16px;
            padding: 8px 0;
            transition: var(--transition);
            position: relative;
            letter-spacing: 0.5px;
        }
        
        #navbar li a:hover,
        #navbar li a.active {
            color: var(--primary-color);
        }
        
        #navbar li a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary-gradient);
            transition: var(--transition);
            border-radius: 2px;
        }
        
        #navbar li a:hover::after,
        #navbar li a.active::after {
            width: 100%;
        }
        
        /* 主要内容区域 */
        .main-content {
            flex: 1;
            padding: var(--section-padding);
        }
        
        .section-title {
            text-align: center;
            font-size: 2.8rem;
            margin-bottom: 60px;
            color: var(--secondary-color);
            position: relative;
            padding-bottom: 20px;
            font-weight: var(--font-weight-bold);
            line-height: var(--line-height-tight);
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: var(--primary-gradient);
            border-radius: 2px;
        }
        
        .section-subtitle {
            text-align: center;
            font-size: 1.2rem;
            color: #6c757d;
            max-width: 700px;
            margin: 0 auto 50px;
            line-height: var(--line-height-normal);
        }
        
        /* 内容容器 */
        .content-container {
            text-align: center;
            padding: 40px;
            border-radius: var(--border-radius);
            max-width: 1000px;
            margin: 0 auto;
            background-color: #fff;
            box-shadow: var(--box-shadow);
            border: 1px solid var(--primary-extra-light);
        }
        
        .content-title {
            font-size: 2.5rem;
            color: var(--secondary-color);
            margin-bottom: 15px;
        }
        
        .content-subtitle {
            color: var(--gray-medium);
            margin-bottom: 40px;
            font-size: 1.2rem;
        }
        
        /* 成员按钮样式 */
        .member-grid {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
            margin: 40px 0;
        }
        
        .member-btn {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-decoration: none;
            transition: var(--transition);
            border: 2px solid var(--primary-light);
            border-radius: var(--border-radius);
            padding: 15px;
            background: #fff;
            width: 220px;
        }
        
        .member-btn:hover {
            transform: translateY(-8px);
            box-shadow: var(--box-shadow-hover);
            border-color: var(--primary-color);
        }
        
        .member-img {
            width: 180px;
            height: 180px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 15px;
            border: 3px solid var(--primary-extra-light);
        }
        
        .member-name {
            font-size: 1.4rem;
            font-weight: var(--font-weight-semibold);
            color: var(--secondary-color);
            margin-bottom: 5px;
        }
        
        .member-desc {
            color: var(--gray-medium);
            font-size: 1rem;
        }
        
        /* 页脚样式 */
        footer {
            background: var(--secondary-color);
            color: #fff;
            padding: 60px 0 30px;
            margin-top: auto;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }
        
        .footer-brand {
            font-size: 1.8rem;
            font-weight: var(--font-weight-bold);
            color: var(--primary-color);
            margin-bottom: 15px;
            display: block;
        }
        
        .footer-about {
            color: #ccc;
            line-height: var(--line-height-normal);
            margin-bottom: 20px;
        }
        
        .footer-heading {
            font-size: 1.2rem;
            font-weight: var(--font-weight-semibold);
            margin-bottom: 20px;
            color: #fff;
            position: relative;
            padding-bottom: 10px;
        }
        
        .footer-heading::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 2px;
            background: var(--primary-color);
        }
        
        .footer-links {
            list-style: none;
        }
        
        .footer-links li {
            margin-bottom: 12px;
            display: flex;
            align-items: center;
        }
        
        .footer-links i {
            margin-right: 10px;
            color: var(--primary-light);
            width: 16px;
            text-align: center;
        }
        
        .footer-links a {
            color: #ccc;
            text-decoration: none;
            transition: var(--transition);
            display: block;
        }
        
        .footer-links a:hover {
            color: var(--primary-light);
            padding-left: 5px;
        }
        
        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }
        
        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
            border-radius: 50%;
            transition: var(--transition);
        }
        
        .social-links a:hover {
            background: var(--primary-color);
            transform: translateY(-3px);
        }
        
        .copyright {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #999;
            font-size: 0.9rem;
            line-height: var(--line-height-normal);
        }
        
        .copyright a {
            color: var(--primary-light);
            text-decoration: none;
        }
        
        .copyright a:hover {
            text-decoration: underline;
        }
        
        /* 响应式设计 */
        @media (max-width: 1200px) {
            .container-custom {
                padding: 0 30px;
            }
        }
        
        @media (max-width: 992px) {
            .section-title {
                font-size: 2.4rem;
            }
            
            #navbar {
                gap: 25px;
            }
            
            .brand-text {
                font-size: 1.3rem;
            }
            
            .member-grid {
                gap: 20px;
            }
            
            .member-btn {
                width: 200px;
            }
            
            .member-img {
                width: 160px;
                height: 160px;
            }
        }
        
        @media (max-width: 768px) {
            #header {
                padding: 12px 0;
            }
            
            .header-container {
                flex-direction: column;
                gap: 15px;
            }
            
            #navbar {
                gap: 20px;
            }
            
            .section-title {
                font-size: 2rem;
                margin-bottom: 40px;
            }
            
            .section-subtitle {
                font-size: 1.1rem;
                margin-bottom: 40px;
            }
            
            .main-content {
                padding: var(--section-padding-sm);
            }
            
            .content-container {
                padding: 30px 20px;
            }
            
            .content-title {
                font-size: 2rem;
            }
            
            .member-grid {
                flex-direction: column;
                align-items: center;
            }
            
            .member-btn {
                width: 100%;
                max-width: 300px;
                flex-direction: row;
                text-align: left;
            }
            
            .member-img {
                width: 80px;
                height: 80px;
                margin-right: 15px;
                margin-bottom: 0;
            }
            
            .footer-content {
                grid-template-columns: 1fr;
                gap: 30px;
            }
        }
        
        @media (max-width: 576px) {
            #navbar {
                flex-direction: column;
                gap: 12px;
                align-items: center;
            }
            
            .section-title {
                font-size: 1.8rem;
                padding-bottom: 15px;
            }
            
            .section-title::after {
                width: 80px;
                height: 3px;
            }
            
            .content-title {
                font-size: 1.8rem;
            }
            
            .member-btn {
                flex-direction: column;
                text-align: center;
            }
            
            .member-img {
                margin-right: 0;
                margin-bottom: 15px;
            }
            
            .brand-text {
                font-size: 1.2rem;
            }
            
            .footer-brand {
                font-size: 1.5rem;
            }
            
            .copyright {
                font-size: 0.8rem;
            }
        }
    </style>
</head>
<body>
    <header id="header">
        <div class="container-custom header-container">
            <a href="index.php" class="brand">
              
            </a>
            
            <ul id="navbar">
                <li><a href="index.php">首页</a></li>
            </ul>
        </div>
    </header>
    
    <main class="main-content">
        <div class="container-custom">
            <div class="content-container">
                <h1 class="content-title">TFBOYS</h1>
                <p class="content-subtitle">中国内地男子演唱组合，由王俊凯、王源、易烊千玺三位成员组成</p>
                
                <div class="member-grid">
                    <a href="wjk.php" class="member-btn">
                        <img src="W.jpg" class="member-img" alt="王俊凯">
                        <h3 class="member-name">王俊凯</h3>
                        <p class="member-desc">队长、主唱、门面担当</p>
                    </a>
                    
                    <a href="wy.php" class="member-btn">
                        <img src="W1.jpg" class="member-img" alt="王源">
                        <h3 class="member-name">王源</h3>
                        <p class="member-desc">主唱、主持担当</p>
                    </a>
                    
                    <a href="yyqx.php" class="member-btn">
                        <img src="YY.jpg" class="member-img" alt="易烊千玺">
                        <h3 class="member-name">易烊千玺</h3>
                        <p class="member-desc">舞蹈、Rap担当</p>
                    </a>
                </div>
                
                <div class="content-container" style="margin-top: 40px; background-color: var(--primary-extra-light);">
                    <h2 style="color: var(--secondary-color); margin-bottom: 20px;">组合介绍</h2>
                    <p style="line-height: 1.8; color: var(--secondary-color);">
                        TFBOYS是中国内地男子演唱组合，由王俊凯、王源、易烊千玺三位成员组成。
                        2013年8月6日正式出道，同年10月18日发行出道EP《Heart梦·出发》。
                        凭借青春阳光的形象和积极向上的音乐作品，迅速成为中国大陆最具影响力的少年偶像组合。
                    </p>
                </div>
            </div>
        </div>
    </main>
 
    <footer>
        <div class="container-custom">
            <div class="footer-content">
                <div>
                    <span class="footer-brand">时代峰峻</span>
                    <p class="footer-about">北京时代峰峻文化艺术发展有限公司是中国领先的青少年偶像培养机构，致力于为有梦想的青少年提供发展平台。</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-weibo"></i></a>
                        <a href="#"><i class="fab fa-weixin"></i></a>
                        <a href="#"><i class="fab fa-bilibili"></i></a>
                        <a href="#"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
                
                <div>
                    <h4 class="footer-heading">快速链接</h4>
                    <ul class="footer-links">
                        <li><a href="index.php">首页</a></li>
                        <li><a href="TF Family.php">TF家族</a></li>
                        <li><a href="#">新闻动态</a></li>
                        <li><a href="#">艺人行程</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="footer-heading">官方微博</h4>
                    <ul class="footer-links">
                        <li><a href="https://weibo.com/tfentertainment">峰峻文化官方微博</a></li>
                        <li><a href="https://weibo.com/u/3899740210">TF家族官方微博</a></li>
                        <li><a href="https://weibo.com/tfent">TFBOYS组合微博</a></li>
                        <li><a href="https://weibo.com/u/6620842908">时代少年团微博</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="footer-heading">联系我们</h4>
                    <ul class="footer-links">
                        <li><i class="fas fa-map-marker-alt"></i> 北京市密云区经济开发区西统路8号</li>
                        <li><i class="fas fa-phone"></i> 010-84094886</li>
                        <li><i class="fas fa-envelope"></i> info@tf-entertainment.com</li>
                    </ul>
                </div>
            </div>
            
            <div class="copyright">
                <p><a href="https://weibo.com/tfentertainment">峰峻文化官方微博</a> | <a href="https://weibo.com/u/3899740210">TF家族官方微博</a> | <a href="https://weibo.com/tfent">TFBOYS组合官方微博</a> | <a href="https://weibo.com/u/6620842908">时代少年团微博</a></p>
                <p>北京时代峰峻文化艺术发展有限公司2024© ALL RIGHTS RESERVED. 京ICP备2021009510号-1</p>
                <p>京网文（2021）2560-707号 | 经营许可证编号：京B2-20212814</p>
                <p>北京市密云区经济开发区西统路8号西田各庄镇政府办公楼508室-60 010-84094886</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>