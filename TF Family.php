<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>时代峰峻 TF Family - 中国领先偶像经纪公司</title>
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
        
        /* 网格布局 */
        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            width: 100%;
        }
        
        /* 卡片样式 */
        .card {
            background: #fff;
            border-radius: var(--border-radius);
            overflow: hidden;
            transition: var(--transition);
            box-shadow: var(--box-shadow);
            border: none;
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        
        .card:hover {
            transform: translateY(-8px);
            box-shadow: var(--box-shadow-hover);
        }
        
        .card-img-container {
            overflow: hidden;
            position: relative;
            height: 240px;
        }
        
        .card-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }
        
        .card:hover .card-img {
            transform: scale(1.05);
        }
        
        .card-body {
            padding: 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        
        .card-title {
            font-size: 1.4rem;
            font-weight: var(--font-weight-bold);
            margin-bottom: 15px;
            color: var(--secondary-color);
        }
        
        .card-text {
            color: #6c757d;
            margin-bottom: 20px;
            flex-grow: 1;
            line-height: var(--line-height-normal);
        }
        
        .card-btn {
            align-self: flex-start;
            padding: 10px 24px;
            background: var(--primary-gradient);
            color: white;
            border: none;
            border-radius: var(--border-radius-sm);
            font-weight: var(--font-weight-semibold);
            transition: var(--transition);
            text-decoration: none;
            display: inline-block;
            cursor: pointer;
        }
        
        .card-btn:hover {
            background: linear-gradient(135deg, var(--primary-dark), #d35400);
            color: white;
            transform: translateY(-2px);
            box-shadow: var(--box-shadow-primary);
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
        
        /* 实用类 */
        .text-center {
            text-align: center;
        }
        
        .text-primary {
            color: var(--primary-color) !important;
        }
        
        .bg-primary {
            background-color: var(--primary-color) !important;
        }
        
        .mb-30 {
            margin-bottom: 30px;
        }
        
        .mt-30 {
            margin-top: 30px;
        }
        
        .btn-primary {
            background: var(--primary-gradient);
            border: none;
            border-radius: var(--border-radius-sm);
            padding: 12px 28px;
            color: white;
            font-weight: var(--font-weight-semibold);
            transition: var(--transition);
            cursor: pointer;
        }
        
        .btn-primary:hover {
            background: linear-gradient(135deg, var(--primary-dark), #d35400);
            transform: translateY(-2px);
            box-shadow: var(--box-shadow-primary);
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
            
            .grid-container {
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                gap: 25px;
            }
            
            .brand-text {
                font-size: 1.3rem;
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
            
            .card-img-container {
                height: 220px;
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
            
            .grid-container {
                grid-template-columns: 1fr;
                max-width: 400px;
                margin: 0 auto;
            }
            
            .card-body {
                padding: 20px;
            }
            
            .card-title {
                font-size: 1.3rem;
            }
            
            .brand-text {
                font-size: 1.2rem;
            }
            
            .footer-brand {
                font-size: 1.5rem;
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
                <li><a href="index.php" class="active">首页</a></li>
            </ul>
        </div>
    </header>
    
    <main class="main-content">
        <div class="container-custom">
            <h1 class="section-title">时代峰峻旗下艺人</h1>
            <p class="section-subtitle">探索我们优秀的艺人阵容，了解他们的才华与成就</p>
            
            <div class="grid-container">
                <div class="card">
                    <div class="card-img-container">
                        <img src="TFB.jpg" class="card-img" alt="TFBOYS">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">TFBOYS</h3>
                        <p class="card-text">中国内地男子演唱组合，由王俊凯、王源、易烊千玺三位成员组成。2013年正式出道，成为中国大陆最具影响力的少年偶像组合。</p>
                        <a href="TFBoys.php" class="card-btn">了解更多</a>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-img-container">
                        <img src="tnt.jpg" class="card-img" alt="时代少年团">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">时代少年团</h3>
                        <p class="card-text">中国内地男子演唱组合，由马嘉祺、丁程鑫、宋亚轩、刘耀文、张真源、严浩翔、贺峻霖七人组成。2019年正式出道，迅速成为新生代偶像代表。</p>
                        <a href="TNT.php" class="card-btn">了解更多</a>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-img-container">
                        <img src="D1.jpg" class="card-img" alt="登陆计划">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">登陆计划</h3>
                        <p class="card-text">TF家族三代练习生培养计划，致力于打造新一代偶像团体。通过系统培训和专业指导，为年轻练习生提供成长平台。</p>
                        <a href="LD.php" class="card-btn">了解更多</a>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-img-container">
                        <img src="dd.jpg" class="card-img" alt="登陆少年">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">登陆少年</h3>
                        <p class="card-text">TF家族四代练习生培养计划，新生代偶像的摇篮。专注于发掘和培养有潜力的青少年，为他们提供专业的艺术培训。</p>
                        <a href="SN.php" class="card-btn">了解更多</a>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-img-container">
                        <img src="family.jpg" class="card-img" alt="TF家族">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">TF家族</h3>
                        <p class="card-text">时代峰峻旗下练习生培养品牌，培养未来之星的摇篮。提供全方位的艺人培训体系，涵盖声乐、舞蹈、表演等多方面。</p>
                        <a href="TF.php" class="card-btn">了解更多</a>
                    </div>
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
                <p>北京时代峰峻文化艺术发展有限公司2024© ALL RIGHTS RESERVED. 京ICP备2021009510号-1</p>
                <p>京网文（2021）2560-707号 | 经营许可证编号：京B2-20212814</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>