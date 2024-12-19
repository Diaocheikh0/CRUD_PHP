<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Catégories</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div>
        <a href="" class="btn btn-warning btn-sm">Acceuil</a>
    </div>
    <div class="container">
        <h2 class="text-center">Liste des Catégories</h2>
        <a href="?controller=categorie&&action=add" class="btn btn-primary">Ajout Catégorie</a>
        <table class="table table-bordered border-primary text-center mt-4">
            <tr class="bg-primary">
                <th>ID</th>
                <th>LIBELLE</th>
                <td colspan="2">ACTIONS</td>
            </tr>
            <?php while( $c = pg_fetch_assoc($categorie)){ ?>
                <tr>
                    <td><?= $c['id'] ?></td>
                    <td><?= $c['libelle'] ?></td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="?controller=categorie&&action=edit&id=<?= $c['id'] ?>">Edit</a>
                        <a class="btn btn-danger btn-sm" href="?controller=categorie&&action=delete&id=<?= $c['id'] ?>">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>