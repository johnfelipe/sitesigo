        <?php require 'controlador/csector.php'; ?>
        <h1 class="page-header">SECTORES DEL EJE DE <?php echo $eje[0]['nomeje']; ?></h1>
        <div class="row">
            <?php
                for ($i=0; $i < count($sectores); $i++) 
                {   
            ?>
            <div class="row">
                <div class="col-lg-12 margen">
                    <a href="vmetasprod?id=<?php echo $sectores[$i]['idtbsector']; ?>" class="button button-3d-primary button-rounded font"> <strong><?php echo $sectores[$i]['nomsec']; ?></strong></a>
                </div>
            </div>
            <?php
                }  
            ?>
            <div class="row">
                <div class="col-lg-12 margen">
                    <div class="panel panel-primary">
                        <div class="panel-heading"><strong>Objetivo del eje</strong></div>
                        <div class="panel-body">
                            <div class="justify">
                                <?php echo $eje[0]['objeje']; ?>
                            </div>    
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
                