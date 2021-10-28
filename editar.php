<?php

    include("selectUpdate.php");

?>

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
                        <h5 class="card-title">Editar Agendamentos</h5>
                        <p class="card-text">Sistema utilizado para agendamento de serviços</p>
                        <p>
                            <form action="update.php" method="POST" id="form" name="form">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nome:</label>
                                    <input type="text" class="form-control" name="txtNome" id="txtNome"
                                    value="<?php echo $nome ?>">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Telefone:</label>
                                    <input type="text" class="form-control" name="txtTelefone" id="txtTelefone" placeholder="(xx) xxxxx-xxxx"
                                    value="<?php echo $telefone ?>">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Origem:</label>
                                    <select type="text" class="form-control" name="txtOrigem" id="txtOrigem" value="<?php echo $origem ?>">
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
                                    <input type="date" class="form-control" name="txtDataContato" id="txtDataContato" 
                                    value="<?php echo $data_contato ?>">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Observação:</label>
                                    <textarea type="text" class="form-control" name="txtObservacao" id="txtObervacao" rows="3"><?php echo $observacao ?></textarea>
                                </div>
                                <br>
                                <input type="hidden" name="txtId" id="txtId" value="<?php echo $id ?>">
                                <button type="submit" name="btnUpdate" id="btnUpdate" class="btn btn-primary">Editar</button>
                            </form>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>