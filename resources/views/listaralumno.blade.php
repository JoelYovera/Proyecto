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
        .table{
            margin-top: 50px;
        }
        .contenedor {
            width: 1200px;
            margin: 0 auto;
            
        }
    </style>
</head>
<body>
    <div class="contenedor">
        <table class="table table table-striped">
            <thead>
                <tr>
                    <td>ID Alumno</td>
                    <td>Nombres</td>
                    <td>Apellidos</td>
                    <td>Fecha Nacimiento</td>
                    <td>Telefono</td>
                    <td>Email</td>
                    <td>Acciones</td>
                    <td>Acciones</td>
                </tr>
            </thead>
            <tbody>
            @foreach($registros as $filas)
                <tr>
                    <td>{{$filas-> idalumno}}</td>
                    <td>{{$filas-> nombre}}</td>
                    <td>{{$filas-> apellidos}}</td>
                    <td>{{$filas-> fnacimiento}}</td>
                    <td>{{$filas-> telefono}}</td>
                    <td>{{$filas-> email}}</td>
                    <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#miModal{{$filas->id}}">
                      editar
                    </button> </td>
                    <td><a class="btn btn-danger" href="{{route('eliminaralumno',['id'=>$filas->idalumno])}}">Eliminar</a></td>
                </tr>
            @endforeach
              </tbody>
             </table>
             <a href="{{route('index')}}">Ir a Inicio</a>

             {{-- Modal editar --}}
             <div class="modal fade" id="miModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h3 class="modal-title fs-5" id="exampleModalLabel">Modificar datos del Alumno</h3>
                    </div>
            <div class="modal-body">
                <form action="{{route("editaralumno")}}" method="POST">
                  @csrf
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" 
                          aria-describedby="emailHelp" name="nombre" value="{{$filas->nombre}}">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" 
                          aria-describedby="emailHelp" name="apellidos" value="{{$filas->apellidos}}">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Fecha Nacimiento</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" 
                          aria-describedby="emailHelp" name="fnacimiento" value="{{$filas->fnacimiento}}">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Telefono</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" 
                          aria-describedby="emailHelp" name="telefono" value="{{$filas->telefono}}">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" 
                          aria-describedby="emailHelp" name="email" value="{{$filas->email}}">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Modificar</button>
                  </div>
                </form>
          </div>
    </body>
</html>