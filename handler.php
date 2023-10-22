<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <title>Welcome Page</title>
  </head>

  <body>
    
  <?php
    $userName = "";
    if ( isset( $_POST['radius'] ) ){
      $radius = $_POST['radius'];
    }
    if ( isset( $_POST['diameter'] ) ){
      $diameter = $_POST['diameter'];
    }
    if ( isset( $_POST['circumfrence'] ) ){
      $circumfrence = $_POST['circumfrence'];
    }
    if ( isset( $_POST['area'] ) ){
      $area = $_POST['area'];
    }
    
    $Dvalue = readline("Enter diameter:");
    $diameter = floatval($Dvalue);
    $radius = $diameter / 2;
    $circumference = $diameter*pi();
    $area = pi()*$radius**2;

    echo "<h1>For a Circle of Radius ".$radius."</h1>\n";
    echo "<p>Area = ".$area."\n";
    echo "<p>Circumference = ".$circumference."\n";
?>
    
  </body>
  
</html>
