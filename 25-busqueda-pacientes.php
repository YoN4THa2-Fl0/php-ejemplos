<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda de Pacientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <center>
    <h1>Busqueda de Pacientes</h1>
    <input type="text" placeholder="Escribe aqui" name="nombre" id="nombre" /><br>
    <label for="tosCheckbox">Tos</label><input type="checkbox" id="tosCheckbox" name="tos">
    <button type="button" onclick="buscarPacientes();">Buscar</button>
    <table style="border: 1px solid black;" id="tabla">
        <tr>
            <td>Paciente</td>
            <td>Edad</td>
            <td>Talla</td>
            <td>Peso</td>
            <td>Tos</td>
            <td>Fiebre</td>
            <td>Disnea</td>
            <td>Acciones</td>
        </tr>          
    </table>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="25.1-ajax.js"></script>
 
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Nuevo Paciente
    </button>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Formulario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="nombres2" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" id="nombres2" name="nombres2"/>

                    <label for="apellidos2" class="form-label">Apellido:</label>
                    <input type="text" class="form-control" id="apellidos2" name="apellidos2"/>

                    <label for="edad2" class="form-label">Edad:</label>
                    <input type="text" class="form-control" id="edad2" name="edad2"/>

                    <label for="talla2" class="form-label">Talla:</label>
                    <input type="text" class="form-control" id="talla2" name="talla2"/>

                    <label for="peso2" class="form-label">Peso:</label>
                    <input type="text" class="form-control" id="peso2" name="peso2"/><br>

                    <label for="tos2" class="form-label">Tos:</label>
                    <input type="checkbox" id="tos2" name="tos2"/>&nbsp;&nbsp;

                    <label for="fiebre2" class="form-label">Fiebre:</label>
                    <input type="checkbox" id="fiebre2" name="fiebre2"/>&nbsp;&nbsp;
                    
                    <label for="disnea2" class="form-label">Disnea:</label>
                    <input type="checkbox" id="disnea2" name="disnea2"/>&nbsp;&nbsp;<Br>

                    <button type="button" class="btn btn-primary" onclick="actualizar()">Guardar</button>
                </div>
            </div>
        </div>
    </div>
    </center>
</body>
</html>
