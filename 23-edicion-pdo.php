<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UFT-8">
        <meta name="viewport" content="windth=device-widt, initial-scale=1.0">
        <title>Edicion de paciente </title>
</head>
<body>
    <h1>ACTUALISACION DEL PACIENTE</h1>
    <form id="formulario" action="23-actualizacion.php" method="post">
        <label for ="nombre">Nombres: </label>
        <input type = "text" id="nombre" name ="nombre" required><br>
        <label for ="apellido ">Apellidos: </label>
        <input type ="text" id ="apellido" name ="apellido"><br>
        <label for ="edad" >Edad: </label>
        <input type ="text" id ="edad" name ="edad"><br>
        <label for ="talla" >Talla(cm): </label>
        <input type ="text" id ="talla" name ="talla"><br>
        <label for ="peso" >Peso: </label>
        <input type ="text" id ="peso" name ="peso"><br>

        <h2><u>Sintomas</u></h2>
        <input type="checkbox" name ="tos" id = "tos">
        <label for ="fiebre">Tos</label><br>
        <input type="checkbox" name ="fiebre" id = "fiebre">
        <label for ="fiebre">Fiebre</label><br>
        <input type="checkbox" name ="disnea" id = "disnea">
        <label for ="fiebre">Disnea</label><br>
        <input type="checkbox" name ="dolor_muscular" id = "dolor_muscular">
        <label for ="fiebre">Dolor muscular</label><br>
        <label for="fecha">**Fecha de vacunacion:**</label>
        <input type="date" id ="fecha" name="fecha">
        <div class="Botones">
            <br>
            <button type ="submit">Guardar</button>
            <button>Cancelado</button>
</div>
</form>
</body>
</html> 


