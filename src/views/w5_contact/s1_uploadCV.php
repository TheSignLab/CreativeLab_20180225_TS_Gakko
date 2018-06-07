<?php 

    
    $htmlSlide1 = '
    
    <column class="first">
    
        <h3 class="slide-title-1">TRABAJE</h3>
        <h3 class="slide-title-2">EN EL CTS</h3>
        
        <p class="slide-content">
        Las personas son la base de nuestra Institución, buscamos talentos que quieran ser parte de nuestro equipo. Si está interesado, envíenos su HV y lo contactaremos. 
        </p>

    </column>
    
    
    <column class="second">
        <ul class="checklist">
        
           <li class="item"> 
            Trabaje con un equipo multidisciplinar.
           </li>
           
           <li class="item"> 
            Desarrolle su proyecto de vida con Nosotros.
           </li>
           
            <li class="item"> 
                Trabaje con un equipo multidisciplinar.
           </li>
           
        </ul>
        </check-list>
    </column>
    ';




?>



<section name="contactUploadCV" sectionNumber="2" id="w5s2" class="">
    <wrapper style="min-height:100vh">

        <section-title>
            <h2>
                <span class="f-mcond">TRABAJE CON </span>
                <span class="f-cat">NOSOTROS</span>
            </h2>
        </section-title>

        <swiper swiper-name="uploadCV">
            <div class="swiper-container">

                <div class="swiper-wrapper">

                    <!-- Slides -->
                    <div class="swiper-slide">
                        <?php echo $htmlSlide1;?>
                    </div>

                </div>
            </div>
            <form id="uploadCV" method="post" enctype="multipart/form-data">
                <input type="file" name="file" id="file" />
                <label for="file" id="spanUploadCV" onHoverOpacity> 
                    <span>SUBE TU HOJA DE VIDA</span> 
                </label>
                <input type="submit" value="Upload" class="submit" style="display:none"/>
                <anim id="w5_s2_e4_obj" alt="Lapiz"></anim>
            </form>

        </swiper>

        <!-- Sticky Container -->
        <div class="swiper-sticky" from-swiper="uploadCV">
            <div class="swiper-sticky-tabs" tab="1">

                <img id="w5_s2_e1_img" alt="Señora" src="/img/img-floating/w5_contact/m/CTS_37.png" lazy-src="/img/img-floating/w5_contact/CTS_37.png">

                <img id="w5_s2_e2_img" alt="Señor" src="/img/img-floating/w5_contact/m/CTS_38.png" lazy-src="/img/img-floating/w5_contact/CTS_38.png">


                <anim id="w5_s2_e2_obj" alt="Bigotes/Rayitas"></anim>

                <div class="mobile">

                </div>

                <div class="desktop">

                    <anim id="w5_s2_e3_obj" alt="Rayitas señor"></anim>
                    
                    <anim id="w5_s2_e5_obj" alt="Curva"></anim>


                </div>

            </div>
        </div>
    </wrapper>
</section>
