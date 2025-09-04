<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>时代峰峻 TF Family - 中国领先的偶像培养平台</title>
    <meta name="description" content="时代峰峻官方网站 - 中国领先的青少年偶像培养机构，旗下拥有TFBOYS、时代少年团等知名艺人组合">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="时代峰峻.webp" type="image/x-icon">
    <style>
        :root {
            --primary-color: #FF9800; /* 橙黄色主色调 */
            --primary-dark: #F57C00;
            --primary-light: #FFB74D;
            --secondary-color: #1a1a1a;
            --light-bg: #f8f9fa;
            --dark-text: #262626;
            --light-text: #f8f9fa;
            --gray-text: #8c8c8c;
            --section-padding: 100px 0;
            --transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
            --box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            --box-shadow-hover: 0 8px 30px rgba(0, 0, 0, 0.12);
            --border-radius: 12px;
            --gradient: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
        }
        
        body {
            font-family: 'PingFang SC', 'Microsoft YaHei', 'Segoe UI', sans-serif;
            color: var(--dark-text);
            line-height: 1.8;
            overflow-x: hidden;
            background-color: var(--light-bg);
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        
        /* Typography */
        h1, h2, h3, h4, h5, h6 {
            font-weight: 700;
            line-height: 1.3;
            margin-bottom: 1.2rem;
        }
        
        p {
            margin-bottom: 1.5rem;
            font-size: 1.05rem;
        }
        
        /* Navigation */
        .navbar {
            background-color: white;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.08);
            padding: 20px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            transition: var(--transition);
        }
        
        .navbar.scrolled {
            padding: 12px 0;
            box-shadow: 0 4px 25px rgba(0, 0, 0, 0.12);
        }
        
        .navbar-brand img {
            height: 50px;
            transition: var(--transition);
        }
        
        .navbar.scrolled .navbar-brand img {
            height: 42px;
        }
        
        .nav-link {
            color: var(--dark-text);
            font-weight: 600;
            margin: 0 12px;
            position: relative;
            transition: var(--transition);
            font-size: 1.05rem;
            padding: 8px 0;
        }
        
        .nav-link:after {
            content: '';
            position: absolute;
            width: 0;
            height: 3px;
            background: var(--primary-color);
            bottom: 0;
            left: 0;
            transition: var(--transition);
            border-radius: 3px;
        }
        
        .nav-link:hover, .nav-link.active {
            color: var(--primary-color);
        }
        
        .nav-link:hover:after, .nav-link.active:after {
            width: 100%;
        }
        
        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.65)), url('https://via.placeholder.com/1920x1080') center/cover no-repeat;
            height: 85vh;
            min-height: 600px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            position: relative;
            margin-bottom: 60px;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100px;
            background: linear-gradient(to top, var(--light-bg), transparent);
            z-index: 1;
        }
        
        .hero-content {
            max-width: 900px;
            padding: 0 30px;
            position: relative;
            z-index: 2;
        }
        
        .hero h1 {
            font-size: 4rem;
            font-weight: 800;
            margin-bottom: 25px;
            text-shadow: 2px 4px 8px rgba(0, 0, 0, 0.3);
            letter-spacing: -0.5px;
        }
        
        .hero p {
            font-size: 1.3rem;
            margin-bottom: 35px;
            text-shadow: 1px 2px 4px rgba(0, 0, 0, 0.2);
            opacity: 0.9;
        }
        
        .btn {
            padding: 12px 28px;
            font-weight: 600;
            border-radius: 8px;
            transition: var(--transition);
            letter-spacing: 0.5px;
        }
        
        .btn-primary {
            background: var(--gradient);
            border-color: var(--primary-color);
        }
        
        .btn-primary:hover {
            background: linear-gradient(135deg, var(--primary-dark), #E65100);
            border-color: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(255, 152, 0, 0.4);
        }
        
        .btn-outline-light:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(255, 255, 255, 0.2);
        }
        
        /* Sections */
        .section {
            padding: var(--section-padding);
            position: relative;
        }
        
        .section-title {
            font-size: 2.8rem;
            font-weight: 800;
            margin-bottom: 60px;
            position: relative;
            text-align: center;
            color: var(--secondary-color);
            letter-spacing: -0.5px;
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            width: 100px;
            height: 5px;
            background: var(--gradient);
            bottom: -20px;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 3px;
        }
        
        .section-subtitle {
            color: var(--gray-text);
            text-align: center;
            margin-bottom: 50px;
            font-size: 1.15rem;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .bg-light {
            background-color: #f5f7fa !important;
        }
        
        /* Content Boxes */
        .content-box {
            background: white;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            padding: 35px;
            margin-bottom: 30px;
            transition: var(--transition);
            height: 100%;
            border: 1px solid rgba(0, 0, 0, 0.03);
            position: relative;
            overflow: hidden;
        }
        
        .content-box:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background: var(--gradient);
            transition: var(--transition);
        }
        
        .content-box:hover {
            transform: translateY(-8px);
            box-shadow: var(--box-shadow-hover);
        }
        
        .content-box:hover:before {
            width: 8px;
        }
        
        .content-box h3 {
            color: var(--primary-dark);
            margin-bottom: 25px;
            font-weight: 700;
            font-size: 1.6rem;
        }
        
        .highlight-box {
            background-color: rgba(255, 152, 0, 0.08);
            border-left: 4px solid var(--primary-color);
            padding: 25px;
            margin: 25px 0;
            border-radius: 0 var(--border-radius) var(--border-radius) 0;
        }
        
        .highlight-box h4 {
            color: var(--primary-dark);
            margin-bottom: 15px;
        }
        
        /* Artist Cards */
        .artist-card {
            border: none;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--box-shadow);
            transition: var(--transition);
            margin-bottom: 30px;
            height: 100%;
            background: white;
            position: relative;
        }
        
        .artist-card:hover {
            transform: translateY(-12px);
            box-shadow: var(--box-shadow-hover);
        }
        
        .artist-card .card-img-top {
            height: 320px;
            object-fit: cover;
            transition: var(--transition);
        }
        
        .artist-card:hover .card-img-top {
            transform: scale(1.08);
        }
        
        .artist-card .card-body {
            padding: 30px;
        }
        
        .artist-card .card-title {
            font-weight: 800;
            color: var(--secondary-color);
            margin-bottom: 18px;
            font-size: 1.5rem;
        }
        
        .artist-card .card-text {
            color: var(--gray-text);
            margin-bottom: 25px;
        }
        
        .artist-card .btn {
            background: var(--gradient);
            border: none;
        }
        
        .artist-card .btn:hover {
            background: linear-gradient(135deg, var(--primary-dark), #E65100);
        }
        
        /* Footer */
        footer {
            background-color: var(--secondary-color);
            color: white;
            padding: 80px 0 40px;
            position: relative;
        }
        
        footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: var(--gradient);
        }
        
        .footer-logo {
            height: 65px;
            margin-bottom: 25px;
            transition: var(--transition);
        }
        
        .footer-logo:hover {
            opacity: 0.9;
        }
        
        .footer-title {
            font-size: 1.6rem;
            margin-bottom: 30px;
            position: relative;
            padding-bottom: 15px;
            font-weight: 700;
        }
        
        .footer-title:after {
            content: '';
            position: absolute;
            width: 60px;
            height: 3px;
            background: var(--gradient);
            bottom: 0;
            left: 0;
            border-radius: 3px;
        }
        
        .footer-links a {
            color: rgba(255, 255, 255, 0.75);
            display: block;
            margin-bottom: 12px;
            transition: var(--transition);
            text-decoration: none;
            font-size: 1.05rem;
        }
        
        .footer-links a:hover {
            color: var(--primary-color);
            padding-left: 8px;
        }
        
        .social-icons a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 44px;
            height: 44px;
            background: rgba(255, 255, 255, 0.08);
            color: white;
            border-radius: 50%;
            text-align: center;
            margin-right: 12px;
            transition: var(--transition);
            font-size: 1.2rem;
        }
        
        .social-icons a:hover {
            background: var(--gradient);
            transform: translateY(-5px);
        }
        
        .copyright {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 25px;
            margin-top: 50px;
            text-align: center;
            font-size: 0.95rem;
            color: rgba(255, 255, 255, 0.5);
        }
        
        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        
        .animate {
            animation: fadeInUp 1s cubic-bezier(0.22, 0.61, 0.36, 1) forwards;
            opacity: 0;
        }
        
        .delay-1 {
            animation-delay: 0.2s;
        }
        
        .delay-2 {
            animation-delay: 0.4s;
        }
        
        .delay-3 {
            animation-delay: 0.6s;
        }
        
        /* 新增装饰元素 */
        .decoration {
            position: absolute;
            z-index: 0;
            pointer-events: none;
        }
        
        .circle-decoration {
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: rgba(255, 152, 0, 0.05);
            position: absolute;
            top: -150px;
            right: -150px;
        }
        
        /* 页眉装饰 */
        .header-decoration {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 0;
        }
        
        .header-decoration .shape {
            position: absolute;
            opacity: 0.1;
        }
        
        .header-decoration .shape-1 {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: var(--primary-light);
            top: 10%;
            left: 5%;
        }
        
        .header-decoration .shape-2 {
            width: 150px;
            height: 150px;
            border: 10px solid var(--primary-color);
            top: 60%;
            right: 10%;
            transform: rotate(45deg);
        }
        
        /* 响应式设计 */
        @media (max-width: 1200px) {
            .hero h1 {
                font-size: 3.5rem;
            }
            
            .section-title {
                font-size: 2.5rem;
            }
        }
        
        @media (max-width: 992px) {
            .hero {
                height: 70vh;
            }
            
            .hero h1 {
                font-size: 3rem;
            }
            
            .section-title {
                font-size: 2.2rem;
            }
            
            .content-box, .artist-card .card-body {
                padding: 25px;
            }
        }
        
        @media (max-width: 768px) {
            .hero {
                height: 60vh;
                min-height: 500px;
            }
            
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .hero p {
                font-size: 1.1rem;
            }
            
            .section {
                padding: 70px 0;
            }
            
            .section-title {
                font-size: 2rem;
                margin-bottom: 50px;
            }
            
            .artist-card .card-img-top {
                height: 280px;
            }
            
            .header-decoration {
                display: none;
            }
        }
        
        @media (max-width: 576px) {
            .hero {
                height: 55vh;
                min-height: 450px;
            }
            
            .hero h1 {
                font-size: 2rem;
            }
            
            .section-title {
                font-size: 1.8rem;
            }
            
            .btn {
                padding: 10px 20px;
                font-size: 0.95rem;
            }
            
            .footer-logo {
                height: 55px;
            }
        }
        
        /* Utility Classes */
        .text-primary {
            color: var(--primary-color) !important;
        }
        
        .bg-primary {
            background: var(--gradient) !important;
        }
        
        /* 新增特色元素 */
        .stat-box {
            text-align: center;
            padding: 30px;
            border-radius: var(--border-radius);
            background: white;
            box-shadow: var(--box-shadow);
            transition: var(--transition);
        }
        
        .stat-box:hover {
            transform: translateY(-5px);
            box-shadow: var(--box-shadow-hover);
        }
        
        .stat-number {
            font-size: 3rem;
            font-weight: 800;
            color: var(--primary-color);
            margin-bottom: 10px;
        }
        
        .stat-title {
            font-size: 1.2rem;
            color: var(--dark-text);
            font-weight: 600;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">首页</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="TF Family.php">TF家族</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactus.php">关于我们</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="header-decoration">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
        </div>
        <div class="hero-content">
            <h1 class="animate">时代峰峻 TF Family</h1>
            <p class="animate delay-1">中国领先的青少年偶像培养平台</p>
            <div class="animate delay-2">
                <a href="#about" class="btn btn-primary btn-lg px-4 me-2">了解更多</a>
                <a href="#artists" class="btn btn-outline-light btn-lg px-4">旗下艺人</a>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <!-- 已删除统计区块 -->

    <!-- About Section -->
    <section id="about" class="section">
        <div class="container">
            <h2 class="section-title">关于时代峰峻</h2>
            <p class="section-subtitle">THE FIGHTING FAMILY - 用奋斗的态度燃烧青春</p>
            
            <div class="row">
                <div class="col-lg-6 mb-4 animate">
                    <div class="content-box">
                        <h3>公司简介</h3>
                        <p>北京时代峰峻文化艺术发展有限公司（Time Fengjun Entertainment）成立于2009年，公司本部设立在北京，是一家集组织大型文艺演出、艺人培训、艺人经纪为一体的专业文化娱乐传播机构，也是率先采用练习生养成模式进行明星培养的国内经纪娱乐公司。</p>
                        <p>公司从成立之初就开始招募练习生，并着手打造艺人品牌TF家族，现公司旗下所属艺人中拥有当红组合TFBOYS、时代少年团。</p>
                    </div>
                </div>
                
                <div class="col-lg-6 mb-4 animate delay-1">
                    <div class="content-box">
                        <h3>发展历程</h3>
                        <p>2013年，公司通过网络新媒体成功推出国内第一支青少年偶像组合TFBOYS，跻身国内当红偶像组合之列，成功开创了国内网络造星的新纪元。</p>
                        <p>2019年推出旗下第二代少年男团-TNT时代少年团，正火力全开，占领娱乐市场。2018年8月29日，时代峰峻正式启动三代练习生养成项目-少年进化/TF-TransFrom计划。</p>
                    </div>
                </div>
                
                <div class="col-12 mb-4 animate delay-2">
                    <div class="highlight-box">
                        <h4>练习生培养体系</h4>
                        <p>时代峰峻在运营TF家族架构方面分为练习生艺能培训机构和艺人运营机构两大主体，独立运作又相辅相成。</p>
                    </div>
                </div>
                
                <div class="col-lg-6 mb-4 animate">
                    <div class="content-box">
                        <h3>艺能培训机构</h3>
                        <p>主要品牌为TF家族。通过全国范围内报名选拔合格者，针对8-12岁的男生进行全方位练习生艺能培训，培训费用全部由公司承担。艺能培训不仅包括舞蹈、声乐、表演、主持等方面，还要确保练习生在出道之后能够熟练掌握各种演艺技能，从而在职业生涯中取得优异成就。</p>
                    </div>
                </div>
                
                <div class="col-lg-6 mb-4 animate delay-1">
                    <div class="content-box">
                        <h3>艺人运营机构</h3>
                        <p>艺人策划、整体包装及宣传推广构成了艺人运营机构。机构由深谙日韩偶像运营模式及国内娱乐圈形势的精英团队组成，从未出道时便对旗下练习生进行包装宣传，参与自制节目及网络短剧的录制，保证稳定曝光率，累积经验，或组成组合或个人发展出道，使练习生出道之后更加顺利和成功。</p>
                    </div>
                </div>
                
                <div class="col-12 animate delay-2">
                    <div class="content-box">
                        <h3>家族文化与理念</h3>
                        <p><strong>家族文化：</strong>给中国有梦想、热爱娱乐文化并有潜质的青少年一个良好发展的平台，借助TF家族的培养机制及推广策略为年轻一代打造其明星之路；给中国娱乐圈注入非凡的鲜活之血，用青少年偶像的概念引导年轻一代的人生观，用积极向上正能量的态度为青少年树立榜样。</p>
                        <p><strong>家族理念：</strong>用THE FIGHTING的态度燃烧THE FIGHTING的青春！用THE FIGHTING的青春成就THE FIGHTING的人生！</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Artists Section -->
    <section id="artists" class="section bg-light">
        <div class="container">
            <h2 class="section-title">时代峰峻旗下艺人</h2>
            <p class="section-subtitle">探索我们的明星阵容</p>
            
            <div class="row">
                <div class="col-md-4 animate">
                    <div class="artist-card">
                        <img src="TFB.jpg" class="card-img-top" alt="TFBOYS">
                        <div class="card-body">
                            <h5 class="card-title">TFBOYS</h5>
                            <p class="card-text">中国内地男子演唱组合，由王俊凯、王源、易烊千玺三位成员组成。</p>
                            <a href="TFBoys.php" class="btn btn-primary">了解更多</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 animate delay-1">
                    <div class="artist-card">
                        <img src="tnt.jpg" class="card-img-top" alt="时代少年团">
                        <div class="card-body">
                            <h5 class="card-title">时代少年团</h5>
                            <p class="card-text">中国内地男子演唱组合，由马嘉祺、丁程鑫、宋亚轩、刘耀文、张真源、严浩翔、贺峻霖七人组成。</p>
                            <a href="TNT.php" class="btn btn-primary">了解更多</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 animate delay-2">
                    <div class="artist-card">
                        <img src="D1.jpg" class="card-img-top" alt="登陆计划">
                        <div class="card-body">
                            <h5 class="card-title">登陆计划</h5>
                            <p class="card-text">TF家族三代练习生培养计划，致力于打造新一代偶像团体。</p>
                            <a href="LD.php" class="btn btn-primary">了解更多</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 animate">
                    <div class="artist-card">
                        <img src="dd.jpg" class="card-img-top" alt="登陆少年">
                        <div class="card-body">
                            <h5 class="card-title">登陆少年</h5>
                            <p class="card-text">TF家族四代练习生培养计划，新生代偶像的摇篮。</p>
                            <a href="sn.php" class="btn btn-primary">了解更多</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 animate delay-1">
                    <div class="artist-card">
                        <img src="family.jpg" class="card-img-top" alt="TF家族">
                        <div class="card-body">
                            <h5 class="card-title">TF家族</h5>
                            <p class="card-text">时代峰峻旗下练习生培养品牌，培养未来之星的摇篮。</p>
                            <a href="TF.php" class="btn btn-primary">了解更多</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <img src="时代峰峻.webp" alt="时代峰峻 Logo" class="footer-logo">
                    <p>北京时代峰峻文化艺术发展有限公司是中国领先的青少年偶像培养机构，致力于为有梦想的青少年提供发展平台。</p>
                    <div class="social-icons mt-3">
                        <a href="#"><i class="fab fa-weibo"></i></a>
                        <a href="#"><i class="fab fa-weixin"></i></a>
                        <a href="#"><i class="fab fa-bilibili"></i></a>
                        <a href="#"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5 class="footer-title">快速链接</h5>
                    <div class="footer-links">
                        <a href="index.php">首页</a>
                        <a href="TF Family.php">TF家族</a>
                        <a href="contactus.php">关于我们</a>
                        <a href="#">新闻动态</a>
                        <a href="#">艺人行程</a>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="footer-title">官方微博</h5>
                    <div class="footer-links">
                        <a href="https://weibo.com/tfentertainment">峰峻文化官方微博</a>
                        <a href="https://weibo.com/u/3899740210">TF家族官方微博</a>
                        <a href="https://weibo.com/tfent">TFBOYS组合微博</a>
                        <a href="https://weibo.com/u/6620842908">时代少年团微博</a>
                    </div>
                </div>
                
                <div class="col-lg-3 mb-4">
                    <h5 class="footer-title">联系我们</h5>
                    <div class="footer-links">
                        <a href="#"><i class="fas fa-map-marker-alt me-2"></i> 北京市密云区经济开发区西统路8号</a>
                        <a href="tel:010-84094886"><i class="fas fa-phone me-2"></i> 010-84094886</a>
                        <a href="mailto:info@tf-entertainment.com"><i class="fas fa-envelope me-2"></i> info@tf-entertainment.com</a>
                    </div>
                </div>
            </div>
            
            <div class="copyright">
                <p>北京时代峰峻文化艺术发展有限公司2024© ALL RIGHTS RESERVED. 京ICP备2021009510号-1</p>
                <p>京网文（2021）2560-707号 | 经营许可证编号：京B2-20212814</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Navigation scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
        
        // Scroll animations
        document.addEventListener('DOMContentLoaded', function() {
            const animateElements = document.querySelectorAll('.animate');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = 1;
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, { threshold: 0.1 });
            
            animateElements.forEach(el => {
                el.style.opacity = 0;
                el.style.transform = 'translateY(30px)';
                el.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
                observer.observe(el);
            });
        });
    </script>
</body>
</html>