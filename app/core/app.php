<?php 
    //Clase Aplicación se encargará de conectar con las vistas
    class App 
    {
        //Variable controlador se define en home por defecto, pero puede cambiar según la página a visitar
        protected $controller = "home"; 
        //Variable método define la funcion por la que arranca nuestra pagina controlador
        protected $method = "index";
        protected $params;

        //Cada vez que se inicia la clase App, se activa los procesos del constructor
        public function __construct()
        {
            $url = $this->parseURL();

            if(file_exists("../app/controllers/" . strtolower($url[0]) . ".php"))
            {
                $this->controller = strtolower($url[0]);
                unset($url[0]);
            }

            require "../app/controllers/" . $this->controller . ".php";
            $this->controller = new $this->controller;

            if(isset($url[1]))
            {
                $url[1] = strtolower($url[1]);
                if(method_exists($this->controller, $url[1]))
                {
                    $this->method = $url[1];
                    unset($url[1]);
                }
            }

            $this->params = (count($url) > 0) ? $url : ["home"];
            
            call_user_func_array([$this->controller, $this->method], $this->params);
        }

        //obtiene la variable url
        private function parseURL()
        {
            $url = isset($_GET['url']) ? $_GET['url'] : "home";
            return explode("/", filter_var(trim($url, "/"),FILTER_SANITIZE_URL));
        }
    }
?>