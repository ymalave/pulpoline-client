<?php
    //Clase para abrir nuestra página en Login (Iniciar sesión)
    class CheckLogin extends Controller
    {
        public function index()
        {
            $data = json_decode(file_get_contents('php://input'), true);
            if($data){
                $_SESSION['idusuario'] = $data['user']['id'];
                $_SESSION['username'] = $data['user']['username'];
                $_SESSION['token'] = $data['token'];


                echo json_encode(['status' => 'success', 'message' => 'Sesión creada']);
            }
        }
    }
?>