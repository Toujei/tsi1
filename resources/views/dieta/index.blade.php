<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dietas</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    
    <style>
        
        .navbar {
            background-color: #4CAF50; 
        }
        .navbar .nav-link.active {
            color: #fff !important;
        }
    
        .dropdown-menu {
            background-color: #4CAF50; 
        }
      
        .navbar-toggler-icon {
            background-color: #fff; 
        }
        
        .container {
            background-color: #f2f2f2; 
            padding: 20px;
            border-radius: 10px;
        }
    </style>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('home.index')}}">Inicio</a>
                </li>
            
                <li class="nav-item dropdown">
                
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Servicios
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{route('home.login')}}">Iniciar sesion</a></li>
                    
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div class="container mt-5">
     <form action="{{ route('dieta.index') }}" method="GET">
        <select id="dieta" name="tipo" class="form-control" onchange="this.form.submit()">
            @foreach($tipos as $tipo)
                <option value="{{ $tipo->tipo_id }}" @if(request('tipo') == $tipo->tipo_id) selected @endif>{{ $tipo->tipo_id }}</option>
            @endforeach
        </select>
    </form>


    <div class="container">
        <div class="row">
            @foreach ($tipos as $tipo)
                @if ($tipo->tipo_id == request('tipo'))
                    @foreach ($tipo->dietas as $dieta)
                        
                            <div class="col-sm-4 d-flex">
                                <div class="card flex-fill custom-card">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $dieta->nombre }}</h5>
                                        <h6 class="card-subtitle mb-2 text-body-secondary">tipo: {{$tipo->tipo_id}}</h6>

                                    </div>

                                </div>
                            </div>
                        
                    @endforeach
                @endif
            @endforeach
        </div>
    </div>

</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 
</body>
</html>
