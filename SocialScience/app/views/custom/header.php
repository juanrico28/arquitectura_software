<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Name project-->
    <title><?= NAME_PROJECT ?></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/489c1c5462.js" crossorigin="anonymous"></script> 

    <!-- CSS -->
    <link rel="stylesheet" href="<?= URL_PROJECT ?>/css/style.css">
    <link rel="stylesheet" href="<?= URL_PROJECT ?>/css/navbar.css">
    <link rel="stylesheet" href="<?= URL_PROJECT ?>/css/home.css">
    <link rel="stylesheet" href="<?= URL_PROJECT ?>/css/perfil.css">
    
    <link rel="icont" href="<?= URL_PROJECT ?>/img/interlude_01.png">

    <!-- SweetAlert -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">

    <!-- STYLES -->

<style {csp-style-nonce}>


:root {
    --white: #fff;
}


.btn-purple{
    outline:none;
    background-color: #7063FF;
    border:0;
    padding: 0.55rem;
    border-radius: 20px;
    color: #fff;
    font-size:1rem;
}

.btn-purple:hover {
    background-color: rgb 134, 124, 246;
}

body {
    margin: 0;
    padding: 0;
    display: flex;
    flex-wrap: wrap;
    min-height: 100vh;
}

header {
    width: 100%;
    margin: 0;
}

.center {
    display: flex;
    justify-content: center;
    align-items: center;
    
}

.container-center {
    height:100vh;
    width:100%;
}

.container-content {
    height:600px;
    width:1000px;
}

.content-action {
    height:100%;
    width:50%;
    flex-direction: column;
}

.content-action input {
    width:100%;
    border-radius: 20px;
    border: 0;
    background-color: #f2f2f2;
    height: 45px;
    margin-bottom: 10px;
    padding: 1rem;
    outline: none;
}

.content-image {
    height: 100%;
    width: 50%;
}

.content-image img {
    width:100%;
}

.contenido-link a {
    text-decoration: none;
}


footer {
    color: var(--white);
    align-self: flex-end;
    background-color: #333;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 60px;
}

/* CSS Navbar */
header {
    background-color: var(--main-color);
}

.image-logo {
    width: 27px;
}

.tipe-form {
    height: 100%;
}

.form-style {
    outline:none;
    border: 0;
    border-top-left-radius: 21px;
    border-bottom-left-radius: 21px;
    padding: .3em .5em .3em 0;
    background-color: #ffffff;  
    color: #a5a5a5;
    margin: 0;
    cursor: pointer;
}

.img-perfil {
    width: 25px;
    height: 25px;
    border-radius: 50%;
    margin-right: 5px;
}

.links {
    margin-right:15px;
}

.links a {
    color: #a5a5a5;
    text-decoration: none;
}

/* PROBANDO */
.perfil-usuario-main{

    width: 210px;
    border none;
    border-radius: 15px;
    padding: 8px;
    background-color: #7063FF;
    position: relative;
    height: 200px;
}

.foto-separation{
    position: absolute;
    top: 133px;
    left: 16%;
    height: 100px;
    width: 100px;
    border: 3px solid #fff;

    border-radius: 50%;

}

.tabla-estadisticas{

    position: relative;

}

.background-usuario-main{
    
}

/*CSS PERFIL */
.container-style-main{
    height: 100vh;
}

.image-perfil-cambiar:hover {
    color: #4f406b;
}

.datos-perfil-usuario{
    width 100%;
    background-color: #ffffff;
    display: flex;
    justify-content: center;
    padding: 20px;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
}

.editar-perfil{
    position: absolute;
    right: 40px;
}

.btn-change-image{
    border:0;
    border-radius: 10px;
    background-color: #926dde;
    color: #ffffff;
}

.container-header-usuario{
    width: 100%;
}

.container-principal-informacion-usuario{
    margin-top:35px;
}

.container-usuario-contact{
    margin-top:35px;
    text-decoration: none;
}

/*CSS HOME */

.usuarios-publicaciones-top{
    width: 100px;
    display: flex;
}

.informacion-usuario-publico{
    margin-left: 10px;
    display: block;
}

.contenido-publicacion-usuario{
    width: 100px;
    margin-top: 10px;
}

.imagen-publicacion-usuario{
    width: 100px;
    object-fit: cover;
}

.acciones-publicacion-usuario{
    margin-left: auto;
}

.acciones-usuario-publicar{
    width: 100%;
    display: flex;
    justify-content:space-between;
}

@media screen and (max-width: 500px){
    .container-usuario-publicar{
        margin-top: 10px;
    }
}
</style>

</head>
<body>

    
