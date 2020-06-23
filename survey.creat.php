<?php

// 送信確認
// var_dump($_POST);
// exit();

// 項目入力のチェック
// 値が存在しないor空で送信されてきた場合はNGにする
if (
    !isset($_POST["name"]) || $_POST["name"] == "" ||
    !isset($_POST["email"]) || $_POST["email"] == "" ||
    !isset($_POST["age"]) || $_POST["age"] == "" ||
    !isset($_POST["been"]) || $_POST["been"] == ""||
    !isset($_POST["day"]) || $_POST["day"] == "" ||
    !isset($_POST["reason"]) || $_POST["reason"] == "" ||
    !isset($_POST["play"]) || $_POST["play"] == "" ||
    !isset($_POST["con"]) || $_POST["con"] == "" ||
    !isset($_POST["will"]) || $_POST["will"] == "" 
) {
    exit("ParamError");
}

// 受け取ったデータを変数に入れる
$name = $_POST["name"];
$email = $_POST["email"];
$age = $_POST["age"];
$been = $_POST["been"];
$day = $_POST["day"];
$reason = $_POST["reason"];
$play = $_POST["play"];
$con = $_POST["con"];
$will = $_POST["will"];


// DB接続の設定
// DB名は`gsacf_x00_00`にする
$dbn = 'mysql:dbname=survey;charset=utf8;port=3306;host=localhost';
$user = 'root';
$pwd = '';

try {
    // ここでDB接続処理を実行する
    $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
    // DB接続に失敗した場合はここでエラーを出力し，以降の処理を中止する
    echo json_encode(["db error" => "{$e->getMessage()}"]);
    exit();
}

// データ登録SQL作成
// `created_at`と`updated_at`には実行時の`sysdate()`関数を用いて実行時の日時を入力する
$sql = 'INSERT INTO survey(name, email, Q1,Q2,Q3,Q4,Q5,Q6,Q7, created_at, updated_at)  
        VALUES(:name, :email,:age,:been,:day,:reason,:play,:con,:will, sysdate(), sysdate())';

// SQL準備&実行
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':age', $age, PDO::PARAM_STR);
$stmt->bindValue(':been', $been, PDO::PARAM_STR);
$stmt->bindValue(':day', $day, PDO::PARAM_STR);
$stmt->bindValue(':reason', $reason, PDO::PARAM_STR);
$stmt->bindValue(':play', $play, PDO::PARAM_STR);
$stmt->bindValue(':con', $con, PDO::PARAM_STR);
$stmt->bindValue(':will', $will, PDO::PARAM_STR);
$status = $stmt->execute();



// データ登録処理後
if ($status == false) {
    // SQL実行に失敗した場合はここでエラーを出力し，以降の処理を中止する
    $error = $stmt->errorInfo();
    exit('sqlError:' . $error[2]);
} else {
    // 正常にSQLが実行された場合は入力ページファイルに移動し，入力ページの処理を実行する
    header('Location:survey.input.php');
}
