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
        <h1>Delete</h1>
        <form  >
            <div class="mb-3">
                <input type="text" class="form-control" id="id" name="id" placeholder="Введіть ID">
            </div>
            <button  id="dltBtn" class="btn btn-primary">Видалити</button>
        </form>

    </div>
</main>

</body>
</html>
<script>
    document.getElementById('dltBtn').addEventListener('click', function() {
        <?php
        $data4 = $_GET['id'];
        $sql = "DELETE FROM tbl_categories WHERE `tbl_categories`.`id` = '$data4'";
        $dbh->exec($sql);
        ?>
    });
</script>
