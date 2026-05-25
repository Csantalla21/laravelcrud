<!DOCTYPE html>
<html>
<head>

    <title>Nueva Sucursal</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">

    <h1>Nueva Sucursal</h1>

    <form method="POST" action="/sucursales">

        @csrf

        <div class="mb-3">

            <label>Ciudad</label>

            <input type="text" name="ciudad" class="form-control">

        </div>

        <div class="mb-3">

            <label>Direccion</label>

            <input type="text" name="direccion_fisica" class="form-control">

        </div>

        <div class="mb-3">

            <label>Telefono</label>

            <input type="text" name="telefono_contacto" class="form-control">

        </div>

        <button type="submit" class="btn btn-success">
            Guardar
        </button>

    </form>

</div>

</body>
</html>