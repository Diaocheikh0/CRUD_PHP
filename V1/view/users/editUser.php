<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier Utilisateur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <div class="row">
        <div class="col-6">
            <h4 class="text-center">Modifier Utilisateur</h4>
            <form action="?controller=user&action=updateEedit" method="POST" class="container">

                <input type="hidden" name="id" value="<?= htmlspecialchars($user['id']); ?>">

                <div class="mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" autofocus name="nom" value="<?= htmlspecialchars($user['nom']); ?>" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="prenom" class="form-label">Prénom</label>
                    <input type="text" name="prenom" value="<?= htmlspecialchars($user['prenom']); ?>" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" value="<?= htmlspecialchars($user['email']); ?>" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="mot_de_passe" class="form-label">Mot de Passe</label>
                    <input type="password" name="mot_de_passe" value="<?= htmlspecialchars($user['mot_de_passe']); ?>" class="form-control" required>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-success">Modifier</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
