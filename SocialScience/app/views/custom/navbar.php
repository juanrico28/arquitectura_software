<header>
        <nav class="navbar navbar-expand-custom navbar-light text-white navbar-mainbg">
            <a class="navbar-brand" href="<?= URL_PROJECT?>"><img src="https://cdn.freebiesupply.com/logos/large/2x/facebook-messenger-logo-black-and-white.png" alt="Logo" class="image-logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#"><span class="big"><i class="fas fa-home mr-1"></i></span>Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#"><span class="big"><i class="fas fa-home mr-1"></i></span>Usuarios</a>
                    </li>

                    <li class="nav-item">
                        <form action="" class="tipe-form form-inline my-2 my-lg-0">
                            <input type="text" name="buscar" class="form-style" placeholder="Buscar" />
                            <button class="btn-form type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </form>
                    </li>

                </ul>
                <div class="links">
                    <a class="nav-link text-white" href=""><span class="big"><i class="fas fa-envelope"></i></span><span class="mb-0 ml-1">Mensajes</span></a>
                </div>

                <div class="links">
                    <a class="nav-link text-white" href=""><span class="big"><i class="fas fa-bell"></i></span><span class="mb-0 ml-1">Notificaciones</span></a>
                </div>

                <div class="dropdown">
                    <span class="btn-radio dropdown-toggle" id="actionPerfil" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="<?php echo URL_PROJECT . '/' .$datos['perfil']-> fotoPerfil ?>" alt="perfil" class="img-perfil"/>
                        <?php echo ucwords($_SESSION['usuario']); ?>
                    </span>
                    <div class="dropdown-menu" aria-labelledby="actionPerfil">
						<a class="dropdown-item text-dark" href="<?php echo URL_PROJECT?>/pages/perfil/perfil">Perfil</a>
                        <a class="dropdown-item text-dark" href="<?php echo URL_PROJECT?>/home/logout">Salir</a>
                    </div>
                </div>
            </div>
        </nav>
    

<style {csp-style-nonce}>

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
    padding: .3em 0 .3em 9em;
}

.btn-form{
    border: 0;
    width: 40px;
    border-top-right-radius: 21px;
    border-bottom-right-radius: 21px;
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

.btn-radio{
    background-color: var(--main-color);
    border:1px solid #ffffff;
    display: flex;
    justify-content: center;
    align-items: center;
}    

.navbar-mainbg{
	background-color: #7063FF;
	padding: 0px;
}

#navbarSupportedContent{
	
	position: relative;
}

#navbarSupportedContent ul{
	padding: 0px;
	margin: 0px;
}
#navbarSupportedContent ul li a i{
	margin-right: 10px;
}
#navbarSupportedContent li {
	list-style-type: none;
	float: left;
}
#navbarSupportedContent ul li a{
	color: rgba(255,255,255,0.5);
    text-decoration: none;
    font-size: 15px;
    display: block;
    padding: 20px 20px;
    transition-duration:0.6s;
	transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
    position: relative;
}
#navbarSupportedContent>ul>li.active>a{
	color: #5161ce;
	background-color: transparent;
	transition: all 0.7s;
}
#navbarSupportedContent a:not(:only-child):after {
	content: "\f105";
	position: absolute;
	right: 20px;
	top: 10px;
	font-size: 14px;
	font-family: "Font Awesome 5 Free";
	display: inline-block;
	padding-right: 3px;
	vertical-align: middle;
	font-weight: 900;
	transition: 0.5s;
}
#navbarSupportedContent .active>a:not(:only-child):after {
	transform: rotate(90deg);
}
.hori-selector{
	display:inline-block;
	position:absolute;
	height: 100%;
	top: 0px;
	left: 0px;
	transition-duration:0.6s;
	transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
	background-color: #fff;
	border-top-left-radius: 15px;
	border-top-right-radius: 15px;
	margin-top: 10px;
}
.hori-selector .right,
.hori-selector .left{
	position: absolute;
	width: 25px;
	height: 25px;
	background-color: #fff;
	bottom: 10px;
}
.hori-selector .right{
	right: -25px;
}
.hori-selector .left{
	left: -25px;
}
.hori-selector .right:before,
.hori-selector .left:before{
	content: '';
    position: absolute;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background-color: #5161ce;
}
.hori-selector .right:before{
	bottom: 0;
    right: -25px;
}
.hori-selector .left:before{
	bottom: 0;
    left: -25px;
}


@media(min-width: 992px){
	.navbar-expand-custom {
	    -ms-flex-flow: row nowrap;
	    flex-flow: row nowrap;
	    -ms-flex-pack: start;
	    justify-content: flex-start;
	}
	.navbar-expand-custom .navbar-nav {
	    -ms-flex-direction: row;
	    flex-direction: row;
	}
	.navbar-expand-custom .navbar-toggler {
	    display: none;
	}
	.navbar-expand-custom .navbar-collapse {
	    display: -ms-flexbox!important;
	    display: flex!important;
	    -ms-flex-preferred-size: auto;
	    flex-basis: auto;
	}
}


@media (max-width: 991px){
	#navbarSupportedContent ul li a{
		padding: 12px 30px;
	}
	.hori-selector{
		margin-top: 0px;
		margin-left: 10px;
		border-radius: 0;
		border-top-left-radius: 25px;
		border-bottom-left-radius: 25px;
	}
	.hori-selector .left,
	.hori-selector .right{
		right: 10px;
	}
	.hori-selector .left{
		top: -25px;
		left: auto;
	}
	.hori-selector .right{
		bottom: -25px;
	}
	.hori-selector .left:before{
		left: -25px;
		top: -25px;
	}
	.hori-selector .right:before{
		bottom: -25px;
		left: -25px;
	}
}

</style>

</header>