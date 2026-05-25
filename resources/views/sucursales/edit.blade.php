<!DOCTYPE html>
<html>
<head>

    <title>Editar Sucursal</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">

    <h1>Editar Sucursal</h1>

    <form action="/sucursales/{{ $sucursal->id }}"
          method="POST">

        @csrf

        @method('PUT')

        <div class="mb-3">

            <label>Ciudad</label>

            <input type="text"
                   name="ciudad"
                   class="form-control"
                   value="{{ $sucursal->ciudad }}">

        </div>

        <div class="mb-3">

            <label>Direccion</label>

            <input type="text"
                   name="direccion_fisica"
                   class="form-control"
                   value="{{ $sucursal->direccion_fisica }}">

        </div>

        <div class="mb-3">

            <label>Telefono</label>

            <input type="text"
                   name="telefono_contacto"
                   class="form-control"
                   value="{{ $sucursal->telefono_contacto }}">

        </div>

        <button type="submit"
                class="btn btn-success">

            Actualizar

        </button>

    </form>

</div>

</body>
</html>