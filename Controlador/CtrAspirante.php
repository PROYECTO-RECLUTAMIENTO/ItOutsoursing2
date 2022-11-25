<?php
include 'Config/conexion.php';
class CtrAspirante{
    function fechasExamenes(){

        $objeto = new Conexion("sql9.freemysqlhosting.net","sql9574012","HDHmBbJhbI","sql9574012");
            
        $objeto->conectarBD();
            
        $sql="SELECT * FROM fechas_examen"; 	                
        $resultado = $objeto->ejecutarQuery($sql);
        
        while ($reg=mysqli_fetch_array($resultado)){
            echo'
            <tr>
                <td>'.$reg[0].' </td>
                <td>'.$reg[1].' </td>
                <td>'.$reg[2].' </td>
                <td>'.$reg[3].' </td>
                <td>'.$reg[4].' </td>
                <td>'.$reg[5].' </td>
                <td>'.$reg[6].' </td>
                <td>'.$reg[7].' </td>
            </tr>';

            $objeto ->cerrarBD();
            return;
        }
    }

    function listarPreguntas(){
        $objeto = new Conexion("sql9.freemysqlhosting.net","sql9574012","HDHmBbJhbI","sql9574012");
            
        $objeto->conectarBD();
            
        $sql="SELECT * FROM preguntas limit 10"; 	                
        $resultado = $objeto->ejecutarQuery($sql);
        while ($reg=mysqli_fetch_array($resultado)){
            echo 'Hola mundo';
        }

    }

}



?>