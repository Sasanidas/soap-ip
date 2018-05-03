<?php
session_start();
require_once './ajax.php';
include_once 'GeoIP.php';
global $ajax;
$ajax = ajax();

$ajax->click("enviar", $ajax->form("ajax.php?Locate/getIP"));
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!--<html>
    <head>
        <meta charset="UTF-8">
        <title> GEOIP</title>
    </head>
    <body>
        <form action="index.php">
            <input type="text" name="a[ip]" id="a[ip]">
            <input type="submit" name="enviar" id="enviar" value="Solicitar IP">

        </form>
        <p id="aqui">
            
        </p>
        <script>
        function editar(ip,pais,codigoPais){
            document.getElementById('aqui').innerHTML += "La ip " + ip +", pertenece al pais " + pais + ", con el codigo: " + codigoPais + ". <br>";
        }
        </script>

    </body>
</html>-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>GeoIP Tool</title>
    <link rel="stylesheet" type="text/css" href="css/view.css" media="all">
    <script type="text/javascript" src="view.js"></script>

    <?php echo $ajax->init(); ?>

</head>
<body id="main_body" >

    <img id="top" src="css/top.png" alt="">
    <div id="form_container">

        <h1><a>GeoIP Tool</a></h1>
        <form  class="appnitro" action="index.php">
            <div class="form_description">
                <h2>GeoIP Tool</h2>
                <p>Introduces una dirección IP y devuelve el pais de esta.</p>
            </div>						
            <ul >

                <li id="li_1" >
                    <label class="description" for="element_1">Introduce la IP </label>
                    <div>
                        <input name="a[ip]" id="a[ip]" class="element text large" type="text" maxlength="255" value=""/> 
                    </div><p class="guidelines" id="guide_1"><small>Debes introducir una ip valida.</small></p> 
                </li>
                <li id="li_2" style="width: 100%;font-size: 1.5em;" >
                    <div id="aqui">

                    </div>
                </li>

                <li class="buttons">
                    <input class="button_text" type="submit" name="enviar" id="enviar" value="Enviar" />
                </li>

            </ul>
        </form>	
    </div>
    <img id="bottom" src="css/bottom.png" alt="">
    <script>
        function editar(ip, pais, codigoPais) {
            document.getElementById('aqui').innerHTML += "La ip " + ip + ", pertenece al pais " + pais + ", con el codigo: " + codigoPais + ". <br><br>";
        }
        
        function fail(){
            alert('IP no valida');
        }
    </script>
</body>
</html>