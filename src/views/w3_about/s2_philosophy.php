<?php 

    $htmlSlide1 = '
    
    <column class="first">

        <p class="slide-content">
           Realización plena de los estudiantes como seres humanos , con orientación católica, inspirados en el amor a Dios sobre todas las cosas, hacia la excelencia, liderados por directivos y docentes comprometidos en la formación de nuevas generaciones competentes y exitosas.

</p>

        
    </column>

    ';

    $htmlSlide2 = '
    
    <column class="first">
    
        
        <p class="slide-content">
           Nuestra institución se define por los valores que inculcamos a los estudiantes, siempre orientados a forjar a los profesionales del mañana.
        </p>
      
        
    </column>
    
    
    <column class="second">
        <ul class="checklist">
           <li class="item"> 
            Autonomía
           </li>
           <li class="item"> 
           Responsabilidad
           </li>
            <li class="item"> 
            Solidariad
           </li>  
           <li class="item"> 
            Tolerancia
           </li> 
           <li class="item"> 
            Respeto
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




?>

<section name="aboutPhilosophy" sectionNumber="3" id="w3s3" class="toFit" style="">
   <wrapper style="">
        <section-title>
            <h2> <span class="f-mcond">FILOSOFÍA</span> <span class="f-cat">INSTITUCIONAL</span> </h2>
        </section-title>
        <swiper swiper-name="philosophy">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <?php echo $htmlSlide1;?> </div>
                    <div class="swiper-slide">
                        <?php echo $htmlSlide2;?> </div>
                </div>
            </div>
            <div class="swiper-pagination toMiddle "></div>
        </swiper>
        <div class="swiper-sticky" from-swiper="philosophy">

            <div class="swiper-paso" paso="1">
                <img id="w3_s3_t1_e1_img" alt="Niña Libros" src="/img/img-floating/w3_about/m/CTS_24.png" lazy-src="/img/img-floating/w3_about/CTS_24.png">

                <anim id="w3_s3_t1_e2_obj" alt="Arcoiris"></anim>
                <anim id="w3_s3_t1_e3_obj" alt="Bigotes"></anim>
                <div class="mobile">
                    <anim id="w3_s3_t1_e1_obj" alt="Curva"></anim>
                </div>
                <div class="desktop"><anim id="w3_s3_t1_e4_obj" alt="Avion"></anim> </div>
            </div>

            <div class="swiper-paso" paso="2">
                           <img id="w3_s3_t2_e1_img" alt="Niña Maleta" src="/img/img-floating/w3_about/m/CTS_25.png" lazy-src="/img/img-floating/w3_about/CTS_25.png">
                    <anim id="w3_s3_t2_e1_obj" alt="Birrete"></anim>
                <div class="mobile">
         
                </div>
                <div class="desktop"> 
                    <anim id="w3_s3_t2_e2_obj" alt="Bigotes"></anim>
                    <anim id="w3_s3_t2_e3_obj" alt="Curva"></anim></div>
            </div>
        </div>
    </wrapper>
</section>
