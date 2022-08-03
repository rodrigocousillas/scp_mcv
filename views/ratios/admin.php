
    <?php 
        if($resultado) {
            $mensaje = mostrarNotificacion( intval( $resultado) );
            if($mensaje) { ?>
                <p class="alert alert-primary"><?php echo s($mensaje); ?></p>
    <?php  
            } 
        }
    ?>

<div class="card mb-3">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <h4> <i class="fa-solid fa-chart-bar"></i> Listar Imagenes del slider de Ratios</h4>  
            </div>
            <div class="col-md-6">
            <a class="btn btn-success" style="float: right;" href="/ratios/crear">Agregar slider a Ratios</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped" style="width:100%; float: left;">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Tema slider</th>
                    <th>Imagen slider</th>
                    <th>Modificar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach( $ratios as $ratio ): ?>
                <tr>
                    <td><?php echo $ratio->id; ?></td>
                    <td><?php echo $ratio->descripcion; ?></td>
                    <td><img src="/prensa/<?php echo $ratio->imagen;?>" width="25%" ></td>
                    <td><a class="btn btn-primary" href="actualizar?id=<?php echo $ratio->id; ?>">Modificar</a></td>
                    <td>
                        <form method="POST" class="w-100" action="eliminar">
                            <input type="hidden" name="id" value="<?php echo $ratio->id; ?>">
                            <input type="hidden" name="tipo" value="ratio">
                            <input type="submit" class="btn btn-danger" value="Eliminar">
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>    
            </tbody>
        </table>
    </div>        
</div>    