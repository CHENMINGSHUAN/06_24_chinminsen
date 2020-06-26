<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>問卷調查</title>
  
    <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sawarabi+Gothic&display=swap" rel="stylesheet">
    <style>
        .survey {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            font-family: 'cursive', 'Sawarabi Gothic',
                sans-serif;
        }

        .survey ul li {
            list-style: none;
        }

        .survey ul {
            color: steelblue;
        }

        .a {
            font-size: 18px;
            font-weight: 800;
            font-family: 'Pangolin', cursive;

        }

        .qu {
            border-bottom: lightslategrey solid 2px;

        }

        .b {
            border-left: hidden;
            border-top: hidden;
            border-right: hidden;
        }

        .c:hover {
            opacity: 0.3;
        }

        .title {
            margin-bottom: 20px;
        }

        .button {
            margin-top: 10px;
        }

        a:hover {
            opacity: 0.6;
        }

        .p {
            font-family: 'Pangolin', cursive;
        }
    </style>
</head>

<body>
    <form action="survey.creat.php" method="post">
        <div class="survey">
            <h1>福岡旅遊問卷調查</h1>
            <p class="p">Fukuoka travel survey</p>
            <!-- 福岡旅行のアンケート調査 -->
            <img src="https://kinarino.k-img.com/system/press_images/001/251/467/3eafd0b90d7dd3fb9538379af797dae6698e5c60.jpg?1529471036" width="600px" height="300px">
            <br>
            <br>
            <div class="title">
                <label for="name" class="c">姓名<input type="name" name="name" class="b"></label>
                <label for="email" class="c">email <input type="email" name="email" class="b"></label>

            </div>
            <div class="qu">
                <p><span class="a">Q1</span> 您的年齡？</p>
                <!-- 年齢教えてください。 -->
                <ul class="Q">
                    <li><input type="radio" name="age" value="0">20歲以下</li>
                    <li><input type="radio" name="age" value="1">20~30歲</li>
                    <li><input type="radio" name="age" value="2">30~40歲</li>
                    <li><input type="radio" name="age" value="3">40歲以上</li>
                </ul>
            </div>
            <div class="qu">
                <p><span class="a">Q2</span>您的性別？</p>
                <!-- 年齢教えてください。 -->
                <ul class="Q">
                    <li><input type="radio" name="gneder" value="0">男</li>
                    <li><input type="radio" name="gender" value="1">女</li>
                </ul>
            </div>
            <div class="qu">
                <p><span class="a">Q3</span>您有來過福岡嗎？</p>
                <!-- 福岡にきたことがありますか？ -->

                <ul class="Q">
                    <li><input type="radio" name="been" value="0">有</li>
                    <!-- はい -->
                    <li><input type="radio" name="been" value="1">沒有</li>
                    <!-- いいえ -->
                </ul>
                <p>若選擇沒有請跳至第五題</p>
                <!-- いいえと選んだら、Q5から答えてください。 -->
            </div>
            <div class="qu">
                <p><span class="a">Q4</span>福岡滯留的天數為幾天？</p>
                <!-- 福岡で何泊をしたんですか？ -->
                <ul class="Q">
                    <li><input type="radio" name="day" value="0">兩天一夜</li>
                    <!-- 一泊二日 -->
                    <li><input type="radio" name="day" value="1">三天兩夜</li>
                    <!-- 二泊三日 -->
                    <li><input type="radio" name="day" value="2">四天三夜</li>
                    <!-- 三泊四日 -->
                    <li><input type="radio" name="day" value="3">五天以上</li>
                    <!-- 五日以上 -->
                </ul>
            </div>
            <div class="qu">
                <p><span class="a">Q5</span>您選擇在福岡旅遊的最主要原因？</p>
                <!-- 旅行先として、福岡を選んだ一番メインの理由は何ですか？ -->
                <ul class="Q">
                    <li><input type="radio" name="reason" value="0">當地食物</li>
                    <!-- 食べ物 -->
                    <li><input type="radio" name="reason" value="1">觀光景點</li>
                    <!-- 観光スポット -->
                    <li><input type="radio" name="reason" value="2">風土民情</li>
                    <!-- 人文 -->
                    <li><input type="radio" name="reason" value="3">活動</li>
                    <!-- イベント -->
                    <li><input type="radio" name="reason" value="4">出差</li>
                    <!-- 出張 -->
                    <li><input type="radio" name="reason" value="5">飛機只有停靠福岡</li>
                    <!-- 空港があります。 -->
                    <li><input type="radio" name="reason" value="6">其他</li>
                    <!-- 他の理由 -->
                </ul>
            </div>
            <div class="qu">
                <p><span class="a">Q6</span>若要去日本玩，您會選擇福岡嗎？</p>
                <!-- 日本へ旅行に行ったら、福岡を選びますか？ -->
                <ul class="Q">
                    <li><input type="radio" name="play" value="0">會</li>
                    <!-- はい -->
                    <li><input type="radio" name="play" value="1">不會</li>
                    <!-- いいえ -->
                    <li><input type="radio" name="play" value="2">不確定</li>
                    <!-- 分からない -->
                </ul>
            </div>
            <div class="qu">
                <p><span class="a">Q7</span>您會有不知道福岡哪裡好玩的困擾嗎？</p>
                <!-- 面白いところを知らない悩みがありますか？ -->
                <ul class="Q">
                    <li><input type="radio" name="con" value="0">有</li>
                    <!-- はい -->
                    <li><input type="radio" name="con" value="1">沒有</li>
                    <!-- いいえ -->
                </ul>
            </div>
            <div class="qu">
                <p><span class="a">Q8</span>若知道福岡哪裡好玩，會增加來福岡的意願嗎？</p>
                <!-- 面白いところが分かったら、福岡に来たくなりますか？ -->
                <ul class="Q">
                    <li><input type="radio" name="will" value="0">會</li>
                    <!-- はい -->
                    <li><input type="radio" name="will" value="1">不會</li>
                    <!-- いいえ -->
                    <li><input type="radio" name="will" value="2">不確定</li>
                    <!-- 分からない -->
                </ul>
            </div>
            <div>
                <button style="width:120px;height:40px;border:2px blue none;" class="button">submit</button>
            </div>
            <a href="survey.read.php" style="text-decoration: none;">結果</a>
            <a href="survey.read2.php" style="text-decoration: none;">聽聽大家的想法</a>
        </div>
    </form>
</body>

</html>