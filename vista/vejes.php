            <?php require 'controlador/ceje.php'; ?>
            <div class="container-fluid">    
                <h1 class="page-header">EJES DEL PLAN DE DESARROLLO</h1>
                <?php
                    for ($i=0; $i < count($ejes) ; $i++) 
                    {   
                ?>
                <div class="row">
                    <div class="col-lg-12 margen">
                        <a href="vsector?id=<?php echo $ejes[$i]['idtbeje']; ?>" class="button button-3d-primary button-rounded font"> <strong> <?php echo $ejes[$i]['idtbeje']." ".$ejes[$i]['nomeje']; ?></strong></a>
                    </div>
                </div>
                <?php 
                    } 
                ?>
            </div>    