<?php

/*
*Plugin Name: Shukon
*/

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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<link rel="stylesheet" href="main_file.css">
<body>
  <section class="form1">
  <form action="<?php $_SERVER["PHP_SELF"] ?>" id="institution" method="POST">
  <div id="passage">
    <h1>What Type Of Institution Are You? </h1>
    <p><b>Help us understand your company better, so we can find the perfect package suitable for all your needs.</b></p>
</div>
    <div class="content">
    <div class="radio-1" id="selection">
      <input type="radio" name="institution" value="npo" />
      <label id="labelsel" for="npo">NPO</label>
    </div>
    <div class="radio-1" id="selection">
      <input type="radio" name="institution" value="ecom" />
      <label id="labelsel" for="ecom">ECOM</label>
    </div>
    <div class="radio-1" id="selection">
      <input type="radio" name="institution" value="smme" />
      <label id="labelsel" for="smme">SMME</label>
    </div>
    <div class="radio-1" id="selection">
      <input type="radio" name="institution" value="maint" />
      <label id="labelsel" for="maint">MAINTENANCE</label>
    </div>
    <button type="submit" value="submit" name="submit_1" class="submit-btn">SUBMIT</button>
        <a href="https://dev-milliseconds.pantheonsite.io" class="submit-btn2">HOME</a>
    </div>
  </form>
</section>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
<script>
    const parent = document.querySelector(".content");
  parent.addEventListener("click", function(event) {
    const target = event.target;

    if (target.tagName === "LABEL") {
      const radio = target.previousElementSibling;
      radio.checked = true;
      if(target.textContent === "NPO") {
        console.log('npo selected')
      }
      else if(target.textContent === "ECOM") {
        console.log('something else')
      }
    }
  }); 
  const divs = document.querySelectorAll('#labelsel');
let selectedDiv = null;

divs.forEach((div) => {
  div.addEventListener('click', () => {
    if (selectedDiv) {
      selectedDiv.classList.remove('selected');
      selectedDiv.style.backgroundColor = '#323858';
    }
    if (div !== selectedDiv) {
      selectedDiv = div;
      div.classList.add('selected');
      div.style.backgroundColor = '#3b436ecf';
    } else {
      selectedDiv = null;
    }
  });
});
  </script>