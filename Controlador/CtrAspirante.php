<?php
//include 'Config/conexion.php';
class CtrAspirante{
    function fechasExamenes(){

        $objeto = new Conexion("68.66.226.122","utn7xtvd_evaluaciones","ns0z9)-plVRU","utn7xtvd_itoutsoursing");
            
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

        echo '   
        <!--inicio botones flotantes-->
        <a class="btn-flotante-tiempo">Tiempo:<div id="countdown"></div></a>  
        
        <a class="btn-flotante-Finalizar">Finalizar</a> 
       
        <!--Fin botones flotantes-->'; 
        $conn = mysqli_connect("utnestudiante0325.utn.red","utn7xtvd","k3n!Wt6thc4*Cq8s","utn7xtvd_itoutsoursing");
            $sql="SELECT *
                FROM preguntas 
                ORDER BY RAND() 
                LIMIT 20 ";
            $resultado = mysqli_query($conn,$sql);
            //Contador de preguntas
            $i =1; $res =0;
            while ($reg=mysqli_fetch_array($resultado)){
                echo'
                <div class="radio">
                    <h2>'.$i++.'.- '.$reg['pregunta'].'</h2>';
                    
                    $id_pregunta1 = $reg['id_pregunta'];

                    $sql2="SELECT *
                    FROM respuestas 
                    where id_pregunta = '$id_pregunta1'";

                $resultado2 = mysqli_query($conn,$sql2);
    
                while ($reg2=mysqli_fetch_array($resultado2)){
                    echo'
                        
                        <input type="radio" name="'.$id_pregunta1.'" id="res'.$res.'">
                        <label for="res'.$res.'">'.$reg2['respuesta'].'</label><br>';
                        $res++;     
                }   
                echo'</div>';
                     
            }
    }
}

?>