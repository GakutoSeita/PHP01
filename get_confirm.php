<?php

// フォームから送られてきたデータを取得し変数に代入
$name = $_GET['name']; // $nameという変数をここで設定（get.phpとは繋がりなし）
$mail = $_GET['mail'];


?>

<html>
    <head>
        <meta charset="utf-8">
        <title>GET練習（受信）</title>
    </head>
<body>

    <ul>
        <li> お名前：<?= $name ?> </li> 
        <li> Mail：<?= $mail ?> </li>
    </ul>
    <!-- HTMLの中にPHPを代入するイメージ -->

<ul>
    <li><a href="index.php">戻る</a></li>
</ul>
</body>
</html>