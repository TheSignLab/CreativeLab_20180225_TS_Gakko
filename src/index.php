<!doctype html>
<html lang="es">

<head>

    <!-- Charset para caracteres en español -->
    <meta charset="utf-8">

    <!-- Titulo -->
    <title>Colegio Tecnológico de Suba</title>

    <!-- --------------  HTML Head Meta Tag  ----------------------->
    <?php require('meta-tags.php') ?>
    <!-- --------------  / HTML Head Meta Tag  --------------------->

    <!-- -----   Compiled Libraries   --------- -->
    <link href="lib/bundled.css" rel="stylesheet" type="text/css" />
    <script src="lib/bundled.js"></script>

    <script src="lib/scrolloverflow.min.js"></script>
    <script src="lib/jquery.fullpage.extensions.min.js"></script>
    <script src="lib/jquery.fullpage.min.js"></script>
    <!-- -----  / Compiled Libraries   --------- -->

    <!-- -----  Comp Stylesheets   --------- -->
    <link href="css/main.css" rel="stylesheet" type="text/css" />
    <!-- -----  /Comp Stylesheets  --------- -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <?php require('analytics.html') ?>

    <!-- Cookies Handler -->
    <?php require('backend/cookiesHandler.php');?>

</head>

<body>
    
    
    
    <!-- -----  preloading elements  ---------- -->
    <nav>
        <?php require('preload.html'); ?>
    </nav>
    <!-- ----- / preloading elements  ---------- -->
    
    

    <!-- -----  navbar o header  ---------- -->
    <nav>
        <?php require('views/nav.html'); ?>
    </nav>
    <!-- ----- / navbar o header  ---------- -->

    <main>


        <!-- ----- Splash  ---------- -->
        <router-splash></router-splash>
        <!-- ----- /Splash  ---------- -->



        <!-- ----- Routes  ---------- -->
        <routes>
            <route name="home" active>
                <?php require('views/w0_home/s0_loader.php'); ?>
                <?php require('views/w0_home/s1_logo.php'); ?>
                <?php require('views/w0_home/s2_35years.php'); ?>
            </route>
            <route name="admissions">
                <?php require('views/w1_admissions/s0_cover.php'); ?>
                <?php require('views/w1_admissions/s1_process.php'); ?>
                <?php require('views/w1_admissions/s2_contact.php'); ?>
                <?php require('views/footer.html'); ?>
            </route>

            <route name="services">
                <?php require('views/w2_services/s0_cover.php'); ?>
                <?php require('views/w2_services/s1_services.php'); ?>
                <?php require('views/w2_services/s2_facilities.php'); ?>
                <?php require('views/footer.html'); ?>
            </route>

            <route name="about">
                <?php require('views/w3_about/s0_cover.php'); ?>
                <?php require('views/w3_about/s1_timeline.php'); ?>
                <?php require('views/w3_about/s2_philosophy.php'); ?>
                <?php require('views/w3_about/s3_mission.php'); ?>
                <?php require('views/footer.html'); ?>
            </route>

            <route name="activities">
                <?php require('views/w4_activities/s0_cover.php'); ?>
                <?php require('views/w4_activities/s1_prom.php'); ?>
                <?php require('views/w4_activities/s2_schedules.php'); ?>
                <?php require('views/footer.html'); ?>
            </route>

            <route name="contact">
                <?php require('views/w5_contact/s0_cover.php'); ?>
                <?php require('views/w5_contact/s1_uploadCV.php'); ?>
                <?php require('views/w5_contact/s2_map.php'); ?>
                <?php require('views/footer.html'); ?>
            </route>
            
            
            <route name="landscapeDevice">
                <?php require('views/landscape.html'); ?>
            </route>



        </routes>
        <!-- ----- /Routes  ---------- -->





    </main>

    <!-- ----- Comp Scripts  ---------- -->
    <?php require('js/mainScripts.html'); ?>
    <!-- ----- /Comp Scripts  ---------- -->
<script>
   window.debugRouting = false;
   window.debugSwiper = false;
    window.debugAnimation = false;
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9GYBR1X36wkFZp8oziec9vkTm2vy3Ifw&callback=initMap" async defer></script>

</body>

</html>
