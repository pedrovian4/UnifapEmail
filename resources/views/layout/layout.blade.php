<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/d/d3/Bras%C3%A3o_UNIFAP.png" type="image/x-icon">
    <title>Criação de Email Corporativo - Unifap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<style>
    #main{
        margin-top:8%; 
    }
</style>
<body data-bs-theme="dark">


 @section('navbar')
    <nav class="navbar navbar-expand-lg bg-body-tertiary"  >
        <div class="container-fluid">
            <a class="navbar-brand  " href="#">
                <img src="https://upload.wikimedia.org/wikipedia/commons/d/d3/Bras%C3%A3o_UNIFAP.png" alt="Logo" width="40"  class="d-inline-block align-text-top">
                UNIFAP
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" id="create_email" href="/">Criar E-mail Institucional</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="email_problems" href="/problems">Problemas na criação do E-mail</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="user_change" href="/newUser">Solicitar Mudança de usuário</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>
 @show
 @section('main')
 @show


 @section('add-js')
 @show
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>