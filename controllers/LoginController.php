<?php
require "models/Usuarios.php";
class LoginController
{

    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function entrar()
    {
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $model = new Usuarios($this->conn);
        $usuario = $model->buscarEmail($email);

        if ($usuario && $senha == $usuario["senha"]) {
            $_SESSION["usuario"] = [
                "id" => $usuario["id"],
                "nome" => $usuario["nome"],
                "email" => $usuario["email"],
            ];
            header("Location: index.php");
        } else {
            $_SESSION["erro_login"] = "Email ou senha inválidos";
            header("Location: index.php?action=mostrarLogin");

        }

    }

    public function mostrarLogin() {
        require "views/login.php";
    }

}

?>