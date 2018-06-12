<?php 

 $htmlSlide1 = '

<column class="first">

    <p class="slide-content">
    El Colegio Tecnológico de Suba, empresa educativa de carácter privado forma niños y jóvenes en los niveles de Educación Preescolar, Básica Primaria, Secundaria Y Media, con formación técnica con énfasis en contabilidad y gestión empresarial, desarrollo del emprendimiento apoyando la educación familiar y la formación de ciudadanos competentes y exitosos.
    </p>


</column>

'; 


$htmlSlide2 = '

<column class="first">


    <p class="slide-content">
        El Colegio Tecnológico de Suba es una institución educativa líder en formación técnica, con  inglés intensivo, certificado por su servicio de calidad educativa en educación formal, que  fortalece los proyectos de vida de los estudiantes  y contribuye al mejoramiento de su calidad de vida y la de sus familias.
    </p>


</column>



';

?>



<section name="aboutMission" sectionNumber="4" id="w3s4" class="toFit" >
    <wrapper >

        <section-title>
            <h2>
                <span class="f-mcond">NUESTRA</span>
                <span class="f-cat">MISIÓN / VISIÓN</span>
            </h2>
        </section-title>

        <swiper swiper-name="mission">

            <div class="swiper-container">
                <div class="swiper-wrapper">


                    <!-- Slides -->
                    <div class="swiper-slide">
                        <?php echo $htmlSlide1;?>
                    </div>
                    <div class="swiper-slide">
                        <?php echo $htmlSlide2;?>
                    </div>

                </div>

            </div>

            <!-- If we need pagination -->
            <div class="swiper-pagination toMiddle "></div>

        </swiper>


    </wrapper>
    <div class="swiper-sticky" from-swiper="mission">

        <div class="swiper-paso" paso="1">
            <img id="w3_s4_t1_e1_img" alt="Profesor con Libros" src="/img/img-floating/w3_about/CTS_26.png">
            <anim id="w3_s4_t1_e1_obj" alt="Trazo animado"></anim>
            <anim id="w3_s4_t1_e2_obj" alt="Lapiz Animado"></anim>
            <div class="mobile">


            </div>
            <div class="desktop"> </div>
        </div>

        <div class="swiper-paso" paso="2"> <img id="w3_s4_t2_e1_img" alt="Profesora con libros" src="/img/img-floating/w3_about/CTS_27.png">
            <anim id="w3_s4_t2_e1_obj" alt="Curva animado"></anim>
            <anim id="w3_s4_t2_e2_obj" alt="Birrete animado"></anim>
            <div class="mobile">


            </div>
            <div class="desktop">
             <anim id="w3_s4_t2_e3_obj" alt="Trazo animado"></anim>
            </div>
        </div>
    </div>

</section>
