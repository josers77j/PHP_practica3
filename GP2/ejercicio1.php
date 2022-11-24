<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <form action="ejercicio1.php" method="post">
        <label for=""> Introduzca el mes <input type="text" name="mes" id="mes" placeholder="escriba el dia del mes"></label>
    </form>
  <?php

  if (isset($_POST['mes'])) {
    $mes = $_POST["mes"];   
    mostrar_mes($mes);
  }
    function mostrar_mes($mes){

        $array = array('','enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre');
        
        for ($i=1; $i <= count($array); $i++) { 
          if ($mes == $i) {
            echo 'El numero del mes ' . $i . ' pertenece a ' .$array[$i] . '<br>';
          }else{
            
          }
    }

  }  

  ?>  
</body>
</html>