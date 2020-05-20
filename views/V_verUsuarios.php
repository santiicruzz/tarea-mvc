<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Ejercicio MvC</title>
  </head>
  <body>
        <div class="container-fluid text-center py-2">
            <h1>Usuarios Registrados En El Sistema</h1>
            <div class="container py-3">
                <table class="table table-striped table-bordered table-hover table-dark">
                    <thead>
                        <tr>
                            <th colspan="3">USUARIOS</th>
                        </tr>
                        <tr>
                            <th>Usuarios</th>                
                            <th>Nombre</th>                
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($usuarios as $user){
                                echo "<tr>";
                                echo "<td>".$user['username']."</td>";                   
                                echo "<td>".$user['nombre']."</td>";
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="container bg-warning py-2">
                <div class="row">
                    <div class="col-8">
                        <h3>Entendiendo MvC</h3>
                        <P>Es un estilo de arquitectura de software que separa los datos de una aplicación, la interfaz de usuario, y la lógica de control en tres componentes distintos.</P>   
                    </div>
                    <div class="col-4">
                        <div class="bg-secundary">
                            <img src="imagen/MVC.png" width="120" height="120" alt="">
                        </div>    
                    </div>
                </div>                                     
            </div>                     
        </div>
        <footer>
            <div class="container text-center bg-dark text-white py-3">
                <div class="row">
                    <div class="col-6">
                       <h3>Brian Santiago Cruz Garcia</h3> 
                    </div>
                    <div class="col-6">
                        <h4><a href="https://github.com/santiicruzz/tarea-mvc">Perfil GitHub</a></h4>
                    </div>
                </div>            
            </div>
        </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>