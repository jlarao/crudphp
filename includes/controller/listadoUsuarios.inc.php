<?php

    function change_id(){
        $data = json_decode(file_get_contents('./includes/data/testAlcance.json'));
            // var_dump(isset($data[0]->deleted) && $data[0]->deleted == 1);exit;
            $new = [];
            for ($i=0; $i < count($data); $i++) {
                $b_log = 0;
                $item = array(
                    'id' => uniqid(),
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
                    'id_old' => $data[$i]->id
                ) ;

                $new[] = $item;
                            
            }

            //save in a file
            $file = fopen('./includes/data/test.json', 'w');
            fwrite($file, json_encode($new));
            fclose($file);
    }

    // ajax para recuperar los registros
    if(isset($_POST['method']) && $_POST['method'] == 'GET'){
        $path = './includes/data/test.json';
        if(!file_exists($path)){
            change_id();
        }
        $data = json_decode(file_get_contents($path));
        
        $page = $_POST['page'];
        $length = 10;
        $offset = ($page - 1) * $length;
        if(count($data) > 0){
            
            //quitar los eliminados
            $temp = [];
            for ($i=0; $i < count($data); $i++) { 
                if(isset($data[$i]->deleted) && $data[$i]->deleted == 1){
                    continue;
                }
                $temp[] = $data[$i];
            }
            $data = $temp;
            $total_registros = count($data);
            $total = (count($data)/10)+1;
            $data = array_slice($data, $offset , $length);//array, oofset, length
            $html = '';
            $length = count($data);
            for ($i=0; $i < count($data); $i++) { 
                    if(isset($data[$i]->deleted) && $data[$i]->deleted == 1){
                        continue;
                    }
                $html .= '<tr>
                            <td>'.$data[$i]->id.'</td>
                            <td>'.$data[$i]->nombre.'</td>
                            <td>'.$data[$i]->correo.'</td>
                            <td>'.$data[$i]->ocupacion.'</td>
                            <td>
                                <a href="javascript:ver(\''.$data[$i]->id.'\')" title="Ver">          <i class="text-info bi bi-eye-fill"></i></a>
                                <a href="javascript:editar(\''.$data[$i]->id.'\')" title="Editar">          <i class="text-primary bi bi-pencil-square"></i></a>
                                <a href="javascript:baja_logica(\''.$data[$i]->id.'\')" title="Baja Logica"><i class="text-warning bi bi-person-fill-down"></i></a>
                                <a href="javascript:baja_fisica(\''.$data[$i]->id.'\')" title="Baja Fisica"><i class="text-danger bi bi-person-fill-x"></i></a>
                            </td>
                        </tr>';
                        
                        $pagination = '<nav aria-label="...">
                                        <ul class="pagination">' ;
                        for ($j=1; $j <= $total; $j++) { 
                            if($j==1){
                                $pagination .= '
                                
                                <li class="page-item '.($j == $page ? 'active' : '').'" '.($j == $page ? 'aria-current="page"' : '').' aria-label="'.($j).'"><a class="page-link" href="#">'.($j).'</a>
                                </li>
                                ';
                            }else{
                                $pagination .= '
                                <li class="page-item '.($j == $page ? 'active' : '').'" '.($j == $page ? 'aria-current="page"' : '').' aria-label="'.($j).'"><a class="page-link" href="#">'.($j).'</a>
                                </li>
                                ';
                            }
                            
                            // <li class="page-item disabled" aria-label="1">
                            //         <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                            //     </li>
                            // <li class="page-item '.($j == $page ? 'active' : '').'"><a class="page-link" href="#">'.($j-1).'</a></li>

                            
                        }
                    $pagination.=
                        '                          
                        </ul>
                      </nav>';
                      /*
                      
                                                
                          <li class="page-item" aria-label="3"><a class="page-link" href="#" >3</a></li>
                          <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                          </li>

                      */ 

            }

            echo json_encode(array(
                'success' => true, 
                'data' => $html,
                'length' => $length,
                'page' => $page,
                'pagination' => $pagination,
                'total' => '<p>Total de registros: '.$total_registros.'</p>',
            ));

            exit;

        }
    }else if(isset($_POST['method']) && $_POST['method'] == 'baja_logica'){
            $id = $_POST['id'];
            //utf-8 in file_get_contents 
            $data = json_decode(file_get_contents('./includes/data/test.json'));
            $new = [];
            for ($i=0; $i < count($data); $i++) {
                $b_log = 0;
                if(isset($data[$i]->deleted) && $data[$i]->deleted == 1){
                    $b_log = 1;
                }
                if($data[$i]->id == $id){
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


            echo json_encode(array(
                'success' => true, 
                'data' => $new[0],
                
            ));

        exit;

        }else if(isset($_POST['method']) && $_POST['method'] == 'baja_fisica'){
            $id = $_POST['id'];
            //utf-8 in file_get_contents 
            $data = json_decode(file_get_contents('./includes/data/test.json'));

            // var_dump(isset($data[0]->deleted) && $data[0]->deleted == 1);exit;
            $new = [];
            for ($i=0; $i < count($data); $i++) {
                if($data[$i]->id == $id){
                    continue;
                }
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


            echo json_encode(array(
                'success' => true, 
                'data' => $new[0],
                
            ));

        exit;

        }
    
    //load
    // require_once './includes/views/Navbar.php';
     $data = json_decode(file_get_contents('./includes/data/testAlcance.json'));
    
    $data = array_slice($data, 0, 5);




 ?>