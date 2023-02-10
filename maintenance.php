
<?php

$maina = $mainq_1 + $mainq_2 + $mainq_3 + $mainq_4;

if ($maina > 0 && $maina <= 8) {?>
   <style>
        #institution {
            display: none;
        }
    </style>
    <a  href="" >fixer upper package</a>
    <?php 
    // Displays starter package and fixer upper package;
} else if ($maina > 8 && $maina < 16) {?>
    <style>
        #institution {
            display: none;
        }
    </style>
    <a  href="" >optimizer package</a>
    <?php 
    //  Displays starter package and optimizer package
} else if ($maina == 16) {?>
<style>
        #institution {
            display: none;
        }
    </style>
    <a  href="" >premium package</a>
 <?php  
    // Display starter package and premium package
}
