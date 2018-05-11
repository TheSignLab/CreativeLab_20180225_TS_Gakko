<?php 

    $htmlSlide1 = '
    
    <column class="first">
    
        <h3 class="slide-title-1">ORIENTACIÓN</h3>
        <h3 class="slide-title-2">PSICOLÓGICA</h3>
        <p class="slide-content">
            El colegio tecnológico de Suba cuenta con un departamento de orientación, liderado por una profesional en psicología con énfasis en el campo educativo.
</p>
<p class="slide-content">
El servicio de orientación ayuda al desarrollo de los estudiantes mediante programas de diseño e intervención de acuerdo con las necesidades y características de la población estudiantil.
        </p>
        
    </column>
    
    
    <column class="second">
        <ul class="checklist">
           <li class="item"> 
            Asesorar a los padres de familia en aspectos relacionados con el proceso formativo y académico de sus hijos. 

           </li>
           <li class="item"> 
            Trabajar en el proyecto de vida de los estudiantes de grado 5° a 9°.
           </li>
            <li class="item"> 
            Realizar talleres relacionando temas como: Prevención sexual, acoso escolar y consumo de SPA (Sustancias Psicoactivas).
           </li> 
           <li class="item"> 
           Liderar programa de orientación vocacional con los estudiantes de grados 10° y 11°.
           </li>
        </ul>
        </check-list>
    </column>
    ';

    $htmlSlide2 = '
    
    <column class="first">
    
        <h3 class="slide-title-1">BIBLIOTECA</h3>
        
        <p class="slide-content">
            Para el Colegio Tecnológico de Suba la biblioteca escolar es un área de gran importancia ya que ayuda al proceso formativo de los estudiantes, promoviendo la lectura, actividades artísticas y culturales.
        </p>
        <p class="slide-content">
            El Colegio Tecnológico de Suba, cuenta con una amplia diversidad de libros de las diferentes áreas del conocimiento con ejemplares tanto en español como en inglés. 
        </p>
        
    </column>
    
    
    <column class="second">
        <ul class="checklist">
           <li class="item"> 
            Amplia diversidad de libros.
           </li>
           <li class="item"> 
            Diferentes áreas del conocimiento.
           </li>
            <li class="item"> 
            Ejemplares en español e ingles.
           </li>  
        </ul>
        </check-list>
    </column>
    ';

    $htmlSlide3 = '
    
    <column class="first">
    
        <h3 class="slide-title-1">CAFETERÍA</h3>
        
        <p class="slide-content">
        La cafetería del Colegio Tecnológico de Suba posee una infraestructura óptima para proporcionar su buen servicio, además cuenta con un excelente personal capacitado para la preparación de los alimentos.
        </p>
        
        <p class="slide-content">
        Este servicio es ofrecido por el colegio el cual garantiza la calidad de los alimentos siguiendo los debidos procesos de higiene y controles, contribuyendo así a la excelencia del servicio.
        </p>
        
    </column>
    
    
    <column class="second">
        <ul class="checklist">
           <li class="item"> 
           Infraestructura óptima.
           </li>
           <li class="item"> 
           Buen servicio.
           </li>
            <li class="item"> 
            Personal capacitado.
           </li>
           <li class="item"> 
           Calidad de los alimentos.
           </li>  
           <li class="item"> 
           Procesos de higiene y controles.
           </li> 
        </ul>
        </check-list>
    </column>
    ';

$htmlSlide4 = '
    
    <column class="first">
    
        <h3 class="slide-title-1">PRIMERA</h3>
        <h3 class="slide-title-2">COMUNÍON</h3>
        
        <p class="slide-content">
            El Colegio Tecnológico de Suba tiene como objetivo preparar a los niños y niñas mediante el programa de catequesis para su primera comunión, motivando así la participación plena de la eucaristía, asumiendo el compromiso de su vida sacramental.          </p>
        
    </column>
    
    
    <column class="second">
        <ul class="checklist">
           <li class="item"> 
                Programa de catequesis.
           </li>
           <li class="item"> 
           Vida sacramental.
           </li>
            
        </ul>
        </check-list>
    </column>
    ';



?>




<section name="servicesServices" sectionNumber="2" id="w2s2" class="">
    <wrapper>

        <section-title>
            <h2>
                <span class="f-mcond">NUESTROS</span>
                <span class="f-cat">SERVICIOS</span>
            </h2>
        </section-title>

        <swiper swiper-name="services">

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


        </swiper>
            
            
            
        
        
        
        
        
        
        
        
        
        
        
            
        <div class="swiper-sticky" from-swiper="services">

            <div class="swiper-paso" paso="1">
                <div class="mobile">
                    <img id="w2_s2_t1_e1_img" alt="Coordinador" src="/img/img-floating/w2_services/CTS_11.png">
                    <img id="w2_s2_t1_e2_img" alt="Psicologa" src="/img/img-floating/w2_services/CTS_12.png">
                    <anim id="w2_s2_t1_e1_obj" alt="Rayitas de Psicologa"></anim>
                </div>
                <div class="desktop"> </div>
            </div>

            <div class="swiper-paso" paso="2">
                <div class="mobile">
                    <img id="w2_s2_t2_e1_img" alt="Niña Biblioteca" src="/img/img-floating/w2_services/CTS_13.png">
                    <img id="w2_s2_t2_e2_img" alt="Libros" src="/img/img-floating/w2_services/CTS_14.png">
                    <anim id="w2_s2_t2_e1_obj" alt="Birrete animado"></anim>
                </div>
                <div class="desktop"> </div>
            </div>
            <div class="swiper-paso" paso="3">
                <div class="mobile">
                    <img id="w2_s2_t3_e1_img" alt="Manzana" src="/img/img-floating/w2_services/CTS_15.png">
                    <img id="w2_s2_t3_e2_img" alt="Señora Cafeteria" src="/img/img-floating/w2_services/CTS_16.png">
                    <anim id="w2_s2_t3_e1_obj" alt="Curva"></anim>
                    <anim id="w2_s2_t3_e2_obj" alt="Rayitas de Señora Cafeteria"></anim>
                </div>
                <div class="desktop"> </div>
            </div>
             <div class="swiper-paso" paso="4">
                <div class="mobile">
                    <img id="w2_s2_t4_e1_img" alt="Niños Primera Comunion" src="/img/img-floating/w2_services/CTS_18.png">
                    <anim id="w2_s2_t4_e1_obj" alt="Rayitos de Niños"></anim>
                    <anim id="w2_s2_t4_e2_obj" alt="Cohete"></anim>
                </div>
                <div class="desktop"> </div>
            </div>
        </div>
        
        
        
        
        
        
        
        

    </wrapper>
</section>
