<html>
<!-- データ取得時はGET　登録時はPOSTがよさそう？ -->
<head>
    <meta charset="utf-8">
    <style>
        .menu {
            background-color: #2FA6E9;
        }
    </style>
    <title>POST練習</title>
</head>

<body>
    <div class="menu">
        <h3>menu</h3>
        <ul>
            <li>(演習)課題</li>
            <li><a href="index.php">index.php</a></li>
        </ul>
    </div>
    <P>※post_confirm.phpにpostで送信。</P>

    <form action="post_confirm.php" method="post">
        お名前: <input type="text" name="name">
        EMAIL: <input type="text" name="email">
        出身県:  <input type="textarea" name="place">
        <input type="submit" value="送信">
    </form>
</body>

</html>
