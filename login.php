<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            background: linear-gradient(to right, #fff4e6, #ffebcc); /* 淡橙色渐变背景 */
            color: #333;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* 深阴影 */
            padding: 30px;
            max-width: 400px;
            width: 100%;
            margin: 20px;
        }

        h1 {
            font-size: 28px; /* 标题大小 */
            color: #ff9900; /* 橙黄色标题 */
            text-align: center;
            margin-bottom: 30px;
            font-weight: 700; /* 加粗标题 */
        }

        .form-label {
            font-size: 16px;
            color: #555;
        }

        .form-control {
            border-radius: 8px;
            border: 1px solid #ced4da;
            padding: 15px; /* 内边距 */
            transition: border-color 0.3s, box-shadow 0.3s;
            font-size: 16px;
        }

        .form-control:focus {
            border-color: #ff9900; /* 橙黄色边框 */
            box-shadow: 0 0 0 0.2rem rgba(255, 153, 0, 0.25); /* 橙黄色阴影 */
        }

        .btn-primary {
            background-color: #ff9900; /* 橙黄色按钮 */
            border-color: #ff9900;
            border-radius: 8px; /* 按钮圆角 */
            padding: 12px 20px;
            font-size: 18px;
            font-weight: 600; /* 加粗按钮字体 */
            transition: background-color 0.3s, border-color 0.3s, transform 0.3s;
        }

        .btn-primary:hover {
            background-color: #e68a00; /* 深橙黄色 */
            border-color: #cc7a00;
            transform: scale(1.05); /* 放大效果 */
        }

        .btn-primary:focus {
            box-shadow: 0 0 0 0.2rem rgba(255, 153, 0, 0.5); /* 橙黄色焦点阴影 */
        }

        @media (max-width: 576px) {
            .container {
                padding: 20px;
                max-width: 90%;
            }

            .btn-primary {
                font-size: 16px;
                padding: 10px;
            }
        }

        .text-center a {
            color: #ff9900; /* 橙黄色链接 */
            text-decoration: none;
        }

        .text-center a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form action="login_action.php" method="post">
            <div class="mb-4">
                <label for="username" class="form-label">Username</label>
                <input type="text" id="username" name="username" class="form-control" required placeholder="Enter your username">
            </div>
            <div class="mb-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password" class="form-control" required placeholder="Enter your password">
            </div>
            <button type="submit" class="btn btn-primary w-100" aria-label="Submit login form">Login</button>
        </form>
        <div class="text-center mt-3">
            <a href="forgot_password.php" class="btn btn-link">Forgot Password?</a>
            <p>Don't have an account? <a href="register.php" class="btn btn-link">Register</a></p>
        </div>
    </div>
</body>
</html>
