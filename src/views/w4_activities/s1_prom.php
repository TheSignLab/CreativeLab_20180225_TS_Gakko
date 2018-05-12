<?php 

    $htmlSlide1 = '<wrapper-img>
                        <img src="/img/prom/CTS_30.jpg" alt="Instalacions del CTS : Cafeteria">
                    </wrapper-img> ';

     $htmlSlide2 = '<wrapper-img>
                        <img src="/img/prom/CTS_31.jpg" alt="Instalacions del CTS : Cafeteria">
                    </wrapper-img> ';
   
    $htmlSlide3 = '<wrapper-img>
                        <img src="/img/prom/CTS_32.jpg" alt="Instalacions del CTS : Cafeteria">
                    </wrapper-img> ';

    $htmlSlide4 = '<wrapper-img>
                        <img src="/img/prom/CTS_33.jpg" alt="Instalacions del CTS : Cafeteria">
                    </wrapper-img> ';

    $htmlSlide5 = '<wrapper-img>
                        <img src="/img/prom/CTS_34.jpg" alt="Instalacions del CTS : Cafeteria">
                    </wrapper-img> ';

    $htmlSlide6 = '<wrapper-img>
                        <img src="/img/prom/CTS_35.jpg" alt="Instalacions del CTS : Cafeteria">
                    </wrapper-img> ';

?>


<section name="activitiesProm" sectionNumber="2" id="w4s2" class="">
    <wrapper>
        <section-title>
            <h2>
                <span class="f-mcond">PROMOCIÓN</span>
                <span class="f-cat">2018</span>
            </h2>
        </section-title>

        <swiper swiper-name="prom" swiper-type="swiper-photo">

            <div class="swiper-container">
                <div class="swiper-wrapper">


                    <!-- Slides -->
                    <div class="swiper-slide">
                        <?php echo $htmlSlide1;?>
                    </div>
                    <div class="swiper-slide">
                        <?php echo $htmlSlide2;?>
                    </div>
                    <div class="swiper-slide">
                        <?php echo $htmlSlide3;?>
                    </div>
                    <div class="swiper-slide">
                        <?php echo $htmlSlide4;?>
                    </div>
                    <div class="swiper-slide">
                        <?php echo $htmlSlide5;?>
                    </div>
                    <div class="swiper-slide">
                        <?php echo $htmlSlide6;?>
                    </div>



                </div>

            </div>



            <!-- If we need navigation buttons -->
            <div class="swiper-buttons">
                <div class="swiper-buttonPrev">
                    <img src="/img/buttons/prev-01.png" width="100%">
                </div>
                <div class="swiper-buttonNext">
                    <img src="/img/buttons/next-01.png" width="100%">
                </div>
            </div>
        </swiper>


        <!-- Sticky Container -->
        <div class="swiper-sticky">

            <div class="swiper-paso" paso="1">

                <div class="mobile">

                </div>
                <div class="desktop">
                    <img id="w4_s2_e1_img" alt="Globo" src="/img/img-floating/w4_activities/CTS_30.png">
                    <anim id="w4_s2_e1_obj" alt="Birrete Animado"></anim>
                    <anim id="w4_s2_e2_obj" alt="Flecha"></anim>
                </div>
            </div>

        </div>



    </wrapper>
</section>
