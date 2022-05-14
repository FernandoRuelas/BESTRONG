



function mostrarDatos(id){
/*
  d= datos.split('||');
  
  $('#fecha').val(d[0]);
  $('#objetivo').val(d[1]);
  $('#estatura').val(d[2]);
  $('#peso').val(d[3]);
  $('#actividades').val(d[4]);
  $('#alergias').val(d[5]);
  $('#edad').val(d[6]);
  $('#horaDormir').val(d[7]);
  $('#horaDespertar').val(d[8]);
  $('#lesiones').val(d[9]);
  $('#enfermedades').val(d[10]);
  $('#locacionEntreno').val(d[11]);
  $('#comentario').val(d[12]);
  $('#horaEntreno').val(d[13]);
*/


$.ajax({
data: 'id='+id,
type:'POST',
url: 'vistas/CoreClients.php',
success:function(response){
  if(!response.Error){
    $('#fecha').val(response.fecha);
    $('#objetivo').val(response.objetivo);
    $('#estatura').val(response.estatura);
    $('#peso').val(response.peso);
    $('#actividades').val(response.actividades);
    $('#alerjias').val(response.alergias);
    $('#edad').val(response.edad);
    $('#horaDormir').val(response.horaDormir);
    $('#horaDespertar').val(response.horaDespertar);
    $('#lesiones').val(response.lesiones);
    $('#enfermedades').val(response.enfermedades);
    $('#locacionEntreno').val(response.locacionEntreno);
    $('#comentario').val(response.comentario);
    $('#horaEntreno').val(response.horaEntreno);
    $('#situacionGym').val(response.situacionGym)
    
    //$('#imagen1').html("<img src=\""+ dataimage/jpeg, base64,base64_encode(response.imagen1) +"\" />");
    //document.getElementById()
   // $('#imagen1').html("<img src=\""+response.imagen1+"\" />");
  }else{
    alert(response.Message);
  }

}
});


}

