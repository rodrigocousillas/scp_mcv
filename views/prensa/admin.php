
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
                <h4> <i class="fa-solid fa-newspaper"></i> Listar notas de prensa</h4>  
            </div>
            <div class="col-md-6">
            <a class="btn btn-success" style="float: right;" href="/notas/crear">Agregar nota de prensa</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped" style="width:100%; float: left;">
                <thead>
                    
                <tr>
                    <th>ID</th>
                    <th>Tema</th>
                    <th>Título</th>
                    <th>Bajada</th>
                    <th>Imagen</th>
                    <th>Modificar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach( $prensa as $press ): ?>
                <tr>
                    <td><?php echo $press->id; ?></td>
                    <td><?php echo $press->empresaId; ?></td>
                    <td><?php echo $press->titulo; ?></td>
                    <td><?php echo $press->bajada; ?></td>
                    <td><img src="/prensa/<?php echo $press->imagen;?>" width="25%" ></td>
                    <td><a class="btn btn-primary" href="actualizar?id=<?php echo $press->id; ?>">Modificar</a></td>
                    <td>
                        <form method="POST" class="w-100" action="eliminar">
                            <input type="hidden" name="id" value="<?php echo $press->id; ?>">
                            <input type="hidden" name="tipo" value="press">
                            <input type="submit" class="btn btn-danger" value="Eliminar">
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>    
            </tbody>
        </table>
    </div>        
</div>    