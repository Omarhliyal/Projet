<!DOCTYPE html>
<html>
<head>
<title>Liste des Vedettes</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

<div class="d-flex justify-content-between mb-3">
<h2>Liste des Vedettes</h2>
<a href="/vedettes/create" class="btn btn-success">Ajouter</a>
</div>

<table class="table table-bordered">

<tr>
<th>Nom</th>
<th>Actions</th>
</tr>

@foreach($vedettes as $vedette)
<tr>

<td>{{ $vedette->nom }}</td>

<td>

<a href="/vedettes/{{ $vedette->id }}/edit" class="btn btn-primary btn-sm">
Modifier
</a>

<form action="/vedettes/{{ $vedette->id }}" method="POST" style="display:inline;" onsubmit="return confirmDelete();">
@csrf
@method('DELETE')

<button class="btn btn-danger btn-sm">
Supprimer
</button>

</form>

</td>

</tr>
@endforeach

</table>

</div>

<script>
function confirmDelete() {
    return confirm("Supprimer cette vedette ?");
}
</script>

</body>
</html>
