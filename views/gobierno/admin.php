
    <?php 
        if($resultado) {
            $mensaje = mostrarNotificacion( intval( $resultado) );
            if($mensaje) { ?>
                <p class="alert alert-primary"><?php echo s($mensaje); ?></p>
    <?php  
            } 
        }
    ?>
<div class="row">    
    <div class="col-12">
<div class="card mb-3">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <h4> <i class="fa-solid fa-user"></i> Listar Miembros del gobierno corporativo</h4>  
            </div>
            <div class="col-md-6">
            <a class="btn btn-success" style="float: right;" href="/gobierno/crear">Agregar miembro gobierno corporativo</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped" style="width:100%; float: left;">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre completo</th>
                        <th>Cargo</th>
                        <th>Profesion</th>
                        <th>Imagen</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach( $gobierno as $gobiernos ): ?>
                    <tr>                    
                        <td><?php echo $gobiernos->id; ?></td>
                        <td><?php echo $gobiernos->nombre; ?></td>
                        <td><?php echo $gobiernos->cargo; ?></td>
                        <td><?php echo $gobiernos->profesion; ?></td>
                        <td><img src="/prensa/<?php echo $gobiernos->imagen;?>" width="40%"></td>
                        <td><a class="btn btn-primary" href="actualizar?id=<?php echo $gobiernos->id; ?>">Modificar</a></td>
                        <td>
                            <form method="POST" class="w-100" action="eliminar">
                                <input type="hidden" name="id" value="<?php echo $gobiernos->id; ?>">
                                <input type="hidden" name="tipo" value="gobiernos">
                                <input type="submit" class="btn btn-danger" value="Eliminar">
                            </form>
                        </td>
                    </tr> 
                    <?php endforeach; ?>  
              </tbody>
            </table>
        </div>
    </div>    
</div>
</div>

                </div>