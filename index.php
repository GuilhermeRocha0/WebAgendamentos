<!DOCTYPE html>

<html>
    <head>
        <!-- Metas -->
        <meta charset="utf-8">
        <!-- <meta http-equiv="Content-Security-Policy" content="default-src 'self' data: gap: https://ssl.gstatic.com 'unsafe-eval'; style-src 'self' 'unsafe-inline'; media-src *; img-src 'self' data: content:;"> -->
        <meta name="format-detection" content="telephone=no">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
        <meta name="color-scheme" content="light dark">
        
        <!-- Styles -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">

        <!-- Scripts -->
        <script src="bootstrap/js/bootstrap.js"></script>

         <!-- Title -->
         <title>Agendamento Web - Cadastrar</title>
    </head>
    <body>
        <div class="paginas">
            
        </div>
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="index.php">Agendamento Web</a>
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Opções
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="index.php">Cadastrar</a></li>
                                <li><a class="dropdown-item" href="consultar.php">Consultar</a></li>
                             </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="row">
                <div class="card mb-3 col-12">
                    <div class="card-body">
                        <h5 class="card-title">Cadastrar - Agendamento de Potenciais Clientes</h5>
                        <p class="card-text">Sistema utilizado para agendamento de serviços</p>
                        <p>
                            <form action="insert.php" method="POST" id="form" name="form">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nome:</label>
                                    <input type="text" class="form-control" name="txtNome" id="txtNome">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Telefone:</label>
                                    <input type="text" class="form-control" name="txtTelefone" id="txtTelefone" placeholder="(xx) xxxxx-xxxx">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Origem:</label>
                                    <select type="text" class="form-control" name="txtOrigem" id="txtOrigem">
                                        <option>Celular</option>
                                        <option>Fixo</option>
                                        <option>Whatsapp</option>
                                        <option>Facebook</option>
                                        <option>Instagram</option>
                                        <option>Google Meu Negócio</option>
                                    </select>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Data do Contato:</label>
                                    <input type="date" class="form-control" name="txtDataContato" id="txtDataContato">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Observação:</label>
                                    <textarea type="text" class="form-control" name="txtObservacao" id="txtObervacao" rows="3"></textarea>
                                 </div>
                                 <br>
                                <button type="submit" id="btnInserir" class="btn btn-primary">Cadastrar</button>
                            </form>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>