<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="profile" href="http://gmpg.org/xfn/11" />



<!-- pacote de ícones customizados para a seak -->
<!-- FUNCIONA AQUI
<link rel="stylesheet" href="http://localhost/seak1/wp-content/fontawesome/css/all.min.css">
<link rel="stylesheet" href="http://localhost/seak1/wp-content/fontawesome/css/fontawesome.min.css">
-->

<?php
/* adicionei para a seak */
echo '<link rel="stylesheet"' . 'href="http://'.$_SERVER['HTTP_HOST'].'/seak1/wp-content/fontawesome/css/all.min.css">';
echo '<link rel="stylesheet"' . 'href="http://'.$_SERVER['HTTP_HOST'].'/seak1/wp-content/fontawesome/css/fontawesome.min.css">';
?>


<?php if (is_singular() && pings_open(get_queried_object())) : ?>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php endif; ?>
<?php wp_head(); ?>


<!-- CSS customizado para a seak -->
<!-- FUNCIONA AQUI
<link rel="stylesheet" href="http://localhost/seak1/wp-content/themes/mh-magazine-lite/seak-css/style.css">
-->

<?php
/* adicionei para a seak */
echo '<link rel="stylesheet"' . 'href="http://'.$_SERVER['HTTP_HOST'].'/seak1/wp-content/themes/mh-magazine-lite/seak-css/style.css">';
?>

<!-- remover?
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
-->


</head>
<body id="mh-mobile" <?php body_class(); ?> itemscope="itemscope" itemtype="http://schema.org/WebPage">
<?php mh_before_header();
get_template_part('content', 'header');
mh_after_header(); ?>


