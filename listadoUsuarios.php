<?php 
    require_once './includes/master.inc.php';
?>


<html>

    <head>
        <title>Crud</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script src="js/listadoUsuarios.js" type="text/javascript"></script>
        
    </head>


    <body>
        <!-- <?php include 'includes/views/Navbar.php'; ?> -->
        <div class="container-fluid">
            <div class="row flex-nowrap">

                <?php include 'includes/views/sidebar.php'; ?>

                <div class="col py-3">
                    <div class="text-center d-none" id="loading">
                    <div class="spinner-border" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    </div>

                    <div class="text-right mb-3 text-align-right">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <a href="add.php" type="button" class="btn btn-primary" id="btn_add">Agregar</a>
                                </div>
                                <div class="col" id="total"></div>
                            </div>
                        
                    </div>

                    <table class="table" id="table_crud">
                        
                    <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">nombre</th>
                                <!-- <th scope="col">edad</th> -->
                                <th scope="col">correo</th>
                                <!-- <th scope="col">telefono</th>
                                <th scope="col">direccion</th>
                                <th scope="col">ciudad</th>
                                <th scope="col">pais</th>
                                <th scope="col">estado_civil</th> -->
                                <th scope="col">ocupacion</th>
                                <th scope="col">Acciones</th>

                            </tr>
                        </thead>

                        <tbody>
                            <?php ?>                            
                        </tbody>
                    
                    </table>
                    
                    <div id="pagination">

                    </div>
                </div>
            </div>
        </div>
        
    </body>


</html>