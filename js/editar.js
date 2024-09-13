const edit_success = function() {
    Swal.fire({
        position: "top-end",
        icon: "success",
        title: "Usuario actualizada correctamente", 
        showConfirmButton: false,
        timer: 1500
        });
        setTimeout(function(){ location.replace("listadoUsuarios.php"); }, 1500);
        
}

$(document).ready(function(){
    console.log('ready editar');

    $("#editarform").submit(function(event){
        // event.preventDefault();
        console.log('submit');
        let valid = true;
        let Nombre = $("#Nombre").val();
        if(Nombre == ""){
            // alert("Por favor, introduce tu nombre");
            $("#Nombre").removeClass("is-valid");
            $("#Nombre").addClass("is-invalid");
            valid = false;
        }else{
            $("#Nombre").removeClass("is-invalid");
            $("#Nombre").addClass("is-valid");
        }

        let Edad = $("#Edad").val();
        if(Edad == ""){
            // alert("Por favor, introduce tu edad");
            $("#Edad").addClass("is-invalid");
            $("#Edad").removeClass("is-valid");
            valid = false;
        }else{
            $("#Edad").addClass("is-valid");
            $("#Edad").removeClass("is-invalid");
        }

        let Email1 = $("#Email1").val();
        if(Email1 == ""){
            // alert("Por favor, introduce tu correo");
            $("#Email1").addClass("is-invalid");
            $("#Email1").removeClass("is-valid");
            valid = false;
        }else{
            $("#Email1").addClass("is-valid");
            $("#Email1").removeClass("is-invalid");
        }

        let Telefono = $("#Telefono").val();
        if(Telefono == ""){
            // alert("Por favor, introduce tu telefono");
            $("#Telefono").addClass("is-invalid");
            $("#Telefono").removeClass("is-valid");
            valid = false;
        }else{
            $("#Telefono").addClass("is-valid");
            $("#Telefono").removeClass("is-invalid");
        }

        let Direccion = $("#Direccion").val();
        if(Direccion == ""){
            // alert("Por favor, introduce tu dirección");
            $("#Direccion").addClass("is-invalid");
            $("#Direccion").removeClass("is-valid");
            valid = false;
        }else{
            $("#Direccion").addClass("is-valid");
            $("#Direccion").removeClass("is-invalid");
        }

        let Ciudad = $("#Ciudad").val();
        if(Ciudad == ""){
            // alert("Por favor, introduce tu ciudad");
            $("#Ciudad").addClass("is-invalid");
            $("#Ciudad").removeClass("is-valid");
            valid = false;
        }else{
            $("#Ciudad").addClass("is-valid");
            $("#Ciudad").removeClass("is-invalid");
        }

        let Pais = $("#Pais").val();
        if(Pais == ""){
            // alert("Por favor, introduce tu pais");
            $("#Pais").addClass("is-invalid");
            $("#Pais").removeClass("is-valid");
            valid = false;
        }else{
            $("#Pais").addClass("is-valid");
            $("#Pais").removeClass("is-invalid");
        }


        let Ocupacion = $("#Ocupacion").val();
        if(Ocupacion == ""){
            // alert("Por favor, introduce tu ocupación");
            $("#Ocupacion").addClass("is-invalid");
            $("#Ocupacion").removeClass("is-valid");
            valid = false;
        }else{
            $("#Ocupacion").addClass("is-valid");
            $("#Ocupacion").removeClass("is-invalid");
        }

        let EstadoCivil = $("#EstadoCivil").val(); 
        if(EstadoCivil == ""){
            // alert("Por favor, introduce tu estado civil");
            $("#EstadoCivil").addClass("is-invalid");
            $("#EstadoCivil").removeClass("is-valid");
            valid = false;
        }else{
            $("#EstadoCivil").addClass("is-valid");
            $("#EstadoCivil").removeClass("is-invalid");
        }

        if(valid){
            // $("#addform").submit();
            console.log('submit valid');
        }else{
            event.preventDefault();
            return;
        }

    });

    
});

