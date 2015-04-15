<?php 
class PrincipalController extends AppController {
 
    public function index()
    {
        $this->nombre=Auth::get('login');
    }

    public function login(){
        if (Input::hasPost("login","password")){
            $pwd = Input::post("password");
            $usuario=Input::post("login");
 
            $auth = new Auth("model", "class: usuarios", "login: $usuario", "password: $pwd");
            if ($auth->authenticate()) {
                Router::redirect("principal/index");
            } else {
                Flash::error("Falló");
            }
        }
    }

    public function logout()
    {
        
    }
}