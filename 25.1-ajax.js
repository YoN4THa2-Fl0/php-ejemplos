function buscarPacientes() {
    const $nombre = $("#nombre").val();
    let datos = {
        nombre: $nombre
    };
    $.ajax({
        url: "26-ajax-pdo.php",
        type: "post",
        data: datos,
        success: function(result) {
            console.log(result);
            const pacientes = $.parseJSON(result);
            $("#tabla tr:not(:first)").remove(); // Clear existing rows except for the header
            pacientes.forEach(item => {
                agregarFilas("#tabla", item);
            });
        }
    });
    return;
}

function agregarFilas(id, paciente) {
    const html =
        "<tr>" +
        "<td>" + paciente.nombres + "</td>" +
        "<td>" + paciente.edad + "</td>" +
        "<td>" + paciente.talla_m + "</td>" +
        "<td>" + paciente.peso_kg + "</td>" +
        "<td>" + (paciente.sintoma_tos ? "Sí" : "No") + "</td>" +
        "<td>" + (paciente.sintoma_fiebre ? "Sí" : "No") + "</td>" +
        "<td>" + (paciente.sintoma_disnea ? "Sí" : "No") + "</td>" +
        "<td><button type='button' onclick=editar('" + paciente.nombres + "','" + paciente.edad + "','" + paciente.talla_m + "','" + paciente.peso_kg + "','" + paciente.sintoma_tos + "','" + paciente.sintoma_fiebre + "','" + paciente.sintoma_disnea + "');>Editar</button></td>" +
        "</tr>";
    $(id + " tr:last").after(html);
}

function editar(nombres, edad, talla_m, peso_kg, sintoma_tos, sintoma_fiebre, sintoma_disnea) {
    $('#exampleModal').modal('show');
    $("#nombres2").val(nombres);
    $("#edad2").val(edad);
    $("#talla2").val(talla_m);
    $("#peso2").val(peso_kg);
    $("#tos2").prop('checked', sintoma_tos === "Sí");
    $("#fiebre2").prop('checked', sintoma_fiebre === "Sí");
    $("#disnea2").prop('checked', sintoma_disnea === "Sí");
}

function actualizar() {
    const nombre = $("#nombres2").val();
    const edad = $("#edad2").val();
    const talla = $("#talla2").val();
    const peso = $("#peso2").val();
    const tos = $("#tos2").is(':checked') ? "Sí" : "No";
    const fiebre = $("#fiebre2").is(':checked') ? "Sí" : "No";
    const disnea = $("#disnea2").is(':checked') ? "Sí" : "No";
    
    let datos = {
        nombres: nombre,
        edad: edad,
        talla_m: talla,
        peso_kg: peso,
        sintoma_tos: tos,
        sintoma_fiebre: fiebre,
        sintoma_disnea: disnea
    };

    $.ajax({
        url: "26-ajax-pdo.php",
        type: "post",
        data: datos,
        success: function(response) {
            console.log(response);
            $('#exampleModal').modal('hide');
            buscarPacientes();
        }
    });
}
