<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda de Pacientes</title>
</head>
<body><center>
    <center><h1>Busqueda de Pacientes</h1></center>
    <!---<form action="22.1-consulta-pdo.php" method="POST">-->
    <input type="text" placeholder ="Escribe aqui" name="nombre" id="nombre" /><br>
        <label id ="tos" name ="tos">Tos</label><input type="checkbox" for="tos">&nbsp;&nbsp;
        <button type="button" onclick="buscarPacientes();">Buscar</button>
        <table style="border: 3px solid black;">
</center>
        <tr>
            <td>Paciente</td>&nbsp;&nbsp;&nbsp;
            <td>Edad</td>
            <td>Talla</td>
            <td>Peso</td>
            <td>Tos</td>
            <td>Fiebre</td>
            <td>Disnea</td>
            <td>Dolor muscular</td>
            <td>Acciones</td>
        </tr>
</table>
<!--</form> -->
<script type="text/javascript"
src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="25.1-ajax.js"></script>
</center></body>
</html>