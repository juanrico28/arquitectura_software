<?php
/* El core Se encarga de manejar nuestra URL */

class Core
{
    protected $currentController = 'home';
    protected $currentMethod = 'index';
    protected $parameters = [];  

    public function __construct()
    {
        $url = $this->getUrl();

        if(file_exists('../app/controllers/' . ucwords(isset($url[0]) . '.php')))
        {
            $this->currentController = ucwords($url[0]);

            unset($url[0]);
        }

        require_once '../app/controllers/' . $this->currentController . '.php';
        $this->currentController = new $this->currentController;

        if(isset($url[1])){

            if(method_exists($this->currentController , $url[1])){
                $this->currentMethod = $url[1];

                unset($url[1]);
            }
        }
        
        $this->parameters = $url ? array_values($url) : [];

        call_user_func_array([$this->currentController , $this->currentMethod] , $this->parameters);
    }
    public function getUrl()
    {   
        //El issets comprueba si algo existe
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'] , '/');
            //Filtarmos la URL
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}

