<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Cuenta</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
   
    <style>
        
        body {
            background-color: #f2f2f2; 
        }
       
        .card {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
        }
        
        .card-header {
            background-color: #4caf50; 
            color: #fff; 
        }
      
        .btn-primary {
            background-color: #4caf50;
            border: none;
        }
        
        .btn-primary:hover {
            background-color: #45a049; 
        }
       
        .navbar {
            background-color: #4CAF50; 
            color: #fff; 
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{route('home.index')}}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{route('home.login')}}">iniciar sesion</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Registro de Cuenta</div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <p>Error:</p>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('cuentas.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="user" class="form-label">Usuario</label>
                            <input type="text" class="form-control  @error('user') is-invalid @enderror" id="user" name="user" required>
                        </div>

                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control  @error('nombre') is-invalid @enderror" id="nombre" name="nombre" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control  @error('email') is-invalid @enderror" id="email" name="email" required>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control  @error('password') is-invalid @enderror" id="password" name="password" required>
                        </div>

                        <div class="mb-3">
                            <label for="password2" class="form-label">Confirmar Contraseña</label>
                            <input type="password" class="form-control  @error('password') is-invalid @enderror" id="password2" name="password2" required>
                        </div>


                        <div class="mb-3">
                            <label for="peso" class="form-label">Peso (kg)</label>
                            <input type="number" class="form-control  @error('peso') is-invalid @enderror" id="peso" name="peso" required>
                        </div>

                        <div class="mb-3">
                            <label for="estatura" class="form-label">Estatura (cm)</label>
                            <input type="number" class="form-control @error('estatura') is-invalid @enderror" id="estatura" name="estatura" required>
                        </div>

                        <div class="mb-3">
                            <label for="cuerpo" class="form-label">Tipo de Cuerpo</label>
                            <select class="form-select  @error('cuerpo') is-invalid @enderror" id="cuerpo" name="cuerpo" required>
                                <option value="ectomorfo">Ectomorfo</option>
                                <option value="mesomorfo">Mesomorfo</option>
                                <option value="endomorfo">Endomorfo</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="estado" class="form-label">Estado</label>
                            <input type="text" class="form-control @error('estado') is-invalid @enderror" id="estado" name="estado" required>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Registrarse</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Incluye los archivos JavaScript de Bootstrap (jQuery y Popper.js son requeridos) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 
</body>
</html>
