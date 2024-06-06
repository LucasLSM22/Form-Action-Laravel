<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jão</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
        crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</head>

<body class="bg-dark">

    <div class="container text-center">
        <div class="row">
            <div class="col-md-3"></div> <!-- Adiciona espaço vazio no lado esquerdo -->
            <div class="col-md-6 bg-white" id="div-principal">
            <nav class="navbar navbar-expand-lg  ">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">
              <img src="/img/logo.jpg" alt="Logo" width="80" height="68" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="inicio">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="quemsomos">história - Quem Somos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contato">Contato</a>
                                </li>
                            </ul>
                        </div>
          </div>
        </nav>
                <div>
                    <form action="/contato" method="POST" style="margin-top: 20px;">
                        @csrf
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" required>
                        </div>
                        <div class="mb-3">
                            <label for="telefone" class="form-label">Telefone</label>
                            <input type="text" class="form-control" id="telefone" name="telefone" required>
                        </div>
                        <div class="mb-3">
                            <label for="endereco" class="form-label">Endereço</label>
                            <input type="text" class="form-control" id="endereco" name="endereco" required>
                        </div>
                        <div class="mb-3">
                            <label for="sexo" class="form-label">Sexo</label>
                            <select class="form-select" id="sexo" name="sexo" required>
                                <option value="" disabled selected>Selecione o sexo</option>
                                <option value="masculino">Masculino</option>
                                <option value="feminino">Feminino</option>
                                <option value="outro">Outro</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Enviar</button>

                        @if(isset($data))
                        <div class="mt-5">
                            <h2>Dados Recebidos</h2>
                            <ul class="list-group">
                                <li class="list-group-item"><strong>Nome:</strong> {{ $data['nome'] }}</li>
                                <li class="list-group-item"><strong>Telefone:</strong> {{ $data['telefone'] }}</li>
                                <li class="list-group-item"><strong>Endereço:</strong> {{ $data['endereco'] }}</li>
                                <li class="list-group-item"><strong>Sexo:</strong> {{ $data['sexo'] }}</li>
                            </ul>
                        </div>
                        @endif
                    </form>
                </div>
                
            </div>
            <div class="col-md-3"></div> <!-- Adiciona espaço vazio no lado direito -->
        </div>
    </div>
</body>

</html>
