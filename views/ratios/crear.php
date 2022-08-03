<div class="card mb-3">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <h4> <i class="fa-solid fa-chart-bar"></i> Agregar slider a Ratios</h4>  
            </div>
            <div class="col-md-6">
            <a class="btn btn-success" style="float: right;" href="/ratios/admin">Volver</a>
            </div>
        </div>
    </div>
    <div class="card-body"> 

    <?php foreach($errores as $error): ?>
    <div class="alert alert-warning">
        <?php echo $error; ?>
    </div>
    <?php endforeach; ?>

    <form class="formulario" method="POST" enctype="multipart/form-data">
        <?php include __DIR__ . '/formulario.php'; ?>
        <input type="submit" value="Agregar slider" class="btn btn-success">
    </form>
    </div>        
</div>
