<?php 

// ------------------------------------ //
// CTS :: Meta Tags for SEO
// ------------------------------------ //
$meta_author = 'TheSignLab';


$meta_keywords = "colegio,tecnologico,suba,educacion,bogota,colombia,bachillerato,primaria,preescolar,formacion,tecnica,colegios,colegios bogota,sena,valores,privado,academica,orientación,colegios suba";

$meta_description = "Somos una institución educativa de carácter privado, formamos niños y jóvenes en los níveles de Educación Preescolar, Básica Primaria, Secundaria y Media, con formación técnica, énfasis en contabilidad, gestión empresarial y desarrollo del emprendimiento apoyando la educación familiar con los valores y principios de la religión católica.";


// Facebook Open Graph and Twitter Cards 

$meta_og_title = "Colegio Tecnológico de Suba";
$meta_og_url = "https://www.facebook.com/Colegio-Tecnol%C3%B3gico-de-Suba-456110801262696/";
$meta_og_description = $meta_description;
$meta_og_image = "http://colegiotecnologicodesuba.edu.co/img/meta/og-facebook.jpg";
$meta_og_image_alt = "Imagen del Colegio Tecnológico de Suba";
$meta_og_image_w = "910";
$meta_og_image_h = "910";

    
$meta_tc_title = $meta_og_title;
$meta_tc_creator = $meta_author;
$meta_tc_url = "";
$meta_tc_description = $meta_description;
$meta_tc_image = "http://colegiotecnologicodesuba.edu.co/img/meta/tc-facebook.jpg";

?>

<!-- Author-->
<meta name="author" content="<?php echo $meta_author ?>">
<!-- Keywords-->
<meta name="keywords" content="<?php echo $meta_keywords ?>">
<!-- Description -->
<meta name="description" content="<?php echo $meta_description ?>">




<!-- Orientation -->
<meta http-equiv="ScreenOrientation" content="autoRotate:disabled">




<!-- Color Themes -->
<meta name="theme-color" content="#000000">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="format-detection" content="telephone=no">
<!-- Viewport -->
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">




<!-- Facebook MetaTags -->
<meta property="og:title" content="<?php echo $meta_og_title ?>" />
<meta property="og:url" content="<?php echo $meta_og_url ?>" />
<meta property="og:type" content="article" />
<meta property="og:description" content="<?php echo $meta_og_description ?>" />
<meta property="og:image" content="<?php echo $meta_og_image ?>" />
<meta property="og:image:type" content="image/jpeg" />
<meta property="og:image:width" content="<?php echo $meta_og_image_w ?>" />
<meta property="og:image:height" content="<?php echo $meta_og_image_h ?>" />
<meta property="og:image:alt" content="<?php echo $meta_og_image_alt ?>" />
<!--Twitter MetaTags -->
<meta name="twitter:card" content="<?php echo $meta_tc_url ?>">
<meta name="twitter:site" content="<?php echo $meta_tc_url ?>">
<meta name="twitter:creator" content="<?php echo $meta_tc_creator ?>">
<meta name="twitter:title" content="<?php echo $meta_tc_title ?>">
<meta name="twitter:description" content="<?php echo $meta_tc_description ?>">
<meta name="twitter:image" content="<?php echo $meta_tc_image ?>">






<!-- Author and Company -->
<link rel="author" href="jlmayorga.com.co" />
<link rel="canonical" href="coleiotecnologicodesuba.edu.co" />





<!-- favicons -->
<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
<link rel="manifest" href="favicon/site.webmanifest">
<link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#c4860c">
<meta name="msapplication-TileColor" content="#ffc40d">
<meta name="msapplication-TileImage" content="favicon/mstile-144x144.png">
<meta name="theme-color" content="#ffffff">

