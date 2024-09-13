let url = "";

const getDatas = (page) => {
    $('#loading').removeClass('d-none');

    $.ajax({
        url: url ,
        type: "POST",
        data:{
            page : page,
            method: "GET",
        },
        success: function(data){
            data = JSON.parse(data)
            $("#table_crud > tbody").html(data.data);
            // console.log((data.data));

            $("#pagination").html(data.pagination);
            $("#total").html(data.total);
            $(".page-item").click(function(){
                clicPagination(this);
            });

            $('#loading').addClass('d-none');
        },
        error: function(){
            $('#loading').addClass('d-none');
            // console.log("Error");
        }
    });
}

const clicPagination = (element) => {
    console.log(element);
    if(element.ariaLabel !== 'undefined'){
        getDatas(element.ariaLabel);

    }else{
        getDatas(1);
    }

    // event.preventDefault();
}

const baja_logica = (id) => {
    console.log(id);
    Swal.fire({
        title: "Estas seguro que desea deshabilitar este usuario?",
        showDenyButton: true,
        showCancelButton: false,
        confirmButtonText: "Si",
        denyButtonText: `No`
      }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            $('#loading').removeClass('d-none');
            if(id !== undefined && id != ''){
                $.ajax({
                    url: url ,
                    type: "POST",
                    data:{
                        id : id,
                        method: "baja_logica",
                    },
                    success: function(data){
                        data = JSON.parse(data)
                        
            
                        $('#loading').addClass('d-none');
                        getDatas(1);
                    },
                    error: function(){
                        $('#loading').addClass('d-none');
                        // console.log("Error");
                    }
                });
            }
          Swal.fire("Informacion actualizada", "", "success");
        } else if (result.isDenied) {
        //   Swal.fire("Changes are not saved", "", "info");
        }
      });

}

const baja_fisica = (id) => {
    console.log(id);
    Swal.fire({
        title: "Estas seguro que deseas eliminar este usuario, esta accion no se puede deshacer?",
        showDenyButton: false,
        showCancelButton: true,
        confirmButtonText: "Si",
        denyButtonText: `No`
      }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
          Swal.fire("Informacion actualizada", "", "success");
          if(id !== undefined && id != ''){
            $.ajax({
                url: url ,
                type: "POST",
                data:{
                    id : id,
                    method: "baja_fisica",
                },
                success: function(data){
                    data = JSON.parse(data)
                    
        
                    $('#loading').addClass('d-none');
                    getDatas(1);                
                },
                error: function(){
                    $('#loading').addClass('d-none');
                    // console.log("Error");
                }
            });
        }
        } else if (result.isDenied) {
        //   Swal.fire("Changes are not saved", "", "info");
        }
      });

    
}

const editar = (id) => {
    if(id !== undefined && id != ''){
        location.replace('editar.php?id=' + id);
    }
}

const ver = (id) => {
    console.log(id);
    if(id !== undefined && id != ''){        
        location.replace('ver.php?id=' + id);
    }
}
$(document).ready(function(){
    url = window.location.href ;
    console.log(url);
    console.log("JQuery loaded successfully"); 
    // $('#loading').removeClass('d-none');
    getDatas(1);        
});

