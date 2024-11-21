<?php 

require_once('../auto/conexion.php');
require_once('../auto/clases/auto.php');

 public function eliminarAuto($id);
    {
        $sql = "DELETE FROM vehiculo WHERE id=$id";
        if (mysqli_query($this->conexion, $sql)) {
            echo "vehiculo eliminado correctamente";
        } else {
            echo "Error al eliminar el vehiculo " . mysqli_error($this->conexion);
        }
    }

?>
