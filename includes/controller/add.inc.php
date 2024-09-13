<?php 
// var_dump($_POST);

if(isset($_POST['Nombre'])){

    $Nombre  = $_POST["Nombre"];
    $Edad  = $_POST["Edad"];
    $Correo  = $_POST["Email1"];
    $Telefono  = $_POST["Telefono"];
    $Direccion  = $_POST["Direccion"];
    $Ciudad  = $_POST["Ciudad"];
    $Pais  = $_POST["Pais"];
    $Ocupacion  = $_POST["Ocupacion"];
    $EstadoCivil  = $_POST["EstadoCivil"];

    $data = json_decode(file_get_contents('./includes/data/test.json'));
    $total = count($data);
    $item = array(
        'id' => uniqid(),
        'nombre' => $Nombre,
        'edad' => $Edad,
        'correo' => $Correo,
        'telefono' => $Telefono,
        'direccion' => $Direccion,
        'ciudad' => $Ciudad,
        'pais' => ( $Pais),
        'ocupacion' => $Ocupacion,
        'estado_civil' => $EstadoCivil,
        'deleted' => 0,
        'id_old' => ($total + 1),
    ) ;

    $new = [];
    $new[] = $item;

            for ($i=0; $i < count($data); $i++) {
                $b_log = 0;
                if(isset($data[$i]->deleted) && $data[$i]->deleted == 1){
                    $b_log = 1;
                }

                $item = array(
                    'id' => $data[$i]->id,
                    'nombre' => ($data[$i]->nombre),
                    'edad' => $data[$i]->edad,
                    'correo' => $data[$i]->correo,
                    'telefono' => $data[$i]->telefono,
                    'direccion' => $data[$i]->direccion,
                    'ciudad' => $data[$i]->ciudad,
                    'pais' => ( $data[$i]->pais),
                    'ocupacion' => $data[$i]->ocupacion,
                    'estado_civil' => $data[$i]->estado_civil,
                    'deleted' => $b_log,
                ) ;

                $new[] = $item;
                            
            }

            //save in a file
            $file = fopen('./includes/data/test.json', 'w');
            fwrite($file, json_encode($new));
            fclose($file);

            echo '<script> document.addEventListener("DOMContentLoaded", function(event) {  add_success();});  </script>';

}else{
    
}


