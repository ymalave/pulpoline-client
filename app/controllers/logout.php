<?php
class Logout extends Controller
{
    public function index()
    {
        session_unset();
        header("location: ".ROOT);//nombre de la pagina que vamos a visualizar
    }
}
?>