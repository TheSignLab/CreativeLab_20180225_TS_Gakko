<?php 
        function getPrimaryTimeHourByK($n){
            
            if($n == 0){
                $out = "6:50 am - 7:10 am";
            }
            
            if($n == 1){
                $out = "7:10 am - 8:00 am";
            } 
            
            if($n == 2){
                $out = "8:00 am - 8:50 am";
            }
            
            if($n == 3){
                $out = "9:30 am - 10:20 am";
            }
             if($n == 4){
                $out = "10:20 am - 11:10 am";
            }
                
            if($n == 5){
                $out = "11:10 am - 12:00 m";
            } 
               
            if($n == 6){
                $out = "12:50 pm - 1:40 pm";
            }
               
            if($n == 7){
                $out = "1:40 pm - 1:50 pm";
            }
            
            return $out;
            
        }


    function getSecundaryTimeHourByK($n){
            
            if($n == 0){
                $out = "6:50 am - 7:10 am";
            }
            
            if($n == 1){
                $out = "7:10 am - 8:00 am";
            } 
            
            if($n == 2){
                $out = "8:00 am - 8:50 am";
            }
            
            if($n == 3){
                $out = "9:40 am - 10:20 am";
            }
             if($n == 4){
                $out = "10:20 am - 11:10 am";
            }
                
            if($n == 5){
                $out = "11:10 am - 12:00 m";
            } 
               
            if($n == 6){
                $out = "12:50 pm - 1:40 pm";
            }
               
            if($n == 7){
                $out = "1:40 pm - 2:40 pm";
            }
        if($n == 8){
                $out = "2:40 pm - 2:50 pm";
            }
            
            
            return $out;
            
        }


function renderPrimaria($curso){

    foreach ($curso['days'] as $day) {  

        $miDia = $day['day'];
        $miCurso = $curso['course'];
        $k = 0;

        echo "<schedule-day  class='$miDia'>";
        echo "<schedule-item class='title-day'>
        
                 <div class='mobile'><span>DÍA $miDia $miCurso</span>
                 </div>
                 
                 <div class='desktop'><span>DÍA $miDia</span>
                 </div>
                 
            </schedule-item>";

        $kClassTime = getPrimaryTimeHourByK(0);
        echo "<schedule-item class='open'>";
        echo "<span class='title'>OPEN DAY</span>";
        echo "<span class='time'>$kClassTime</span>";
        echo"</schedule-item>";   

           foreach ($day['classes'] as $kClass) {  

               $k = $k + 1;

               if($k == 3){
                   $miBreak = "BREAK";
                   $miBreakLetra = $miBreak[$miDia-1]; 
                   echo "<schedule-item class='break'>";

                   echo "<div class='mobile'>";
                   echo "<span>BREAK</span>";
                   echo "</div>";

                   echo "<div class='desktop'>";
                    echo "<span>$miBreakLetra</span>";
                   echo "</div>";

                   echo "</schedule-item>";
               }
                  
               if($k == 6){
                   $miLunch = "LUNCH";
                   $miLunchLetra = $miLunch[$miDia-1]; 
                   echo "<schedule-item class='lunch'>";

                   echo "<div class='mobile'>";
                   echo "<span>LUNCH</span>";
                   echo "</div>";

                   echo "<div class='desktop'>";
                    echo "<span>$miLunchLetra</span>";
                   echo "</div>";

                   echo "</schedule-item>";
               }
               
                    $kClassTime = getPrimaryTimeHourByK($k);
                       echo "<schedule-item>";
                       echo "<span class='title'>$kClass</span>";
                       echo "<span class='time'>$kClassTime</span>";
                       echo "</schedule-item>";
                   
                    

            }
        
        $kClassTime = getPrimaryTimeHourByK(7);
        echo "<schedule-item class='close'>";
        echo "<span class='title'>CLOSE DAY</span>";
        echo "<span class='time'>$kClassTime</span>";
        echo"</schedule-item'>"; 

        echo "</schedule-day>";
    }
    
  
}
   


















function renderSecundaria($curso){

    foreach ($curso['days'] as $day) {  

            $miDia = $day['day'];
        $miCurso = $curso['course'];
        $k = 0;

        echo "<schedule-day  class='$miDia'>";
              echo "<schedule-item class='title-day'>
        
                 <div class='mobile'><span>DÍA $miDia $miCurso</span>
                 </div>
                 
                 <div class='desktop'><span>DÍA $miDia</span>
                 </div>
                 
            </schedule-item>";

        $kClassTime = getSecundaryTimeHourByK(0);
        echo "<schedule-item class='open'>";
        echo "<span class='title'>OPEN DAY</span>";
        echo "<span class='time'>$kClassTime</span>";
        echo"</schedule-item>";   

           foreach ($day['classes'] as $kClass) {  

               $k = $k + 1;

               if($k == 3){
                   $miBreak = "BREAK";
                   $miBreakLetra = $miBreak[$miDia-1]; 
                   echo "<schedule-item class='break'>";

                   echo "<div class='mobile'>";
                   echo "<span>BREAK</span>";
                   echo "</div>";

                   echo "<div class='desktop'>";
                    echo "<span>$miBreakLetra</span>";
                   echo "</div>";

                   echo "</schedule-item>";
               }
                  
               if($k == 6){
                   $miLunch = "LUNCH";
                   $miLunchLetra = $miLunch[$miDia-1]; 
                   echo "<schedule-item class='lunch'>";

                   echo "<div class='mobile'>";
                   echo "<span>LUNCH</span>";
                   echo "</div>";

                   echo "<div class='desktop'>";
                    echo "<span>$miLunchLetra</span>";
                   echo "</div>";

                   echo "</schedule-item>";
               }
               
                    $kClassTime = getSecundaryTimeHourByK($k);
                       echo "<schedule-item>";
                       echo "<span class='title'>$kClass</span>";
                       echo "<span class='time'>$kClassTime</span>";
                       echo "</schedule-item>";
                   
                    

            }
        
        $kClassTime = getSecundaryTimeHourByK(8);
        echo "<schedule-item class='close'>";
        echo "<span class='title'>CLOSE DAY</span>";
        echo "<span class='time'>$kClassTime</span>";
        echo"</schedule-item'>"; 

        echo "</schedule-day>";
    }
    
  
}
   


?>
