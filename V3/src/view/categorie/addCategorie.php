<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajout Catégorie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row mb-3">
        <div class="col-6">
            <h4 class="text-center">Ajout Catégorie</h4>
            <form action="?controller=categorie&&action=save" method="POST">
                <div class="row mb-3">
                    <div class="col">
                        <input required type="text" class="form-control" autofocus placeholder="Libellé" name="libelle"><br>
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