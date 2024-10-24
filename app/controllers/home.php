<?php
    //Clase para abrir nuestra página en Home (Principal)
    class Home extends Controller
    {
        public function index()
        {
            $data['page_title'] = "Inicio";
            if(!isset($_SESSION['idusuario'])){
                header("location: ".ROOT."login");
            }
            $this->view("index", $data);//nombre de la pagina que vamos a visualizar
        }
    }
?>