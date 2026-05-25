<!DOCTYPE html>
<html>
<head>

    <title>Sucursales</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">

    <h1>Lista de Sucursales</h1>
    <a href="/sucursales/create" class="btn btn-primary mb-3">
    Nueva Sucursal
</a>

    <table class="table table-bordered">

        <tr>
            <th>ID</th>
            <th>CIUDAD</th>
            <th>DIRECCION</th>
            <th>TELEFONO</th>
            
            <th>ACCIONES_</th>
        </tr>

        @foreach($sucursales as $sucursal)

        <tr>

            <td>{{ $sucursal->id }}</td>

            <td>{{ $sucursal->ciudad }}</td>

            <td>{{ $sucursal->direccion_fisica }}</td>

            <td>{{ $sucursal->telefono_contacto }}</td>
            <td>

    <a href="/sucursales/{{ $sucursal->id }}/edit"
       class="btn btn-warning btn-sm">

        Editar

    </a>

    <form action="/sucursales/{{ $sucursal->id }}"
          method="POST"
          style="display:inline;">

        @csrf

        @method('DELETE')

        <button type="submit"
                class="btn btn-danger btn-sm">

            Eliminar

        </button>

    </form>

</td>

        </tr>

        @endforeach

    </table>

</div>

</body>
</html>