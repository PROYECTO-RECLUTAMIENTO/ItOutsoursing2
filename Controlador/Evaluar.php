<?php
if(isset($_POST['iniciar'],$_POST['terminos'])){

}else{
echo '<script language="javascript">
                    alert("Te faltan preguntas por contestar");
                window.history.go(-1)
                    </script>';  
}
?>