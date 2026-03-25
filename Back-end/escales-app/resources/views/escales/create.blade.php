<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion des Escales - Marsa Maroc</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f4f7fb;
            font-family: 'Segoe UI', sans-serif;
        }

        /* HEADER MARITIME */
        .header {
            background: linear-gradient(90deg, #002b5c, #004a99);
            color: white;
            padding: 18px;
            font-size: 24px;
            font-weight: bold;
            letter-spacing: 1px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
        }

        /* CARD STYLE */
        .card {
            border: none;
            border-radius: 15px;
        }

        .card-header {
            background: #004a99;
            color: white;
            font-weight: bold;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }

        /* INPUTS */
        .form-control, .form-select {
            border-radius: 10px;
            padding: 10px;
        }

        .form-control:focus, .form-select:focus {
            border-color: #004a99;
            box-shadow: 0 0 0 0.2rem rgba(0, 74, 153, 0.2);
        }

        /* BUTTONS */
        .btn-primary {
            background-color: #004a99;
            border: none;
        }

        .btn-primary:hover {
            background-color: #003366;
        }

        .btn-success {
            background-color: #198754;
        }

        .btn-success:hover {
            background-color: #146c43;
        }

        .btn-outline-secondary:hover {
            background: #e2e6ea;
        }

    </style>
</head>

<body>

<!-- HEADER -->
<div class="header">
    🚢 Marsa Maroc - Gestion des Escales
</div>

<div class="container py-5">

    <div class="card shadow-lg">

        <!-- CARD HEADER -->
        <div class="card-header text-center py-3">
            ➕ Nouvelle Escale
        </div>

        <div class="card-body p-4">

            <!-- ERRORS -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('escales.store') }}" method="POST">
                @csrf

                <div class="row g-4">

                    <!-- NAVIRE -->
                    <div class="col-md-6">
                        <label class="form-label">Navire</label>
                        <input type="text" name="ship_name" class="form-control" placeholder="Nom du navire" required>
                    </div>

                    <!-- CARGAISON -->
                    <div class="col-md-6">
                        <label class="form-label">Cargaison</label>
                        <input type="text" name="cargo" class="form-control" placeholder="Type de cargaison" required>
                    </div>

                    <!-- DATES -->
                    <div class="col-md-6">
                        <label class="form-label">Date d'arrivée</label>
                        <input type="date" name="arrival_date" class="form-control" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Date de départ</label>
                        <input type="date" name="departure_date" class="form-control" required>
                    </div>

                    <!-- PILOTE -->
                    <div class="col-md-6">
                        <label class="form-label">Pilote</label>
                        <select name="pilote_id" class="form-select" required>
                            <option value="">-- Choisir --</option>
                            @foreach($pilotes as $p)
                                <option value="{{ $p->id }}">{{ $p->nom }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- VEDETTE -->
                    <div class="col-md-6">
                        <label class="form-label">Vedette</label>
                        <select name="vedette_id" class="form-select" required>
                            <option value="">-- Choisir --</option>
                            @foreach($vedettes as $v)
                                <option value="{{ $v->id }}">{{ $v->nom }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- EQUIPE VEDETTE -->
                    <div class="col-md-6">
                        <label class="form-label">Équipe Vedette</label>
                        <select name="equipe_vedette_id" class="form-select" required>
                            <option value="">-- Choisir --</option>
                            @foreach($equipesVedette as $e)
                                <option value="{{ $e->id }}">{{ $e->nom }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- REMORQUE -->
                    <div class="col-md-6">
                        <label class="form-label">Remorque</label>
                        <select name="remorque_id" class="form-select" required>
                            <option value="">-- Choisir --</option>
                            @foreach($remorques as $r)
                                <option value="{{ $r->id }}">{{ $r->nom }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- EQUIPE REMORQUE -->
                    <div class="col-md-6">
                        <label class="form-label">Équipe Remorque</label>
                        <select name="equipe_remorque_id" class="form-select" required>
                            <option value="">-- Choisir --</option>
                            @foreach($equipesRemorque as $e)
                                <option value="{{ $e->id }}">{{ $e->nom }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- QUAI -->
                    <div class="col-md-6">
                        <label class="form-label">Quai</label>
                        <select name="quai_id" class="form-select" required>
                            <option value="">-- Choisir --</option>
                            @foreach($quais as $q)
                                <option value="{{ $q->id }}">{{ $q->nom }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- PRESTATION -->
                    <div class="col-md-6">
                        <label class="form-label">Prestation</label>
                        <select name="prestation_id" class="form-select" required>
                            <option value="">-- Choisir --</option>
                            @foreach($prestations as $p)
                                <option value="{{ $p->id }}">{{ $p->nom }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- STATUS -->
                    <div class="col-md-6">
                        <label class="form-label">Statut</label>
                        <select name="status" class="form-select" required>
                            <option value="">-- Choisir --</option>
                            <option>Prévue</option>
                            <option>En cours</option>
                            <option>Terminée</option>
                            <option>Annulée</option>
                        </select>
                    </div>

                </div>

                <!-- BUTTONS -->
                <div class="mt-5 d-flex justify-content-between">

                    <a href="{{ route('escales.index') }}" class="btn btn-outline-secondary px-4">
                        ⬅ Retour
                    </a>

                    <button type="submit" class="btn btn-primary px-5 fw-semibold">
                        💾 Enregistrer
                    </button>

                </div>

            </form>

        </div>
    </div>

</div>

</body>
</html>
