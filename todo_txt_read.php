<?php
$str = "";
$age = "";

$file = fopen("data/todo.txt", "r");
if ($file) {
    flock($file, LOCK_EX);  // ファイルが開かれてからロックをかける

    // fgets()で1行ずつ取得→$lineに格納
  while ($line = fgets($file)) {
    // 取得したデータを`$str`に追加する
    $str .="<tr><td>{$line}</td></tr>";
        // 改行を取り除く
        $line = trim($line);
        // 画像のパスを<img>タグとして追加する
        $str .= "<tr><td><img src='{$line}' alt='image' style='width: 300px; height: auto;'></td></tr>";
    } 
    flock($file, LOCK_UN);
    fclose($file);
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>さがす（一覧画面）</title>
</head>

<body>

<header>
    <nav>
      <ul>
        <li><a href="todo_txt_read.php"><img src="img/サーチアイコン.png" alt="さがす"/></a></li>
        <li><img src="img/いいねアイコン.png" alt="いいね"/></li>
        <li><img src="img/コメントアイコン7.png" alt="コメント"/></li>
        <li><a href="todo_txt_input.php"><img src="img/履歴書アイコン6.png" alt="プロフィール入力"></a></li>
      </ul>
    </nav>
</header>

<fieldset>
  <legend>さがす（一覧画面）</legend>
  <table>
    <tbody>
      <?= $str ?>
    </tbody>
  </table>
</fieldset>
</body>

<style>
  body{
    margin-right: auto;
    margin-left: auto;
    padding:0;
    width: 700px;
    font-size: 13px;
    color: rgba(0,0, 0, 0.7);
    font-family: 'メイリオ', Meiryo, sans-serif;
    text-align:center;
}
header{
    background-color: #fff;
    border-bottom: 1px solid #ccc;
    text-align: center;
}

nav ul {
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    padding: 5px;
    list-style-type: none;
    margin: 0;
}
nav ul li {
    display: inline-block;
}
nav ul li img {
    width: 40px;
    height: auto;
    object-fit: contain;
}
</style>

</html>
