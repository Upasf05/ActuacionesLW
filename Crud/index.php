<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" contenten="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5/6Lk5e5z5l5l5l5l5l5l5l5l5l5l5l5l5l5" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons@1.13.1/font/booystrap-icons.min.css">
        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            ol{
                list-style: none;
            }
            a{
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <divc class="row">
                <div class="col-sm-12 col md-4 col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <p>Registro de Información</p>
                        </div> 
                        <div class="card-body">
                            <form action="insertar.php" method="POST">
                                <div>
                                    <label for="" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" name="nombre">
                                </div>
                                <div>    
                                    <label for="" class="form-label">Apellido</label>
                                    <input type="text" class="form-control" name="apellido">
                                </div>  
                                <div>  
                                    <label for="" class="form-label">Cedula</label>
                                    <input type="number" class="form-control" name="cedula">
                                </div>
                                <div>
                                    <label for="" class="form-label">Correo</label>
                                    <input type="text" class="form-control" name="correo">
                                </div>
                                <div>
                                    <input type="submit" value="Insert" name="action">
                                    <input type="submit" value="Update" name="action">
                                </div>
                            </form>        
                        </div>  
                </div>
                <div class="col-sm-12 col md-4 col-lg-8">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>Id</td>
                                <td>Nombre</td>
                                <td>Apellidos</td>
                                <td>Celula</td>
                                <td>Correo</td>
                                <td>
                                    <ol class="d-flex justify content: play2">
                                        <li><a href=""><i class="bi bi-pen-fill"></i></a></li>
                                        <li><a href=""><i class="bi bi-trash-fill"></i></a></li>
                                    </ol>    
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                          <tr>
                              <td>1</td>
                              <td>Juan</td>
                              <td>Perez</td>
                              <td>1234567890</td>
                              <td>juanperez@correo.com</td>
                              <td>
                                <ol>
                                    <li><a href=""><i class="bi bi-pen-fill"></i></a></li>
                                    <li><a href=""><i class="bi bi-trash-fill"></i></a></li>
                                </ol>
                              </td>  
                        </tbody>
                    </table>

                </div>  

          

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFY1zcLA8N1+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>        
        
        