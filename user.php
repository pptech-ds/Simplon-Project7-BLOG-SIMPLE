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
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Mon Blog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
                aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Acceuil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user.php">Connection</a>
                    </li>

                </ul>
                <form class="d-flex">
                    <input class="form-control me-sm-2" type="text" placeholder="Rechercher">
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Rechercher</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">

        <div class="row">
            <div class="col-4">
                <form method="POST" action="" class="mb-3 mt-5">
                    <fieldset>
                        <legend>Connectez-vous à votre compte</legend>
                        <div class="form-group mb-2">
                            <label for="pseudo">Pseudonyme</label>
                            <input type="text" class="form-control" id="pseudo" aria-describedby="pseudo"
                                placeholder="Entrez votre pseudo">
                        </div>
                        <div class="form-group mb-2">
                            <label for="password">Mot de passe</label>
                            <input type="password" class="form-control" id="password" aria-describedby="mot de passe"
                                placeholder="Entrez votre mot de passe">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </fieldset>
                </form>
            </div>
        </div>

    </div>

</body>

</html>