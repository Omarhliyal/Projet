<!DOCTYPE html>
<html>
<head>
    <title>Add Escale</title>
</head>
<body>
    <h1>Add Escale</h1>

<form action="/escales" method="POST">
@csrf

<label>Ship Name</label>
<input type="text" name="ship_name"><br><br>

<label>Cargo</label>
<input type="text" name="cargo"><br><br>

<label>Port</label>
<input type="text" name="port"><br><br>

<label>Pilot Name</label>
<input type="text" name="pilot_name"><br><br>

<label>Tugboats</label>
<input type="text" name="tugboats"><br><br>

<label>Machine Operator</label>
<input type="text" name="machine_operator"><br><br>

<label>Equipment Used</label>
<input type="text" name="equipment_used"><br><br>

<label>Services</label>
<input type="text" name="services"><br><br>

<label>Arrival Date</label>
<input type="date" name="arrival_date"><br><br>

<label>Departure Date</label>
<input type="date" name="departure_date"><br><br>

<label>Status</label>
<input type="text" name="status"><br><br>

<button type="submit">Save Escale</button>

</form>

</body>
</html>