<!DOCTYPE html>
<html>
<head>
<title>Modifier Pilote</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
background:#f4f6f9;
}
.header{
background:#003366;
color:white;
padding:15px;
text-align:center;
font-size:22px;
font-weight:bold;
}
</style>

</head>

<body>

<div class="header">
Gestion des Pilotes
</div>

<div class="container mt-5">

<div class="card shadow">

<div class="card-header bg-primary text-white">
Modifier Pilote
</div>

<div class="card-body">

<form action="/pilotes/{{ $pilote->id }}" method="POST">
@csrf
@method('PUT')

<label class="form-label">Nom du pilote</label>
<input type="text" name="nom" class="form-control mb-3" value="{{ $pilote->nom }}">

<button class="btn btn-primary">Mettre à jour</button>

<a href="/pilotes" class="btn btn-secondary">
Retour
</a>

</form>

</div>

</div>

</div>

</body>
</html>
