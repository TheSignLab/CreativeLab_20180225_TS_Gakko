<?php include 'scheduleFunctions.php';?>

<?php 

$json = file_get_contents("horariosJSON.json");
$json_data = json_decode($json,true);

$horarios =  $json_data['courses'];

?>


<section name="activitiesSchedule" sectionNumber="3" id="w4s3" class="">
    <wrapper>


        <section-title>
            <h2>
                <span class="f-mcond">HORARIO DE</span>
                <span class="f-cat">ESTUDIANTES</span>
            </h2>
        </section-title>

        <swiper swiper-name="schedules" n-courses="<?php echo count($horarios)?>">

            <div class="swiper-container">
                <div class="swiper-wrapper">

                    <?php 
                 
                   for ($x = 0; $x < count($horarios); $x++) {
                       
                        $curso = $horarios[$x];
                
                       $cursoNombre = $curso['course'];
                        echo "<div class='swiper-slide' course-name='$cursoNombre'>";
                        
                       if($curso['type'] == "Primaria"){
                           
                            echo "<schedule-course class='primaria' c>";
                            renderPrimaria($curso);
                            echo "</schedule-course >";
                        }else{
                            echo "<schedule-course class='secundaria'>";
                            renderSecundaria($curso);
                            echo "</schedule-course >";
                         
                         
                        }
                       echo '</div>';
                        
                    }
                     
                ?>


                </div>

            </div>



            <!-- If we need pagination -->
            <div class="swiper-pagination toMiddle "></div>





            <!-- Sticky Container -->
            <div class="swiper-sticky">

                <div class="swiper-paso" paso="1">

                    <div class="mobile">


                    </div>
                    <div class="desktop">

                    </div>
                </div>

            </div>
            
            <!-- If we need navigation buttons -->
            <div class="swiper-buttons">
                <div class="swiper-buttonPrev"> 
                    <img src="/img/buttons/schedule_prev.png" width="100%">
                </div>
                <div class="swiper-buttonNext">
                <img src="/img/buttons/schedule_next.png"  width="100%">
                </div>
            </div>






        </swiper>




    </wrapper>
</section>
