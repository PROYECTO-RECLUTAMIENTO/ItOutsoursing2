<?php
$respuestas;
if(isset($respuestas)){

}else{
echo '<script language="javascript">
        confirm("Te faltan preguntas por contestar <br> 
                ¿Deseas finaizar tu examen?");
                window.history.go(-1)
                    </script>';  
}
?>