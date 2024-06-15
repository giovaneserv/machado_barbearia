<?php
class Conexao
{
    private $host = "127.0.0.1";
    private $user = "host";
    private $senha = "";
    private $bd = "barber_shop";
    private $conexao;

    public function conectar()
    {
        try {
            $this->conexao = new PDO("mysql:host=$this->host;dbname=$this->bd", $this->user, $this->senha);
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conectado com sucesso";
        } catch (PDOException $e) {
            die('ERRO: ' . $e->getMessage());
        }
    }
}
?>
