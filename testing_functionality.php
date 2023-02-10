<?php
error_reporting(0);

$arr_role = ['npo', 'ecom', 'smme', 'maint'];
//Institution Form Functionality
if (isset($_POST['submit_1'])) {
  $op_role = $_POST['institution'];


  foreach ($arr_role as $role) {
    if ($op_role === $role) {
      if ($role === 'npo') {

        require('npo_form.php');
      } else if ($role === 'ecom') {

        require('ecom_form.php');
      } else if ($role === 'smme') {

        require('smme_form.php');
      } else if ($role === 'maint') {

        require('maintenance_form.php');
      }
    }
  }
}

//NPO Form Functionality
if (isset($_POST['submit_npo'])) {
  $npoq_1 = $_POST["npo_1"];
  $npoq_2 = $_POST["npo_2"];
  $npoq_3 = $_POST["npo_3"];
  $npoq_4 = $_POST["npo_4"];
  $npoq_5 = $_POST["npo_5"];


  require 'npo.php';
}




if (isset($_POST['submit_ecom'])) {
  $ecomq_1 = $_POST["ecom_1"];
  $ecomq_2 = $_POST["ecom_2"];
  $ecomq_3 = $_POST["ecom_3"];
  $ecomq_4 = $_POST["ecom_4"];
  $ecomq_5 = $_POST["ecom_5"];


  require 'ecom.php';
}

if (isset($_POST['submit_smme'])) {
  $smmeq_1 = $_POST["smme_1"];
  $smmeq_2 = $_POST["smme_2"];
  $smmeq_3 = $_POST["smme_3"];
  $smmeq_4 = $_POST["smme_4"];
  $smmeq_5 = $_POST["smme_5"];

  require 'smme.php';
}


if (isset($_POST['submit_main'])) {

  $mainq_1 = $_POST["main_1"];
  $mainq_2 = $_POST["main_2"];
  $mainq_3 = $_POST["main_3"];
  $mainq_4 = $_POST["main_4"];

 

  require 'maintenance.php';
}






?>









<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="<?php $_SERVER["PHP_SELF"] ?>" id="institution" method="POST">
    <h1>1. What Type Of Institution Are You? </h1>
    <div>
      <input type="radio" name="institution" value="npo" />
      <label for="npo">NPO</label>
    </div>
    <div>
      <input type="radio" name="institution" value="ecom" />
      <label for="ecom">ECOM</label>
    </div>
    <div>
      <input type="radio" name="institution" value="smme" />
      <label for="smme">SMME</label>
    </div>
    <div>
      <input type="radio" name="institution" value="maint" />
      <label for="maint">MAINTENANCE</label>
    </div>
    <input type="submit" value="submit" name="submit_1">
  </form>

</body>

</html>