<?php
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

// データ取得SQL作成
$sql = 'SELECT COUNT(Q1) FROM survey WHERE  Q1=0';

$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

if ($status == false) {
    $error = $stmt->errorInfo();
    exit("sqlError:" . $error[2]);
} else {
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);  // データの出力用変数（初期値は空文字）を設定
    // var_dump($result);
    // exit();
    $Q1_0 = "";
    // $output = "";
    // $day .= "{$record["date"]}','";
    foreach ($result as $record) {
        $Q1_0 .= "{$record[0]}";
        // if($Q1_0==0){
        //     var_dump($Q1_0);
        //     exit();
        // }
        // $output .= "<tr>";
        // $output .= "<td>{$record["deadline"]}</td>";
        // $output .= "<td>{$record["todo"]}</td>";
        // $output .= "</tr>";
    }
}

$sql2 = 'SELECT COUNT(Q1) FROM survey WHERE  Q1=1';

$stmt = $pdo->prepare($sql2);
$status = $stmt->execute();

if ($status == false) {
    $error = $stmt->errorInfo();
    exit("sqlError:" . $error[2]);
} else {
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);  // データの出力用変数（初期値は空文字）を設定
    $Q1_1 = "";
    // $output = "";
    foreach ($result as $record) {
        $Q1_1 .= "<li>{$record["Q1_1"]}</li>";
        // $output .= "<tr>";
        // $output .= "<td>{$record["deadline"]}</td>";
        // $output .= "<td>{$record["todo"]}</td>";
        // $output .= "</tr>";
    }
}

$sql3 = 'SELECT COUNT(Q1) FROM survey WHERE  Q1=2';

$stmt = $pdo->prepare($sql3);
$status = $stmt->execute();

if ($status == false) {
    $error = $stmt->errorInfo();
    exit("sqlError:" . $error[2]);
} else {
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);  // データの出力用変数（初期値は空文字）を設定
    $Q1_2 = "";
    // $output = "";
    foreach ($result as $record) {
        $Q1_2 .= "<li>{$record["Q1_2"]}</li>";
        // $output .= "<tr>";
        // $output .= "<td>{$record["deadline"]}</td>";
        // $output .= "<td>{$record["todo"]}</td>";
        // $output .= "</tr>";
    }
}

$sql3 = 'SELECT COUNT(Q1) FROM survey WHERE  Q1=3';

$stmt = $pdo->prepare($sql3);
$status = $stmt->execute();

if ($status == false) {
    $error = $stmt->errorInfo();
    exit("sqlError:" . $error[2]);
} else {
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);  // データの出力用変数（初期値は空文字）を設定
    $Q1_3 = "";
    // $output = "";
    foreach ($result as $record) {
        $Q1_3 .= "<li>{$record["Q1_3"]}</li>";
        // $output .= "<tr>";
        // $output .= "<td>{$record["deadline"]}</td>";
        // $output .= "<td>{$record["todo"]}</td>";
        // $output .= "</tr>";
    }
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB連携型todoリスト（一覧画面）</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['年齢', '人数'],
                ['20歲以下', '<?= $Q1_0 ?>'],
                ['20~30歲', '<?= $Q1_1 ?>'],
                ['30~40歲', '<?= $Q1_2 ?>'],
                ['40歲以上', '<?= $Q1_3 ?>'],
            ]);

            var options = {
                title: '年齢'
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart1'));

            chart.draw(data, options);
        }
    </script>


</head>

<body>

    <legend>DB連携型todoリスト（一覧画面）</legend>
    <a href="survey.input.php">入力画面</a>

    <tr>
        <th>deadline</th>
        <th>todo</th>
    </tr>
    <ul>
        <!-- ここに<tr><td>deadline</td><td>todo</td><tr>の形でデータが入る -->
        <?= $Q1_0 ?>
        <?= $Q1_1 ?>
        <?= $Q1_2 ?>
        <?= $Q1_3 ?>
    </ul>


    <div id="piechart1" style="width: 900px; height: 500px;"></div>
</body>

</html>