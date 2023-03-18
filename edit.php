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
<?php include($_SERVER["DOCUMENT_ROOT"]."/connection.php"); ?>
<?php include($_SERVER["DOCUMENT_ROOT"]."/_header.php"); ?>
<body>
    <main>
        <div class="container">
            <h1>Update</h1>
            <form  >
                <div class="mb-3">
                    <label for="name" class="form-label">ID</label>
                    <input type="text" class="form-control" id="id" name="id">
                </div>
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
                <button  id="editBtn" class="btn btn-primary">Обновити</button>
            </form>

        </div>
    </main>
</body>
</html>
<script>
    document.getElementById('editBtn').addEventListener('click', function() {
        <?php
        $data4 = $_GET['id'];
        $data1 = $_GET['name'];
        $data2 = $_GET['image'];
        $data3 = $_GET['description'];
        $sql = "UPDATE `tbl_categories` SET `name` = '$data1', `image` = '$data2', `description` = '$data3' WHERE `tbl_categories`.`id` = '$data4'";
        $dbh->exec($sql);
        ?>
    });
</script>
