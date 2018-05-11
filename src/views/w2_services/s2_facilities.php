<?php 

    $htmlSlide1 = '<wrapper-img>
                        <img src="/img/facilities/CTS_19.jpg" alt="Instalacions del CTS : Cafeteria">
                    </wrapper-img> ';
    $htmlSlide2 = '<wrapper-img>
                        <img src="/img/facilities/CTS_20.jpg" alt="Instalacions del CTS : Cafeteria">
                    </wrapper-img> ';
    $htmlSlide3 = '<wrapper-img>
                        <img src="/img/facilities/CTS_21.jpg" alt="Instalacions del CTS : Cafeteria">
                    </wrapper-img> ';
    $htmlSlide4 = '<wrapper-img>
                        <img src="/img/facilities/CTS_22.jpg" alt="Instalacions del CTS : Cafeteria">
                    </wrapper-img> ';
    



?>

<section name="servicesFacilities" sectionNumber="3" id="w2s3" class="">
    <wrapper>

        <section-title>
            <h2>
                <span class="f-mcond">NUESTRAS</span>
                <span class="f-cat">INSTALACIONES</span>
            </h2>
        </section-title>

        <swiper swiper-name="facilities" swiper-type="swiper-photo">

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



                </div>

            </div>



            <!-- If we need pagination -->
            <div class="swiper-pagination toMiddle "></div>



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

        <div class="swiper-sticky">
    
                <div class="mobile">
                   
                </div>
                <div class="desktop">
             <anim id="w2_s3_e3_obj" alt="Birrete"></anim>
                    <anim id="w2_s3_e6_obj" alt="Manzana"></anim>
                  
            </div>
           
        </div>

    </wrapper>
</section>
