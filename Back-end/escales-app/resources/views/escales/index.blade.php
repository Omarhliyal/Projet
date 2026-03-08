<h1>Escales List</h1>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


<a href="/escales/create">
<button class="btn btn-primary">Add Escale</button>
</a>

<br><br>

<table class="table table-bordered" cellpadding="10">
<tr>
    <th>Ship Name</th>
    <th>Cargo</th>
    <th>Port</th>
    <th>Pilot</th>
    <th>Tugboats</th>
    <th>Machine Operator</th>
    <th>Equipment</th>
    <th>Services</th>
    <th>Arrival</th>
    <th>Departure</th>
    <th>Status</th>
</tr>

@foreach($escales as $escale)
<tr>
    <td>{{ $escale->ship_name }}</td>
    <td>{{ $escale->cargo }}</td>
    <td>{{ $escale->port }}</td>
    <td>{{ $escale->pilot_name }}</td>
    <td>{{ $escale->tugboats }}</td>
    <td>{{ $escale->machine_operator }}</td>
    <td>{{ $escale->equipment_used }}</td>
    <td>{{ $escale->services }}</td>
    <td>{{ $escale->arrival_date }}</td>
    <td>{{ $escale->departure_date }}</td>
    <td>{{ $escale->status }}</td>
</tr>
@endforeach

</table>
