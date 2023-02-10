<?php

  $smmea =  $smmeq_1 + $smmeq_2 + $smmeq_3 + $smmeq_4 + $smmeq_5;

if($smmea <= 6){?>
    <style>
  #institution {
      display: none;
  }
</style>
<a  href="" >starter package</a>
<?php
   //displays starter package
   
   }else if($smmea > 6 && $smmea <=  12 ){?>
   
    <style>
    #institution {
        display: none;
    }
  </style>
  <a  href="" >growth package</a>
  <?php
   //displays growth package
   
   }else if($smmea > 12 && $smmea <= 36){?>
   
    <style>
    #institution {
        display: none;
    }
</style>
<a  href="" >premium package</a>
<?php 
    
   //displays premium package
   
   }