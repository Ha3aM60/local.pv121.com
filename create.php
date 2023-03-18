<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<!--підключення(вставка) HTML коду з іншого файла,якій відображає NavBar-->
<?php include($_SERVER["DOCUMENT_ROOT"] . "/_header.php"); ?>
<!--підключення файлу в якому виконується підключення до БД-->
<?php include($_SERVER["DOCUMENT_ROOT"] . "/connection.php"); ?>

<main>
    <div class="container">
        <h1 class="text-center">Додати категорію</h1>

        <form>
            <div class="mb-3">
                <label for="name" class="form-label">Назва</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">URL фото</label>
                <input type="text" class="form-control" id="image" name="image">
            </div>

            <div class="mb-3">
                <div class="form-floating">
                    <textarea class="form-control"
                              name="description"
                              placeholder="Leave a comment here"
                              id="description"
                              style="height: 100px"></textarea>
                    <label for="description">Опис</label>
                </div>
            </div>

            <button id="addBtn" type="submit" class="btn btn-primary">Додати</button>
        </form>
    </div>
</main>


</body>
<script>
    document.getElementById('addBtn').addEventListener('click', function() {
        <?php
        $data1 = $_GET['name'];
        $data2 = $_GET['image'];
        $data3 = $_GET['description'];
        $sql = "INSERT INTO `tbl_categories` (`id`, `name`, `image`, `description`) VALUES (NULL, '$data1', '$data2', '$data3')";
        if($data3 != '')
            $dbh->exec($sql);
        ?>
    });
</script>
<script src="/js/bootstrap.bundle.min.js"></script>

</html>
