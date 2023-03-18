<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!--підключення бутсрапового файлу з css-->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<!--підключення(вставка) HTML коду з іншого файла,якій відображає NavBar-->
<?php include($_SERVER["DOCUMENT_ROOT"] . "/_header.php"); ?>
<!--підключення файлу в якому виконується підключення до БД-->
<?php include($_SERVER["DOCUMENT_ROOT"] . "/connection.php"); ?>

<main>

    <div class="container text-center">
        <h1 class="text-center">Список категорій</h1>
        <a href="/create.php" class="btn btn-success">Додати категорію</a>
        <a href="/delete.php" class="btn btn-success">Видалити категорію</a>
        <a href="/edit.php" class="btn btn-success">Редагувати категорію</a>
        <div class="row">
            <!--оголошуєм, що тут буде ПХП код-->
            <?php
            //оголошення змінної,в якій знаходиться команда для вибірки данних з таблиці
            $sql = "SELECT * FROM tbl_categories";
            //оголошення змінної, яка буде мати данні вибірки з БД.
            //$dbh - змінна БД
            //query - функція, яка принімає SQL запрос
            $command = $dbh->query($sql);
            //оголошення циклу, якій перебирає данні $command(данні вибрані з таблиці)
            foreach($command as $row) {
                //оголошуєм змінні, та присвоюєм данні колонок з таблиці
                $name = $row["name"];
                $image = $row["image"];
                $description = $row["description"];
                //виводим всі вибрані данні з таблиці через HTML тегі
                echo "
                <div class='col'>
                     <div class='card' style='width: 18rem;'>
                        <img src='$image' class='card-img-top'>
                         <div class='card-body'>
                            <h5 class='card-title'>$name</h5>
                          <p class='card-text'>$description</p>
                        </div>
                    </div>
                </div>
                
                ";
            }
            ?>
        </div>

    </div>
</main>


</body>
<!--підключення бутсрапового файлу з JS-->
<script src="/js/bootstrap.bundle.min.js"></script>
</html>