<?php
// ファイルを開く

// ファイル内容を1行ずつ読み込んで出力

// ファイルを閉じる

// ファイルを開いて内容を読み込む
$data = file_get_contents('data/data.txt');

// nl2br ... textファイルの改行をHTMLの<br>に変換する関数
// echo nl2br($data);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            text-align: center;
            white-space: pre-wrap;
        }
    </style>
</head>
<body>
    <div class="output">
    <h2>表：氏名／アドレス／出身県</h2>
    <p id = "data"></p>
    </div>
<script>
    const data = <?= json_encode($data, JSON_UNESCAPED_UNICODE) ?>;
    document.getElementById("data") .textContent = data
</script>

</body>
</html>