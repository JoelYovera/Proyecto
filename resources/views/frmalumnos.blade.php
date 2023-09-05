<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <style>
        .contenedor{
            width: 500px;
            margin: 0 auto;
            margin-top: 26px;
        }
    </style>
</head>
<body>
    
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">PB</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">INCIO <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">CONSULTA</a>
            </li>
           
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="BUSCAR">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">BUSCAR</button>
          </form>
        </div>
      </nav>
    <div class="contenedor">
        <form action="{{route('guardaralumno')}}" method="post">
        {{csrf_field()}}

        <div class="form-group">
            <label for="validationServeo1">Id Alumno</label>
            <input type="text" class="form-control" name="id" id="validationServeo1" aria-describedby="validationServer05Feedback" required >
            <div class="valid-feedback">
            </div>
        </div>

        <div class="form-group">
            <label for="validationServeo2">Nombres</label>
            <input type="text" class="form-control" name="nombre" id="validationServeo2" aria-describedby="validationServer05Feedback" required>
            <div class="valid-feedback">
            </div>
        </div>

        <div class="form-group">
            <label for="validationServeo3">Apellidos</label>
            <input type="text" class="form-control" name="apellidos" id="validationServeo3" aria-describedby="validationServer05Feedback" required>
            <div class="valid-feedback">
            </div>
        </div>

        <div class="form-group">
            <label for="validationServeo4">Fecha de Nacimiento</label>
            <input type="date" class="form-control" name="fnacimiento" id="validationServeo4" aria-describedby="validationServer05Feedback" required>
            <div class="valid-feedback">
            </div>
        </div>

        <div class="form-group">
            <label for="validationServeo5">Telefono</label>
            <input type="text" class="form-control" name="telefono" id="validationServeo5" aria-describedby="validationServer05Feedback" required>
            <div class="valid-feedback">
            </div>
        </div>

        <div class="form-group">
            <label for="validationServeo6">Email</label>
            <input type="text" class="form-control" name="email" id="validationServeo6" aria-describedby="validationServer05Feedback" required>
            <div class="valid-feedback">
            </div>
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Guardar Datos">
            <a class="btn btn-primary" href="{{route('listaralumno')}}">Listar Alumnos</a>
        </div>



        </form>
    </div>


    


   
</body>
</html>