<?php

include_once URL_APP . '/views/custom/header.php';
include_once URL_APP . '/views/custom/navbar.php';

?>

<div class="completarPerfil">
    <div class="container">
        <div class="container-perfil">
            <h2 class="text-center">Completa tu perfil</h2>
            <h6 class="text-center">Antes de continuar debes completar tu perfil</h6>
            <hr>
            <div class="content-completar-perfil center">
                <form action="<?php echo URL_PROJECT ?>/home/insertarRegistroPerfil" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id_user" value="<?php echo $_SESSION['logueado']?>">
                    <div class="form-group">
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre Completo" required>
                    </div>
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="imagen" id="imagen" required>
                            <label class="custom-file-label" for="imagen">Seleccionar una foto</label>
                        </div>
                    </div>
                    <button class="btn-purple btn-block">Registrar datos</button>
                </form>
            </div>
        </div>
    </div>
</div>
 
<?php

include_once (URL_APP . '/views/custom/footer.php');

?>