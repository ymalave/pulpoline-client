<?php
    //Clase para abrir nuestra página en Login (Iniciar sesión)
    class Login extends Controller
    {
        public function index()
        {
            $data['page_title'] = "Iniciar Sesión";


            $this->view("login", $data);//nombre de la pagina que vamos a visualizar
        }
    }
?>