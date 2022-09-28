<?php

class Home extends Controller
{
    public function __construct()
    {
       $this->usuario = $this->model('usuario');
    }    

    public function index()
    {
        if(isset($_SESSION['logueado'])){
            $this->view('/pages/home');
        } else {
            redirection('/home/login');
        }
    }

    public function login(){

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $datosLogin = [
                'usuario' => trim($_POST['usuario']),
                'contrasena' => trim($_POST['contrasena'])
            ];

            $datosUsuario = $this->usuario->getUsuario($datosLogin['usuario']);

            if($this->usuario->verificarContrasena($datosUsuario , $datosLogin['contrasena'])){
                $_SESSION['logueado'] = $datosUsuario->idPrivilegio;
                $_SESSION['usuario'] = $datosUsuario->usuario;
                redirection('/home');
            } else{
                $_SESSION['errorLogin'] = 'El usuario o la contrasena son incorrectos';
                redirection('/home');
            }

        } else {
            if(isset($_SESSION['logueado'])){
                redirection('/home');
            } else{ 
                $this->view('pages/login-register/login');
            }
            
        }
    }

    public function register(){

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $datosRegistro = [
                'idPrivilegio' => '2',
                'correo' => trim($_POST['correo']),
                'usuario' => trim($_POST['usuario']),
                'contrasena' => password_hash(trim($_POST['contrasena']), PASSWORD_DEFAULT)
            ];

            if($this->usuario->verificarUsuario($datosRegistro)){
                if($this->usuario->register($datosRegistro)){
                    /*$_SESSION['usuario'] = $datosRegistro['usuario'];*/
                    $_SESSION['loginComplete'] = 'Tu registro se ha completado satisfactoriamente';
                    redirection('/home');
                } else {
                }
            } else {

                $_SESSION['usuarioError'] = 'El usuario ya esta siendo utilizando, intenta con otro usuario';
                $this->view('pages/login-register/register');
            }
        } else {

            if(isset($_SESSION['logueado'])){
                redirection('/home');
            } else{ 
                $this->view('pages/login-register/register');
            }
        }
    }

    public function logout()
    {

        session_start();

        $_SESSION = [];

        session_destroy();

        redirection('/home');
    }

}

