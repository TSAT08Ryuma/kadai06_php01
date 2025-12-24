
<!-- URLに入力データは含まれず -->
<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $place = $_POST["place"];
    $data = $name . "/" . $email . "/" . $place . PHP_EOL;
    file_put_contents("data/data.txt", $data, FILE_APPEND);
?>

<html>

<head>
    <meta charset="utf-8">
    <title>POST（受信）</title>
</head>

<body>
    お名前：<?= $name ?>
    EMAIL：<?= $email ?>
    出身県：<?= $place ?>
    <ul>
        <li><a href="read.php">過去入力データはこちら</a></li>
    </ul>
</body>

</html>
