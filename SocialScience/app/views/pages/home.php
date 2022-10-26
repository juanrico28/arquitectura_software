<?php

include_once URL_APP . '/views/custom/header.php';

include_once URL_APP . '/views/custom/navbar.php';


?>


<div class="container mt-5 d-flex">
    <div class="row">
        <!-- Columna perfil-->
        <div class="col-md-3"></div>
            <div class="container-style-main"></div>
                <div class="perfil-usuario-main"></div>
                    <div class="background-usuario-main"></div>
                    <img src="<?php echo URL_PROJECT .'/' . $datos['perfil']->fotoPerfil ?>" alt="">
                    <div class="foto-separation"></div>
                    <a href="<?php echo URL_PROJECT ?>/perfil/<?php echo $datos['usuario']->usuario ?>"><div class="text-center nombre-perfil"><?php echo $datos['perfil']->nombreCompleto ?></div></a>
                    <div class="tabla-estadisticas">
                        <a href="#"> Publicaciones<br> 0</a>
                        <a href="#"> Me gusta<br> 0</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Columna principal-->
        <div class="col-md-6">
            <div class="container-style-main">
                <div class="container-usuario-publicar">
                    <a href="<?php echo URL_PROJECT ?>/perfil" ><img src="<?php echo URL_PROJECT . '/' . $datos['perfil']
                    ->fotoPerfil ?>" class="image-border" alt =""></a>
                    <form action="<?php echo URL_PROJECT ?>/publicaciones/publicar/<?php echo $datos['usuario']->idusuario ?>" method ="POST" enctype="multipart/form-data" class="form-publicar ml-2">
                        <textarea name="contenido" id="contenido" class="published mb-0" name="post" placeholder="Que quieres publicar?" required></textarea>
                        <div class="image-upload-file">
                            <div class="upload-photo">
                                <img src="<?php echo URL_PROJECT ?>/img/imagen.png" alt="" class="image-public">
                                <div class="input-file">
                                    <input type="file" name="imagen" id="imagen">
                                </div>
                                <span class="ml-1">Subir foto</span>
                            </div>
                            <button class="btn-publi">Publicar</button>
                        </div>  
                    </form>  
                </div> 
                <div class="container-usuarios-publicaciones">

                </div>
             </div>
        </div>

        <!-- Columna de eventos -->
        <div class="col-md-3">
            <div class="container-style-main">

             </div>
        </div>
    </div>
</div>    

<?php

include_once URL_APP . '/views/custom/footer.php';

?>