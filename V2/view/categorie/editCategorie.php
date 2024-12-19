<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier Catégorie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h4 class="text-center">Modifier Catégorie</h4>
                <form action="?controller=categorie&&action=updateEedit" method="POST">
                    <div class="row mb-3">
                        <div class="col">
                            <input type="hidden" name="id" value="<?= $categorie['id'] ?>">
                        </div>
                    </div>
                    <label for="">Libelle</label>
                    <div class="row mb-3">
                        <div class="col">
                            <input type="text" autofocus class="form-control" name="libelle" value="<?= $categorie['libelle'] ?>"><br>
                        </div>
                    </div>
                    <br>
                    <div class="text-center">
                        <button class="mt-3 btn btn-success"  type="submit">Modifier</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>