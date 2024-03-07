<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Bootstrap demo</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>
  <div class="container">
    <div class="row align-items-start">
      <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">SISTEMA WEB</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Cadastrar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Consultar</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <p>
      <h5>Cadastro - Agendamento de Potenciais Clientes</h5>
      </p>

      <h6>Sistema Utilizado para agendamento de serviços.</h6>
    </div>

    <br />
    <form>
      <div class="mb-3">
        <label for="exampleInput" class="form-label">Nome</label>
        <input type="text" class="form-control" id="exampleInput" aria-describedby="emailHelp" />
      </div>
      <div class="mb-3">
        <label for="exampleInput" class="form-label">Telefone</label>
        <input type="text" class="form-control" id="exampleInput" />
      </div>
      <div class="mb-3">
        <label for="exampleInput" class="form-label">Data do Contato</label>
        <input type="date" class="form-control" id="exampleInput" />
      </div>
      <label for="exampleInput" class="form-label">Origem</label>
      <select class="form-select" aria-label="Default select example">
        <option selected>Selecione o tipo de Contato</option>
        <option value="1">Telefone Celular</option>
        <option value="2">Telefone Fixo</option>
        <option value="3">Outro</option>
      </select>
      <br />
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Observação:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>
</body>

</html>