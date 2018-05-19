<?php 

    $htmlSlide1 = '
    
    <column class="first">
    
        <h3 class="slide-title-1">SOLICITAR</h3>
        <h3 class="slide-title-2">INFORMACIÓN</h3>
        <p class="slide-content">
            El Colegio Tecnológico de Suba se puede conocer  personalmente, también a través de una llamada telefónica o solicitar información general por medio de un email.
        </p>
        
    </column>
    
    
    <column class="second">
        <ul class="checklist">
           <li class="item"> 
            Nuestros Teléfonos : <br>
            <span class=f-bold>6810274 - 6818819</span>
           </li>
           <li class="desktop item"> 
            Nuestro E-mail : <br>
            <span class=f-bold>info@colegiotecnologicodesuba.edu.co</span>
           </li>
            <li class="item"> 
            Nuestra Dirección : <br>
            <span class=f-bold>Calle 130 No. 90 -21 </span>
           </li>  
        </ul>
        </check-list>
    </column>
    ';

    $htmlSlide2 = '
    
    <column class="first">
    
        <h3 class="slide-title-1">MATRÍCULA</h3>
        
        <p class="slide-content">
            Es un compromiso bilateral, firmado entre el padre o acudiente del estudiante, el estudiante y el representante legal del Colegio, por el lapso del año académico. Debe realizarse en los días establecidos en el cronograma de actividades del Colegio.
        </p>
        
    </column>
    
    
    <column class="second">
        <ul class="checklist">
           <li class="item"> 
            El colegio no permite un representante <span class="f-bold">diferente</span> al que firme la matrícula.
           </li>
           <li class="item"> 
            Los suscritos se comprometen a cumplir con las <span class="f-bold">normas institucionales vígentes</span>.
           </li>
            <li class="item"> 
            Es un contrato por un <span class="f-bold">año académico</span>.
           </li>  
        </ul>
        </check-list>
    </column>
    ';

    $htmlSlide3 = '
    
    <column class="first">
    
        <h3 class="slide-title-1">ESTUDIANTES</h3>
        <h3 class="slide-title-2">NUEVOS</h3>
        
        <p class="slide-content">
            Quienes cumplan  de acuerdo a los requisitos establecidos por el  plantel, pueden matricularse. Los estudiantes nuevos que deseen vincularse a la institución deben:
        </p>
        
    </column>
    
    
    <column class="second">
        <ul class="checklist">
           <li class="item"> 
           Asistir con el estudiante aspirante.<span class="f-bold">(Es obligatorio)</span>
           </li>
           <li class="item"> 
           Traer fotocopia del boletín
            <span class="f-bold">del último año cursado.</span>
           </li>
            <li class="item"> 
            Traer fotocopia del <span class="f-bold">registro civil.</span>
           </li>
           <li class="item"> 
            Traer fotocopia de la
            <span class="f-bold">tarjeta de identidad ampliada al 150%.</span>
           </li>  
        </ul>
        </check-list>
    </column>
    ';

$htmlSlide4 = '
    
    <column class="first">
    
        <h3 class="slide-title-1">ESTUDIANTES</h3>
        <h3 class="slide-title-2">ANTIGUOS</h3>
        
        <p class="slide-content">
            Los estudiantes antiguos que deseen vincularse a la institución deben cumplir los requisitos establecidos por el plantel.
            Ademas adjuntar:
        </p>
        
    </column>
    
    
    <column class="second">
        <ul class="checklist">
           <li class="item"> 
                Boletín de notas del <span class="f-bold">cuarto periodo.</span>
           </li>
           <li class="item"> 
           Certificado
            <span class="f-bold">médico.</span>
           </li>
            
        </ul>
        </check-list>
    </column>
    ';

$htmlSlide5 = '
    
    <column class="first">
    
        <h3 class="slide-title-1">PRUEBAS DE</h3>
        <h3 class="slide-title-2">ADMISIÓN</h3>
        
        <p class="slide-content">
            Para las pruebas de admisión y
            valoración académica de estudiantes del Colegio Tecnológico de Suba es necesario:
        </p>
        
    </column>
    
    
    <column class="second">
        <ul class="checklist">
        
           <li class="item"> 
                Entrevista a <span class="f-bold">padres de familia.</span>
           </li>
           
           <li class="item"> 
                Valoración <span class="f-bold">académica.</span>
           </li>
           
           <li class="item"> 
                Traer utiles <span class="f-bold">escolares.</span>
           </li>
           
           <li class="item"> 
                Traer desprendible <span class="f-bold">de citación.</span>
           </li>
           
            
        </ul>
        </check-list>
    </column>
    ';

?>



<section name="admissionProcess" sectionNumber="2" id="w1s2" class="fp-auto-height">
    <wrapper>

        <section-title>
            <h2>
                <span class="f-mcond">PROCESO DE</span>
                <span class="f-cat">ADMISIONES</span>
            </h2>
        </section-title>

        <swiper swiper-name="admissionProcess">

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


                </div>

            </div>



            <!-- If we need pagination -->
            <div class="swiper-pagination toMiddle "></div>

        </swiper>



        <div class="swiper-sticky" from-swiper="admissionProcess">

            <div class="swiper-paso" paso="1">

                <img id="w1_s2_t1_e1_img" alt="Niñas Estudiantes" src="/img/img-floating/w1_admissions/m/CTS_03.png" lazy-src="/img/img-floating/w1_admissions/CTS_03.png">
                <anim id="w1_s2_t1_e2_obj" alt="Lapiz animado"></anim>

                <div class="mobile"></div>
                <div class="desktop">
                    <anim id="w1_s2_t1_e1_obj" alt="Bigotes"></anim>
                </div>
            </div>


            <div class="swiper-paso" paso="2">

                <img id="w1_s2_t2_e1_img" alt="Utiles" src="/img/img-floating/w1_admissions/m/CTS_04.png" lazy-src="/img/img-floating/w1_admissions/CTS_04.png">
                <anim id="w1_s2_t2_e2_obj" alt="Cohete"></anim>
                <anim id="w1_s2_t2_e3_obj" alt="Rayitas"></anim>

                <div class="mobile">

                </div>
                <div class="desktop">
                    <anim id="w1_s2_t2_e1_obj" alt="Bigotes"></anim>
                </div>
            </div>


            <div class="swiper-paso" paso="3">
                <img id="w1_s2_t3_e1_img" alt="Niña libros" src="/img/img-floating/w1_admissions/m/CTS_05.png" lazy-src="/img/img-floating/w1_admissions/CTS_05.png">
                <anim id="w1_s2_t3_e2_obj" alt="Birrete animado"></anim>
                <div class="mobile">

                </div>
                <div class="desktop">
                    <anim id="w1_s2_t3_e1_obj" alt="Bigotes"></anim>
                </div>
            </div>



            <div class="swiper-paso" paso="4">
                <img id="w1_s2_t4_e1_img" alt="Niño Grande" src="/img/img-floating/w1_admissions/m/CTS_06.png" lazy-src="/img/img-floating/w1_admissions/CTS_06.png">
                <img id="w1_s2_t4_e2_img" alt="Niña Grande" src="/img/img-floating/w1_admissions/m/CTS_07.png" lazy-src="/img/img-floating/w1_admissions/CTS_07.png">
                <anim id="w1_s2_t4_e2_obj" alt="Lapiz animado"></anim>
                <anim id="w1_s2_t4_e1_obj" alt="Bigotes animado"></anim>
                <div class="mobile">

                </div>
                <div class="desktop">
                    <anim id="w1_s2_t4_e3_obj" alt="Avion de Papel"></anim>
                </div>
            </div>
            <div class="swiper-paso" paso="5">
                <img id="w1_s2_t5_e1_img" alt="Niño Feliz" src="/img/img-floating/w1_admissions/m/CTS_08.png" lazy-src="/img/img-floating/w1_admissions/CTS_08.png">
                <anim id="w1_s2_t5_e1_obj" alt="Hojas animado"></anim>
                <anim id="w1_s2_t5_e2_obj" alt="Rayitas animado"></anim>
                <div class="mobile">


                </div>
                <div class="desktop">
                    <anim id="w1_s2_t5_e3_obj" alt="Curva animada"></anim>
                    <anim id="w1_s2_t5_e4_obj" alt="Bigotes"></anim>
                </div>
            </div>
        </div>

    </wrapper>
</section>
