<html>
    <head>
        <meta charset="utf-8">
        <title>変数</title>
    </head>
<body>

<!-- 以下にPHPを記述 -->

<?php
// 変数
$name = '清田';
$last_name = '岳人';

echo $name;
echo $last_name;

// 数値の変数
$age = 33;
echo $age;

// 改行
echo '<br>';

echo $name;

// 簡単なおみくじ
$num = rand(1,2); // ランダムな数字を生成する

if ( $num == 1) {
    echo 'あたり';
}else{
    echo 'はずれ';
}

?>




<ul>
    <li><a href="index.php">戻る</a></li>
</ul>
</body>
</html>