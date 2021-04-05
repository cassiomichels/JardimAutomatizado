<?php
    session_start();
    class CSRF
    {
        public static function create_token()
        {
            //Gerando um token único
            $token = md5(time());
 
            // Salvando o token na sessão
            $_SESSION["token"] = $token;
 
            // Criar um campo de entrada oculto com essa entrada única
            echo "<input type='hidden' name='csrf_token' value='" . $token . "' />";
        }
 
        public static function validate_token($token)
        {
            if (!isset($_SESSION["token"]))
            {
                return false;
            }
 
            if ($_SESSION["token"] != $token)
            {
                return false;
            }
            return true;
        }
    }
?>