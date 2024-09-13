
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="text-right">
                        <p>Agregar</p>
            </div>
            <form method="POST" action="add.php" id="addform">

                <div class="mb-3">
                    <label for=Nombre" class="form-label">Nombre</label>
                    <input type="input" class="form-control" name="Nombre" id="Nombre">                    
                    <div class="invalid-feedback">
                        Ingresa un nombre.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="Edad" class="form-label">Edad</label>
                    <input type="number" min="0" max="130" class="form-control" name="Edad" id="Edad">
                    <div class="invalid-feedback">
                        Ingresa la edad.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="Email1" class="form-label">Correo</label>
                    <input type="email" class="form-control" name="Email1" id="Email1" aria-describedby="emailHelp">
                    <div class="invalid-feedback">
                        Ingresa un email.
                    </div>                    
                </div>

                <div class="mb-3">
                    <label for="Telefono" class="form-label">Telefono</label>
                    <input type="text" class="form-control" name="Telefono" id="Telefono">
                    <div class="invalid-feedback">
                        Ingresa un numero de telefono.
                    </div>
                </div>
                
                <div class="mb-3">
                    <label for="Direccion" class="form-label">Direccion</label>
                    <input type="text" class="form-control" name="Direccion" id="Direccion">
                    <div class="invalid-feedback">
                        Ingresa la direccion.
                    </div>
                </div>
                
                <div class="mb-3">
                    <label for="Ciudad" class="form-label">Ciudad</label>
                    <input type="text" class="form-control" name="Ciudad" id="Ciudad">
                    <div class="invalid-feedback">
                        Ingresa la ciudad.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="Pais" class="form-label">Pais</label>
                    <input type="text" class="form-control" name="Pais" id="Pais">
                    <div class="invalid-feedback">
                        Ingresa el pais.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="Ocupacion" class="form-label">Ocupacion</label>
                    <input type="text" class="form-control" name="Ocupacion" id="Ocupacion">
                    <div class="invalid-feedback">
                        Ingresa la ocupacion.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="EstadoCivil" class="form-label">Estado Civil</label>
                    <input type="text" class="form-control" name="EstadoCivil" id="EstadoCivil">
                    <div class="invalid-feedback">
                        Ingresa estado civil.
                    </div>
                </div>



                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>

        </div>
    </div>
</div>
