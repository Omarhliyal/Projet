<!DOCTYPE html>
<html>
<head>
<title>Ajouter Pilote</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

<div class="card shadow">

<div class="card-header bg-primary text-white">
Ajouter un Pilote
</div>

<div class="card-body">

<form action="/pilotes" method="POST">
@csrf

<label>Nom du pilote</label>
<input type="text" name="nom" class="form-control mb-3">

<button class="btn btn-success">Ajouter</button>
<a href="/pilotes" class="btn btn-secondary">Retour</a>

</form>

</div>

</div>

</div>

</body>
</html>
