<html>
<head>
	<meta charset="utf-8">
	<title>サンプルフォーム</title>
</head>

<body>

	<form action="write.php" method="post">
		お名前: <input type="text" name="yourname"><br>
		EMAIL: <input type="email" name="mail"><br>
		電話番号: <input type="tel" name="tel"><br>
		学籍番号: <input type="number" name="idnumber"><br>
		ご評価: <select list="list" name="evaluation">
			<option hidden>選択してください</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
		</select><br>
		ご意見: <input type="text" name="comment"><br>
		<input type="submit" value="送信">
		<input type="reset" value="リセット">
	</form>

</body>
</html>