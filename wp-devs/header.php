<!doctype html>
<html <?php language_attributes(); ?>> <!-- Para usar wp deve ser dinamicas algumas funções, pois os usuários devem poder modifica-las no painel do adm -->
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head();?>
</head>
<body <?php body_class();?> >
<?php wp_body_open();?> <!--gancho de ação que deixa disponível no início do site os scripts abaixo do body-->
<div id="page" class="site">
    <header>
        <section class="top-bar">
            <div class="container">
                <div class="logo">
                    <?php the_custom_logo(); ?>
                </div>
                <div class="searchbox">
                    <?php get_search_form(); ?>
                </div>
            </div>
        </section>
        <?php if( ! is_page('landing-page')): ?> <!--verificar se a pagina é uma landing page, se não irá exibir o menu normalmente-->
        <section class="menu-area">
            <div class="container">
                <nav class="main-menu">
                    <button class="check-button">
                        <div class="menu-icon">
                            <div class="bar1"></div>
                            <div class="bar2"></div>
                            <div class="bar3"></div>
                        </div>
                    </button>
                    <?php wp_nav_menu(array('theme_location' => 'wp_devs_main_menu', 'depth' => 2)); ?>
                </nav>
            </div>
        </section>
        <?php endif; ?>
    </header>