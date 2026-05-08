<?php
 class Usuarios {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function buscarEmail($email) {
        $sql = "SELECT id, nome, email, senha FROM usuarios WHERE email =  '$email' LIMIT 1";
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_assoc($result);
    }
 }

?>