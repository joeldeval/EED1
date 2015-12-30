<?php
class Conexion
{
    public $mysqli;
    private $error;

    public function conectar()
    {
        try
        {
<<<<<<< HEAD
<<<<<<< HEAD
            $this->mysqli = new mysqli("localhost", "root", "", "cutonala");
=======
            $this->mysqli = new mysqli("localhost", "root", "Joel10", "cutonala");
>>>>>>> 9a5a6a24856e551a2837fb8125077148a4c28d19
=======
            $this->mysqli = new mysqli("localhost", "root", "", "cutonala");
>>>>>>> 4dbad3a54cfd805894b1b7fc2ed2a36ae22a705f
            if ($this->mysqli->connect_errno) {
                throw new Exception("Fallo al conectar a MySQL: (" . $this->mysqli->connect_errno . ") " . $this->mysqli->connect_error);
            }
            return true;
        }
        catch(Exception $e)
        {
            $this->error = $e->getMessage();
            return false;
        }
    }

    public function informacionDelHost()
    {
        echo $this->mysqli->host_info . "\n";
    }

    public function getError()
    {
        return $this->error;
    }

    public function cerrar()
    {
        $this->mysqli->close();
    }
}
?>
