<h1>All Escales</h1>
@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<table border="1">
    <tr>
        <th>Name</th>
        <th>Port</th>
        <th>Date</th>
    </tr>
    @foreach($escales as $escale)
    <tr>
        <td>{{ $escale->name }}</td>
        <td>{{ $escale->port }}</td>
        <td>{{ $escale->date }}</td>
    </tr>
    @endforeach
</table>
