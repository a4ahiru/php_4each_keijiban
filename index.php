<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset = "UTF-8">
<title>4eachblog 掲示板</title>
<link rel ="stylesheet" type="text/css" href="./css/style.css">
</head>

<body>

    <header>
        <img class="header_img" src="img/4eachblog_logo.jpg">
        <ul>
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
    </header>

            
    <main>
        <div class="box1">



            <div class="left">
                <h1>プログラミングに役立つ掲示板</h1>
                <form class ="content" action = "insert.php" method="post">
                    <ul>
                        <h2>入力フォーム</h2>
                        <li>ハンドルネーム</li>
                        <input type = "text" class="textInput" name ="handleName">
                        <li>タイトル</li>
                        <input type = "text" class="textInput" name ="title">
                        <li>コメント</li>
                        <textarea class="commentInput" name ="comments"></textarea>                            <input type ="submit" class="button" value = "投稿する">
                    </ul>
                </form>


            </div>

            <div class="right">
                <ul>
                    <h2>人気の記事</h2>
                    <li>PHPオススメ本</li><br>
                    <li>PHP MYAdminの使い方</li><br>
                    <li>人気のエディタTop5</li>  <br>
                    <li>HTMLの基礎</li><br>

                    <h2>オススメリンク</h2>

                    <li>インターノウス株式会社</li><br>
                    <li>VSCodeのダウンロード</li><br>
                    <li>XAMPP/MAMPのダウンロード</li><br>
                    <li>Eclipseのダウンロード</li><br>

                    <h2>カテゴリ</h2>

                    <li>HTML</li><br>
                    <li>CSS</li><br>
                    <li>JavaScript</li><br>
                    <li>MySQL</li><br>
                    <li>Java</li><br>
                </ul>  
            </div>

        </div>

    </main>

    <?php
    mb_internal_encoding("utf8");

    require "DB.php";
    $dbcoonect = new DB();
    $pdo = $dbcoonect -> connect();
    $stmt = $pdo->prepare($dbcoonect->select());
    $stmt->execute();


    mb_internal_encoding("utf8");
    $pdo = new PDO("mysql:host=localhost;dbname=lesson01;charset=utf8mb4","root","");
    $stmt = $pdo->query("select*from 4each_keijiban");

    while ($row = $stmt-> fetch()){
        echo "<div class='kiji'>";
        echo "<h3>".$row['title']."</h3>";
        echo "<div class='contents'>";
        echo $row['comments'];
        echo "<div class='handlename'>posted by ".$row['handlename']."</div>";
        echo "</div>";
        echo "</div>";

    }
    ?>


    <footer>
        <div>
            copyright © internous | 4each blog is the one which provides A to Z about programming.
        </div>
    </footer>
</body>
