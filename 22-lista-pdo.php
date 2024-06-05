<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda de Pacientes</title>
</head>
<body>
    
    <center><h1>Busqueda de Pacientes</h1>
    </center>
    <form action="22.1-consulta-pdo.php" method="post">


   <center> <label for ="nombre">Nombres o Apellido </label>
    <input type = "text" id="nombre o apellido" name ="nombre o apellido" required><br>&nbsp;&nbsp;

    <input type="checkbox" name ="tos" id = "tos">
        <label for ="TOS">Tos</label>&nbsp;&nbsp;
        <input type="checkbox" name ="fiebre" id = "fiebre">
        <label for ="fiebre">Fiebre</label>&nbsp;&nbsp;
        <input type="checkbox" name ="disnea" id = "disnea">
        <label for ="fiebre">Disnea</label>&nbsp;&nbsp;
        <input type="checkbox" name ="dolor_muscular" id = "dolor_muscular">
        <label for ="fiebre">Dolor muscular</label>&nbsp;&nbsp;
    <button type="submit">Buscar</button><br>

    <table style="border: 3px solid red;">
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
        <?php         
            
            if(isset($_GET["consulta"]) ) {
                $pacientes=array(
                    0=>array("Nombres"=>"Juan","Edad"=>18,"Talla"=>150,"Peso"=>150,"Tos"=>1,"Fiebre"=>0,"Disnea"=>1,"dolor_muscular"=>0),
                    1=>array("Nombres"=>"Jose","Edad"=>28,"Talla"=>130,"Peso"=>150,"Tos"=>1,"Fiebre"=>0,"Disnea"=>1,"dolor_muscular"=>0),
                    2=>array("Nombres"=>"Jose","Edad"=>28,"Talla"=>130,"Peso"=>150,"Tos"=>1,"Fiebre"=>0,"Disnea"=>1,"dolor_muscular"=>0),
                    3=>array("Nombres"=>"Jose","Edad"=>28,"Talla"=>130,"Peso"=>150,"Tos"=>1,"Fiebre"=>0,"Disnea"=>1,"dolor_muscular"=>0),
                    4=>array("Nombres"=>"Jose","Edad"=>28,"Talla"=>130,"Peso"=>150,"Tos"=>1,"Fiebre"=>0,"Disnea"=>1,"dolor_muscular"=>0),
                    5=>array("Nombres"=>"Jose","Edad"=>28,"Talla"=>130,"Peso"=>150,"Tos"=>1,"Fiebre"=>0,"Disnea"=>1,"dolor_muscular"=>0),
                    6=>array("Nombres"=>"Jose","Edad"=>28,"Talla"=>130,"Peso"=>150,"Tos"=>1,"Fiebre"=>0,"Disnea"=>1,"dolor_muscular"=>0)
                );
                    foreach ($pacientes as $row) {
                        echo "<tr>";
                        echo "<td>".$row["Nombres"]."</td>";
                        echo "<td>".$row["Edad"]."</td>";
                        echo "<td>".$row["Talla"]."</td>";
                        echo "<td>".$row["Peso"]."</td>";
                        echo "<td>".($row["Tos"]==1 ? "Si" : "No")."</td>";
                        echo "<td>".($row["Fiebre"]==1 ? "Si" : "No")."</td>";
                        echo "<td>".($row["Disnea"]==1 ? "Si" : "No")."</td>";
                        echo "<td>".($row["dolor_muscular"]==1 ? "si" : "no")."<td/>";
                        echo "<td>
                        <a href ='23-edicion-pdo.php?'><button  type='button'>Editar</button></a>
                        <button>Eliminar</button></td>";
                        echo "</tr>";
                        //http://localhost/YONA/php-ejemplos/23-edicion-pdo.php
                    }    
            }
        ?>        
    </table>
    </form>
</body>
</html>
