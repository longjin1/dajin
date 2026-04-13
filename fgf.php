<?php
// 页面基础配置
$pageTitle = "精美PHP首页";
$copyright = "© 2025 精美PHP页面 版权所有";
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <!-- 引入图标库 -->
    <link rel="stylesheet" href="https://cdn.bootcdn.net/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Microsoft YaHei", sans-serif;
        }

        /* 颜色变量 */
        :root {
            --primary: #4361ee;
            --secondary: #3f37c9;
            --light: #f8f9fa;
            --dark: #212529;
            --gray: #6c757d;
        }

        body {
            background-color: #f5f7ff;
            color: var(--dark);
            line-height: 1.6;
        }

        /* 导航栏 */
        .navbar {
            background: #fff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 1rem 5%;
            position: sticky;
            top: 0;
            z-index: 999;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--primary);
        }

        .nav-menu a {
            margin: 0 15px;
            text-decoration: none;
            color: var(--dark);
            font-weight: 500;
            transition: 0.3s;
        }

        .nav-menu a:hover {
            color: var(--primary);
        }

        /* Banner 区域 */
        .banner {
            background: linear-gradient(135deg, #4361ee, #3a0ca3);
            color: white;
            padding: 80px 5%;
            text-align: center;
        }

        .banner h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .banner p {
            font-size: 1.1rem;
            max-width: 700px;
            margin: 0 auto 30px;
        }

        .btn {
            display: inline-block;
            padding: 12px 30px;
            background: white;
            color: var(--primary);
            border-radius: 50px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        /* 卡片区域 */
        .container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 0 20px;
        }

        .section-title {
            text-align: center;
            margin-bottom: 40px;
            font-size: 2rem;
            color: var(--dark);
        }

        .card-box {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: 0.3s;
            text-align: center;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        .card i {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 20px;
        }

        .card h3 {
            margin-bottom: 15px;
            font-size: 1.3rem;
        }

        .card p {
            color: var(--gray);
        }

        /* 底部 */
        footer {
            background: var(--dark);
            color: white;
            text-align: center;
            padding: 30px 0;
            margin-top: 50px;
        }
    </style>
</head>
<body>

<!-- 导航栏 -->
<div class="navbar">
    <div class="logo">PHP精美页面</div>
    <div class="nav-menu">
        <a href="#">首页</a>
        <a href="#">功能</a>
        <a href="#">关于</a>
        <a href="#">联系</a>
    </div>
</div>

<!-- Banner -->
<div class="banner">
    <h1>欢迎使用精美PHP页面</h1>
    <p>现代化界面设计 + PHP动态功能，简洁、美观、实用，快速搭建你的网站。</p>
    <a href="#" class="btn">开始使用</a>
</div>

<!-- 功能卡片 -->
<div class="container">
    <h2 class="section-title">核心功能</h2>
    <div class="card-box">
        <div class="card">
            <i class="fa-solid fa-code"></i>
            <h3>简洁代码</h3>
            <p>结构清晰，易于修改和扩展，适合新手学习使用。</p>
        </div>
        <div class="card">
            <i class="fa-solid fa-mobile-screen-button"></i>
            <h3>响应式设计</h3>
            <p>电脑、平板、手机自动适配，完美显示效果。</p>
        </div>
        <div class="card">
            <i class="fa-solid fa-palette"></i>
            <h3>美观界面</h3>
            <p>现代渐变 + 卡片设计，视觉体验舒适高级。</p>
        </div>
    </div>
</div>

<!-- 底部 -->
<footer>
    <p><?php echo $copyright; ?></p>
</footer>

</body>
</html>
