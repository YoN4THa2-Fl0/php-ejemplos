function buscarPacientes() {
   const $nombre = $("#nombre").val();
   //alert ("Buscando..."+nombre);
   let datos ={
    nombre : $nombre
   };
   $.ajax({
    url :"26-ajax-pdo.php",
    type :"post",
    data : datos,
    success : function(result) {
        //console.log(result);
        debugger;
        //const  pacientes = result;
        console.log(result);
        const pacientes=$.parseJSON(result);
        pacientes.forEach(item => {
            agregarFilas("#tabla",item);
        });
    }
   })
return;
}

function agregarFilas(id,paciente) {
    const html =
    "<tr>"+
    "<td>"+paciente.nombres+"</td>"+
    "<td>"+paciente.edad+"</td>"+
    "<td>"+paciente.talla_m+"</td>"+
    "<td>"+paciente.peso_kg+"</td>"+
    "<td>"+paciente.sintomas_tos+"</td>"+
    "<td>"+paciente.sintomas_fiebre+"</td>"+
    "<td>"+paciente.sintoma_disnea+"</td>"+
    "<td><button type='button'>Editar</></td>"+
    "</tr>";
    $(id + " tr:last").after(html);
}