<?php
  session_start();
    
    $vanillaCupcake = "";
    $chocolateCupcake = "";
    $redvelvetCupcake = "";

    include "cupcakes.php";
    

  //   $validForm = false;



  
  // if (isset($_POST["submitButton"])) {    

  //     $vanillaCupcake = $_POST["vanillaCupcake"];
  //     $chocolateCupcake = $_POST["chocolateCupcake"];
  //     $redvelvetCupcake = $_POST["redvelvetCupcake"];


  //     if ($validForm) {
  //       $message = "all good";
  //     } else {
  //       $message = "not good";
  //     }

  // }
  // else{

  // }
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>AJAX Team Project</title>
    <link href="https://fonts.googleapis.com/css?family=Neucha|Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="main.css">
    <style type="text/css">
    .bold {
        font-weight: bold;
    }
    .header{
      text-align: center;
      font-weight: bold;
      font-size: 50px;
      color: #cc6600;
      background-color: black;
      border:  10px solid black;
      border-radius: 30%;
    }
    .fields{
      text-indent: 80px;
      font-weight: bold;
      font-size: 30px;

    }
    .choice{
      text-indent: 80px;


    }
    #container{
      width: 900px;
      background-color: #999999;
      border: 10px solid #cc6600;
      border-radius: 20%;

      margin:auto;
    }
    #image{
      width: 300px;
     margin: 25%;
    }
    .fields2{
 color: #cc6600;
 font-weight: bold;
 font-size: 37px;
    }
    </style>
    <style type="text/css">
     :root #content>#right>.dose>.dosesingle,
    :root #content>#center>.dose>.dosesingle,
    :root .container>.infoBoxList>.shareInfoBox {
        display: none !important;
    }
    </style>
    <script src="../../jQuery/js/jquery-3.2.1.js"></script>
     <script>
          $(document).ready(function(e) {

          $("#selectedCupcakes").change(function(){
                
                var selectedValue = $("#selectedCupcakes").val();

                if (selectedValue == "vanillaCupcake") {
                        $.get("vanillaCupcake.JSON", function(data, status){
                        
                        loadCupcake(data);

                        });
                }

                if (selectedValue =="chocolateCupcake") {
                        $.get("chocolateCupcake.JSON", function(data, status){
                            loadCupcake(data);
                        });

                }

                if (selectedValue =="redvelvetCupcake") {
                        $.get("redvelvetCupcake.JSON", function(data, status){
                            loadCupcake(data);
                        });

                }

          });

              function loadCupcake(inCupcake) {
                $("#description").html(inCupcake.description);
                $("#price").html(inCupcake.price);
                $("#image").html(inCupcake.image);
            }
          });

    </script> 
</head>

<body>
  <div class="container">
    <h1>WDV321 Advanced Javascript</h1>
    <h2>AJAX Team Project</h2>
    <h3>Team Members: </h3>
    <div class="teamMembers">
      <p>Adam</p>
      <p>Dan</p>
      <p>Kyle</p>
    </div>


    <form name="form1" method="post" action="index.php">
        <h1>Halloween Treats</h1>
        <p>Make your choice if you dare.<br>
            <label>
                <select name="selectedCupcakes" id="selectedCupcakes" >
                    <option value="default" name="default">Select an Option</option>
                    <option value="vanillaCupcake" name="vanillaCupcake"> Vanilla Cupcake</option>
                    <option value="chocolateCupcake" name="chocolateCupcake">Chocolate Cupcake</option>
                    <option value="redvelvetCupcake" name="redvelvetCupcake">Red Velvet Cupcake</option>
                </select>
            </label>
        </p>
        <p>Description:<p class="listItem" id="description"></p></p>
        <p >Price:<p class="listItem" id="price"></p></p>
        <p >Image<p class="listItem" id="image"></p></p>
    </form>

  </div>
  <!-- container -->
</body>

</html>