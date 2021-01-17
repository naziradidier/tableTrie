<?php
     $table = array(1,8,5,9,6,7,2,3,4,10);
     function tableTrier($tableau){
         if(!is_array($tableau))
         return;
         for($i=0; $i<count($tableau); $i++){
             for($j= $i+1; $j<count($tableau); $j++){
                 if($tableau[$j] = $tableau[$i]){
                     $tmp = $tableau[$i];
                     $tableau[$i]= $tableau[$j];
                     $tableau[$j] =$tmp;
                 }
             }
         }
         return $tableau;
     }
     echo 'avant tirage: ';
     print_r($table);
     echo 'après tirrage: ';
     $trier = tableTrier($table);
     print_r($trier);
?>