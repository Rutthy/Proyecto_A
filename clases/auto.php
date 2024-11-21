
<?php
require_once('/xampp/htdocs/auto/conexion.php');

class auto{
    public $id, $marca, $modelo,$año;
    public $conexion;

    public function __construct($conexion, $id = null, $marca = null, $modelo= null,$año=null)
    {
        $this->conexion = $conexion;
        $this->id = $id;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->año = $año;
    }

   
    public function registrar_auto ()
    {
        $sql = "INSERT INTO auto(marca modelo, año) VALUES ('$this->marca', $this->modelo, '$this->año')";
        if (mysqli_query($this->conexion, $sql)) {
            echo "auto registrado exitosamente";
        } else {
            echo "Error al registrar su auto :" . mysqli_error($this->conexion);
        }
    }

}
?>
