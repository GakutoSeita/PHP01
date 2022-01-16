<?php

// フォームから送られたデータを受け取る
$name = $_POST['yourname'];
$mail = $_POST['mail'];
$tel = $_POST['tel'];
$idnumber = $_POST['idnumber'];
$evaluation = $_POST['evaluation'];
$comment = $_POST['comment'];



// 日付を取得
$time = date("Y-m-d H:i:s");

// 文字作成(日付)

// 自分でトライして完成できなかったバージョン
// $str = '<td>' .$time. 
//    '</td><td>' .$name. 
//    '</td><td>' .$mail. 
//    '</td><td>' .$tel. 
//    '</td><td>' .$idnumber. 
//    '</td><td>' .$evaluation. 
//    '</td><td>' .$comment. '</td>';

// File書き込み (textバージョンはラインアウト)
// $file = fopen('data/data.txt','a');//ファイルを開いて読み込み
// fwrite($file,$str."\n");//ファイルへの書き込み
// fclose($file);//ファイルを閉じる

// csvバージョン
$data = array($time,$name,$mail,$tel,$idnumber,$evaluation,$comment);

$file = fopen('data/data.csv', 'a');
 
$line = implode(',' , $data);
fwrite($file, $line . "\n");

fclose($file);


?>


<html>
<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>
<body>

<h1>書き込みしました。</h1>
<h2>./data/data.txt を確認しましょう！</h2>

<ul>
    <li><a href="index.php">戻る</a></li>
</ul>

</body>
</html>