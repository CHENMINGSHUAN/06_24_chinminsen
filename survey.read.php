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
$sql = "SELECT COUNT(age) FROM survey WHERE  age='0'";

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
    // // $output = "";
    // // $day .= "{$record["date"]}','";
    foreach ($result as $record) {
        $Q1_0 .= "{$record['COUNT(age)']}";
        // if($Q1_0==0){
            var_dump($Q1_0);
            exit();
        // // }
        // $output .= "<tr>";
        // $output .= "<td>{$record["deadline"]}</td>";
        // $output .= "<td>{$record["todo"]}</td>";
        // $output .= "</tr>";
        // }
    }

    $sql2 = "SELECT COUNT(age) FROM survey WHERE  age='1'";

    $stmt = $pdo->prepare($sql2);
    $status2 = $stmt->execute();

    if ($status2 == false) {
        $error = $stmt->errorInfo();
        exit("sqlError:" . $error[2]);
    } else {
        $result2 = $stmt->fetchAll(PDO::FETCH_ASSOC);  // データの出力用変数（初期値は空文字）を設定
        $Q1_1 = "";
        // // foreach ($result as $record) {
        $Q1_1 .= "{$record['COUNT(age)']}";
    }
}

$sql3 = "SELECT COUNT(age) FROM survey WHERE  age='2'";

$stmt = $pdo->prepare($sql3);
$status3 = $stmt->execute();

if ($status3 == false) {
    $error = $stmt->errorInfo();
    exit("sqlError:" . $error[2]);
} else {
    $result3 = $stmt->fetchAll(PDO::FETCH_ASSOC);  // データの出力用変数（初期値は空文字）を設定
    $Q1_2 = "";
    //     // $output = "";
    foreach ($result as $record) {
        $Q1_2 .= "{$record['COUNT(age)']}";
        //         // $output .= "<tr>";
        //         // $output .= "<td>{$record["deadline"]}</td>";
        //         // $output .= "<td>{$record["todo"]}</td>";
        //         // $output .= "</tr>";
    }
}

$sql4 = "SELECT COUNT(age) FROM survey WHERE  age='3'";

$stmt = $pdo->prepare($sql4);
$status4 = $stmt->execute();

if ($status4 == false) {
    $error = $stmt->errorInfo();
    exit("sqlError:" . $error[2]);
} else {
    $result4 = $stmt->fetchAll(PDO::FETCH_ASSOC);  // データの出力用変数（初期値は空文字）を設定
    $Q1_3 = "";
    // // $output = "";
    foreach ($result as $record) {
        $Q1_3 .= "{$record['COUNT(age)']}";
        //     // $output .= "<tr>";
        //     // $output .= "<td>{$record["deadline"]}</td>";
        //     // $output .= "<td>{$record["todo"]}</td>";
        //     // $output .= "</tr>";
        
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
                ['20歲以下', <?= $Q1_0 ?>],
                ['20~30歲', <?= $Q1_1 ?>],
                ['30~40歲', <?= $Q1_2 ?>],
                ['40歲以上', <?= $Q1_3 ?>],
            ]);

            var options = {
                title: '年齢'
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart1'));

            chart.draw(data, options);
        };

        // google.charts.load('current', {
        //     'packages': ['bar']
        // });
        // google.charts.setOnLoadCallback(drawStuff);

        // function drawStuff() {
        //     var data = new google.visualization.arrayToDataTable([
        //         ['理由', '人數'],
        //         ["當地食物", 44],
        //         ["觀光景點", 31],
        //         ["風土民情", 12],
        //         ['活動', 10],
        //         ['出差', 13],
        //         ['飛機只有停靠福岡', 1],
        //         ['其他', 1]
        //     ]);

        //     var options = {
        //         title: '選擇在福岡旅遊的最主要原因',
        //         width: 900,
        //         legend: {
        //             position: 'none'
        //         },
        //         chart: {
        //             title: '選擇在福岡旅遊的最主要原因',

        //         },
        //         bars: 'horizontal', // Required for Material Bar Charts.
        //         axes: {
        //             x: {
        //                 0: {
        //                     side: 'top',
        //                     label: '人數'
        //                 } // Top x-axis.
        //             }
        //         },
        //         bar: {
        //             groupWidth: "90%"
        //         }
        //     };

        //     var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        //     chart.draw(data, options);
        // };
    </script>


</head>

<body>

    <legend></legend>
    <a href="survey.input.php">入力画面</a>


    
    <div id="piechart1" style="width: 900px; height: 500px;"></div>
    <!-- <div id="top_x_div" style="width: 900px; height: 500px;"></div> -->
</body>

</html>