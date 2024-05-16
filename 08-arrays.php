<?php
//caso1
$numeros = array(1,3,5,2,6);
$frutas = ["fresa","naranja","manzana","mandarina"];
print_r($numeros); //se usa para inpresiones de arreglo (print_r)
print_r($frutas);
//caso2
$estudiante = array(
    "dni"=>"432168432134",
    "edad"=>45,
    "fechanacimiento"=>"2000-01-05",
    "nombres"=>"yonathan",
    "apellidos"=>"flores",
    "semestre"=>"III",
    "deuda"=>5465132,
    "notafinal"=>11.25);
    print_r($estudiante);
    foreach($estudiante as $Key=>$value) {
        echo $Key." - ".$value."\n";
        "\n";
    }

    ///--------------------------------------------------------------------------

    //caso 3

    $estudiante1 = array(
        "dni"=>"4322134",
        "edad"=>24,
        "fechanacimiento"=>"2004-01-05",
        "nombres"=>"marcos",
        "apellidos"=>"mamani",
        "semestre"=>"III",
        "deuda"=>54647532,
        "notafinal"=>15.25);
        "\n";

        //---------------------------------------------------------------------------

        $estudiante2 = array(
            "dni"=>"4321134",
            "edad"=>25,
            "fechanacimiento"=>"2007-01-05",
            "nombres"=>"Estebam",
            "apellidos"=>"lupaca",
            "semestre"=>"III",
            "deuda"=>546532,
            "notafinal"=>18.25);
            "\n";

        //-------------------------------------------------------------------

        $estudiante3 = array(
            "dni"=>"4321155234",
            "edad"=>25,
            "fechanacimiento"=>"2017-01-05",
            "nombres"=>"Dario",
            "apellidos"=>"condori",
            "semestre"=>"III",
            "deuda"=>546532,
            "notafinal"=>16.25);
            "\n";


            $estudiantes = array($estudiante1,$estudiante2,$estudiante3);
            foreach($estudiantes as $Key1=>$estudiante) {
                echo "Estudiante N ".($Key1+1)."\n";
                foreach($estudiante as $Key=>$value) {
                    echo $Key." - ".$value."\n";
                }
            }
//---------------------------------------------------------------------------

            echo "---------------------------------------------\n";
            for($i=0 ;$i<=count ($estudiantes)-1;$i++) {
                echo "Estudiante N ".($i+1)."\n";
                echo "dni - ".$estudiantes[$i]["dni"]."\n";
                echo "edad - ".$estudiantes[$i]["edad"]."\n";
                echo "fechanacimiento - ".$estudiantes[$i]["fechanacimiento"]."\n";
                echo "nombres - ".$estudiantes[$i]["nombres"]."\n";
                echo "apellidos - ".$estudiantes[$i]["apellidos"]."\n";
                echo "semestre - ".$estudiantes[$i]["semestre"]."\n";
                echo "deuda- ".$estudiantes[$i]["deuda"]."\n";
                echo "notafinal - ".$estudiantes[$i]["notafinal"]."\n";
              }
              $estudiante3["notafinal"] =17.6;

              $equipo1 =["messi","cueva","neymar"];
              $equipo2 = ["advincula","lewandoski","ronaldhino"];
              $equipo3 = array_merge($equipo1,$equipo2);
              foreach($equipos as $Key=>$equipo){
                echo $equipo."\n";
              }



?>