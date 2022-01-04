$(buscar_datos());

function search_data(consulta){
    $.ajax({
        url: url+"publico/modelo/Curso_Modelo.php",
        type: "POST",
        dataType: "html",
        data: {consulta: consulta},
    })
    .done(function(respuesta){
        $("#datos").html(respuesta);
    })
    .fail(function(){
        console.log("Error")
    });
}