function ConsultarNombre()
{
    //let identificacion = document.getElementById("txtIdentificacion").value;

    let identificacion = $("#txtIdentificacion").val();

    $("#txtNombre").val("");
    if(identificacion.length >= 9)
    {
    
    $.ajax({
        url: 'https://apis.gometa.org/cedulas/' + identificacion,
        method:'GET',
        success: function(data){
            $("#txtNombre").val(data.nombre);
        }
    })
}
}