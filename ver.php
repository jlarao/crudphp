<?php 

    require_once './includes/master.inc.php';
    // print_r(count($data));
?>


<html>

    <head>
        <title>Ver</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

        <script src="js/ver.js" type="text/javascript"></script>
        
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

                    

                    <?php include 'includes/views/ver.php'; ?>

                    
                </div>
            </div>
        </div>
    </body>


</html>