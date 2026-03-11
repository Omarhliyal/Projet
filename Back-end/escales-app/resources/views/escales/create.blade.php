<!DOCTYPE html>
<html>
<head>
    <title>Ajouter une Escale</title>
</head>

<body>

<h1>Ajouter une Escale</h1>

<form action="/escales" method="POST">
@csrf

<label>Nom du navire</label>
<input type="text" name="ship_name"><br><br>

<label>Type de cargaison</label>
<input type="text" name="cargo"><br><br>

<label>Date d'arrivée</label>
<input type="date" name="arrival_date"><br><br>

<label>Date de départ</label>
<input type="date" name="departure_date"><br><br>

<!-- PILOTE -->
<label>Pilote</label>
<select name="pilote_id">

<option value="">-- Choisir un pilote --</option>

@foreach($pilotes as $pilote)
<option value="{{ $pilote->id }}">
{{ $pilote->nom }}
</option>
@endforeach

</select>

<br><br>


<!-- MACHINE -->
<label>Machine</label>
<select name="machine_id">

<option value="">-- Choisir une machine --</option>

@foreach($machines as $machine)
<option value="{{ $machine->id }}">
{{ $machine->nom }}
</option>
@endforeach

</select>

<br><br>


<!-- QUAI -->
<label>Quai</label>
<select name="quai_id">

<option value="">-- Choisir un quai --</option>

@foreach($quais as $quai)
<option value="{{ $quai->id }}">
{{ $quai->nom }}
</option>
@endforeach

</select>

<br><br>


<!-- SERVICE -->
<label>Service</label>
<select name="service_id">

<option value="">-- Choisir un service --</option>

@foreach($services as $service)
<option value="{{ $service->id }}">
{{ $service->nom }}
</option>
@endforeach

</select>

<br><br>


<!-- STATUS -->
<label>Statut</label>
<select name="status">

<option value="">-- Choisir un statut --</option>
<option value="Prévue">Prévue</option>
<option value="En cours">En cours</option>
<option value="Terminée">Terminée</option>
<option value="Annulée">Annulée</option>

</select>

<br><br>

<button type="submit">Enregistrer l'escale</button>

</form>

</body>
</html>
