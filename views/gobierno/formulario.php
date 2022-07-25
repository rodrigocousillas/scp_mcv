    <div class="row">
        <div class="col-md-4">    
            <label for="nombre" class="form-label">Nombre</label>
            <input class="form-control" name="gobierno[nombre]" type="text" id="nombre" value="<?php echo s( $gobierno->nombre) ; ?>">
        </div>
        <div class="col-md-4">    
            <label for="cargo" class="form-label">Cargo</label>
            <input class="form-control" name="gobierno[cargo]" type="text" id="cargo" value="<?php echo s( $gobierno->cargo); ?>">
        </div>
        <div class="col-md-4">    
            <label for="profesion" class="form-label">Profesion</label>
            <input class="form-control" name="gobierno[profesion]" type="text" id="profesion" value="<?php echo s( $gobierno->profesion); ?>">
        </div>
    </div>
    <div class="row">    
        <div class="col-md-12">    
            <label for="descripcion">Descripcion</label>
            <textarea class="form-control" name="gobierno[descripcion]" id="descripcion" rows="7"><?php echo s( $gobierno->descripcion); ?></textarea>
        </div>
    </div>
    <div class="row">    
        <div class="col-md-12">
            <label for="imagen">Imagen:</label>
            <input class="form-control" type="file" id="imagen" accept="image/jpeg, image/png" name="gobierno[imagen]">
            <?php if($gobierno->imagen) { ?>
                <img src="../../prensa/<?php echo $gobierno->imagen;?>" width="25%" >
            <?php } ?>
        </div>
    </div>
