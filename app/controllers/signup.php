<?php
    //Clase para abrir nuestra página en SignUp (Registrarse)
    class Signup extends Controller
    {
        public function index()
        {
            $data['page_title'] = "Registrarse";
            $this->view("signup", $data);//nombre de la pagina que vamos a visualizar
        }
    }
?>