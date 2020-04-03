// Evento click del boton
$(document).ready(function() {
    
    $("#Switch").change(function(){
    // Asigna o desasigna la clase black
    $("body").toggleClass('white');
    $(".toggle_switch_off").toggleClass('toggle_switch_on');
    });
});

function verifica()
{
    if(document.FormExp.base.value.length == 0)
    {
        swal(
        {
          title: 'Error',
          type: 'error',
          text: 'Falta la base',
          confirmButtonColor: '#3085d6',
          confirmButtonText: 'Ok!'        
        });
        return false;
    }
    else if(document.FormExp.exponente.value.length == 0)
    {
        swal(
        {
          title: 'Error',
          type: 'error',
          text: 'Falta el exponente',
          confirmButtonColor: '#3085d6',
          confirmButtonText: 'Ok!'        
        });
		return false;
	}
    else
    {
        swal(
        {
          title: '¡Buen trabajo!',
          type: 'success',
          confirmButtonColor: '#3085d6'
        });
        return true;
    }
}