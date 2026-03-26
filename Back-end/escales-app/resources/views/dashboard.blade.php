<!DOCTYPE html>
<html>
<head>

<title>Dashboard - Marsa Maroc</title>

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
font-size:24px;
font-weight:bold;
}

.card{
border-radius:15px;
transition:0.3s;
}

.card:hover{
transform:scale(1.05);
}

</style>

</head>

<body>

<div class="header">
Gestion Portuaire - Marsa Maroc
</div>

<div class="container mt-5">

<div class="row g-4">

<div class="col-md-4">
<a href="/escales" style="text-decoration:none;">
<div class="card shadow text-center p-4">
<h3>Escales</h3>
<p>Gérer les escales des navires</p>
</div>
</a>
</div>

<div class="col-md-4">
<a href="/pilotes" style="text-decoration:none;">
<div class="card shadow text-center p-4">
<h3>Pilotes</h3>
<p>Gestion des pilotes</p>
</div>
</a>
</div>

<div class="col-md-4">
<a href="/vedettes" style="text-decoration:none;">
<div class="card shadow text-center p-4">
<h3>Vedettes</h3>
<p>Gestion des vedettes</p>
</div>
</a>
</div>

</div>

</div>

</body>
</html>
