
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="text-right">
                        <p>Editar</p>
            </div>
            <form method="POST" action="editar.php" id="editarform">
                <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
                <div class="mb-3">
                    <label for=Nombre" class="form-label">Nombre</label>
                    <input type="input" class="form-control" name="Nombre" id="Nombre" value="<?php echo $Nombre; ?>">                    
                    <div class="invalid-feedback">
                        Ingresa un nombre.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="Edad" class="form-label">Edad</label>
                    <input type="number" min="0" max="130" class="form-control" name="Edad" id="Edad" value="<?php echo $Edad; ?>">
                    <div class="invalid-feedback">
                        Ingresa la edad.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="Email1" class="form-label">Correo</label>
                    <input type="email" class="form-control" name="Email1" id="Email1" aria-describedby="emailHelp" value="<?php echo $Correo; ?>">
                    <div class="invalid-feedback">
                        Ingresa un email.
                    </div>                    
                </div>

                <div class="mb-3">
                    <label for="Telefono" class="form-label">Telefono</label>
                    <input type="text" class="form-control" name="Telefono" id="Telefono" value="<?php echo $Telefono; ?>">
                    <div class="invalid-feedback">
                        Ingresa un numero de telefono.
                    </div>
                </div>
                
                <div class="mb-3">
                    <label for="Direccion" class="form-label">Direccion</label>
                    <input type="text" class="form-control" name="Direccion" id="Direccion" value="<?php echo $Direccion; ?>">
                    <div class="invalid-feedback">
                        Ingresa la direccion.
                    </div>
                </div>
                
                <div class="mb-3">
                    <label for="Ciudad" class="form-label">Ciudad</label>
                    <input type="text" class="form-control" name="Ciudad" id="Ciudad" value="<?php echo $Ciudad; ?>">
                    <div class="invalid-feedback">
                        Ingresa la ciudad.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="Pais" class="form-label">Pais</label>
                    <input type="text" class="form-control" name="Pais" id="Pais" value="<?php echo $Pais; ?>">
                    <div class="invalid-feedback">
                        Ingresa el pais.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="Ocupacion" class="form-label">Ocupacion</label>
                    <input type="text" class="form-control" name="Ocupacion" id="Ocupacion" value="<?php echo $Ocupacion; ?>">
                    <div class="invalid-feedback">
                        Ingresa la ocupacion.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="EstadoCivil" class="form-label">Estado Civil</label>
                    <input type="text" class="form-control" name="EstadoCivil" id="EstadoCivil" value="<?php echo $EstadoCivil; ?>">
                    <div class="invalid-feedback">
                        Ingresa estado civil.
                    </div>
                </div>



                <button type="submit" class="btn btn-primary" id="btnEditar">Editar</button>
                <button onclick="goBack()" class="btn btn-info">Regresar</button>
            </form>

        </div>
    </div>
</div>
