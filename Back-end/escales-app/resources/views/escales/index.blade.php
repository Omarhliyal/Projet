<!DOCTYPE html>
<html>
<head>

<title>Liste des Escales</title>

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

.table th{
text-align:center;
}

.table td{
vertical-align:middle;
text-align:center;
}

.card{
border-radius:10px;
}

</style>

</head>

<body>

<div class="header">
Gestion des Escales
</div>

<div class="container mt-5">

<div class="d-flex justify-content-between align-items-center mb-4">

<h2 class="fw-bold">Liste des Escales</h2>

<a href="/escales/create" class="btn btn-success">
Ajouter une escale
</a>

</div>

<div class="card shadow">

<div class="card-body">

<div class="table-responsive">

<table class="table table-hover table-bordered align-middle">

<thead class="table-dark">

<tr>
<th>Navire</th>
<th>Cargaison</th>
<th>Pilote</th>
<th>Vedette</th>
<th>Eq. Vedette</th>
<th>Remorque</th>
<th>Eq. Remorque</th>
<th>Quai</th>
<th>Prestation</th>
<th>Statut</th>
<th>Arrivée</th>
<th>Départ</th>
<th>Actions</th>
</tr>

</thead>

<tbody>

@foreach($escales as $escale)

<tr>

<td>{{ $escale->ship_name }}</td>
<td>{{ $escale->cargo }}</td>

<td>{{ $escale->pilote->nom }}</td>
<td>{{ $escale->vedette->nom }}</td>
<td>{{ $escale->equipeVedette->nom }}</td>
<td>{{ $escale->remorque->nom }}</td>
<td>{{ $escale->equipeRemorque->nom }}</td>
<td>{{ $escale->quai->nom }}</td>
<td>{{ $escale->prestation->nom }}</td>

<td>
@if($escale->status == 'Prévue')
<span class="badge bg-primary">Prévue</span>
@elseif($escale->status == 'En cours')
<span class="badge bg-warning text-dark">En cours</span>
@elseif($escale->status == 'Terminée')
<span class="badge bg-success">Terminée</span>
@else
<span class="badge bg-danger">Annulée</span>
@endif
</td>

<td>{{ $escale->arrival_date }}</td>
<td>{{ $escale->departure_date }}</td>

<td>

<div class="d-flex justify-content-center gap-2">

<a href="/escales/{{ $escale->id }}/edit" class="btn btn-sm btn-primary">
Modifier
</a>

<form action="/escales/{{ $escale->id }}" method="POST" onsubmit="return confirmDelete();">
@csrf
@method('DELETE')

<button type="submit" class="btn btn-sm btn-danger">
Supprimer
</button>

</form>

</div>

</td>

</tr>

@endforeach

</tbody>

</table>

</div>

</div>

</div>

</div>

<!-- DELETE CONFIRMATION -->
<script>
function confirmDelete() {
    return confirm("Êtes-vous sûr de vouloir supprimer cette escale ?");
}
</script>

</body>
</html>
