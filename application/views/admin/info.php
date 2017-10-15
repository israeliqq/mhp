

<section class="ds ms section_padding_60">
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="with_background with_padding">
                <h2><?php echo $escort->NOMBRE; ?> | <?php echo $escort->EDAD; ?> </h2>
                <div class="row">
                
                    <div class="col-md-6">
                    <p><b>Reseña:</b>           <?php echo $escort->RESENA; ?></p>
                    <p><b>Nacionalidad:</b>     <?php echo $escort->NACIONALIDAD; ?></p>
                    <p><b>Raza:</b>             <?php echo $escort->RAZA; ?></p>
                    <p><b>Medidas:</b>          <?php echo $escort->MEDIDAS; ?></p>
                    <p><b>Estatura:</b>         <?php echo $escort->ESTATURA; ?></p>
                    <p><b>Peso:</b>             <?php echo $escort->PESO; ?></p>
                    <p><b>Telefono:</b>         <?php echo $escort->TELEFONO; ?></p>
                    </div>

                    <div class="col-md-6">
                    <p><b>Dirección:</b>        <?php echo $escort->DIRECCION; ?></p>
                    <p><b>Ciudad:</b>           <?php echo $escort->CIUDAD; ?></p>
                    <p><b>Valor:</b>            <?php echo $escort->VALOR; ?></p>
                    <p><b>Hora Entradas:</b>    <?php echo $escort->HORA_I; ?></p>
                    <p><b>Hora Salida:</b>      <?php echo $escort->HORA_F; ?></p>
                    <p><b>% Retoque:</b>        <?php echo $escort->RETOQUE; ?>%</p>
                    </div>

                </div>
                    <h2>SUBIR FOTO:</h2>
                    <form action="upload" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $escort->ID;?>">
                        <input type="file" name="file" class="form-control">
                        <input type="submit" value="SUBIR FOTO"  class="form-control">
                    </form>
            </div>
        </div>


         <!--fotos-->
        <div class="col-md-6">
            <div class="with_background with_padding">
                <h2>LISTAR FOTOS</h2>
                <?php foreach($fotos as $foto){ ?>
                    <a href="<?php echo base_url();?>admin/deletePhoto/<?php echo $foto->ID?>/<?php echo $escort->ID;?>">
                    <img src="<?php echo base_url();?>tool/fotos/<?php echo $foto->RUTA?>" 
                        alt="<?php echo $escort->NOMBRE; ?>"  class="img-thumbnail" width="100" height="100"
                        onmouseover="this.src='<?php echo base_url();?>tool/images/borrar.png';" 
                        onmouseout="this.src='<?php echo base_url();?>tool/fotos/<?php echo $foto->RUTA?>';"
                    />
                    </a>&nbsp;
                <?php } ?>
            </div>
        </div>
        <!--/fotos-->   

    </div> <!-- row -->
</div><!-- Container -->


</section>
