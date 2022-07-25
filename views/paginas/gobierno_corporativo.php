<?php
    $seccion = "";
?>
<section class="container-fluid holding">
    <div class="container">
        <div class="franjaAmarilla"></div>
        <div class="headerTitulo">
            <h1>GOBIERNO CORPORATIVO</h1>
            <H2>El directorio está formado por inversores con una amplia experiencia en el campo empresario y financiero</H2>
        </div>
    </div>    
</section>
<div class="container homePrincipalesActivos">
    <div class="row">
        <div class="row justify-content-end">
            <div class="col-8">
                <h4>NUESTRO DIRECTORIO</h4>
            </div> 
        </div>
    </div>
</div>
<div class="container cajaDirectorio">
    <div class="row">
        <div class="col-12 col-md-4 mb-5 directorio">
            <div class="amarillaDirectorio"></div>
            <?php foreach($gobierno as $gobiernos) { ?>    
                <img src="img/directorio.jpg" alt="" class="img-fluid">
                <div class="nombreapellido"><?php echo $gobiernos->nombre;?></div>
                <div class="cargo"><?php echo $gobiernos->cargo;?></div> 
                <div class="verMas">-> Ver más</div>         
            <?php } ?>
        </div>        
    </div>
</div>

















