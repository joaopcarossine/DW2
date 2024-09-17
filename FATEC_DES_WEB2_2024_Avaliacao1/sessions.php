<?php
class Sessao{
    
    public function login( $usuario, $senha ){
        session_start();
        if(($usuario == 'coordenacao' and $senha == 'coordenacao') or ($usuario == 'tecnicos' and $senha == 'tecnicos')){ // adicionei operador OU para conseguir ter mais de um usuário
            $_SESSION['loggedin'] = TRUE;
            $_SESSION["username"] = $usuario == 'coordenacao' ? 'Coordenação' : 'Técnicos'; // usei o operador ternario para fazer um if/else compacto
            return TRUE;
        } else {
            $_SESSION['loggedin'] = FALSE;
            return FALSE;
        }
    }

    public function logout(){
        session_start();
        $_SESSION = array();
        session_destroy();
    }

    public function autenticado() {
        session_start();
        if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
            return FALSE;
        }
        return TRUE;
    }
}

?>