<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Formulario Completo</title>
    <link rel="stylesheet" href="./public/lib/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="./public/css/tareas.css" />
    
</head>

<body class="bg-light p-4">
    <div class="container">
        <h2 class="mb-4">Formulario de Prueba</h2>
        <form action="server.php" method="POST" class="row g-3">

            <div class="col-md-6">
                <label class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" required>
            </div>

            <div class="col-md-6">
                <label class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" name="email" required>
            </div>

            <div class="col-md-6">
                <label class="form-label">Edad</label>
                <input type="number" class="form-control" name="edad" required>
            </div>

            <div class="col-md-6">
                <label class="form-label">Fecha de Nacimiento</label>
                <input type="date" class="form-control" name="fecha" required>
            </div>

            <div class="col-md-6">
                <label class="form-label">Contraseña</label>
                <input type="password" class="form-control" name="contrasena" required>
            </div>



            <div class="col-md-12">
                <label class="form-label">Género</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="genero" value="Masculino" required>
                    <label class="form-check-label">Masculino</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="genero" value="Femenino" required>
                    <label class="form-check-label">Femenino</label>
                </div>
            </div>

            <div class="col-md-12">
                <label class="form-label">Intereses</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="intereses[]" value="Deportes">
                    <label class="form-check-label">Deportes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="intereses[]" value="Música">
                    <label class="form-check-label">Música</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="intereses[]" value="Lectura">
                    <label class="form-check-label">Lectura</label>
                </div>
            </div>

            <div class="col-md-6">
                <label class="form-label">País</label>
                <select class="form-select" name="pais" required>
                    <option value="">Seleccionar...</option>
                    <option value="Ecuador">Ecuador</option>
                    <option value="Colombia">Colombia</option>
                    <option value="Perú">Perú</option>
                </select>
            </div>

            <div class="col-md-12">
                <label class="form-label">Comentario</label>
                <textarea class="form-control" name="comentario" rows="3"></textarea>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>
</body>

</html>