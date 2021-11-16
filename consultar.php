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
         <title>Agendamento Web - Consultar</title>
    </head>
    <body>
        <!-- Page Content -->
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
                        <h5 class="card-title">Consultar - Agendamento de Potenciais Clientes</h5>
                        <p class="card-title">Sistema utilizado para agendamento de serviços</p>
                        <!-- Table -->
                        <table class="table table-responsive" style="width: auto;">
                            <thead>
                                <tr>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Telefone</th>
                                    <th scope="col">Origem</th>
                                    <th scope="col">Contato</th>
                                    <th scope="col">Observação</th>
                                    <th scope="col">Ações</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            
                            <tbody>
                            <?php
                                include("select.php");
                                while($data = mysqli_fetch_assoc($result)){
                                    echo "<tr>";
                                    echo "<td>".$data['nome']."</td>";
                                    echo "<td>".$data['telefone']."</td>";
                                    echo "<td>".$data['origem']."</td>";
                                    echo "<td>". date('d/m/Y', strtotime($data['data_contato']))."</td>";
                                    echo "<td>".$data['observacao']."</td>";
                                    echo "<td><a href='editar.php?id=$data[id]' class='btn btn-outline-primary' style='width: 72px'>Editar</a>";
                                    echo "<td><a href='delete.php?id=$data[id]' class='btn btn-outline-danger' style='width: 72px'>Excluir</a>";
                                    echo "</tr>";
                                    }
                                ?>
                            </tbody>
                        </table>
                        <!-- End Table -->

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>