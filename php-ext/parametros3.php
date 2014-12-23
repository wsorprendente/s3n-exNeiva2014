<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
   <style type="text/css">


.container {
	
	margin: 0 auto 0 auto;
	width: 960px;

}

.inemail {
	margin-top: 5px;
}

   </style>
  </head>
  <body>



<?php
 //echo "informacion". "<br />";

 $ven =  $_GET['ven']; 
$can = $_GET['can']; 
$tot = $_GET['tot']; 
$total = $can/($tot*$tot);
$totalf = number_format($total, 2, ',', ' ');
//echo $total; 
if ($total <= 18.5) {
  $imc = "Usted es una persona por debajo del peso ideal"; 
} elseif ($total >= 18.6 && $total <= 24.9) {
   $imc = "Usted es una persona Saludable"; 
}elseif ($total >= 25 && $total <= 29.9) {
   $imc = "Usted es una persona con sobrepeso"; 
}elseif ($total >= 30 && $total <= 39.9) {
   $imc = "Usted es una persona obesa"; 
}elseif ($total >= 40) {
   $imc = "Usted es una persona con obesidad mórbida"; 
}
 ?>



<div class="row ">  
  <div class="col-md-12">
  <div class="container">
  <ul class="nav nav-pills">
  <li ><a href="ex1.php">Ejercicio 1</a></li>
  <li><a href="ex2.php">Ejercicio 2</a></li>
  <li class="active"><a href="ex3.php">Ejercicio 3</a></li>
  <li><a href="ex4.php">Ejercicio 4</a></li>
  <li><a href="ex5.php">Ejercicio 5</a></li>
  </ul>
</div></div></div>

<div class="container">
<div class="row">
      <div class="col-md-12">
    <form class="form-horizontal" method="GET">
  <fieldset>
    <legend>Ejercicio 3</legend>
    <div class="form-group ">
      <label for="inputEmail" class="col-lg-3 control-label inemail">Nombre del Paciente.</label>
      <div class="col-lg-9">
        <input type="text" class="form-control inemail" id="inputEmail" name="ven" placeholder="<?php echo $ven ?>"  disabled>
      </div>
      <label for="inputEmail" class="col-lg-3 control-label inemail">Peso en Kg.</label>
      <div class="col-lg-9">
        <input type="text" class="form-control inemail" id="inputEmail" name="can" placeholder="<?php echo $can ?>"  disabled>
      </div>
      <label for="inputEmail" class="col-lg-3 control-label inemail">Estatura en mtrs. </label>
      <div class="col-lg-9">
        <input type="text" class="form-control inemail" id="inputEmail" name="tot" placeholder="<?php echo $tot ?>"  disabled>
      </div>
      
   </div>
    
 <!--<div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
      <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>-->

  </fieldset>
</form>

<?php 
echo "<p style='text-align: center;'>";
echo "Su IMC es: ". $totalf;
echo "<h2 style='text-align: center;'>". $imc. "</h2></p>";
?>
</div></div></div></body>

     

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>