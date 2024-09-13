<?php 
    // ajax para recuperar los registros
    if(isset($_POST['method']) && $_POST['method'] == 'GET'){
        
        $data = json_decode(file_get_contents('./includes/data/test.json'));
        $page = $_POST['page'];
        $length = 10;
        $offset = ($page - 1) * $length;
        if(count($data) > 0){
            $data_disabled =[];
            for ($i=0; $i < count($data); $i++) { 
                if(isset($data[$i]->deleted) && $data[$i]->deleted == 1){
                    $data_disabled[] = $data[$i];
                }
            }
            $total_registros = count($data_disabled);
            $total =((count($data_disabled))/$length)+1;
            $data = array_slice($data_disabled, $offset , $length);//array, oofset, length
            $html = '';
            $length = count($data_disabled);
            $pagination = '';
            for ($i=0; $i < count($data_disabled); $i++) { 
                    if(isset($data[$i]->deleted) && $data[$i]->deleted == 1){
                        
                
                $html .= '<tr>
                            <td>'.$data[$i]->id.'</td>
                            <td>'.$data[$i]->nombre.'</td>
                            <td>'.$data[$i]->correo.'</td>
                            <td>'.$data[$i]->ocupacion.'</td>

                            <td> 
                                <a href="javascript:ver(\''.$data[$i]->id.'\')" title="Ver">          <i class="text-info bi bi-eye-fill"></i></a>
                                <a href="javascript:restaurar(\''.$data[$i]->id.'\')" title="Restaurar"><i class="text-success bi bi-person-fill-up"></i></a>
                            </td>
                        </tr>';
                    }    
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
                        }
                    $pagination.=
                        '                          
                        </ul>
                      </nav>';                       
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
    }else if(isset($_POST['method']) && $_POST['method'] == 'restaurar'){
            $id = $_POST['id'];
            $data = json_decode(file_get_contents('./includes/data/test.json'));
            $new = [];
            for ($i=0; $i < count($data); $i++) {
                $b_log = 0;
                if(isset($data[$i]->deleted) && $data[$i]->deleted == 1){
                    $b_log = 1;
                }
                if($data[$i]->id == $id){
                    $b_log = 0;
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