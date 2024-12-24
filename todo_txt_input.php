<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>プロフィール（入力画面）</title>
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

  <form action="todo_txt_create.php" method="POST" enctype="multipart/form-data">
    <fieldset>
      <legend>プロフィール（入力画面）</legend>
      <div>
        居住地<input type="text" name="residence">
      </div>
      <div>
    <label for="dob">生年月日</label>
    <input type="date" id="dob" name="dob" required>
      </div>
      <div>
        画像を選択
        <input type="file" name="image" accept="image/*">
      </div>
      <div>
      一言<input type="text" name="comment">
      </div>
      </form>
      <div>
        <button>登録</button>
      </div>
    </fieldset>
  </form>

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

/*ナビゲーションのバー*/
nav ul {
    display: flex;  /* Flexbox を使って要素を横並びに配置 */
    justify-content: space-evenly; /* アイテムを均等に配置 */
    align-items: center;/* アイテムを垂直方向に中央揃え */
    padding: 5px;
    list-style-type: none; /* 不要な余白を削除 */
    margin: 0; /* ナビゲーションバーの外部の余白を削除 */
}
nav ul li {
    display: inline-block; /* 各リストアイテムをブロック表示にしてインラインで並べる */
}

nav ul li img {
    width: 40px;
    height: auto; /* 高さは自動調整 */
    object-fit: contain; /* 画像が歪まないようにする */
}
</style>

</body>


</html>