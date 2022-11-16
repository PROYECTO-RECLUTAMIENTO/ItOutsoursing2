<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../css/examen.css">
    <link rel="stylesheet" href="../../css/styleEvs.css">
    <title>IT O | Inicio </title>
</head>
<body  onload="mueveReloj()">
    <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="LoginEvaluacion.php"><img src="../../img/LogoITO.png" style="width:4rem;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="LoginEvaluacion.php">Login Evaluación</a>
            <a class="nav-link" href="Evaluaciones.php">Evaluaciones</a>
            <a class="nav-link" href="Examen.php">Examen</a>
            <a class="nav-link" href="../Admin/RankingAspirantes.php">Ranking</a>
        </div>
        </div>
    </div>
    </nav>
    <div class="wrap" ><br><br>
		
    

		<form class="formulario" action="" style="background-color:white; border-radius:5px ; box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.367);" >
        <div class="info">
			<h1>Examen de Conocimiento</h1>
		</div>
        <!--inicio botones flotantes-->
        <a class="btn-flotante-tiempo">Tiempo:<div id="countdown"></div></a>  
        
        <a onclick="myFunction()" class="btn-flotante-Finalizar">Finalizar</a>  
        <script>
            function myFunction() {
                Swal.fire({
                title: 'Comunicate con soporte para solución a tu problema',
                icon: 'question',
                iconHtml: '?',                
            });
            }
        </script>
        <!--Fin botones flotantes-->
			<div class="radio">
				<h2>1. ¿Que significan las siglas "RAM"?</h2>
				<input type="radio" name="pregunta1" id="res1">
				<label for="res1">Reconocimiento Abierto de Memoria.</label>
                <br>
				<input type="radio" name="pregunta1" id="res2">
				<label for="res2">Random Access Memory.</label>
                <br>
				<input type="radio" name="pregunta1" id="res3">
				<label for="res3">Random Accecibility memory.</label>
                <br>
                <input type="radio" name="pregunta1" id="res4">
				<label for="res4">Recovery Access Memory.</label>
                <br>                
                <input type="radio" name="pregunta1" id="res5">
				<label for="res5">Ranura Abierta Modular.</label>
                <br><br>
                <h2>2. ¿Cual es le comando que nos ayuda a navegar entre carpetas en el cmd?</h2>
				<input type="radio" name="pregunta2" id="res6">
				<label for="res6">nav.</label>
                <br>
				<input type="radio" name="pregunta2" id="res7">
				<label for="res7">dir.</label>
                <br>
				<input type="radio" name="pregunta2" id="res8">
				<label for="res8">cd.</label>
                <br>
                <input type="radio" name="pregunta2" id="res9">
				<label for="res9">sig.</label>
                <br>
                <input type="radio" name="pregunta2" id="res10">
				<label for="res10">carp.</label>
                <br><br>
                <h2>3. ¿Que significan las siglas "TIC's" </h2>
				<input type="radio" name="pregunta3" id="res11">
				<label for="res11">Tecnologías de Información y Capacitación.</label>
                <br>
				<input type="radio" name="pregunta3" id="res12">
				<label for="res12">Tecnicas de Informatica y Comunicación.</label>
                <br>
				<input type="radio" name="pregunta3" id="res13">
				<label for="res13">Tecnologías de la Información y la comunicacion.</label>
                <br>
                <input type="radio" name="pregunta3" id="res14">
				<label for="res14">Técnicas, Informar y Comunicar.</label>
                <br>
                <input type="radio" name="pregunta3" id="res15">
				<label for="res15">Tecnologías de Información y la Construcción.</label>
                <br><br><br>
                <h2>4. Para poder cargar un sistema operativo se necesita la...</h2>
				<input type="radio" name="pregunta4" id="res16">
				<label for="res16">La computadora Cargada.</label>
                <br>
				<input type="radio" name="pregunta4" id="res17">
				<label for="res17">Sistema Operativo Anterior.</label>
                <br>
				<input type="radio" name="pregunta4" id="res18">
				<label for="res18">Key de instalación.</label>
                <br>
                <input type="radio" name="pregunta4" id="res19">
				<label for="res19">Imagen ISO.</label>
                <br>
                <input type="radio" name="pregunta4" id="res20">
				<label for="res20">La pantalla.</label>
                <br><br>
                <h2>5. ¿Cual es el concepto de machine Learning?</h2>
				<input type="radio" name="pregunta5" id="res21">
				<label for="res21">A todo aquello que podemos aprender de una maquina.</label>
                <br>
				<input type="radio" name="pregunta5" id="res22">
				<label for="res22">A programar maquinas para que usen algoritmos para parsear datos.</label>
                <br>
				<input type="radio" name="pregunta5" id="res23">
				<label for="res23">A enseñar a las maquinas a hacer cosas.</label>
                <br>
                <input type="radio" name="pregunta5" id="res24">
				<label for="res24">Leer codigo interpretado por las maquinas.</label>
                <br>
                <input type="radio" name="pregunta5" id="res25">
				<label for="res25">Maquinas capaces de aprender codigo binario.</label>
                <br><br>
                <h2>6. ¿Que entendemos por realidad aumentada?</h2>
				<input type="radio" name="pregunta6" id="res26">
				<label for="res26">Aquella que vemos cuando nos colocamos unas gafas de vision 3D.</label>
                <br>
				<input type="radio" name="pregunta6" id="res27">
				<label for="res27">Es la ampliación de las imagenes y videos a través del movil.</label>
                <br>
				<input type="radio" name="pregunta6" id="res28">
				<label for="res28">Como interpretamos los videojuegos de manera más realista.</label>
                <br>
                <input type="radio" name="pregunta6" id="res29">
				<label for="res29">Interactuar de manera virtual con demas personas.</label>
                <br>
                <input type="radio" name="pregunta6" id="res30">
				<label for="res30">Es la vision de un entorno fisico del mundo real a traves de un dispositivo tecnologico.</label>
                <br><br>
                <h2>7. ¿Que es la big Data?"</h2>
				<input type="radio" name="pregunta7" id="res31">
				<label for="res31">Conjunto de datos muy grandes.</label>
                <br>
				<input type="radio" name="pregunta7" id="res32">
				<label for="res32">Entre otros aprovechar la inteligencia de analizar y cruzar grandes cantidades de datos para 
                    identificar nuevas oportunidades de negocio.
                </label>
                <br>
				<input type="radio" name="pregunta7" id="res33">
				<label for="res33">Crear una aplicacion web donde se almacena mucha información.</label>
                <br>
                <input type="radio" name="pregunta7" id="res34">
				<label for="res34">Disciplina tecnologica que se ocupa para almacenar cada vez un numero mayor de datos, 
                    requiere cada vez más espacio.
                </label>
                <br>
                <input type="radio" name="pregunta7" id="res35">
				<label for="res35">Datos almacenados por grandes corporaciones.</label>
                <br><br>
                <h2>8. ¿Para que son utilizados los codigos QR?</h2>
				<input type="radio" name="pregunta8" id="res36">
				<label for="res36">Un conjunto de módulos en blanco y negro para optener información.</label>
                <br>
				<input type="radio" name="pregunta8" id="res37">
				<label for="res37">Un conjunto de modulos en blanco y negro para pegar en los comercios.</label>
                <br>
				<input type="radio" name="pregunta8" id="res38">
				<label for="res38">Un conjunto de módulos en blanco y negro para descargar aplicaciones.</label>
                <br>
                <input type="radio" name="pregunta8" id="res39">
				<label for="res39">Un conjunto de módulos en blanco y negro para conectarse a una red.</label>
                <br>
                <input type="radio" name="pregunta8" id="res40">
				<label for="res40">Un conjunto de módulos en blanco y negro para conectarse a un dispositivo.</label>
                <br><br>
                <h2>9. ¿Que es el spam?</h2>
				<input type="radio" name="pregunta9" id="res41">
				<label for="res41">Un virus informatico.</label>
                <br>
				<input type="radio" name="pregunta9" id="res42">
				<label for="res42">Un lenguaje de programación.</label>
                <br>
				<input type="radio" name="pregunta9" id="res43">
				<label for="res43">Correos no solicitados.</label>
                <br>
                <input type="radio" name="pregunta9" id="res44">
				<label for="res44">Una marca de ordenadores.</label>
                <br>
                <input type="radio" name="pregunta9" id="res45">
				<label for="res45">El acronimo de "Solicitudes Para la Activación de Mejoras".</label>
                <br><br>
                <h2>10. ¿Que es un procesador de textos?</h2>
				<input type="radio" name="pregunta10" id="res46">
				<label for="res46">Es un programa para diseñar imagenes.</label>
                <br>
				<input type="radio" name="pregunta10" id="res47">
				<label for="res47">Es un programa para elaborar documentos.</label>
                <br>
				<input type="radio" name="pregunta10" id="res48">
				<label for="res48">Es un programa para realizar retoques fotograficos.</label>
                <br>
                <input type="radio" name="pregunta10" id="res49">
				<label for="res49">Es un rpograma para convertir documentos.</label>
                <br>
                <input type="radio" name="pregunta10" id="res50">
				<label for="res50">Es un programa para convertir videos.</label>
                <br><br>
                <h2>11. Uno de los principales objetivos de un sistema manejador de base de datos (SGBD) es</h2>
				<input type="radio" name="pregunta11" id="res51">
				<label for="res51">Realizar la representación simbólica(numérica, alfabética, algorítmica, etc.)
                    de un atributo o característica de una entidad.
                </label>
                <br>
				<input type="radio" name="pregunta11" id="res52">
				<label for="res52">Acceder a toda la información de la base de datos.</label>
                <br>
				<input type="radio" name="pregunta11" id="res53">
				<label for="res53">Disponer de datos para ser compartidos por diferentes usuarios y aplicaciones.</label>
                <br>
                <input type="radio" name="pregunta11" id="res54">
				<label for="res54">Generar redundancia de los datos.</label>
                <br>
                <input type="radio" name="pregunta11" id="res55">
				<label for="res55">Permitir el acceso a los usuarios.</label>
                <br><br>
                <h2>12. Una base de datos es</h2>
				<input type="radio" name="pregunta12" id="res56">
				<label for="res56">Representación simbólica (numérica, alfabética, algorítmica, etc)
                    de un atributo o una característica de una entidad.
                </label>
                <br>
				<input type="radio" name="pregunta12" id="res57">
				<label for="res57">Colección de datos y objetos estructurados e interrelacionados, sobre un tema o proposito especifico.</label>
                <br>
				<input type="radio" name="pregunta12" id="res58">
				<label for="res58">Conjunto de programas para acceder a datos.</label>
                <br>
                <input type="radio" name="pregunta12" id="res59">
				<label for="res59">Aplicacion utilizada para capturar información.</label>
                <br>
                <input type="radio" name="pregunta12" id="res60">
				<label for="res60">Conjunto de datos numericos.</label>
                <br><br>
                <h2>13. La integridad en Base de datos hace referencia</h2>
				<input type="radio" name="pregunta13" id="res61">
				<label for="res61">La información almacenada en la base de datos esté libre de errores.</label>
                <br>
				<input type="radio" name="pregunta13" id="res62">
				<label for="res62">Solo las personas autorizadas accedan a la información.</label>
                <br>
				<input type="radio" name="pregunta13" id="res63">
				<label for="res63">Los datos sean numericos.</label>
                <br>
                <input type="radio" name="pregunta13" id="res64">
				<label for="res64">Las tablas tengan llaves primarias.</label>
                <br>
                <input type="radio" name="pregunta13" id="res65">
				<label for="res65">Generar redundancia de los datos.</label>
                <br><br>
                <h2>14. Cual de las siguientes consultas regresa todos los departamentos en la tabla (sin duplicados)</h2>
				<input type="radio" name="pregunta14" id="res66">
				<label for="res66">Select Department From Salaries Where Salary=0.</label>
                <br>
				<input type="radio" name="pregunta14" id="res67">
				<label for="res67">Select Department From Salaries.</label>
                <br>
				<input type="radio" name="pregunta14" id="res68">
				<label for="res68">Select all Department From Salaries.</label>
                <br>
                <input type="radio" name="pregunta14" id="res69">
				<label for="res69">Select Distinc Department From Salaries.</label>
                <br>
                <input type="radio" name="pregunta14" id="res70">
				<label for="res70">Select all Department From Salaries Order By Department.</label>
                <br><br>
                <h2>15. ¿Que palabra clave se usa para filtrar informacion?</h2>
				<input type="radio" name="pregunta15" id="res71">
				<label for="res71">UPDATE.</label>
                <br>
				<input type="radio" name="pregunta15" id="res72">
				<label for="res72">SELECT.</label>
                <br>
				<input type="radio" name="pregunta15" id="res73">
				<label for="res73">WHERE.</label>
                <br>
                <input type="radio" name="pregunta15" id="res74">
				<label for="res74">GROUP BY.</label>
                <br>
                <input type="radio" name="pregunta15" id="res75">
				<label for="res75">ORDER BY.</label>
                <br><br>
                <h2>16. ¿Con qué sentencia borras información?</h2>
				<input type="radio" name="pregunta16" id="res76">
				<label for="res76">Drop.</label>
                <br>
				<input type="radio" name="pregunta16" id="res77">
				<label for="res77">Delete.</label>
                <br>
				<input type="radio" name="pregunta16" id="res78">
				<label for="res78">Update.</label>
                <br>
                <input type="radio" name="pregunta16" id="res79">
				<label for="res79">Where.</label>
                <br>
                <input type="radio" name="pregunta16" id="res80">
				<label for="res80">Select.</label>
                <br><br>
                <h2>17. Comando que elimina un objeto de la base de datos</h2>
				<input type="radio" name="pregunta17" id="res81">
				<label for="res81">Delete.</label>
                <br>
				<input type="radio" name="pregunta17" id="res82">
				<label for="res82">Dropt.</label>
                <br>
				<input type="radio" name="pregunta17" id="res83">
				<label for="res83">Drop.</label>
                <br>
                <input type="radio" name="pregunta17" id="res84">
				<label for="res84">Alter.</label>
                <br>
                <input type="radio" name="pregunta17" id="res85">
				<label for="res85">Order By.</label>
                <br><br>
                <h2>18. ¿Que es un dato?</h2>
				<input type="radio" name="pregunta18" id="res86">
				<label for="res86">Un simbolo que tiene datos especificos sin valor alguno.</label>
                <br>
				<input type="radio" name="pregunta18" id="res87">
				<label for="res87">Un simbolo que tiene información especifica con valor asignado.</label>
                <br>
				<input type="radio" name="pregunta18" id="res88">
				<label for="res88">Un simbolo que tiene información especifica sin valor alguno.</label>
                <br>
                <input type="radio" name="pregunta18" id="res89">
				<label for="res89">Un simbolo sin valor alguno.</label>
                <br>
                <input type="radio" name="pregunta18" id="res90">
				<label for="res90">Una cadena de texto.</label>
                <br><br>
                <h2>19. Son DBMS libres</h2>
				<input type="radio" name="pregunta19" id="res91">
				<label for="res91">Progres, Postgres, Oracle.</label>
                <br>
				<input type="radio" name="pregunta19" id="res92">
				<label for="res92">Postgres, SQLServerExpres Edition, MYSQL.</label>
                <br>
				<input type="radio" name="pregunta19" id="res93">
				<label for="res93">Oracle, Progres, DB2.</label>
                <br>
                <input type="radio" name="pregunta19" id="res94">
				<label for="res94">Progres, DB2, Express Edition, MYSQL.</label>
                <br>
                <input type="radio" name="pregunta19" id="res95">
				<label for="res95">MYSQL y SQLServerExpres Edition.</label>
                <br><br>
                <h2>20. Comando que crea un objeto dentro de la base de datos</h2>
				<input type="radio" name="pregunta20" id="res96">
				<label for="res96">INSERT.</label>
                <br>
				<input type="radio" name="pregunta20" id="res97">
				<label for="res97">ADD.</label>
                <br>
				<input type="radio" name="pregunta20" id="res98">
				<label for="res98">CREATE.</label>
                <br>
                <input type="radio" name="pregunta20" id="res99">
				<label for="res99">ALL.</label>
                <br>
                <input type="radio" name="pregunta20" id="res100">
				<label for="res100">BETWEEN.</label>
                <br><br><br><br>
                <div class="btn-center" >
                                 
                </div>
		</div>
</div>
    
    <!-- Footer -->
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Text -->
    <section class="mb-4">
      <p>
        Recuerda que el modulo de evaluaciones debe contestarse de manera honesta, cualquier indicio de trampa sera motivo de cancelación
      </p>
    </section>
    <!-- Section: Text -->


  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    IT Outsoursing© 2022 Copyright
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/timecircles/1.5.3/TimeCircles.min.js" integrity="sha512-FofOhk0jW4BYQ6CFM9iJutqL2qLk6hjZ9YrS2/OnkqkD5V4HFnhTNIFSAhzP3x//AD5OzVMO8dayImv06fq0jA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="../../js/main.js"> </script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</html>