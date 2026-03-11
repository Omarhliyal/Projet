<!DOCTYPE html>
<html>
<head>

<title>Liste des Escales</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<h1 class="text-center mb-4">Liste des Escales</h1>

<div class="text-end mb-3">
<a href="/escales/create" class="btn btn-success">
Ajouter une escale
</a>
</div>

<div class="card shadow">

<div class="card-body">

<table class="table table-hover table-bordered">

<thead class="table-dark">

<tr>
<th>Navire</th>
<th>Cargaison</th>
<th>Pilote</th>
<th>Machine</th>
<th>Quai</th>
<th>Service</th>
<th>Statut</th>
<th>Arrivée</th>
<th>Départ</th>
</tr>

</thead>

<tbody>

@foreach($escales as $escale)

<tr>

<td>{{ $escale->ship_name }}</td>

<td>{{ $escale->cargo }}</td>

<td>{{ $escale->pilote->nom }}</td>

<td>{{ $escale->machine->nom }}</td>

<td>{{ $escale->quai->nom }}</td>

<td>{{ $escale->service->nom }}</td>

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

</tr>

@endforeach

</tbody>

</table>

</div>

</div>

</div>

</body>
</html>
