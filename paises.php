<?php
require('consulta.php');
require('encabezado.php');

$consulta = "SELECT * FROM paises";
$result = $mysqli->query($consulta);
?>

<?php
class Paises{
    private $id;
    private $pais;
    private $iso;
    public function __construct($id,$p,$i)
  {
    $this->id=$id;
    $this->pais=$p;
    $this->iso=$i;
  }
  public function cargar()
  {
            echo '<td>'.$this->id. '</td>';
            echo '<td>'.$this->pais. '</td>';
            echo '<td>'.$this->iso. '</td>';
            echo '<td> <a href="edit.php">edit</a> <a href="delete.php">delete</a> </td>';
  }
}

?>



<table class="table w-100">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>ISO</th>
            <th>ACTION</th>
            </tr>
    </thead>
    <tbody>
        <?php while ($row = $result->fetch_assoc()) : ?>
            <tr>
            <?php
                $paises=new Paises($row['id'], $row['nombre'] , $row['iso']);
                $paises->cargar();
            ?>
            </tr>
    </tbody>
    <?php endwhile; ?>
</table>

<?php

require('pie.php')

?>


           
   
