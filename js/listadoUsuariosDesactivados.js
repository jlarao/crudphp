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



const restaurar = (id) => {
    console.log(id);
    if(id !== undefined && id !='' ){
        $.ajax({
            url: url ,
            type: "POST",
            data:{
                id : id,
                method: "restaurar",
            },
            success: function(data){
                data = JSON.parse(data)
                Toast.fire({
                    icon: "success",
                    title: "Usuario activado correctamente"
                  });
                  
                setTimeout(function(){ getDatas(1); }, 1500);
    
                $('#loading').addClass('d-none');
                
            },
            error: function(){
                $('#loading').addClass('d-none');
                // console.log("Error");
            }
        });
    }
}

const Toast = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.onmouseenter = Swal.stopTimer;
      toast.onmouseleave = Swal.resumeTimer;
    }
  });
const ver = (id) => {
    console.log(id);    
    location.replace('ver.php?id=' + id);
}


$(document).ready(function(){
    url = window.location.href ;
    console.log(url);
    console.log("JQuery loaded successfully"); 
    // $('#loading').removeClass('d-none');
    getDatas(1);        
});