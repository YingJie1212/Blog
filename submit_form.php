<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 获取表单数据
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $artist = htmlspecialchars($_POST['artist']);
    $message = htmlspecialchars($_POST['message']);

    // 这里你可以处理数据，比如存储到数据库，或者发送邮件

    // 示例：将留言发送到不同的邮箱（根据选择的艺人）
    $to = "default@example.com"; // 默认邮箱

    switch ($artist) {
        case 'TFBOYS':
            $to = "tfboys@example.com";
            break;
        case 'TNT':
            $to = "tnt@example.com";
            break;
        case 'LD':
            $to = "ld@example.com";
            break;
        case 'TF Family':
            $to = "tfamily@example.com";
            break;
    }

    // 发送邮件的代码（示例）
    $subject = "新留言来自 $name";
    $email_message = "姓名: $name\n";
    $email_message .= "邮箱: $email\n";
    $email_message .= "选择的艺人: $artist\n";
    $email_message .= "留言: \n$message";

    // 使用 mail 函数发送邮件
    mail($to, $subject, $email_message);

    // 返回成功页面或消息
    echo "感谢您的留言，$name！我们会尽快回复您。";
}
?>
