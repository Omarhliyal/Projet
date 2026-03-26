<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Pilotes</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Style -->
    <style>
        body {
            background-color: #f4f7fb;
        }

        .card-custom {
            border: none;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.08);
        }

        .header-title {
            color: #0d6efd;
            font-weight: bold;
        }

        .btn-custom {
            border-radius: 10px;
            padding: 6px 14px;
        }

        .table thead {
            background-color: #0d6efd;
            color: white;
        }

        .table tbody tr:hover {
            background-color: #eef4ff;
            transition: 0.3s;
        }

        .action-btns a,
        .action-btns button {
            margin-right: 5px;
        }
    </style>
</head>

<body>

<div class="container mt-5">

    <div class="card card-custom p-4">

        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="header-title"> Liste des Pilotes</h3>

            <a href="/pilotes/create" class="btn btn-success btn-custom">
                Ajouter Pilote
            </a>
        </div>

        
        <div class="table-responsive">
            <table class="table align-middle text-center">

                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($pilotes as $pilote)
                    <tr>
                        <td>{{ $pilote->id }}</td>
                        <td class="fw-semibold">{{ $pilote->nom }}</td>

                        <td class="action-btns">

                            <a href="/pilotes/{{ $pilote->id }}/edit" 
                               class="btn btn-primary btn-sm btn-custom">
                                 Modifier
                            </a>

                            <form action="/pilotes/{{ $pilote->id }}" 
                                  method="POST" 
                                  style="display:inline;">
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger btn-sm btn-custom"
                                        onclick="return confirm('Supprimer ce pilote ?')">
                                     Supprimer
                                </button>
                            </form>

                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>

    </div>

</div>

</body>
</html>
