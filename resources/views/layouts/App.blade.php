<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Sena</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="d-flex flex-column min-vh-100">

    @include('includes.navbar')
     
    <!-- Alerta Flotante -->
    @if(session('success'))
    <div class="position-fixed top-0 end-0 p-3" style="z-index: 1080; margin-top: 50px;">
        <div class="alert alert-success alert-dismissible fade show shadow-lg border-0 d-flex align-items-center gap-2" role="alert">
            <i class="bi bi-check-circle-fill fs-5"></i>
            <div>{{ session('success') }}</div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
    @endif

    <!-- Contenido Principal (flex-grow-1 empuja el footer hacia abajo) -->
    <main class="flex-grow-1">
        <div class="container mt-4 mb-5">
            @yield('content')
        </div>
    </main>

    <!-- Footer (Ocupa el 100% de ancho y se fija abajo) -->
    <footer class="w-100 mt-auto">
        @include('includes.footer')
    </footer>

    <!-- JavaScript de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Buscamos la alerta flotante en la pagina
        let alertElement = document.querySelector('.alert');
        
        if (alertElement) {
            // Configuramos un temporizador de 3 segundos
            setTimeout(function() {
                // Utilizamos la API de Bootstrap para cerrar la alerta de forma animada
                let alert = new bootstrap.Alert(alertElement);
                alert.close();
            }, 3000); 
        }
    });
</script>
</body>
</html>