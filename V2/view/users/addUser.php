<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajout Utilisateur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-6">
            <h4 class="text-center">Ajout Utilisateur</h4>
            <form action="?controller=user&action=save" method="POST">
                <div class="row mb-3">
                    <div class="col">
                        <input required type="text" autofocus placeholder="Nom" name="nom" class="form-control"><br>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <input required type="text" placeholder="Prénom" name="prenom" class="form-control"><br>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <input required type="email" placeholder="Email" name="email" class="form-control"><br>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <input required type="password" placeholder="Mot de Passe" name="mot_de_passe" minlength="8" class="form-control"><br>
                    </div>
                </div>

                <div class="text-center">
                    <button class="mt-3 btn btn-success" type="submit">Ajouter</button>
                </div>

            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
