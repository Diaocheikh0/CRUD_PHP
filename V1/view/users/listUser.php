<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Utilisateurs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div>
    <a href="" class="btn btn-warning btn-sm">Accueil</a>
</div>
<div class="container">
    <h2 class="text-center">Liste des Utilisateurs</h2>

    <a class="btn btn-primary" href="?controller=user&&action=add">Ajout Utilisateur</a>
    <table class="table table-bordered border-primary text-center mt-4">
        <tr class="bg-primary">
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th colspan="2">ACTIONS</th>
        </tr>
        <?php while ($u = pg_fetch_assoc($users)) { ?>
            <tr>
                <td><?= htmlspecialchars($u['id']); ?></td>
                <td><?= htmlspecialchars($u['nom']); ?></td>
                <td><?= htmlspecialchars($u['prenom']); ?></td>
                <td><?= htmlspecialchars($u['email']); ?></td>
                <td>
                    <a class="btn btn-primary btn-sm" href="?controller=user&action=edit&id=<?= htmlspecialchars($u['id']); ?>">Edit</a>
                    <a class="btn btn-danger btn-sm" href="?controller=user&action=delete&id=<?= htmlspecialchars($u['id']); ?>">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
