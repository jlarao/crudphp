<?php 

    $Nombre  = '';
    $Edad  = '';
    $Correo  = '';
    $Telefono  = '';
    $Direccion  = '';
    $Ciudad  = '';
    $Pais  = '';
    $Ocupacion  = '';
    $EstadoCivil  = '';

if(isset($_GET['id'])){
    

    $id = $_GET['id'];

    $data = json_decode(file_get_contents('./includes/data/test.json'));
    $total = count($data);

    $new = [];

            for ($i=0; $i < count($data); $i++) {
                if(isset($data[$i]->id) && $data[$i]->id == $id){
                    $Nombre  = $data[$i]->nombre;
                    $Edad  = $data[$i]->edad;
                    $Correo  = $data[$i]->correo;
                    $Telefono  = $data[$i]->telefono;
                    $Direccion  = $data[$i]->direccion;
                    $Ciudad  = $data[$i]->ciudad;
                    $Pais  = $data[$i]->pais;
                    $Ocupacion  = $data[$i]->ocupacion;
                    $EstadoCivil  = $data[$i]->estado_civil;
                    break;
                }                            
            }

}else{
    
}


