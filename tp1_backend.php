<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Potrero Digital</title>

    <style type="text/css">
    	body{

    		background-color: #000;
    	}
    	p{
    		color:#fff;
    	}
    	h1,h2{

    		 background-image: linear-gradient(#444, #111);
    		 text-align: center;
    		color:#fff;
    	
    		 width: 80%;
    		 margin:10%;
    		 border-radius: 7px;
    		 padding:4px;
    	}
    	h3,h4{
    		text-align: center;
    		color:#fff;

    	}
h4{

	 background-image: linear-gradient(#990000, rgb(59, 10, 10));
	 width: 30%;
	 margin: auto;
	 border-radius: 10px;
	 padding:4px;
	 margin-bottom: 6px;
}
    	li{

    		margin: 10px;color:#fff;
    	}
    	.ejer{

    		 background-image: linear-gradient(#444, #111);
    		text-align: center;
    		padding: 10px;
    		width: 70%;
    		border-radius: 30px;
    	}
    

    img{
    	border-radius: 20px;
    	margin: 10%;
    }
    .ejer1{

display: flex;
flex-direction: column;
align-items: center;
margin: auto;

    }
    </style>


</head>

<body>
    <header>
    
<h1>Trabajo practico N°1
</h1>
        <h2>Programación: Backend Developer <br>Potrero Digital</h2>

<h3>Introduccion a PHP</h3>
<h4>EJERCICIOS</h4>

 
    </header>

<ol>
	<li><p> Imprima por pantalla: “Hola mundo”.</p></li>
	<li><p> Cargue en una variable la cadena de caracteres “Hola mundo” y luego la imprima por pantalla.</p></li>
	<li><p> Crear dos variables enteras y mostrar por pantalla, la suma, la resta, la multiplicación, la división 
entera y el resto de la división entera.</p></li>
<li><p> Realizar la transformación de grados Celsius a Fahrenheit, para el valor 20°C y luego lo imprima por 
pantalla.</p>
</li>
<li><p> Implementar algoritmos que permitan:</p>
<ul>
	
	<li><p> a) Calcular el perímetro y el área de un rectángulo, dado que su base es 18cm y su altura 12cm.</p></li>
	<li><p> b) Calcular el perímetro y el área de un círculo dado que su radio es de 30cm</p></li>
</ul>
</li>
</ol>
<div class="ejer1">

<div class="ejer">
<h4>Ejercicio 1</h4>
<?php 
echo "<p>Hola Mundo</p>";
 ?>

</div>
<img src="1.jpeg">

</div>

<div class="ejer1">
<div class="ejer">
<h4>Ejercicio 2</h4>
<?php 
$frase="<p>Hola Mundo</p>";
echo $frase;
 ?>
</div>
<img src="2.jpeg">
</div>


<div class="ejer1">

<div class="ejer">
<h4>Ejercicio 3</h4>
<?php 
$a=10;
$b=3;
$suma=$a+$b;
$resta=$a-$b;
$multi=$a*$b;
$divi= round($a/$b);
$resto=$a%$b;
echo "<p>La suma de $a + $b es $suma <br> </p>";
echo "<p>La resta de $a - $b es $resta <br> </p>";
echo "<p>La multiplicacion de $a por $b es $multi <br></p> ";
echo "<p>La división de $a por $b es $divi <br> </p>";
echo "<p>El resto de $a por $b es $resto <br> </p>";
 ?>
</div>
<img src="3.jpeg">
</div>



<div class="ejer1">
<div class="ejer">
<h4>Ejercicio 4</h4>
<?php
$grados_celcius=20;
$grados_farenheit=$grados_celcius*1.8+32;
echo "<p> $grados_celcius grados celcius
 equivalen a  $grados_farenheit grados farenheit</p>";
 ?>
</div>
<img src="4.jpeg">
</div>






<div class="ejer1">
<div class="ejer">
<h4>Ejercicio 5 <br> 1° parte</h4>
 <?php 
$base=18;
$altura=12;
$perimetro=($base+$altura)*2;
$super=$base * $altura;
echo "<p>Para un rectangulo de $base cm de base y
 $altura cm de altura, su perimetro es $perimetro 
 cm y su superficie es $super cm</p>";  
 ?>
</div>
<img src="5-a.jpeg">
</div>







<div class="ejer1">
<div class="ejer">
	<h4>Ejercicio 5 <br> 2° parte</h4>
<?php 
$radio=30;
$pi=3.14;
$sup=$pi*pow($radio,2);
$peri=2*$pi*$radio;
echo "<p>Para un circulo de $radio cm de radio,

 su perimetro es $peri cm y su superficie es $sup cm</p>";  
 ?>
</div>
<img src="5-b.jpeg">
</div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>

</html>