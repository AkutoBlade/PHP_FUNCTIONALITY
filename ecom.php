<?php

$ecoma =  $ecomq_1 + $ecomq_2 + $ecomq_3 + $ecomq_4 + $ecomq_5;
if ($ecoma > 0 && $ecoma <= 10) {?>

  <style>
  #institution {
      display: none;
  }
  
</style>
<a  href="" >starter package</a>
<?php

} else if ($ecoma > 10 && $ecoma <=  20) {?>

  <style>
  #institution {
      display: none;
  }
</style>
<a  href="" >growth package</a>
<?php
} else if ($ecoma > 20 && $ecoma <= 30) { ?>
<style>
        #institution {
            display: none;
        }
    </style>
    <a  href="" >premium package</a>
<?php 

} 
