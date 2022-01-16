<html>
<head>
	<meta charset="utf-8">
	<title>ファイル読み込む</title>
</head>

<body>

<!-- 
自分でトライして完成できなかったバージョン
    <table border="1">
    <tr>
        <th>投稿日時</th>
        <th>お名前</th>
        <th>EMAIL</th>
        <th>電話番号</th>
        <th>学籍番号</th>
        <th>ご評価</th>
        <th>ご意見</th>
    </tr>
    <tr id="list">
        <td>（名前）</td>
        <td>（EMAIL）</td>
        <td>（電話番号）</td>
        <td>（学籍番号）</td>
        <td>（ご評価）</td>
        <td>（ご意見）</td>
    </tr>
    </table>
</body>
</html>
-->

<?php


// textバージョン
// ファイルを開く(rは「読み込み専用」)
// $file = fopen('data/data.txt','r');

// ファイル内容を1行ずつ読み込んで出力 ★<tr>に代入させる方法!?
// while ( $str = fgets($file) ) {
//     echo nl2br($str);
// }

// ファイルを閉じる
// fclose($file);

//csvバージョン
$file = "data/data.csv";
if ( ( $handle = fopen ( $file, "r" ) ) !== FALSE ) {
    echo "<table>\n";
    while ( ( $data = fgetcsv ( $handle, 1000, ",", '"' ) ) !== FALSE ) {
        echo "\t<tr>\n";
        for ( $i = 0; $i < count( $data ); $i++ ) {
            echo "\t\t<td>{$data[$i]}</td>\n";
        }
        echo "\t</tr>\n";
    }
    echo "</table>\n";
    fclose ( $handle );
}



?>