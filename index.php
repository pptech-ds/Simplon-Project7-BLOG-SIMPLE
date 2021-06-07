<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://bootswatch.com/5/darkly/bootstrap.css">

    <title>Mon Blog</title>
</head>

<body>


    <?php var_dump(dirname(__DIR__)); require dirname(__DIR__) . '/view/shared/_nav.php'; ?>

    <div class="container">
        <?php require dirname(__DIR__) . '/view/post/postAll.php'; ?>
    </div>

</body>

</html>sdsd