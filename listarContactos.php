<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/> 
</head>
<body>
<?php
class ListarContactos
{
    public $contactos;

    public function generaTabla()
    {
        echo '<table>';
        echo '<tr>';
        echo '<th id="ID">ID  </th>';
    echo '<th id="Nombre"> Codigo</th>';
    echo '<th id="AP">  Nombre</th>';
    echo '<th id="AM">  Apellido_Paterno</th>';
    echo '<th id="Direccion">  Apellido_Materno</th>';
    echo '<th id="Direccion">  VOTO</th>';
      
               
            echo '</tr>';
            foreach($this->contactos as $contacto){
                echo '<tr>';
                    echo '<td align="center">'.$contacto['id']. '</td>';
                    echo '<td align="center">'.$contacto['Codigo'].'</td>';
                    echo '<td align="center">'.$contacto['Nombre'].'</td>';
                    echo '<td align="center">'.$contacto['Ap_Paterno'].'</td>';
                    echo '<td align="center">'.$contacto['Ap_Materno'].'</td>';
                    if ($contacto['id']==1) {

                        echo '<td align="center"><input type="radio" value="VOTO" checked></td>';
                    }else{
                        echo '<td align="center"><input type="radio" value="VOTO"></td>';
                    }
                    
                   
                  
                           
                 
                echo '</tr>';
            }
        echo '</table>';
    }
} 
?>

</body>
</html>
