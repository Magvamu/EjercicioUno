<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Mostrar Proyecto</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">CRUD</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('proyecto.index')}}">Listar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('proyecto.create')}}">Crear</a>
                </li>
            </ul>
          </div>
        </div>
    </nav>
    <div class="d-flex justify-content-center align-items-center flex-column" style="height: calc(100vh - 56px);">
        <h1 class="mb-3">Mostrar Proyecto</h1>
        <div class="w-25">
            
            <div class="form-floating mb-3">
                <input name="cuantia" type="text" class="form-control" id="cuantia" value="{{$proyecto->cuantia}}" disabled>
                <label for="cuantia">Cuantía</label>
            </div>
            <div class="form-floating mb-3">
                <input name="fecha_inicio" type="text" class="form-control" id="fecha_inicio" value="{{$proyecto->fecha_inicio}}" disabled>
                <label for="fecha_inicio">Fecha inicio</label>
            </div>

            <div class="form-floating mb-3">
                <input name="fecha_fin" type="text" class="form-control" id="fecha_fin" value="{{$proyecto->fecha_fin}}" disabled>
                <label for="fecha_fin">Fecha fin</label>
            </div>

            <div class="form-floating mb-3">
                <input name="descripcion" type="text" class="form-control" id="descripcion" value="{{$proyecto->descripcion}}" disabled>
                <label for="descripcion">Descripción</label>
            </div>
            <div class="form-floating mb-3">
                <input name="cliente_id" type="text" class="form-control" id="cliente_id" value="{{$proyecto->cliente_id}}" disabled>
                <label for="cliente_id">Cliente</label>
            </div>

            {{-- <div class="form-floating mb-3">
                <input name="viajero_id" type="text" class="form-control" id="viajero_id" value="{{$viaje->viajeros->index->nomre}}" disabled>
                <label for="viajero_id">Viajero</label>
            </div> --}}
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>