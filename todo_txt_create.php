<?php
// var_dump($_POST);
// // exit();

$residence = $_POST["residence"];
$dob = $_POST["dob"];
$comment = $_POST["comment"];

// var_dump($_POST);
// exit();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // ユーザーから送信された生年月日を取得
    $dob = $_POST['dob'];
    
    // 生年月日をDateTimeオブジェクトに変換
    $birthDate = new DateTime($dob);
    
    // 現在の日付を取得
    $currentDate = new DateTime();
    
    // 年齢を計算
    $age = $currentDate->diff($birthDate)->y. "歳";
  }

  // アップロードディレクトリの設定
$targetDir = "uploads/";
$targetFile = $targetDir . basename($_FILES["image"]["name"]);
$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

// アップロード処理（うまく機能していない）
$uploadOk = 1;
if (isset($_FILES["image"]) && $_FILES["image"]["error"] === UPLOAD_ERR_OK) {
    // 画像を指定ディレクトリに移動
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
        $uploadOk = 1;  // アップロード成功
    } else {
        $uploadOk = 0;  // アップロード失敗
    }
} else {
    $uploadOk = 0;  // 画像がアップロードされていない
}

// 書き込むデータを作成
$write_data = "{$residence}, {$age}, {$comment} {$targetFile}\n"; // ここで書き込むデータを定義

// var_dump($_POST);
// exit();

$file = fopen("data/todo.txt","a");
flock($file, LOCK_EX);
fwrite($file, $write_data);
flock($file, LOCK_UN);
fclose($file);


header("Location:todo_txt_input.php");
exit();




