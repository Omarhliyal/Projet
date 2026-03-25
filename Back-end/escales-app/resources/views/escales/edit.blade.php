<!DOCTYPE html>
<html>
<head>
<title>Modifier Escale</title>

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
Gestion des Escales
</div>

<div class="container mt-5">

<div class="card shadow">

<div class="card-header bg-primary text-white">
Modifier Escale
</div>

<div class="card-body">

<form action="/escales/{{ $escale->id }}" method="POST">
@csrf
@method('PUT')

<div class="row">

<div class="col-md-6 mb-3">
<label class="form-label">Nom du navire</label>
<input type="text" name="ship_name" class="form-control" value="{{ $escale->ship_name }}">
</div>

<div class="col-md-6 mb-3">
<label class="form-label">Cargaison</label>
<input type="text" name="cargo" class="form-control" value="{{ $escale->cargo }}">
</div>

<div class="col-md-6 mb-3">
<label class="form-label">Date d'arrivée</label>
<input type="date" name="arrival_date" class="form-control" value="{{ $escale->arrival_date }}">
</div>

<div class="col-md-6 mb-3">
<label class="form-label">Date de départ</label>
<input type="date" name="departure_date" class="form-control" value="{{ $escale->departure_date }}">
</div>

<!-- PILOTE -->
<div class="col-md-6 mb-3">
<label class="form-label">Pilote</label>
<select name="pilote_id" class="form-control">
@foreach($pilotes as $pilote)
<option value="{{ $pilote->id }}" 
{{ $escale->pilote_id == $pilote->id ? 'selected' : '' }}>
{{ $pilote->nom }}
</option>
@endforeach
</select>
</div>

<!-- VEDETTE -->
<div class="col-md-6 mb-3">
<label class="form-label">Vedette</label>
<select name="vedette_id" class="form-control">
@foreach($vedettes as $vedette)
<option value="{{ $vedette->id }}" 
{{ $escale->vedette_id == $vedette->id ? 'selected' : '' }}>
{{ $vedette->nom }}
</option>
@endforeach
</select>
</div>

<!-- EQUIPE VEDETTE -->
<div class="col-md-6 mb-3">
<label class="form-label">Equipe Vedette</label>
<select name="equipe_vedette_id" class="form-control">
@foreach($equipesVedettes as $eq)
<option value="{{ $eq->id }}" 
{{ $escale->equipe_vedette_id == $eq->id ? 'selected' : '' }}>
{{ $eq->nom }}
</option>
@endforeach
</select>
</div>

<!-- REMORQUE -->
<div class="col-md-6 mb-3">
<label class="form-label">Remorque</label>
<select name="remorque_id" class="form-control">
@foreach($remorques as $remorque)
<option value="{{ $remorque->id }}" 
{{ $escale->remorque_id == $remorque->id ? 'selected' : '' }}>
{{ $remorque->nom }}
</option>
@endforeach
</select>
</div>

<!-- EQUIPE REMORQUE -->
<div class="col-md-6 mb-3">
<label class="form-label">Equipe Remorque</label>
<select name="equipe_remorque_id" class="form-control">
@foreach($equipesRemorques as $eq)
<option value="{{ $eq->id }}" 
{{ $escale->equipe_remorque_id == $eq->id ? 'selected' : '' }}>
{{ $eq->nom }}
</option>
@endforeach
</select>
</div>

<!-- QUAI -->
<div class="col-md-6 mb-3">
<label class="form-label">Quai</label>
<select name="quai_id" class="form-control">
@foreach($quais as $quai)
<option value="{{ $quai->id }}" 
{{ $escale->quai_id == $quai->id ? 'selected' : '' }}>
{{ $quai->nom }}
</option>
@endforeach
</select>
</div>

<!-- PRESTATION -->
<div class="col-md-6 mb-3">
<label class="form-label">Prestation</label>
<select name="prestation_id" class="form-control">
@foreach($prestations as $prestation)
<option value="{{ $prestation->id }}" 
{{ $escale->prestation_id == $prestation->id ? 'selected' : '' }}>
{{ $prestation->nom }}
</option>
@endforeach
</select>
</div>

<!-- STATUS -->
<div class="col-md-6 mb-3">
<label class="form-label">Statut</label>
<select name="status" class="form-control">
<option value="Prévue" {{ $escale->status == 'Prévue' ? 'selected' : '' }}>Prévue</option>
<option value="En cours" {{ $escale->status == 'En cours' ? 'selected' : '' }}>En cours</option>
<option value="Terminée" {{ $escale->status == 'Terminée' ? 'selected' : '' }}>Terminée</option>
<option value="Annulée" {{ $escale->status == 'Annulée' ? 'selected' : '' }}>Annulée</option>
</select>
</div>

</div>

<div class="mt-4">

<button class="btn btn-primary">
Mettre à jour
</button>

<a href="/escales" class="btn btn-secondary">
Retour à la liste
</a>

</div>

</form>

</div>

</div>

</div>

</body>
</html>
